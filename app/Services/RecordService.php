<?php
// app/Services/RecordService.php

namespace App\Services;

use App\Models\SheetData;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class RecordService
{
    public function getRecords($page = 1, $limit = 10)
    {
        $skip = ($page - 1) * $limit;

        $data = SheetData::skip($skip)->take($limit)->get();
        $totalCount = SheetData::count();

        $formattedData = [];

        foreach ($data as $k => $item) {
            if ($k != 0) {
                $formattedData[] = [
                    'Ticket_Id' => $item->Ticket_Id,
                    'Time' => $item->Time,
                    'Action' => $item->Action,
                    'Type' => $item->Type,
                    'Type_Detail' => $item->Type_Detail,
                    'Account' => $item->Account,
                    'Parent' => $item->Parent,
                    'Amount' => $item->Amount,
                    'Script' => $item->Script,
                    'Price' => $item->Price,
                    'Close_Price' => $item->Close_Price,
                    'Total_PnL' => $item->Total_PnL,
                    'SL' => $item->SL,
                    'TP' => $item->TP,
                    'Open_Position' => $item->Open_Position,
                    'Open_Date' => $item->Open_Date,
                    'Time_Diff' => $item->Time_Diff,
                    'Created_By' => $item->Created_By,
                    'Comment' => $item->Comment,
                    'IP' => $item->IP,
                    'Script_Description' => $item->Script_Description,
                    'Expiry_Date' => $item->Expiry_Date,
                    'Method' => $item->Method,
                    'Contract_Size' => $item->Contract_Size,
                ];
            }
        }

        return [
            'data' => $formattedData,
            'total' => $totalCount,
        ];
    }

    public function fileImport($file)
    {
        $validator = Validator::make(['file' => $file], [
            'file' => 'required|mimes:xls,xlsx',
        ]);

        if ($validator->fails()) {
            return ['success' => false, 'message' => $validator->errors()->first()];
        }

        try {
            if ($file->isValid()) {
                $path = $file->storeAs('uploads', $file->getClientOriginalName());
                $fullPath = storage_path('app/' . $path);
                $data = Excel::toArray([], $fullPath);
                
                // Ensure that the required columns are present
                $requiredColumns = [
                    'Ticket_Id', 'Time', 'Action', 'Type', 'Type_Detail', 'Account', 'Parent', 'Amount',
                    'Script', 'Price', 'Close_Price', 'Total_PnL', 'SL', 'TP', 'Open_Position', 'Open_Date',
                    'Time_Diff', 'Created_By', 'Comment', 'IP', 'Script_Description', 'Expiry_Date', 'Method', 'Contract_Size',
                ];
                $firstRow = $data[0][0] ?? [];

                $missingColumns = array_diff($requiredColumns, $firstRow);

                if (!empty($missingColumns)) {
                    $missingColumnsStr = implode(', ', $missingColumns);
                    return [
                        'success' => false,
                        'message' => "The following required columns are missing in the file: $missingColumnsStr.",
                    ];
                }

                // Proceed with import
                $rows = $data[0];
                foreach ($rows as $k => $record) {
                    $this->sheetData($record);
                }

                return ['success' => true, 'message' => 'File uploaded successfully'];
            } else {
                return ['success' => false, 'message' => 'File is not valid'];
            }
        } catch (\Exception $e) {
            \Log::error($e);
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function sheetData($record)
    {
        try {
            DB::beginTransaction();

            $res = DB::table('sheet_data')->insert([
                'Ticket_Id' => strval($record[0] ?? ''),
                'Time' => strval($record[1] ?? ''),
                // ... (include other fields)
            ]);

            DB::commit();

            return ['success' => $res, 'message' => $res ? 'Record inserted successfully' : 'Failed to insert record'];
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error($e);
            return ['success' => false, 'message' => 'An error occurred during record insertion.'];
        }
    }

    public function fileExport()
    {
        return Excel::download(new UsersExport, 'users-collection.xlsx');
    }
}

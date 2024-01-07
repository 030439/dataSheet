<?php
// app/Services/RecordService.php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\SheetData;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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
        
        $draw = request()->input('draw', 1);
        return [
            'total' => $totalCount,
            'draw' => 1, // Include the draw property
            'recordsTotal' => $totalCount, // Include the recordsTotal property
            'recordsFiltered' => $totalCount, // Include the recordsFiltered property
            'data' => $formattedData,
        ];

     
    }

    public function importFile(REQUEST $request)
    {   $file=$request->file;
        $validator = Validator::make(['file' => $file], [
            'file' => 'mimes:xls,xlsx',
        ]);


        if ($validator->fails()) {
            return ['success' => false, 'message' => $validator->errors()->first()];
        }
        $requiredColumns = ["Ticket Id", "Time", "Action", "Type", "Type Detail", "Account", "Parent", "Amount", "Script", "Price", "Close Price", "Total PnL", "SL", "TP", "Open Position", "Open Date", "Time Diff", "Created By", "Comment", "IP", "Script Description", "Expiry Date", "Method", "Contract Size"];
        $firstRow = $data[0][0] ?? [];
        $missingColumns = array_diff($requiredColumns, array_map('trim', $firstRow));
        // Check if index is set before accessing it
        $missingColumns = array_filter($missingColumns, function ($column) use ($firstRow) {
            return isset($firstRow[$column]);
        });
        if (!empty($missingColumns)) {
            $missingColumnsStr = implode(', ', $missingColumns);
            return [
                'success' => false,
                'message' => "The following required columns are missing in the file: $missingColumnsStr.",
            ];
        }
            $excelData = Excel::toArray([], $file);
            $header =["Ticket_Id", "Time", "Action", "Type", "Type_Detail", 
                      "Account", "Parent", "Amount", "Script", "Price", "Close_Price",
                      "Total_PnL", "SL", "TP", "Open_Position", "Open_Date", "Time_Diff",
                      "Created_By", "Comment", "IP", "Script_Description", "Expiry_Date", 
                      "Method", "Contract_Size"
                    ];
            
            foreach ($excelData[0] as $k=> $row) {
                if($k!=0){
                    $this->validateRecord($row);
                    $data_=$this->sheetData($row);
                   SheetData::create($data_);
                }
            }

            return "Data saved successfully!";
    }

    public function sheetData($record)
    {
        $formattedRecord = [
                'Ticket_Id' => strval($record[0] ?? ''),
                'Time' => strval($record[1] ?? ''),
                'Action' => strval($record[2] ?? ''),
                'Type' => strval($record[3] ?? ''),
                'Type_Detail' => strval($record[4] ?? ''),
                'Account' => is_numeric($record[5] ?? ''),
                'Parent' => strval($record[6] ?? ''),
                'Amount' => strval($record[7] ?? ''),
                'Script' => strval($record[8] ?? ''),
                'Price' => is_numeric($record[9] ?? '0') ? (float) $record[9] : $this->castToString($record[9] ?? 0),
                'Close_Price' => is_numeric($record[10] ?? '0') ? (float) $record[10] : $this->castToString($record[10] ?? 0),
                'Total_PnL' => is_numeric($record[11] ?? '0') ? (float) $record[11] : $this->castToString($record[11] ?? 0),
                'SL' => is_numeric($record[12] ?? '0') ? (float) $record[12] : $this->castToString($record[12] ?? 0),
                'TP' => is_numeric($record[13] ?? '0') ? (float) $record[13] : $this->castToString($record[13] ?? 0),
                'Open_Position' => strval($record[14] ?? ''),
                'Open_Date'  => $record[15] ? date('Y-m-d', strtotime($record[15])) :NULL,
                'Time_Diff' => strval($record[16] ?? ''),
                'Created_By' => strval($record[17] ?? ''),
                'Comment' => strval($record[18] ?? ''),
                'IP' => strval($record[19] ?? ''),
                'Script_Description' => strval($record[20] ?? ''),
                'Expiry_Date' => strval($record[21] ?? ''),
                'Method' => strval($record[22] ?? ''),
                'Contract_Size' => is_numeric($record[23] ?? '0') ? (float) $record[23] : $this->castToString($record[23] ?? 0),
        ];
        return $formattedRecord;

        try {
            DB::beginTransaction();

            // Enable the exception mode for the database connection
            DB::connection()->enableQueryLog();

            DB::table('sheet_data')->insert($formattedRecord);

            // Get the executed SQL query
            $query = DB::getQueryLog()[0]['query'];

            DB::commit();

            // Log the SQL query for debugging purposes
            \Log::info("SQL Query: " . $query);

            return ['success' => true];
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    private function castToString($value)
    {
        return is_numeric($value) ? strval($value) : $value;
    }
    public function validateRecord(array $record)
    {
        $validator = Validator::make($record, [
            'Ticket_Id' => 'string',
            'Time' => 'string',
            'Action' => 'string',
            'Type' => 'string',
            'Type_Detail' => 'string',
            'Account' => 'numeric', // Adjust validation rules based on your requirements
            'Parent' => 'string',
            'Amount' => 'numeric',
            'Script' => 'string',
            'Price' => 'numeric',
            'Close_Price' => 'numeric',
            'Total_PnL' => 'numeric',
            'SL' => 'numeric',
            'TP' => 'numeric',
            'Open_Position' => 'numeric',
            'Open_Date' => 'nullable|date', // Adjust validation rules based on your requirements
            'Time_Diff' => 'numeric',
            'Created_By' => 'string',
            'Comment' => 'string',
            'IP' => 'string',
            'Script_Description' => 'string',
            'Expiry_Date' => 'nullable|date', // Adjust validation rules based on your requirements
            'Method' => 'string',
            'Contract_Size' => 'numeric',
        ]);

        if ($validator->fails()) {
            throw ValidationException::withMessages($validator->errors()->toArray());
        }

        return true;
    }

    }
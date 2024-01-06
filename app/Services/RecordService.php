<?php
// app/Services/RecordService.php

namespace App\Services;

use App\Models\SheetData;

class RecordService
{
    public function getRecords($page = 1, $limit = 10)
    {
        $skip = ($page - 1) * $limit;

        $data = SheetData::skip($skip)->take($limit)->get();
        $totalCount = SheetData::count();

        $formattedData = [];

        foreach ($data as $k=> $item) {
            if($k!=0){
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
}

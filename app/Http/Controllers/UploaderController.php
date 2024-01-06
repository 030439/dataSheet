<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\models\SheetData;
use Illuminate\Support\Facades\DB;
use App\Services\RecordService;
class UploaderController extends Controller
{
    private $recordService;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(RecordService $recordService)
    {
        $this->recordService = $recordService;
    }
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 10);

        return response()->json($this->recordService->getRecords($page, $limit));
    }

   
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request)
    {
        $file = $request->file('file');

        return response()->json($this->recordService->fileImport($file));
    }
    public function sheetData($record){
        $res=DB::table('sheet_data')->insert([
            'Ticket_Id' => strval($record[0] ?? ''),
            'Time' => strval($record[1] ?? ''),
            'Action' => strval($record[2] ?? ''),
            'Type' => strval($record[3] ?? ''),
            'Type_Detail' => strval($record[4] ?? ''),
            'Account' => strval($record[5] ?? ''),
            'Parent' => strval($record[6] ?? ''),
            'Amount' => strval($record[7] ?? ''),
            'Script' => strval($record[8] ?? ''),
            'Price' => strval($record[9] ?? ''),
            'Close_Price' => strval($record[10] ?? ''),
            'Total_PnL' => strval($record[11] ?? ''),
            'SL' => strval($record[12] ?? ''),
            'TP' => strval($record[13] ?? ''),
            'Open_Position' => strval($record[14] ?? ''),
            'Open_Date' => strval($record[15] ?? ''),
            'Time_Diff' => strval($record[16] ?? ''),
            'Created_By' => strval($record[17] ?? ''),
            'Comment' => strval($record[18] ?? ''),
            'IP' => strval($record[19] ?? ''),
            'Script_Description' => strval($record[20] ?? ''),
            'Expiry_Date' => strval($record[21] ?? ''),
            'Method' => strval($record[22] ?? ''),
            'Contract_Size' => strval($record[23] ?? ''),
        ]); 
        return $res ? true : false;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new UsersExport, 'users-collection.xlsx');
    }    
}

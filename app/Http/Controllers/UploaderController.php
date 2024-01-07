<?php
// app/Http/Controllers/UploaderController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RecordService;

class UploaderController extends Controller
{
    private $recordService;

  

 

    public function __construct(RecordService $recordService)
    {
        $this->recordService = $recordService;
    }

    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 10);

        $result = $this->recordService->getRecords($page, $limit);

        return response()->json($result);
    }

    public function fileImport(Request $request)
    {
        $result = $this->recordService->importFile($request);

        return response()->json($result);
    }

    public function fileExport()
    {
        $result = $this->recordService->exportFile();

        return response()->json($result);
    }

    // Other controller methods
}

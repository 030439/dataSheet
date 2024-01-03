<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
class UploaderController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImportExport()
    {
       return view('file');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request) 
    {
       
        // $request->validate([
        //     'excel_file' => 'required|mimes:xls,xlsx',
        // ]);

        $file = $request->file('files');
    
        if ($file) {
            $path = $file->storeAs('uploads', $file->getClientOriginalName());
        // Construct the full path to the stored file
        $fullPath = storage_path('app/' . $path);

        // Process the Excel file (you may need to adjust based on your Excel structure)
        $data = Excel::toArray([], $fullPath);


        // Assume the first sheet of the Excel file is used
        $rows = $data[0];

        foreach ($rows as $row) {
            echo "<pre>";
            print_r($row);
            // Adjust the table and column names based on your database structure
            // DB::table('your_table_name')->insert([
            //     'column_name_1' => $row[0],
            //     'column_name_2' => $row[1],
            //     // Add other columns as needed
            // ]);
        }
    }

       // return redirect()->back()->with('success', 'File uploaded successfully');
    
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new UsersExport, 'users-collection.xlsx');
    }    
}

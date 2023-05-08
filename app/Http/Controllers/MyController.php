<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MyController extends Controller
{
    public function importExportView()
    {
       return view('import');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function import()
    {
        Excel::import(new UsersImport, request()->file('file'), 'XLSX');

        return back();
    }
}

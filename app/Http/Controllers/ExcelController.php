<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
class ExcelController extends Controller
{
    public function importexportview(){
       
        return view('Practice.show');
    }

    public function export(){
        return Excel::download(new UsersExport,'user.xlsx');
    }

    public function import(Request $requeast){

        $validate = $requeast->validate([
            'file'=>'required',
        ]);

        Excel::import(new UsersImport,request()->file('file'));

        return back()->with('success', 'User Imported Successfully.');   
    }
}

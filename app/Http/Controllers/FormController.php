<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form_Model;

class FormController extends Controller
{
    function create(){
       
        return view('Practice.form');

    }
    function store(Request $requesat){
      
        $Form_Model = new Form_Model;
        $Form_Model->name = $requesat->name;
        $Form_Model->city = $requesat->city;
        $Form_Model->phone = $requesat->phone;
        $Form_Model->save();
        return redirect('/show-form')->with('status','Form Data Inserted');

    }
    function index(){
    
        $Form_Model = Form_Model::paginate(5); 
        return view('Practice.show',compact('Form_Model'));
    }

    function edit(){
            $userid = 2;
        // $Form_Model= Form_Model::all();
           $Form_Model= Form_Model::find($userid);
        //   dump($Form_Model);
        return view('Practice.edit',compact('Form_Model'));
    }
}

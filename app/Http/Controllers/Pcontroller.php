<?php

namespace App\Http\Controllers;

use App\Models\PracticeModel;
use Illuminate\Http\Request;

class Pcontroller extends Controller
{
    public function show(){
       
        $data['name']="Vaibhav";
        return view('Practice/practice',$data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form_Model;
use DB;
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
        return redirect('/')-> with( 'success', __('Agent successfully deleted!'));

    }
    function index(){
    
        $Form_Model = Form_Model::paginate(5); 
        return view('Practice.show',compact('Form_Model'));
    }

        /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */

    function edit(Request $request ,$id){
           
        // $Form_Model= Form_Model::all();
           $Form_Model= Form_Model::find($id);
           return view('Practice.edit',compact('Form_Model'));

    }




     /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    function update(Request $request ,$id){

        $name= $request->input('name');
        $city= $request->input('city');
        $phone= $request->input('phone');
        $affected = DB::table('laravel_form')
              ->where('id', $id)
              ->update(['name' => $name,
                        'city' => $city,
                        'phone'=> $phone]);
     
            return redirect('/');
    }

    function destroy($id){

        $Form_Model_delete = Form_Model::find($id);
        // dump($Form_Model_delete);
        $Form_Model_delete -> delete();

        return redirect('/')-> with( 'success', __('Agent successfully deleted!'));


    }
}

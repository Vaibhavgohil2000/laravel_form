<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Form_Model;
use Illuminate\Support\Facades\DB;
class FormController extends Controller
{
    function create(){
       
        return view('Practice.form')->with('success','Item created successfully!');
    }
    function store(Request $requesat){
       
        $validated = $requesat->validate([
            // 'name' => 'required|unique:posts|max:255',
            'name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'city' => 'required|max:100|regex:/^[\pL\s\-]+$/u',
            'phone' => 'required|numeric|digits:10',
            
        ]);
      
        $Form_Model = new Form_Model;
        $Form_Model->name = $requesat->name;
        $Form_Model->city = $requesat->city;
        $Form_Model->phone = $requesat->phone;
        $Form_Model->save();

        return redirect('/index-form');

    }
        function index(){
        if(Auth::check()){

            $Form_Model = Form_Model::paginate(5); 
            return view('Practice.show',compact('Form_Model'));
        }
        return redirect("/")->withSuccess('Opps! You do not have access');
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

        $validated = $request->validate([
            // 'name' => 'required|unique:posts|max:255',
            'name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'city' => 'required|max:100|regex:/^[\pL\s\-]+$/u',
            'phone' => 'required|numeric|digits:10',
            
        ]);

        $name= $request->input('name');
        $city= $request->input('city');
        $phone= $request->input('phone');
        $affected = DB::table('laravel_form')
              ->where('id', $id)
              ->update(['name' => $name,
                        'city' => $city,
                        'phone'=> $phone]);
     
            return redirect('/index-form');
    }

    
    function destroy($id){

        $Form_Model_delete = Form_Model::find($id);
        // dump($Form_Model_delete);
        $Form_Model_delete -> delete();

        return redirect('/index-form');


    }
}

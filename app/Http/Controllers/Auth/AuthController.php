<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Form_Model;
use Hash;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function registar()
    {
        return view('auth.registar');
    }

    public function postlogin(Request $request)
    {

        $request->validate([
          
            'email' => 'required',
            'password' => 'required',
          
        ]);
        // $id = Auth::user()->id;
        // print_r($id);
        // exit('hfhf');
        $active = User::where('email',$request->email)->first();
        
        $credentials = $request->only('email', 'password');
        // dump($active->status);
        // exit();
       
        if ((Auth::attempt($credentials) && $active->status=="1")) {
               
            return redirect()->intended('/index-form')->withSuccess('you have successfully login');
        }
        return redirect("/")->withSuccess('Oppes! You have entered invalid credentials')->withInput();
    }

    public function postregistar(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data); 
        return redirect("/")->withSuccess('Great! You have Successfully registar');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            

        ]);

    }
    public function usershow(Request $request){
        $datashow = User::all(); 
        // dump($datashow);
        //     exit('djdd');
      
        return view('user.index',['ushow'=>$datashow]);
    }

    public function status(Request $request){
        $user = User::find($request->user_id);
        
        $user->status = $request->status;
       
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }

}

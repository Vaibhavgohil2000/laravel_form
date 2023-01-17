<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
// use Crypt;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;


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

        $active = User::where('email', $request->email)->first();

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if ($active->status == "1") {
                return redirect("/index-form")->with('success', 'you have successfully login');

            } else {

                return redirect("/")->with('warning', 'You have not permission to Login');

            }

        } else {

            return redirect("/")->with('danger', 'Oppes! You have entered invalid credentials');

        }
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
    public function usershow(Request $request)
    {
        $datashow = User::all();
        $datashow = User::paginate(2);
        
        // return view('user.index', ['ushow' => $datashow]);
        return view('user.index', ['ushow1' => $datashow]);
        // return view('user.index',compact('datashow'));
    }
    
    public function status(Request $request)
    {
        $user = User::find($request->user_id);
        
        $user->status = $request->status;
        
        $user->save();
        
        return response()->json(['success' => 'Status change successfully.']);
    }
    
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
    
    public function edit($id){
        $editshow=user::find($id);
        // dump($editshow);
        // exit();
        return view('user.edit',compact('editshow'));
    }
    
    public function update(Request $request,$id){
        $validate= $request->validate([
            
            'name'=>'required|min:2|regex:/^[\pL\s\-]+$/u|max:255',
            'email'=>'required|email',
            // 'password'=>'required|min:6',
        ]);
        
        $name= $request->input('name');
        $email= $request->input('email');
        // $password=$request->input('password');
        
        $data=DB::table('users')->where('id',$id)->update(['name'=>$name,'email'=>$email]);
        
        return redirect('/usershow');
        
        
    }
    public function destroy1($id){
        $delete_id= user::find($id);
        
        $delete_id->delete();
        return redirect('/usershow');
        
    }
}

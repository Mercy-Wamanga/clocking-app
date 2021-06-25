<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function getLogin()
    {
        return view('login');
    } 
    
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard-user')
                        ->withSuccess('Signed in');
        }
    
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function postUser(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:5',
            'user_type' => ''
        ]);
 
        $user = new User;
         $user->name =$request->name;
         $user->email = strtolower($request->email);
         $user->password = $request->password;
         $user->user_type = $request->user_type;
         $user->save();

        return response()->json(
            [
                'success' => true,
                'message' => 'Registration is completed'
            ]
        );
    }

}

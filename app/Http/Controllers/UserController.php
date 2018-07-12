<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function selectAllUsers()
    {
        $systemUsers = User::all();
        return $systemUsers;
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required:users,email',
            'password' => 'required:users,password',
        ]);
        $storemethodresponse = array();
        $user = User::where('email', $request->email)->first();
        if ($request->email == null || $request->password == null) {
            $storemethodresponse['status'] = 3;
            $storemethodresponse['message'] = "Please fill in the required fields";
            return $storemethodresponse;
        } elseif (!$user||($user->password!=$request->password)) {
            $storemethodresponse['status'] = 2;
            $storemethodresponse['message'] = "Wrong username or password";
            return $storemethodresponse;
        } else{
            if ($user->position=="Admin"){
                
                return view('adminusers')->with('user',$user);
            }elseif($user->position=="Doctor"){
                return 'doctor';
            }elseif ($user->position=="Nurse"){
                return  'nurse';
            }elseif ($user->position=="Receptionist"){
                return 'receptionist';
            }
//            $storedmethodresponse['status'] = 1;
//            $storedmethodresponse['message'] = "Login success";
//            return view('welcome');
//            return $storedmethodresponse;
        }
    }
}

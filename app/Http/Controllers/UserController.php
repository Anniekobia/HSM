<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'email' => 'required',
            'password' => 'required',
        ]);
//        $user = User::where('email', $request->email)->first();
        $user= User::
        return $user;
        if (!$user||($user->password!=$request->password)) {
            $msg = 'Wrong username or password';
            //return 'here';
            return view('login')->with('msg',$msg);
        } else{
            if ($user->position=="Admin"){
                $users=$this->selectAllUsers();
//                return 'here';
                return view('adminusers')->with('users',$users);
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

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
        $user = User::where('email', $request->email)->first();
        if (!$user||($user->password!=$request->password)) {
            $msg = 'Wrong username or password';
            return view('loginresponce')->with('msg',$msg);
        } else{
            if ($user->position=="Admin"){
                $users=$this->selectAllUsers();
                return view('adminusers')->with('users',$users);
            }elseif($user->position=="Doctor"){
                return 'doctor';
            }elseif ($user->position=="Nurse"){
                return  'nurse';
            }elseif ($user->position=="Receptionist"){
                return 'receptionist';
            }
        }
    }
    public function deleteUser(Request $request){
        $id=$request->input('action');
        $user = User::findOrFail($id);
        $user->delete();
        $users=$this->selectAllUsers();
        return view('adminusers')->with('users',$users);
    }
    public function addUser(Request $request){
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required',
//            'password' => 'required',
//            'position' => 'required',
//            'status' => 'required',
//        ]);
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->position=$request->position;
        $user->status=$request->status;
        $user->created_at= now();
        $user->updated_at = now();
        $user->save();
        $users=$this->selectAllUsers();
        return view('adminusers')->with('users',$users);

    }

}

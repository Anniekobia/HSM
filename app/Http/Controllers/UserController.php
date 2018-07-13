<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

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


        //check if user exists
        if ($user) {
            //check if password matches
            if (!Hash::check($request->password, $user->password)) {
                $msg = 'Invalid login';
                return view('login')->withErrors($msg);
            }

            if ($user->position == "admin") {
                $users = $this->selectAllUsers();
                return view('adminusers')->with('users', $users);
            } else {
                if ($user->status == 0) {
                    $request->session()->put('user', $user->email);
                    return view('change_password');
                } else if ($user->status == 1) {
                    //check role
                    if($user->position == "doctor"){
                        return view('doctor');
                    }else if($user->position == "nurse"){
                        return view('nurse');
                    }

                }
            }

        }
    }

    public function changePassword(Request $request)
    {
//        $isinputValid = $request->validate([
//            'name' => 'required',
//            'password' =>'required|confirmed',
//        ]);
//        if(!$isinputValid){
//            return "Beatrice";
//        }
        $user = User::where('email', $request->email)->first();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->status = 1;
        $user->save();
        return view('login');

    }

    public function deleteUser(Request $request)
    {
        $id = $request->input('action');
        $user = User::findOrFail($id);
        $user->delete();
        $users = $this->selectAllUsers();
        return view('adminusers')->with('users', $users);
    }

    public function addUser(Request $request)
    {
//        request()->validate([
//            'name' => 'required'
//        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt(123456);
        $user->position = $request->position;
        $user->status = 0;
        $user->save();

        $users = User::all();

        return view('adminusers')->with('users', $users);
    }

    public function logout()
    {
        return view('login');
    }



}

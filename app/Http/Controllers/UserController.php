<?php

namespace App\Http\Controllers;

use App\Patient;
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
        //check if user exist
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
                    if ($user->position == "doctor") {
                        $today = now()->toDateString();
                        $appointments = Patient::all();
                        $date = null;
                        $array = [];
                        foreach ($appointments as $dates) {
                            $date = $dates->appointment;
                            if ($date >= $today) {
                                array_push($array, $dates);
                            }
                        }
                        return view('doctor')->with('array', $array);
                    } else if ($user->position == "nurse") {
                        return view('nurse');
                    } else if ($user->position == 'receptionist') {
                        $today = now()->toDateString();
                        $appointments = Patient::all();
                        $date = null;
                        $array = [];
                        foreach ($appointments as $dates) {
                            $date = $dates->appointment;
                            if ($date >= $today) {
                                array_push($array, $dates);
                            }
                        }
                        return view('receiptionist')->with('array', $array);
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
        $passlength = strlen ($request->password);
        if($passlength<6){
            $msg = 'Password must be more than 6 characters';
            return view('change_password')->withErrors($msg);
        }else {
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->status = 1;
            $user->save();
            return view('login');
        }
    }


    public function deleteUser(Request $request){
        $id=$request->input('action');

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
    public function allUsers(){
        $users=$this->selectAllUsers();
        return view('adminusers')->with('users',$users);
    }
    public function forgot_password(){
        return view('forgot_password');
    }
    public function forgotPassword(Request $request){
        $request->validate([
            'email'=>'required'
        ]);
        $user = User::where('email',$request->email)->first();
        if (!$user){
            $msg='Email not registered';
            return view('forgot_password')->withErrors($msg);
        }
        else{
            return view('change_password');
        }
    }

}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

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
        $validCredentials = Hash::check($request->password, $user->password);
        $boolvalue = $validCredentials ? 'true' : 'false';
        if (!$user||$boolvalue==false) {
            $msg = 'Wrong username or password';
            return view('loginresponce')->with('msg',$msg);
        }
        elseif ($boolvalue==true) {
            if ($user->position=="Admin"){
                $users=$this->selectAllUsers();
                return view('adminusers')->with('users',$users);
            }elseif($user->position=="Doctor"){
                return redirect()->action('PatientController@showAppointments');
            }elseif ($user->position=="Nurse"){
                return view('nurse');
            }elseif ($user->position=="Receptionist"){
                return redirect()->action('PatientController@showAllAppointments');
            }
    }
//    else{
//            if ($user->position=="Admin"){
//                $users=$this->selectAllUsers();
//                return view('adminusers')->with('users',$users);
//            }elseif($user->position=="Doctor"){
//                return redirect()->action('PatientController@showAppointments');
//            }elseif ($user->position=="Nurse"){
//                return redirect()->action('PatientController@addPatient');
//            }elseif ($user->position=="Receptionist"){
//                return redirect()->action('PatientController@showAllAppointments');
//            }
//        }
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
        $password = Hash::make($request->password);
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$password;
        $user->position=$request->position;
        $user->status=$request->status;
        $user->created_at= now();
        $user->updated_at = now();
        $user->save();
        $users=$this->selectAllUsers();
        return view('adminusers')->with('users',$users);

    }
    public function allUsers(){
        $users=$this->selectAllUsers();
        return view('adminusers')->with('users',$users);
    }

}

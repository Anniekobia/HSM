<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    public function showAppointments()
    {
        $today = now()->toDateString();
        $appointments = Patient::all();
        $date=null;
        $array=[];
        foreach ($appointments as $dates) {
            $date=$dates->appointment;
            if ($date>=$today){
                array_push($array,$dates);
            }
        }
        return view('doctor')->with('array',$array);
    }
     public function editPatient(Request $request){
         $id=$request->input('action');
         $patient=Patient::where('id',$id)->first();
         return view('patientedit')->with('patient',$patient);
     }

    public function searchPatient(Request $request){
        $id=$request->id;
        $patient=Patient::where('id',$id)->first();
        return view('patientsearch')->with('patient',$patient);
    }
    public function postPatientEdit(Request $request){
        $id=$request->input('action');
        $patient=Patient::where('id',$id)->first();
        $patient->diagnosis=$request->diagnosis;
        $patient->treatment=$request->treatment;
        $patient->appointment=$request->appointment;
        $patient->update();$patient->save();
        return view('patientsearch')->with('patient',$patient);
    }
}

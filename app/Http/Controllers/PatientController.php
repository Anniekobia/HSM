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
//        $appointments = Patient::where();
        foreach ($appointments as $dates) {
            $date=$dates->appointment;
            if ($date>=$today){
                echo $dates;
            }
        }

//        $appointmentdate=$appointments->appointment;
//        return $appointmentdate;

    }
}

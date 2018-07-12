<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    public function showAppointments()
    {
        $today = now()->toDateString();
        //return $today;
        $appointments = Patient::all();
        foreach ($appointments as $dates) {
            $date=$dates->appointment;
            return $date;
        }
//        $appointmentdate=$appointments->appointment;
//        return $appointmentdate;

    }
}

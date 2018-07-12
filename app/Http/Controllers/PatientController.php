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
       // $appointmentdate=$appointments->appointment;
        return $appointments;

    }
}

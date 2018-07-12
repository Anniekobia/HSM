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
        $appointments = Patient::where('appointments','>=',$today);
        return $appointments;
    }
}

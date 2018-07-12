<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function showAppointments()
    {
        return'success';
        $today = now();
        $appointments = Patient::where('appointments'>=$today);
        return $appointments;

    }
}

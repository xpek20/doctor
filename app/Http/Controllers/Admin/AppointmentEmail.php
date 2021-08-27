<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AppointmentEmail extends Controller
{
    // public function index($appointment, $doctor)
    // {
    //     $appointment = Appointment::where([
    //         'doctor_id_app'=>$appointment->id,
    //         'doctor_id_doc'=>$doctor->id,
    //         'doctor_email'=>$doctor->email
    //     ])->first();

    //     return [$appointment, $doctor];
    // }
}

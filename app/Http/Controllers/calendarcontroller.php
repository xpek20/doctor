<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Appointment;

class calendarcontroller extends Controller
{
    public function index(Request $request)
    {
        
        if($request->ajax()) {  
            $data = Appointment::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'patient_name', 'start', 'end']);
            return response()->json($data);
        }
           return view('full-calendar');
           
       }
    }




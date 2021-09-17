<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Appointment;

class calendarcontroller extends Controller
{
    public function index()
    {
        
        if(request()->ajax()){
            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
           $events = Appointment::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)
                   ->get(['id','patient_name','start', 'end']);
           return response()->json($events);
           }
           return view('full-calendar');
           
       }
    }




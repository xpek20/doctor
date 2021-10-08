<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Appointment;
use App\Models\Anesthpgrogram;
use Illuminate\Support\Facades\Log;


class anesthcontroller extends Controller
{
    public function index(Request $request)
    {
        // $poutses = [];
        // $poutses = Anesthpgrogram::all();
        // Log::info($poutses);
        
        $data = [];
        if($request->ajax()) {  

                $data = Anesthpgrogram::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'start', 'end']);
                Log::info($data);

        
                
            return response()->json($data);
            
        }
        
           return view('full-calendar-anesth', compact($data));
           
       }

       
    }




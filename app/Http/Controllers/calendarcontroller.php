<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Appointment;
use App\Models\Anesthpgrogram;
use Illuminate\Support\Facades\Log;


class calendarcontroller extends Controller
{
    public function index(Request $request)
    {
        // $poutses = [];
        // $poutses = Anesthpgrogram::all();
        // Log::info($poutses);
        
        $data = [];
        $data1 = [];
        if($request->ajax()) {  
            $data = Appointment::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'patient_name', 'start', 'end']);
                Log::info($data);

                $data1 = Anesthpgrogram::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'start', 'end']);
                Log::info($data1);

            

            foreach($data as $record) {
                $record['title'] = $record->patient_rel->name;
                unset($data->patient_name);
                $record['url'] = "/admin/appointment/" . $record['id'] . "/show";
                
               
            }
                
            return response()->json($data);
            
        }
        
           return view('full-calendar', compact($data));
           
       }

       
    }




<?php

namespace App\Listeners;

use App\Models\Appointment as Appoint;
use App\Events\Appointment_Creation as Appointment_CreationEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Notifications\Notifiable;
use App\Mail\SendAppointmentDetails;
use Illuminate\Support\Facades\Mail;

use App\Models\Doctor;
use Log;

class Appointment
{
    use Notifiable;
    
    
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
       //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Appointment_CreationEvent $event)
    {
        Log::info("This is the listener". $event->appointment );

        $doctor = $event->appointment->doctor_rel;
        Log::info($doctor);
        echo $doctor;
        
        \Mail::to($doctor['email'])->send(
            new SendAppointmentDetails($event->appointment, $doctor)
        );
    }
}

<?php

namespace App\Notifications;

use App\Models\Appointment;
use App\Models\Doctor;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AppointmentSuccessful extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public $appointment;
    public $doctor;

    public function __construct()
    {
        // $this->appointment = $appointment;
        // $this->doctor = $doctor;
    }

   

    public function handle(Appointment $event)
    {
        $appointment = $event->appointment;
        $email = $appointment->doctor->email;
        

        Mail::to($email)->send (new SendAppointmentDetails($appointment));
    }
}

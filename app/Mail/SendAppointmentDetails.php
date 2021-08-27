<?php

namespace App\Mail;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendAppointmentDetails extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;
    public $doctor;
    
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Appointment $appointment, Doctor $doctor)
    {
        $this->appointment = $appointment;
        $this->doctor = $doctor;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.appointment-details');
    }
}

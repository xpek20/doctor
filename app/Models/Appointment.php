<?php

namespace App\Models;

use App\Events\Appointment_Creation;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use \Venturecraft\Revisionable\RevisionableTrait;


class Appointment extends Model
{
    use CrudTrait, Notifiable, \Venturecraft\Revisionable\RevisionableTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'appointments';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /**
     * Fire a custom model event for the given event.
     *
     * @param  string  $event
     * @param  string  $method
     * @return mixed|null
     */

    protected $dispatchesEvents = [
        'created' => Appointment_Creation::class
    ];

    // protected static function booted()
    // {
    //     static::created(function($appointment)
    //     {
    //         Mail::to
    //     })
    // }


    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function doctor_rel()
    {
        return $this->belongsTo(Doctor::class , 'doctor');
    }

    public function operation_rel()
        {
            return $this->belongsTo(Operation::class , 'operation_type');
        }

    public function patient_rel()
    {
        return $this->belongsTo(Patient::class, 'patient_name');
    }

    public function extra_xrewseis()
    {
        return $this->belongsToMany(Extraxrewsei::class , 'extraxrewseis_appointments', 'appointment_id', 'extra_id');
    }

    public function identifiableName()
    {
        return $this->name;
    }

    


    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}

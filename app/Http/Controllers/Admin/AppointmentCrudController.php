<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AppointmentRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Patient;
use App\Events\Appointment_Creation;
use Notification;
use Illuminate\Database\Eloquent\Builder;
use App\Notifications\AppointmentSuccessful;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Auth;





/**
 * Class AppointmentCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AppointmentCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\InlineCreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;
    use \Backpack\ReviseOperation\ReviseOperation;
    

public $appointment;
public $doctor;

    
    
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Appointment::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/appointment');
        CRUD::setEntityNameStrings('Ραντεβού', 'Ραντεβού');
        $this->crud->orderBy('start', 'DESC');

    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
         //



        $this->crud->addColumn(['label' => 'Γιατρός',
                                'type'=> 'select',
                                'name'=> 'doctor',
                                'entity'=> 'doctor_rel',
                                'model' => "App\Models\Doctor",
                                'attribute' => 'onomateponimo']);

        $this->crud->addColumn(['label' => 'Εγχείρηση',
                                'type'=> 'select',
                                'name'=> 'operation_type',
                                'entity'=> 'operation_rel',
                                'model' => "App\Models\Operation",
                                'attribute' => 'name']);

        $this->crud->addColumn(['label' => 'Ασθενής',
                                'type'=> 'select',
                                'name'=> 'patient_name',
                                'entity'=> 'patient_rel',
                                'model' => "App\Models\Patient",
                                'attribute' => 'name']);
        
        $this->crud->addColumn(['label' => 'Έξτρα Χρεώσεις',
                                'type'=> 'select_multiple',
                                'name'=> 'extra_xrewseis',
                                'entity'=> 'extra_xrewseis',
                                'model' => "App\Models\Extraxrewsei",
                                'attribute' => 'name']);


        $this->crud->addColumn([
            'name' => 'patient_name',
            'label' => 'Ασθενής',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'start',
            'label' => 'Έναρξη',
            'type' => 'datetime'
        ]);


        $this->crud->addColumn([
            'name' => 'room',
            'label' => 'Αίθουσα',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'assistant',
            'label' => 'Βοηθός',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'anesthesiologist',
            'label' => 'Αναισθησιολόγος',
            'type' => 'text'
        ]);






        CRUD::setFromDb();
        $this->crud->enableExportButtons();







        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(AppointmentRequest::class);
        // CRUD::setFromDb(); // fields

        // CRUD::field('date')
        // ->label('Ημερομηνία')
        // ->wrapper(['class' => 'form-group col-md-6'])
        // ;

        // CRUD::field('time')
        // ->label('Ώρα')
        // ->wrapper(['class' => 'form-group col-md-6'])
        // ;

		CRUD::field('doctor')
                ->type('select')
                ->label('Ονοματεπώνυμο Γιατρού')
                ->entity('Doctor')
                ->model("App\Models\Doctor")
                ->attribute('onomateponimo')
                ->inline_create(true)
                ->wrapper(['class' => 'form-group col-md-6'])
                ;

        CRUD::field('operation_type')
            ->type('select')
            ->label('Είδος επέμβασης')
            ->entity('Operation')
            ->model("App\Models\Operation")
            ->attribute('name')
            ->inline_create(true)
            ->wrapper(['class' => 'form-group col-md-6'])
            ;

            CRUD::field('patient_name')
            ->type('select2')
            ->label('Ονοματεπώνυμο Ασθενή')
            ->entity('Patient')
            ->model("App\Models\Patient")
            ->attribute('name')
            ->inline_create(true)
            ->wrapper(['class' => 'form-group col-md-6'])
            ;

            CRUD::field('extra_xrewseis')
            ->type('select2_multiple')
            ->pivot('extraxrewseis_appointments')
            ->label('Έξτρα χρεώσεις')
            ->pivot(true)
            ->entity('Extraxrewsei')
            ->model("App\Models\Extraxrewsei")
            ->attribute('name')
            ->inline_create(true)
            ->wrapper(['class' => 'form-group col-md-6'])
            ;

        CRUD::field('start')
        ->label('Έναρξη')
        ;

        CRUD::field('end')
        ->label('Λήξη')
        ;


        CRUD::field('room')
                ->label('Αίθουσα')
                ;

        CRUD::field('assistant')
                ->label('Βοηθός Γιατρού')
                ;

        CRUD::field('anesthesiologist')
                        ->label('Αναισθησιολόγος')
                        ;
        // $appointment = $this->crud->getEntries();
        // echo $appointment;

        // $doctor = Appointment::has('doctor_rel', function (Builder $query)
        // {
        //     $appointment = Appointment::all;
        //     $appointmentdoctorid = $appointment->doctor;
        //     $query->where('id' , $appointmentdoctorid);
        // }
        // )->get();
        // echo $doctor;
        
        // event (new Appointment_Creation($appointment, $doctor));

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        $this->setupListOperation();
    }

    protected function fetchDoctor()
    {
        return $this->fetch(App\Models\Doctor::class);
    }

    public function passinfo()
    {
        
    }

    // public function index()
    // {
    //     $events = [];
    //     $data = Appointment::all();
    //     if($data->count()) {
    //         foreach ($data as $key => $value) {
    //             $events[] = Calendar::event(
    //                 $value->title,
    //                 true,
    //                 new \DateTime($value->start),
    //                 new \DateTime($value->end.' +1 day'),
    //                 null,
    //                 // Add color and link on event
	//                 [
	//                     'color' => '#f05050',
	//                     'url' => 'pass here url and any route',
	//                 ]
    //             );
    //         }
    //     }
    //     $calendar = Calendar::addEvents($events);
    //     return view('fullcalender', compact('calendar'));
    // }

    

    
}

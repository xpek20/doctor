<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PatientRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PatientCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PatientCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Patient::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/patient');
        CRUD::setEntityNameStrings('Ασθενούς', 'Ασθενείς');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Ονοπατεπώνυμο',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'birthday_astheni',
            'label' => 'Ημερομηνία Γέννησης',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Ονοπατεπώνυμο',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'mobile',
            'label' => 'Κινητό',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'address',
            'label' => 'Διεύθυνση',
            'type' => 'text'
        ]);
        

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
        CRUD::setValidation(PatientRequest::class);

        CRUD::field('name')
        ->label('Ονοματεπώνυμο Ασθενή')
        ->wrapper(['class' => 'form-group col-md-6'])
        ;

        CRUD::field('patronimo_astheni')
        ->label('Πατρώνυμο Ασθενή')
        ->wrapper(['class' => 'form-group col-md-6'])
        ;

        CRUD::field('arithmos_taftotitas_astheni')
        ->label('Αριθμός Ταυτότητας Ασθενή')
        ->wrapper(['class' => 'form-group col-md-6'])
        ;

        CRUD::field('epaggelma_astheni')
        ->label('Επάγγελμα Ασθενή')
        ->wrapper(['class' => 'form-group col-md-6'])
        ;

        CRUD::field('birthday_astheni')
        ->label('Ημερομηνία Γέννησης Ασθενή')
        ;
        
        CRUD::field('mobile')
        ->label('Κινητό')
        ;

        CRUD::field('topos_gennisis')
        ->label('Τόπος Γέννησης')
        ->wrapper(['class' => 'form-group col-md-6'])
        ;

        CRUD::field('address')
        ->label('Διεύθυνση')
        ->wrapper(['class' => 'form-group col-md-6'])
        ;

        CRUD::field('imeromhnia_eisodou')
        ->label('Ημερομηνία Εισόδου')
        ;

        CRUD::field('diagnwsh_eisodou')
        ->label('Διάγνωση Εισόδου')
        ->type('textarea')
        ;

        CRUD::field('imeromhnia_eksodou')
        ->label('Ημερομηνία Εξόδου')
        ;

        CRUD::field('thesi')
        ->label('Θέση')
        ;

        CRUD::field('dwmatio')
        ->label('Δωμάτιο')
        ;

        CRUD::field('prostheta')
        ->label('Πρόσθετα')
        ->type('textarea')
        ;

        CRUD::field('asfaleia')
        ->label('Ασφάλεια')
        ;




        ///////////sizigos

        CRUD::field('onoma_sizigou')
        ->label('Ονοματεπώνυμο Συζήγου')
        ->wrapper(['class' => 'form-group col-md-6'])
        ;

        CRUD::field('patronimo_sizigou')
        ->label('Πατρώνυμο Συζήγου')
        ->wrapper(['class' => 'form-group col-md-6'])
        ;

        CRUD::field('arithmos_taftotitas_sizigou')
        ->label('Αριθμός Ταυτότητας Συζήγου')
        ->wrapper(['class' => 'form-group col-md-6'])
        ;

        CRUD::field('epaggelma_sizigou')
        ->label('Επάγγελμα Ασθενή Συζήγου')
        ->wrapper(['class' => 'form-group col-md-6'])
        ;

        CRUD::field('birthday_sizigou')
        ->label('Ημερομηνία Γέννησης Συζήγου')
        ;
        

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
        $this->crud->set('show.setFromDb', false);
        
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Ονοπατεπώνυμο Ασθενή',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'onoma_sizigou',
            'label' => 'Ονοπατεπώνυμο Συζήγου',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'patronimo_astheni',
            'label' => 'Πατρώνυμο Ασθενή',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'patronimo_sizigou',
            'label' => 'Πατρώνυμο Συζήγου',
            'type' => 'text'
        ]);


        $this->crud->addColumn([
            'name' => 'birthday_astheni',
            'label' => 'Ημερομηνία Γέννησης Ασθενή',
            'type' => 'date'
        ]);

        $this->crud->addColumn([
            'name' => 'birthday_sizigou',
            'label' => 'Ημερομηνία Γέννησης Συζήγου',
            'type' => 'date'
        ]);

        $this->crud->addColumn([
            'name' => 'address',
            'label' => 'Διεύθυνση',
            'type' => 'text'
        ]);


        $this->crud->addColumn([
            'name' => 'mobile',
            'label' => 'Κινητό',
            'type' => 'text'
        ]);

       
        $this->crud->addColumn([
            'name' => 'address',
            'label' => 'Διεύθυνση',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'arithmos_taftotitas_astheni',
            'label' => 'Αριθμός Ταυτότητας Ασθενή',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'arithmos_taftotitas_sizigou',
            'label' => 'Αριθμός Ταυτότητας Συζήγου',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'epaggelma_astheni',
            'label' => 'Επάγγελμα Ασθενή',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'epaggelma_sizigou',
            'label' => 'Επάγγελμα Συζήγου',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'topos_gennisis',
            'label' => 'Τόπος Γέννησης',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'imeromhnia_eisodou',
            'label' => 'Ημερομηνία Εισόδου',
            'type' => 'date'
        ]);

        $this->crud->addColumn([
            'name' => 'diagnwsh_eisodou',
            'label' => 'Διάγνωση Εισόδου',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'imeromhnia_eksodou',
            'label' => 'Ημερομηνία Εξόδου',
            'type' => 'date'
        ]);

        $this->crud->addColumn([
            'name' => 'thesi',
            'label' => 'Θέση',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'dwmatio',
            'label' => 'Δωμάτιο',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'prostheta',
            'label' => 'Πρόσθετα',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'asfaleia',
            'label' => 'Ασφάλεια',
            'type' => 'text'
        ]);

        



        
    }
}

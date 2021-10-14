<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VelonesSiriggesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Auth;

/**
 * Class VelonesSiriggesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class VelonesSiriggesCrudController extends CrudController
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
        CRUD::setModel(\App\Models\VelonesSirigges::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/velones-sirigges');
        CRUD::setEntityNameStrings('Βελόνας ή Σύρριγας', 'Βελόνες-Σύρριγες');

        $user = Auth::user();
        if ($user->hasRole('Μαία'))
        {
            $this->crud->denyAccess(['list', 'create', 'delete', 'update']);
        }
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
            'label' => 'Όνομα',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'velona',
            'label' => 'Με βελόνα',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'quantity',
            'label' => 'Ποσότητα',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'used',
            'label' => 'Ξοδεύτηκαν',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'remaining',
            'label' => 'Υπόλοιπο',
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
        CRUD::setValidation(VelonesSiriggesRequest::class);

        CRUD::field('name')
        ->label('Όνομα')
        ;

        CRUD::field('quantity')
        ->label('Ποσότητα')
        ->type('number')
        ;

        CRUD::field('used')
        ->label('Ξοδεύτηκαν')
        ->type('number')
        ;

        CRUD::field('velona')
        ->label('Με βελόνα;')
        ->type('select_from_array')
        ->options(['Ναι' => 'Ναι', 'Όχι' => 'Όχι'])
        ->allows_null(false)
        ->default('two')
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
}

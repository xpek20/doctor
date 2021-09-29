<?php

namespace App\Http\Controllers\Admin;
use App\Models\SupplierCategory;
use App\Http\Requests\SupplierRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SupplierCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SupplierCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Supplier::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/supplier');
        CRUD::setEntityNameStrings('Προμηθευτή', 'Προμηθευτές');
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
            'label' => 'Επωνυμία',
            'type' => 'text'
        ]);

        $this->crud->addColumn(['label' => 'Είδος',
        'type'=> 'select',
        'name'=> 'sup_cat',
        'entity'=> 'supplier_rel',
        'model' => "App\Models\Supplier",
        'attribute' => 'name']);
        
        $this->crud->addColumn([
            'name' => 'phone',
            'label' => 'Τηλέφωνο',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'bank',
            'label' => 'Λογαριασμός Τραπέζης',
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
        CRUD::setValidation(SupplierRequest::class);

        CRUD::field('name')
            ->type('text')
            ->label('Όνομα')
            ;

        CRUD::field('sup_cat')
            ->type('select2')
            ->label('Είδος')
            ->entity('SupplierCategory')
            ->model("App\Models\SupplierCategory")
            ->attribute('name')
            ->inline_create(true)
            ->wrapper(['class' => 'form-group col-md-6'])
            ;

        CRUD::field('phone')
            ->type('text')
            ->label('Τηλέφωνο')
            ->wrapper(['class' => 'form-group col-md-6'])
            ;

        CRUD::field('bank')
            ->type('text')
            ->label('Λογαριασμός Τραπέζης')
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

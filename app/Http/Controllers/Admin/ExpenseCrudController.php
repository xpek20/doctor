<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ExpenseRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Auth;

/**
 * Class ExpenseCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ExpenseCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Expense::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/expense');
        CRUD::setEntityNameStrings('Εξόδου', 'Έξοδα');

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
        $this->crud->addColumn(['label' => 'Κατηγορία',
                                'type'=> 'select',
                                'name'=> 'ExpenseCategory',
                                'entity'=> 'expense_cat_rel',
                                'model' => "App\Models\ExpenseCategory",
                                'attribute' => 'name']);

        $this->crud->addColumn([
            'name' => 'amount',
            'label' => 'Ποσό',
            'type' => 'number'
        ]);


        $this->crud->addColumn([
            'name' => 'description',
            'label' => 'Περιγραφή',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Τιμολόγιο',
            'type' => 'image'
        ]);

        $this->crud->addColumn([
            'name' => 'entry_date',
            'label' => 'Ημερομηνία Καταχώρησης',
            'type' => 'date'
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
        CRUD::setValidation(ExpenseRequest::class);

        CRUD::field('expense_category_id')
        ->type('select')
        ->label('Κατηγορία')
        ->entity('ExpenseCategory')
        ->model("App\Models\ExpenseCategory")
        ->attribute('name')
        ->inline_create(true)
        ;

        CRUD::field('entry_date')
        ->label('Ημερομηνία Καταχώρησης')
        ->type('date')
        ;

        CRUD::field('amount')
        ->label('Ποσό')
        ->type('number')
        ->attributes(['step' => '0.01'])
        ->prefix('€')
        ;

        CRUD::field('description')
        ->label('Περιγραφή')
        ->type('textarea')
        ;

        CRUD::field('image')
        ->label('Τιμολόγιο')
        ->type('image')
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

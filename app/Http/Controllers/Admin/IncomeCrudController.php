<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IncomeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;



/**
 * Class IncomeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class IncomeCrudController extends CrudController
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

    // public function index()
    // {
    //     $data = DB::table('income')->get();
    //     Log::info($data);
    //     dd($data);

    // }
    public function setup()
    {
        CRUD::setModel(\App\Models\Income::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/income');
        CRUD::setEntityNameStrings('Εσόδου', 'Έσοδα');

        $user = Auth::user();
        if ($user->hasRole('Μαία'))
        {
            $this->crud->denyAccess(['list', 'create', 'delete', 'update']);
        }
        else 
        {
            $this->crud->allowAccess(['list', 'create', 'delete', 'update']);
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

        $user = Auth::user();

        $this->crud->addColumn(['label' => 'Κατηγορία',
                                'type'=> 'select',
                                'name'=> 'IncomeCategory',
                                'entity'=> 'income_cat_rel',
                                'model' => "App\Models\IncomeCategory",
                                'attribute' => 'name']);


        if ($user->hasRole('Admin')){
            
            $this->crud->addColumn([
                'name' => 'amount',
                'label' => 'Ποσό Α',
                'type' => 'number',
                'decimals' => 2,
                'dec_point' => '.',
                'suffix' => '€'
    
            ]);

            $this->crud->addColumn([
                'name' => 'amount_b',
                'label' => 'Ποσό Β',
                'type' => 'number',
                'decimals' => 2,
                'dec_point' => '.',
                'suffix' => '€'
    
            ]);

            $this->crud->addColumn([
                'name' => 'final_amount',
                'label' => 'Συνολικό',
                'type' => 'number',
                'decimals' => 2,
                'dec_point' => '.',
                'suffix' => '€'
    
            ]);

        }
        elseif ($user->hasRole('AdminB'))
        {
            $this->crud->addColumn([
                'name' => 'amount',
                'label' => 'Ποσό Α',
                'type' => 'number',
                'decimals' => 2,
                'dec_point' => ',',
                'suffix' => '€'
    
            ]);

        }
        

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

        $this->crud->set('show.setFromDb', false);

        

        



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

        $user = Auth::user();


        CRUD::setValidation(IncomeRequest::class);

        CRUD::field('income_category_id')
                ->type('select')
                ->label('Κατηγορία')
                ->entity('IncomeCategory')
                ->model("App\Models\IncomeCategory")
                ->attribute('name')
                ->inline_create(true)
                ;

        CRUD::field('entry_date')
        ->label('Ημερομηνία Καταχώρησης')
        ->type('date')
        ;

        
        if ($user->hasRole('Admin'))
        {
            CRUD::field('amount')
            ->label('Ποσό Α')
            ->type('number')
            ->attributes(['step' => '0.01'])
            ->prefix('€')
            ;

            CRUD::field('amount_b')
            ->label('Ποσό Β')
            ->type('number')
            ->attributes(['step' => '0.01'])
            ->prefix('€')
            ;    

        }
        elseif ($user->hasRole('AdminB')){
            CRUD::field('amount')
            ->label('Ποσό Α')
            ->type('number')
            ->attributes(['step' => '0.01'])
            ->prefix('€')
            ;
        }
        
        

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

    protected function setupShowOperation()
    {
        $this->setupListOperation();
    }
}

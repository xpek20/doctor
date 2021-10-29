<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('doctor', 'DoctorCrudController');
    Route::crud('appointment', 'AppointmentCrudController');
    Route::crud('surgery', 'SurgeryCrudController');
    Route::crud('operation', 'OperationCrudController');
    Route::crud('medicine', 'MedicineCrudController');
    Route::crud('medicine-category', 'MedicineCategoryCrudController');
    Route::crud('patient', 'PatientCrudController');
    Route::crud('supplier-category', 'SupplierCategoryCrudController');
    Route::crud('supplier', 'SupplierCrudController');
    Route::crud('food', 'FoodCrudController');
    Route::crud('consumable', 'ConsumableCrudController');
    Route::crud('oros', 'OrosCrudController');
    Route::crud('eksetasi-aimatos', 'EksetasiAimatosCrudController');
    Route::crud('xartika', 'XartikaCrudController');
    Route::crud('galata', 'GalataCrudController');
    Route::crud('pampers', 'PampersCrudController');
    Route::crud('medela', 'MedelaCrudController');
    Route::crud('velones-sirigges', 'VelonesSiriggesCrudController');
    Route::crud('rammata', 'RammataCrudController');
    Route::crud('income', 'IncomeCrudController');
    Route::crud('income-category', 'IncomeCategoryCrudController');
    Route::crud('expense', 'ExpenseCrudController');
    Route::crud('expense-category', 'ExpenseCategoryCrudController');
    Route::get('expense-reports', 'ExpenseRC@index');
    Route::get('charts/expense-summary', 'Charts\ExpenseSummaryChartController@response')->name('charts.expense-summary.index');
    
    Route::get('charts/monthly-profit', 'Charts\MonthlyProfitChartController@response')->name('charts.monthly-profit.index');
    Route::get('charts/montly-expense-cat', 'Charts\MontlyExpenseCatChartController@response')->name('charts.montly-expense-cat.index');
    Route::crud('anesthpgrogram', 'AnesthpgrogramCrudController');
    Route::crud('extraxrewsei', 'ExtraxrewseiCrudController');
    Route::get('full-calendar', 'calendarcontroller@index');
    Route::get('/apothiki', function () {
        return view('admin.apothiki');
    });
    Route::get('/esoda-eksoda', function () {
        return view('admin.esoda-eksoda');
    });
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    // Route::get('full-calendar-anesth', 'anesthcontroller@index');
}); // this should be the absolute last line of this file
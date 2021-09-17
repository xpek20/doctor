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
}); // this should be the absolute last line of this file
<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('doctor') }}'><i class="las la-stethoscope"></i> Ιατροί</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('patient') }}'><i class="las la-id-card-alt"></i></i></i> Ασθενείς</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('appointment') }}'><i class="las la-notes-medical"></i> Ραντεβού</a>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('operation') }}'><i class="las la-user-md"></i> Είδη Εγχειρήσεων</a></ul> 

</li>
<li class='nav-item'><a class='nav-link'><i class="las la-warehouse"></i> Αποθήκη</a>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('medicine') }}'><i class="las la-pills"></i> Φάρμακα</a></ul>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('food') }}'><i class="las la-utensils"></i> Φαγητό</a></ul>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('medicine-category') }}'><i class="las la-prescription-bottle"></i> Κατηγορίες</a></ul>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('consumable') }}'><i class="las la-cut"></i>Αναλώσιμα</a></ul>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('oros') }}'><i class='nav-icon la la-question'></i> Οροί</a></ul>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('eksetasi-aimatos') }}'><i class="las la-vial"></i> Εξετάσεις Αίματος</a></ul>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('xartika') }}'><i class="las la-cut"></i> Χαρτικά</a></ul>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('galata') }}'><i class="las la-wine-bottle"></i> Γάλατα</a></ul>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('pampers') }}'><i class="las la-baby"></i> Pampers</a></ul>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('medela') }}'><i class='nav-icon la la-question'></i> Medelas</a></ul>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('velones-sirigges') }}'><i class="las la-syringe"></i> Βελόνες-Σύρριγες</a></ul>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('rammata') }}'><i class="las la-band-aid"></i> Ράμματα</a></ul>
    <ul class='nav-item'></ul>
    <ul class='nav-item'></ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('supplier') }}'><i class="las la-truck"></i>Προμηθευτές</a>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('supplier-category') }}'><i class="las la-boxes"></i> Κατηγορίες</a></ul>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('income') }}'><i class='nav-icon la la-question'></i> Income</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('income-category') }}'><i class='nav-icon la la-question'></i> Income Categories</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('expense') }}'><i class='nav-icon la la-question'></i> Expenses</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('expense-category') }}'><i class='nav-icon la la-question'></i> Expense categories</a></li>
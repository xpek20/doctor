<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<div style="height: 90vh">
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('doctor') }}'><i class="las la-stethoscope"></i> Ιατροί</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('patient') }}'><i class="las la-id-card-alt"></i></i></i> Ασθενείς</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('appointment') }}'><i class="las la-notes-medical"></i> Ραντεβού</a>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('operation') }}'><i class="las la-user-md"></i> Είδη Εγχειρήσεων</a></ul> 
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('extraxrewsei') }}'><i class="las la-coins"></i> Έξτρα Χρεώσεις</a></ul>

</li>
<li class='nav-item'><a class='nav-link' href='../full-calendar'><i class="las la-calendar"></i> Ημερολόγιο</a>
    <ul class="nav-item"><a class='nav-link' href='{{ backpack_url('anesthpgrogram') }}'><i class="las la-calendar-times"></i></i> Πρόγραμμα Αναισθησιολόγου</a></ul>
</li>


<li class="nav-item nav-dropdown">
    <a class='nav-link nav-dropdown-toggle' href="#"><i class="las la-warehouse"></i> Αποθήκη</a>
    <ul class="nav-dropdown-items">
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('medicine') }}'><i class="las la-pills"></i> Φάρμακα</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('medicine-category') }}'><i class="las la-prescription-bottle"></i> Κατηγορίες Φαρμάκων</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('food') }}'><i class="las la-utensils"></i> Φαγητό</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('consumable') }}'><i class="las la-cut"></i> Αναλώσιμα</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('oros') }}'><i class='nav-icon la la-question'></i> Οροί</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('eksetasi-aimatos') }}'><i class="las la-vial"></i> Εξετάσεις Αίματος</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('xartika') }}'><i class="las la-cut"></i> Χαρτικά</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('galata') }}'><i class="las la-wine-bottle"></i> Γάλατα</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('pampers') }}'><i class="las la-baby"></i> Pampers</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('medela') }}'><i class='nav-icon la la-question'></i> Medelas</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('velones-sirigges') }}'><i class="las la-syringe"></i> Βελόνες-Σύρριγες</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('rammata') }}'><i class="las la-band-aid"></i> Ράμματα</a></ul>
    </ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('supplier') }}'><i class="las la-truck"></i> Προμηθευτές</a>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('supplier-category') }}'><i class="las la-boxes"></i> Κατηγορίες</a></ul>
</li>
<li class="nav-item nav-dropdown">
    <a class='nav-link nav-dropdown-toggle' href='#'><i class="las la-money-bill-wave"></i> Έσοδα - Έξοδα</a>
    <ul class="nav-dropdown-items">
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('income-category') }}'><i class="las la-bars"></i> Κατηγορίες Εσόδων</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('expense-category') }}'><i class="las la-bars"></i> Κατηγορίες Εξόδων</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('income') }}'><i class="las la-arrow-circle-right"></i> Έσοδα</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('expense') }}'><i class="las la-arrow-circle-left"></i> Έξοδα</a></ul>
        <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('expense-reports') }}'> <i class="las la-wallet"></i> Σύνοψη</a></ul>
    </ul>
</li>
</div>

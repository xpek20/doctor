<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('doctor') }}'><i class="las la-stethoscope"></i> Ιατροί</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('patient') }}'><i class="las la-user-injured"></i></i> Ασθενείς</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('appointment') }}'><i class="las la-notes-medical"></i> Ραντεβού</a>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('operation') }}'><i class="las la-user-md"></i> Είδη Εγχειρήσεων</a></ul> 

</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('medicine') }}'><i class="las la-pills"></i> Φάρμακα</a>
    <ul class='nav-item'><a class='nav-link' href='{{ backpack_url('medicine-category') }}'><i class="las la-prescription-bottle"></i> Κατηγορίες</a></ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('supplier') }}'><i class="las la-warehouse"></i>Προμηθευτές</a>
    <ul><a class='nav-link' href='{{ backpack_url('supplier-category') }}'><i class="las la-boxes"></i> Κατηγορίες</a></ul>
</li>

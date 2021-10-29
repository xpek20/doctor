@extends(backpack_view('blank'))

{{-- @php
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => trans('backpack::base.welcome'),
        'content'     => trans('backpack::base.use_sidebar'),
        'button_link' => backpack_url('logout'),
        'button_text' => trans('backpack::base.logout'),
    ];
@endphp --}}

@section('after_styles')
    {{-- <link rel="stylesheet" href="../resources/css/cards.css"> --}}
    
@endsection

@section('content')
<style> 
.block {
  width: 90%;
  display: inline-block;
}


</style>

<div class="container-fluid vertical-center block">
    @hasanyrole('Γραμματεία|Admin|AdminB')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 style="margin-top:10px">
                        Ασθενείς
                    </h2>
                    <p>
                        Προσθήκη ασθενή στην λίστα
                    </p>
                    <p>
                        <a class="btn  btn-success" href='/admin/patient/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/patient'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    <h2 style="margin-top:10px">
                        Ιατροί
                    </h2>
                    <p>
                        Προσθήκη ιατρού στην λίστα
                    </p>
                    <p>
                        <a class="btn  btn-success" href='/admin/doctor/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/doctor'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    <h2 style="margin-top:10px">
                        Ραντεβού
                    </h2>
                    <p>
                        Καταχώρηση ραντεβού
                    </p>
                    <p>
                        <a class="btn  btn-success" href='/admin/appointment/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/appointment'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 style="margin-top:10px">
                        Προμηθευτές
                    </h2>
                    <p>
                        Καταχώρηση προμηθευτών
                    </p>
                    <p>
                        <a class="btn  btn-success" href='/admin/supplier/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/supplier'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>




    </div>

    <div class="row" style="margin-bottom: 1.5rem">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 style="margin-top:10px">
                        Αποθήκη
                    </h2>
                    <p>
                        Προβολή και επεξεργασία προιόντων της αποθήκης
                    </p>
                    <p>
                        <a class="btn  btn-info" href='/admin/apothiki'>Προβολή »</a>

                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 style="margin-top:10px">
                        Ημερολόγιο
                    </h2>
                    <p>
                        Προβολή ημερολογίου
                    </p>
                    <p>
                        <a class="btn  btn-info" href='/admin/full-calendar'>Προβολή »</a>

                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 style="margin-top:10px">
                        Έσοδα - Έξοδα
                    </h2>
                    <p>
                        Προσθήκη ιατρού στην λίστα
                    </p>
                    <p>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/esoda-eksoda'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
    @endhasanyrole
    @hasrole('Μαία')
    <div class="row" style="margin-bottom: 1.5rem">

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 style="margin-top:10px">
                        Ραντεβού
                    </h2>
                    <p>
                        Καταχώρηση ραντεβού
                    </p>
                    <p>
                        <a class="btn  btn-success" href='/admin/appointment/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/appointment'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2 style="margin-top:10px">
                        Ημερολόγιο
                    </h2>
                    <p>
                        Προβολή ημερολογίου
                    </p>
                    <p>
                        <a class="btn  btn-info" href='/admin/full-calendar'>Προβολή »</a>

                    </p>
                </div>
            </div>
        </div>

    </div>
    @endhasrole
</div>

@endsection
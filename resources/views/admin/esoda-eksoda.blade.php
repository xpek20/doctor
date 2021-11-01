@extends(backpack_view('blank'))

@hasanyrole('Admin|AdminB|Γραμματεία')
@section('content')


<div class="container-fluid vertical-center">
    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 style="margin-top:10px">
                        Έσοδα
                    </h2>
                    <p>
                        Προσθήκη εσόδου
                    </p>
                    <p>
                        <a class="btn  btn-success" href='/admin/income/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/income'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 style="margin-top:10px">
                        Κατηγορία Έσοδων
                    </h2>
                    <p>
                        Προσθήκη κατηγορίας Έσοδων
                    </p>
                    <p>
                        <a class="btn  btn-success" href='/admin/income-category/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/income-category'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 style="margin-top:10px">
                        Έξοδα
                    </h2>
                    <p>
                        Προσθήκη Εξόδων
                    </p>
                    <p>
                        <a class="btn  btn-success" href='/admin/expense/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/expense'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 style="margin-top:10px">
                        Κατηγορίες Εξόδων
                    </h2>
                    <p>
                        Προσθήκη κατηγορίας Εξόδων
                    </p>
                    <p>
                        <a class="btn  btn-success" href='/admin/expense-category/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/expense-category'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>




    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 style="margin-top:10px">
                        Σύνοψη Εσόδων - Εξόδων
                    </h2>
                    <p>

                    </p>
                    <p>
                        <a class="btn  btn-info" href='/admin/expense-reports'>Προβολή »</a>

                    </p>
                </div>
            </div>
        </div>

    </div>

@endsection




@endhasanyrole
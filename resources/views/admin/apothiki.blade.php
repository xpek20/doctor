@extends(backpack_view('blank'))

@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Φάρμακα
                    </h2>
                    <p>
                        <a class="btn  btn-success" href='/admin/medicine/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/medicine'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Φαγητό
                    </h2>
                    <p>
                        <a class="btn  btn-success" href='/admin/food/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/food'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Αναλώσιμα
                    </h2>

                    <p>
                        <a class="btn  btn-success" href='/admin/consumable/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/consumable'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Οροί
                    </h2>
                    <p>
                        <a class="btn  btn-success" href='/admin/oros/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/oros'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Εξετάσεις αίματος
                    </h2>
                    <p>
                        <a class="btn  btn-success" href='/admin/eksetasi-aimatos/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/eksetasi-aimatos'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Χαρτικά
                    </h2>
                    <p>
                        <a class="btn  btn-success" href='/admin/xartika/create'>Προσθήκη »</a>
                        <a style="margin-left:10px;" class="btn  btn-info" href='/admin/xartika'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Γάλατα
                    </h2>
                    <p>
                        <a class="btn  btn-success" href='/admin/galata/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/galata'>Προβολή »</a>
                        
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Pampers
                    </h2>
                    <p>
                        <a class="btn  btn-success" href='/admin/pampers/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/pampers'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Medelas
                    </h2>
                    <p>
                        <a class="btn  btn-success" href='/admin/medelas/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/medelas'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Βελόνες - Σύριγγες
                    </h2>
                    <p>
                        <a class="btn  btn-success" href='/admin/velones-sirigges/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/velones-sirigges'>Προβολή »</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Ράμματα
                    </h2>
                    <p>
                        <a class="btn  btn-success" href='/admin/rammata/create'>Προσθήκη »</a>
                        <a style="margin-left:10px" class="btn  btn-info" href='/admin/rammata'>Προβολή »</a>

                    </p>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
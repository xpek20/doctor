@extends(backpack_view('blank'))

@section('content')

<div class="container-fluid">
	<div class="row">
	
    <div class="col-md-4">
			<h2>
				Φάρμακα
			</h2>
			<p>
				<a class="btn  btn-success" href='/admin/medicine/create'>Προσθήκη »</a>
			</p> 
		</div>
    
		<div class="col-md-4">
			<h2>
				Φαγητό
			</h2>
			<p>
				<a class="btn  btn-success" href='/admin/food/create'>Προσθήκη »</a>
			</p> 
		</div>
		
		<div class="col-md-4">
			<h2>
				Αναλώσιμα
			</h2>
			
			<p>
				<a class="btn  btn-success" href='/admin/consumable/create'>Προσθήκη »</a>
			</p>
		</div>
	</div>

  <div class="row">
	
    <div class="col-md-4">
			<h2>
				Οροί
			</h2>
			<p>
				<a class="btn  btn-success" href='/admin/oros/create'>Προβολή »</a>
			</p> 
		</div>
    
		<div class="col-md-4">
			<h2>
				Εξετάσεις αίματος
			</h2>
			<p>
				<a class="btn  btn-success" href='/admin/eksetasi-aimatos/create'>Προσθήκη »</a>
			</p>
		</div>
		<div class="col-md-4">
			<h2>
				Χαρτικά
			</h2>
			<p>
				<a class="btn  btn-success" href='/admin/xartika/create'>Προσθήκη »</a>
			</p>
		</div>
	</div>

    <div class="row">
	
        <div class="col-md-4">
                <h2>
                    Γάλατα
                </h2>
                <p>
                    <a class="btn  btn-success" href='/admin/galata/create'>Προβολή »</a>
                </p> 
            </div>
        
            <div class="col-md-4">
                <h2>
                    Pampers
                </h2>
                <p>
                    <a class="btn  btn-success" href='/admin/pampers/create'>Προσθήκη »</a>
                </p>
            </div>
            <div class="col-md-4">
                <h2>
                    Medelas
                </h2>
                <p>
                    <a class="btn  btn-success" href='/admin/medelas/create'>Προσθήκη »</a>
                </p>
            </div>
        </div>

        <div class="row">
	
            <div class="col-md-6">
                    <h2>
                        Βελόνες - Σύριγγες
                    </h2>
                    <p>
                        <a class="btn  btn-success" href='/admin/velones-sirigges/create'>Προβολή »</a>
                    </p> 
                </div>
            
                <div class="col-md-6">
                    <h2>
                        Ράμματα
                    </h2>
                    <p>
                        <a class="btn  btn-success" href='/admin/rammata/create'>Προσθήκη »</a>
                    </p>
                </div>
            </div>

</div>


@endsection
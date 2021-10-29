@extends(backpack_view('blank'))


@php 

// $widgets['after_content'][] = [
// 	  'type'         => 'chart',
// 	  'wrapperClass'  => 'col-md-6',
// 	  'heading'      => 'Test',
// 	  'controller'      => \App\Http\Controllers\Admin\Charts\MonthlyProfitChartController::class ,
	  
// 	];


@endphp

@section('content')
<div class="row">
    <div class="col">
        <h3 class="page-title">Αναφορά Εξόδων</h3>

        <form method="get">
            <div class="row">
                <div class="col-3 form-group">
                    <label class="control-label" for="y">Έτος</label>
                    <select name="y" id="y" class="form-control">
                        @foreach(array_combine(range(date("Y"), 1900), range(date("Y"), 1900)) as $year)
                            <option value="{{ $year }}" @if($year===old('y', Request::get('y', date('Y')))) selected @endif>
                                {{ $year }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3 form-group">
                    <label class="control-label" for="m">Μήνας</label>
                    <select name="m" for="m" class="form-control">
                        @foreach(cal_info(0)['months'] as $month)
                            <option value="{{ $month }}" @if($month===old('m', Request::get('m', date('F')))) selected @endif>
                                {{ $month }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-4">
                    <label class="control-label">&nbsp;</label><br>
                    <button class="btn btn-primary" type="submit">Εντάξει</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card">
    
    <div class="card-body">
        <div class="row">
            <div class="col">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Έσοδα</th>
                        <td>{{ number_format($incomesTotal, 2) }}</td>
                    </tr>
                    <tr>
                        <th>Έξοδα</th>
                        <td>{{ number_format($expensesTotal, 2) }}</td>
                    </tr>
                    <tr>
                        <th>Κέρδος</th>
                        <td>{{ number_format($profit, 2) }}</td>
                    </tr>
                </table>
            </div>
            <div class="col">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Έσοδα ανά κατηγορία</th>
                        <th>{{ number_format($incomesTotal, 2) }}</th>
                    </tr>
                    @foreach($incomesSummary as $inc)
                        <tr>
                            
                            <th>{{ $inc['name'] }}</th>
                            <td>{{ number_format($inc['amount'], 2) }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Έξοδα ανά κατηγορία</th>
                        <th>{{ number_format($expensesTotal, 2) }}</th>
                    </tr>
                    @foreach($expensesSummary as $inc)
                        <tr>
                            <th>{{ $inc['name'] }}</th>
                            <td>{{ number_format($inc['amount'], 2) }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
</div>



@endsection

@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "{{ config('panel.date_format_js') }}"
      })
</script>
@stop
<?php

namespace App\Http\Controllers\Admin\Charts;

use App\Models\Expense;
use App\Models\Income;
use Illuminate\Http\Request;

use Backpack\CRUD\app\Http\Controllers\ChartController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Carbon\Carbon;

/**
 * Class MonthlyProfitChartController
 * @package App\Http\Controllers\Admin\Charts
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MonthlyProfitChartController extends ChartController
{
    public function setup()
    {
        $this->chart = new Chart();

        // MANDATORY. Set the labels for the dataset points
        $labels = [];
        for ($days_backwards = 30; $days_backwards >= 0; $days_backwards--){
            if($days_backwards == 1)
            {

            }
            $labels[] = 'Πριν' . $days_backwards . 'μέρες';
        }
        $this->chart->labels($labels);

        // RECOMMENDED. Set URL that the ChartJS library should call, to get its data using AJAX.
        $this->chart->load(backpack_url('charts/monthly-profit'));

        // OPTIONAL
        $this->chart->minimalist(false);
        $this->chart->displayLegend(true);
    }

    /**
     * Respond to AJAX calls with all the chart data points.
     *
     * @return json
     */
    public function data()
    {
        for ($days_backwards = 30; $days_backwards >= 0; $days_backwards--) {
            $expenses = Expense::all();
            $incomesSummary = [];
            foreach(json_decode($expenses) as $line){
                if (!isset($incomesSummary[$line->amount])){
                    
                }

            }
            $expenses = Expense::whereDate('entry_date' , today()->subDays($days_backwards))->get(['amount']);
            $income = Income::whereDate('entry_date' , today()->subDays($days_backwards))->get(['amount']);
            $profit = $income - $expenses;

        }

        $this->chart->dataset('Έξοδα','line' , $expenses)
        ->color('rgb(66, 186, 150)')
        ->backgroundColor('rgba(66, 186, 150, 0.4)');
            
        $this->chart->dataset('Έσοδα', 'line', $income)
        ->color('rgb(96, 92, 168)')
        ->backgroundColor('rgba(96, 92, 168, 0.4)');  

        $this->chart->dataset('Κέρδος', 'line', $profit)
            ->color('rgb(255, 193, 7)')
            ->backgroundColor('rgba(255, 193, 7, 0.4)');

           
        }
    
}
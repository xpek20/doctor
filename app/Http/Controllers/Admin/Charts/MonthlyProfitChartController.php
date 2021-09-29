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
       
            // $expenses = Expense::whereDate('entry_date' , today()->subDays($days_backwards))->get(['amount']);
            // $income = Income::whereDate('entry_date' , today()->subDays($days_backwards))->get(['amount']);
            // $profit = $income - $expenses;
           

            $from = Carbon::parse(sprintf(
                '%s-%s-01',
                request()->query('y', Carbon::now()->year),
                request()->query('m', Carbon::now()->month)
            ));
            $to      = clone $from;
            $to->day = $to->daysInMonth;
    
            $expenses = Expense::with('expense_cat_rel')
                ->whereBetween('entry_date', [$from, $to]);
            
    
            $incomes = Income::with('income_cat_rel')
                ->whereBetween('entry_date', [$from, $to]);
            
    
            $expensesTotal   = $expenses->sum('amount');
            $incomesTotal    = $incomes->sum('amount');
            $groupedExpenses = $expenses->whereNotNull('expense_category_id')->orderBy('amount', 'desc')->get()->groupBy('expense_category_id');
            $groupedIncomes = $incomes->whereNotNull('income_category_id')->orderBy('amount', 'desc')->get()->groupBy('income_category_id');
            
            // echo $groupedIncomes;
            
            
            $profit          = $incomesTotal - $expensesTotal;
            
    
            $expensesSummary = [];
            foreach ($groupedExpenses as $exp) {
                foreach (json_decode($exp) as $line) {
                    if (!isset($expensesSummary[$line->expense_cat_rel->name])) {
                        $expensesSummary[$line->expense_cat_rel->name] = [
                            'name'   => $line->expense_cat_rel->name,
                            'amount' => 0,
                        ];
                    }
                
                    $expensesSummary[$line->expense_cat_rel->name]['amount'] += $line->amount;
                }
            }
    
            
            // dd($groupedIncomes);
            $incomesSummary = [];
            // dd($groupedIncomes);
            foreach ($groupedIncomes as $inc) {
                foreach (json_decode($inc) as $line) {
                    if (!isset($incomesSummary[$line->income_cat_rel->name])) {
                        $incomesSummary[$line->income_cat_rel->name] = [
                            'name'   => $line->income_cat_rel->name,
                            'amount' => 0,
                        ];
                    }
                    $incomesSummary[$line->income_cat_rel->name]['amount'] += $line->amount;
                }
            }
            
        }
    
}
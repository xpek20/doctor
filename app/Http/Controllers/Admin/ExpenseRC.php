<?php

namespace App\Http\Controllers\Admin;
use App\Models\Expense;
use App\Models\Income;
use App\Models\ExpenseCategory;
use App\Models\IncomeCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests\ExpenseCategoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;



class ExpenseRC extends Controller
{

    public function index()
    {
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
        

    

        return view('expenseReport', compact(
            'expensesSummary',
            'incomesSummary',
            'expensesTotal',
            'incomesTotal',
            'profit'
        ));
    }
}

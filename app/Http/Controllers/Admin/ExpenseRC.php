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



class ExpenseRC extends Controller
{

    public function setup()
    {
        CRUD::setRoute(config('backpack.base.route_prefix') . '/expense-report');
        CRUD::setEntityNameStrings('expense category', 'expense categories');
    }

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
        $groupedIncomes  = $incomes->whereNotNull('income_category_id')->orderBy('amount', 'desc')->get()->groupBy('income_category_id');
        
        
        
        $profit          = $incomesTotal - $expensesTotal;
        

        $expensesSummary = [];
        foreach ($groupedExpenses as $exp) {
            foreach ($exp as $line) {
                if (!isset($expensesSummary[$line->expense_categories->expense_cat_rel])) {
                    $expensesSummary[$line->expense_categories->expense_cat_rel] = [
                        'name'   => $line->expense_categories->expense_cat_rel,
                        'amount' => 0,
                    ];
                }
            
                $expensesSummary[$line->expense_categories->expense_cat_rel]['amount'] += $line->amount;
            }
        }

        
        
        $incomesSummary = [];
        
        foreach ($groupedIncomes as $inc) {
            foreach ($inc as $line) {
                if (!isset($incomesSummary[$line->income->income['income_cat_rel']])) {
                    $incomesSummary[$line->income['income_cat_rel']] = [
                        'name'   => $line->income['income_cat_rel'],
                        'amount' => 0,
                    ];
                    
                }
                $incomesSummary[$line->income['income_cat_rel']]['amount'] += $line->amount;
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

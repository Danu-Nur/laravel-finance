<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $this->setTitle('Dashboard');
        $assets = Asset::all();
        $sumAsset = $assets->sum('value');

        // Fetch all transactions
        $transactions = Transaction::all();

        // Calculate income transactions and their total amount
        $dataTransactionIncome = Transaction::whereHas('category', function ($query) {
            $query->whereHas('type', function ($query) {
                $query->where('name', 'income');
            });
        });

        $sumTransactionIncome = $dataTransactionIncome->sum('amount');
        $getTransactionIncome = $dataTransactionIncome->get();

        // Calculate expense transactions and their total amount
        $dataTransactionExpense = Transaction::whereHas('category', function ($query) {
            $query->whereHas('type', function ($query) {
                $query->where('name', 'expense');
            });
        });
        $sumTransactionExpense = $dataTransactionExpense->sum('amount');
        $getTransactionExpense = $dataTransactionExpense->get();

        // Separate dates and amounts for expense transactions in order
        $dateTransactionExpense = json_encode($getTransactionExpense->sortBy('date')->pluck('date')->map(function ($date) {
            return (new \DateTime($date))->format('m-d');
        })->toArray());
        $amountTransactionExpense = json_encode($getTransactionExpense->sortBy('date')->pluck('amount')->map(fn($amount) => (int) $amount)->toArray());

        // Fetch income transactions, grouped by month
        $incomeTransactions = Transaction::whereHas('category', function ($query) {
            $query->whereHas('type', function ($query) {
                $query->where('name', 'income');
            });
        })
            ->selectRaw('YEAR(date) as year, MONTH(date) as month, SUM(amount) as total')
            ->groupBy('year', 'month')
            ->get();
        // ->keyBy(function ($item) {
        //     return $item->year . '-' . str_pad($item->month, 2, '0', STR_PAD_LEFT);
        // });

        // Fetch expense transactions, grouped by month
        $expenseTransactions = Transaction::whereHas('category', function ($query) {
            $query->whereHas('type', function ($query){
                $query->where('name', 'expense');
            });
        })
            ->selectRaw('YEAR(date) as year, MONTH(date) as month, SUM(amount) as total')
            ->groupBy('year', 'month')
            ->get();
        // ->keyBy(function ($item) {
        //     return $item->year . '-' . str_pad($item->month, 2, '0', STR_PAD_LEFT);
        // });
        // dump($expenseTransactions);
        // Prepare arrays for income, expense, and net income sums per month
        $sumPerMonthIncome = [];
        $sumPerMonthExpense = [];
        $sumPerMonthNetIncome = [];

        // Calculate net income per month by combining income and expense totals
        foreach ($incomeTransactions as $month => $income) {
            $expense = $expenseTransactions->get($month)->total ?? 0;
            $sumPerMonthIncome[$month] = $income->total;
            $sumPerMonthExpense[$month] = $expense;
            $sumPerMonthNetIncome[$month] = $income->total - $expense;
        }

        foreach ($expenseTransactions as $month => $expense) {
            if (!isset($sumPerMonthIncome[$month])) {
                $sumPerMonthIncome[$month] = 0;
                $sumPerMonthExpense[$month] = $expense->total;
                $sumPerMonthNetIncome[$month] = -$expense->total;
            }
        }

        // Convert arrays to JSON
        $sumPerMonthIncome = json_encode($sumPerMonthIncome);
        $sumPerMonthExpense = json_encode($sumPerMonthExpense);
        $sumPerMonthNetIncome = json_encode($sumPerMonthNetIncome);

        // Calculate the balance
        $balance = $sumAsset + $sumTransactionIncome - $sumTransactionExpense;

        // Pass all required variables to the view
        return view('admin.dashboard.index', compact(
            'assets',
            'sumAsset',
            'transactions',
            'sumTransactionIncome',
            'getTransactionIncome',
            'sumTransactionExpense',
            'getTransactionExpense',
            'dateTransactionExpense',
            'amountTransactionExpense',
            'sumPerMonthIncome',
            'sumPerMonthExpense',
            'sumPerMonthNetIncome',
            'balance'
        ));
    }
}

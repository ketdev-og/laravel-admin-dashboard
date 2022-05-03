<?php

namespace App\Providers;

use App\Models\Transaction;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View as ViewView;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('welcome', function ($view) {
            $fund = Auth::user()->fund;
            $debitAmount = Transfer::get();
            $totalTans = Transaction::get();
            $funds = [];
            $debit = [];
            $trans = [];

            for ($i = 0; $i < count($totalTans); $i++) {
                array_push($trans, $totalTans[$i]->amount);
            }

            for ($i = 0; $i < count($debitAmount); $i++) {
                array_push($debit, $debitAmount[$i]->amount);
            }

            for ($i = 0; $i < count($fund); $i++) {
                array_push($funds, $fund[$i]->amount);
            }
            $total = array_sum($funds);
            $last = end($funds);

            $totalDebit = array_sum($debit);
            $totalTransactions = array_sum($trans);

            $userCount = User::all()->count();
            $isActive = User::where('isActive', true)->count();
            $notActive = User::where('isActive', false)->count();

            $view->with([
                'total' => $total, 
                'last' => $last, 
                'userCount' => $userCount, 
                'is_active' => $isActive,
                'not_active' => $notActive,
                'total_debit' => $totalDebit,
                'total_trans' => $totalTransactions
            
            ]);
        });
    }
}

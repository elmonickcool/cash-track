<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\Expense;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $totalIncome = Income::where('user_id', $user->id)->sum('amount');
        $totalExpense = Expense::where('user_id',$user->id)->sum('amount');
        $totalBalance = $totalIncome - $totalExpense;
        return view('auth.dashboard', compact('totalIncome','totalExpense','totalBalance'));
    }
}

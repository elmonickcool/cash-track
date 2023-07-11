<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $totalIncome = Income::where('user_id', $user->id)->sum('amount');
        
        return view('auth.dashboard', compact('totalIncome'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    public function create()
    {
        return view('expense.create');
    }

    public function store(Request $request)
    {
        $validateData=$request->validate([
            'description'=>'required',
            'amount'=>'required|numeric',
            'date'=>'required|date',
        ]);

        $expense = new Expense();
        $expense->description = $validateData['description'];
        $expense->amount = $validateData['amount'];
        $expense->date = $validateData['date'];
        $expense->user_id = auth()->user()->id;
        $expense->save();

        return redirect()->route('auth.dashboard')->with('sucess','Expense added');
    }
}

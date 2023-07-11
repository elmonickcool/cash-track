<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
    public function create(){
        return view('income.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'amount'=>'required|numeric',
            'source'=>'required|string',
            'description'=>'nullable|string',
            'date'=>'required|date',
        ]);
    }
}

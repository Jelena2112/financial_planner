<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpensesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function expenses()
    {
        return view('expenses');
    }

    public function saveExpenses(Request $request)
    {
        Expenses::create([
            'user_id' => Auth::id(),
            'travel' => $request->get('travel'),
            'clothes' => $request->get('clothes'),
            'bills' => $request->get('bills'),
            'other' => $request->get('other')
        ]);

        return redirect()->route('current_expenses');
    }

    public function currentExpenses()
    {

       $allExpenses = Expenses::where([
           'user_id'=>Auth::id()
       ])->get();

       return view("current_expenses",['allExpenses' => $allExpenses]);
    }
}

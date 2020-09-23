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
        $request->validate([
            'travel' => 'required|min:1',
            'clothes' => 'required|min:1',
            'bills' => 'required|min:1',
            'other' => 'required|min:1',
        ]);

        Expenses::create([
            'user_id' => Auth::id(),
            'travel' => $request->get('travel'),
            'clothes' => $request->get('clothes'),
            'bills' => $request->get('bills'),
            'other' => $request->get('other')
        ]);

    }
}

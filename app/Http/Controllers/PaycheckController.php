<?php

namespace App\Http\Controllers;

use App\Models\Paycheck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaycheckController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

   public function addPaycheck()
   {
        return view('paycheck');
   }

   public function savePaycheck(Request $request)
   {
       $request->validate([
           'paycheck' => 'required|min:3',
           'currency' => 'required|min:2'
       ]);

       Paycheck::create([
           'paycheck' => $request->get('paycheck'),
           'currency' => $request->get('currency'),
           'user_id' => Auth::id()
       ]);

       return redirect('/');
   }
}

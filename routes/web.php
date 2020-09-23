<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});
Route::get('/add-paycheck', [\App\Http\Controllers\PaycheckController::class, 'addPaycheck'])->name('add_paycheck');
Route::get('/expenses',[\App\Http\Controllers\ExpensesController::class, 'expenses'] )->name('expenses');

Route::post('/savePaycheck',[\App\Http\Controllers\PaycheckController::class,'savePaycheck'])->name('save_paycheck');
Route::post('/savexpenses',  [\App\Http\Controllers\ExpensesController::class, 'saveExpenses'])->name('save_expenses');

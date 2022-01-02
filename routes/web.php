<?php

use App\Http\Controllers\IncomeexpenseController;
use Illuminate\Support\Facades\Route;
// use App\Models\User;

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

Route::get('/income/all', [IncomeexpenseController::class, 'Allincome'])->name('all.income');
Route::post('/income/add', [IncomeexpenseController::class, 'Add'])->name('store.income');
Route::get('/income/edit/{id}', [IncomeexpenseController::class, 'Edit']);
Route::post('/income/update/{id}', [IncomeexpenseController::class, 'Update']);
Route::get('/pdelete/income/{id}', [IncomeexpenseController::class, 'Pdelete']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    return view('dashboard');
})->name('dashboard');

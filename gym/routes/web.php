<?php

use App\Http\Controllers\MemberController;
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
    return view('index');
});


Route::middleware('auth')->group(function () {

    Route::get('/members', [MemberController::class, 'edit'])->name('members.edit');
    Route::patch('/members', [MemberController::class, 'show'])->name('members.show');
    Route::delete('/members', [MemberController::class, 'destroy'])->name('members.destroy');
});


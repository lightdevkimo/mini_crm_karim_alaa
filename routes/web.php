<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
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



Route::group(['middleware'=>['auth','isAdmin']], function () {

    Route::resource('users', UserController::class)->only(['index','store','create']);

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('customers/{id}/assign',[CustomerController::class,'customers_assign'])->name('customers.assign');
Route::resource('customers',CustomerController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

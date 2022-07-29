<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClassController;

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

Route::get('/home', function(){
    return view('home');
})->middleware('auth')->name('home');

/**
 * Class Route
 */

 Route::get('/class', [ClassController::class, 'index'])->name('class.index');
 Route::get('/class/create', [ClassController::class, 'create'])->name('class.create');
 Route::post('/class/create', [ClassController::class, 'store'])->name('class.store');
 Route::get('/class/delete/{id}', [ClassController::class, 'delete'])->name('class.delete');
 Route::get('/class/edit/{id}', [ClassController::class, 'edit'])->name('class.edit');
 Route::post('/class/update/{id}', [ClassController::class, 'update'])->name('class.update');
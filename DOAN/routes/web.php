<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [PageController::class, 'index'])->name('monannoibat');
Route::get('/restaurant/{id}', [PageController::class, 'getRestaurant'])->name('getrestaurant');
Route::get('/Delicious/{id}', [PageController::class, 'getDeliciousFood'])->name('getdeliciousfood');
Route::get('/city/{id}', [PageController::class, 'getCity'])->name('getcity');
Route::post('/addevaluate/{id}',[PageController::class, 'addEvaluete'])->name('addevaluete');
Route::get('/Citys',[PageController::class , 'getCitys']);
Route::post('/SearchCity', [PageController::class , 'searchCity'])->name('searchcity');
Route::post('/SearchCity/{id}', [PageController::class , 'searchDishCity'])->name('searchdishcity');
Route::get('/Dishs',[PageController::class,'getDishs'])->name('getdish');
Route::get('/Map',[PageController::class,'getmap'])->name('getmap');
Route::get('/ConTact',[PageController::class, 'getContact'])->name('getcontact');
Route::post('/Search', [PageController::class , 'postSearch'])->name('search');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionaireController;

/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sondage', [App\Http\Controllers\QuestionaireController::class, 'sondage'])->name('sondage');

// Route::get('/admin/products', [ProductController::class, 'adminIndex'])->name('admin');



/******************************************** Route Admin ****************************************************/
// page dashboard
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'statistic'])->name('home');

Route::get('/question', [App\Http\Controllers\HomeController::class, 'questions'])->name('question');

Route::get('/answers', [App\Http\Controllers\HomeController::class, 'answers'])->name('answers');



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

// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/statistic', [App\Http\Controllers\QuestionaireController::class, 'statistic'])->name('statistic');

Route::get('/answers', [App\Http\Controllers\HomeController::class, 'answers'])->name('answers');



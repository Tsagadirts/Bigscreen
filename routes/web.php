<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartJsController;
use App\Http\Controllers\QuestionaireController;
use App\Http\Controllers\HomeController;


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

Route::get('/sondage', [QuestionaireController::class, 'sondage'])->name('sondage');

Route::post('/message',[QuestionaireController::class, 'message'])->name('message');

Route::get('/result/{token}', [QuestionaireController::class, 'result'])->name('result');
// route page admin 
// Route::get('/admin/products', [ProductController::class, 'adminIndex'])->name('admin');



/******************************************** Route Admin ****************************************************/
// page dashboard

// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth'])->name('home');

Auth::routes();



Route::get('/statistic', [ChartJsController::class, 'statistic'])->name('statistic');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/statistic', [QuestionaireController::class, 'statistic'])->name('statistic');

Route::get('/answers', [HomeController::class, 'answers'])->name('answers');



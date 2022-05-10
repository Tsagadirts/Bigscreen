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

Route::get('/sondage', [QuestionaireController::class, 'sondage'])->name('sondage');

Route::post('/message',[QuestionaireController::class, 'message'])->name('message');

Route::get('/result/{token}', [QuestionaireController::class, 'result'])->name('result');

/******************************************** Route Admin ****************************************************/

Auth::routes();

Route::get('/statistic', [ChartJsController::class, 'echart'])->name('statistic');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/questionaire', [ChartJsController::class, 'questions'])->name('form');

Route::get('/answer', [ChartJsController::class, 'answers'])->name('answer');




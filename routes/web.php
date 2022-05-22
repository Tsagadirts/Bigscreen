<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartJsController;
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

Route::get('/sondage', [QuestionaireController::class, 'sondage'])->name('sondage');

Route::post('/message',[QuestionaireController::class, 'message'])->name('message');

Route::get('/result/{token}', [QuestionaireController::class, 'result'])->name('result');

/******************************************** Route Admin ****************************************************/

Auth::routes();

Route::get('/home', [ChartJsController::class, 'charts'], function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/questionaire', [ChartJsController::class, 'questions'], function () {
    return view('questions');
})->middleware(['auth'])->name('form');

Route::get('/answer', [ChartJsController::class, 'answers'], function () {
    return view('answers');
})->middleware(['auth'])->name('answer');






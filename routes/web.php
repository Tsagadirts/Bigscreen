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

Route::get('/sondage', [App\Http\Controllers\QuestionaireController::class, 'sondage'])->name('sondage');
Route::get('/results', [QuestionaireController::class, 'results'])->name('results');
// route page admin 
// Route::get('/admin/products', [ProductController::class, 'adminIndex'])->name('admin');



/******************************************** Route Admin ****************************************************/
// page dashboard

// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth'])->name('home');

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/statistic', [QuestionaireController::class, 'statistic'])->name('statistic');

Route::get('/questionaire', [QuestionaireController::class, 'questions'])->name('form');

Route::get('/answer/{token}', [QuestionaireController::class, 'answers'])->name('answer');
// Route::post('/answers/add', [QuestionaireController::class, 'answers'])->name('answers');

// dd($va);
// route chart
// Route::get('/chart', [ChartController::class, 'index']);
// Route::get('/chart/chart', [ChartController::class, 'chart']);

// Route::get('/chart/add', [ChartController::class, 'create']);
// Route::post('chart/add', [ChartController::class, 'store']);

Route::get('chart', [ChartJSController::class, 'index']);



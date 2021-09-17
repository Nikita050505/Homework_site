<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|----------------------------------S----------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/redactDay-{id}', [MainController::class, 'actionRedactDay'])->name("editDay");

Route::get('/', [MainController::class, 'actionMainPage'])->name("goToMain");

Route::post('/redactDay-{id}', [MainController::class, 'actionSaveDay']);

Route::get('/addDay', [MainController::class, 'actionViewAddDay']) -> name("addDay");

Route::post('/addDay', [MainController::class, 'actionAddDay']);

Route::post('/deleteDay-{id}', [MainController::class, 'actionDeleteDay']);

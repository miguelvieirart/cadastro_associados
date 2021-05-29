<?php

use App\Http\Controllers\AssociadoController;
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

Route::redirect('/', '/associados', 301);

Route::resource('/associados', AssociadoController::class);
Route::get('/associados/{associado}/delete', [AssociadoController::class, 'delete'])->name('associados.delete');

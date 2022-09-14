<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/type', [App\Http\Controllers\HomeController::class, 'type'])->name('type');
Route::get('/section', [App\Http\Controllers\HomeController::class, 'section'])->name('section');
Route::get('/garage', [App\Http\Controllers\HomeController::class, 'garage'])->name('garage');

Route::get('/mobiles', [App\Http\Controllers\HomeController::class, 'mobile'])->name('mobile');
Route::get('/addmobiles', [App\Http\Controllers\HomeController::class, 'addmobile'])->name('addmobile');
Route::get('/modifymobile/{ids}', [App\Http\Controllers\HomeController::class, 'modifymobile'])->name('modifymobile');


Route::get('/entretien', [App\Http\Controllers\HomeController::class, 'entretien'])->name('entretien');
Route::get('/addentretien', [App\Http\Controllers\HomeController::class, 'addentretien'])->name('addentretien');
Route::get('/modifyentretien/{ids}', [App\Http\Controllers\HomeController::class, 'modifyentretien'])->name('modifyentretien');

Route::get('/prelevement', [App\Http\Controllers\HomeController::class, 'prelevement'])->name('entretien');
Route::get('/addprelevement', [App\Http\Controllers\HomeController::class, 'addprelevement'])->name('addprelevement');
Route::get('/modifyprelevement/{ids}', [App\Http\Controllers\HomeController::class, 'modifyprelevement'])->name('modifyprelevement');

Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user');


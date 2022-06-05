<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route Categories
// Route::group(['prefix' => 'categorie'], function () {
//     Route::get('/', [CategorieController::class, 'index'])->name('categorie');
//     Route::get('/{categorie}', [CategorieController::class, 'show'])->name('categorie.show');
//     Route::get('/create', [CategorieController::class, 'create'])->name('categorie.create');
//     Route::post('/store', [CategorieController::class, 'store'])->name('categorie.store');
//     Route::get('/edit/{categorie}', [CategorieController::class, 'edit'])->name('categorie.edit');
//     Route::put('/update/{categorie}', [CategorieController::class, 'update'])->name('categorie.update');
//     Route::delete('/destroy/{categorie}', [CategorieController::class, 'destroy'])->name('categorie.destroy');
// });
Route::resource('categorie', CategorieController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

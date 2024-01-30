<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Product', [ProductController::class, 'ProductView'])->name('ProductView');
Route::get('/NewProduct', [ProductController::class, 'NewProductView'])->name('NewProduct');
Route::get('/ViewProductView/{id}', [ProductController::class, 'ViewProductView'])->name('ViewProductView');
Route::get('/deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');

Route::post('/NewProduct', [ProductController::class, 'NewProduct'])->name('NewProduct');
Route::post('/updateProduct', [ProductController::class, 'updateProduct'])->name('updateProduct');
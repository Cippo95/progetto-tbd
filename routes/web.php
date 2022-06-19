<?php

use Illuminate\Support\Facades\Route;
// /students/{student}
use App\Http\Controllers\StudentController;
// same as students but for other tables
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\StudentBorrowController;

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
// resource used for CRUD default routes
Route::resource('students', StudentController::class);
Route::resource('borrows', BorrowController::class);
Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);
Route::resource('genres', GenreController::class);
Route::get('/students/{student}/borrows', [StudentBorrowController::class, 'index']);

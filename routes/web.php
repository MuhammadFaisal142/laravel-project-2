<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
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
// Route::get('/',[UserController::class, 'showUser'])->name('home');
// Route::post('/add',[UserController::class, 'addUsers'])->name('addUser');

// Route::post('/update/{id}',[UserController::class, 'updateUser'])->name('update.user');

// Route::get('/updatepage/{id}',[UserController::class, 'updatepage'])->name('update.page');
// Route::get('/delete/{id}',[UserController::class, 'deletUser'])->name('view.delete');
// Route::get('/singleuser/{id}', [UserController::class, 'singleUser'])->name('view.user');


// Route::view('newuser', '/adduser');

Route::get('/', [StudentController::class, 'showStudents']);

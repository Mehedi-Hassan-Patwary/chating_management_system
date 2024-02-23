<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FiverrController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashbordController;

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

Route::get('/home',[UserController::class,'index'])->name('home');


Route::get('/about', [AboutController::class,'index'])->name('about');


Route::get('/fiverr', [FiverrController::class,'index'])->name('fiverr');


Route::get('/login', [LoginController::class,'index'])->name('login');

Route::get('/login', [LoginController::class,'index'])->name('login');

Route::get('/dashbord', [DashbordController::class,'index'])->name('dashbord');


Route::get('/registration', [RegistrationController::class,'index'])->name('registration');
Route::post('/register', [RegistrationController::class,'register'])->name('register');




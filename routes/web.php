<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Livewire\Livewire;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],

    function () {

        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');


        Route::get('/home', function () {
            return view('layouts/home');
        })->name('home');



        // Route::get('/login', [HomeController::class, 'login_'])->name('login');
        
        // Route::get('/register', [HomeController::class, 'register_'])->name('register_');



        // Route::get('/login', function () {
        //     return view('auth.login');
        // });

        Route::group(['middleware' => ['auth']], function () {
            Route::resource('roles', RoleController::class);
            Route::resource('users', UserController::class);

        });



        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });

        require __DIR__ . '/auth.php';

        include 'follow_up.php';
        include 'absent.php';
        include 'leaving.php';
        include 'marks.php';
        include 'resources.php';
        include 'restore.php';
        include 'force_delete.php';
        include 'create-pages.php';
        include 'edit-pages.php';
        include 'display-pages.php';

    });

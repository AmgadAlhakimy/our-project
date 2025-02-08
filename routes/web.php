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

        // Redirect guests to login when they try to access home while not authenticated
//        Route::middleware('guest')->get('/login', function () {
//            return view('auth.login');
//        })->name('login');
        // These Routes (Only for Authenticated & Verified Users)
//        Route::group(['middleware' => ['auth']], function () {
    
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

        Route::get('/', [HomeController::class, 'show'])->name('main_page');


        Route::get('/home', function () {
            return view('layouts/home');
        })->name('home');

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');


        // profile
        Route::get('profile', [HomeController::class, 'profile'])->name('profile');




        // Route::get('/home', function () {
        //     return view('layouts/home');
        // })->name('home');
    


        // Route::get('/login', [HomeController::class, 'login_'])->name('login');
    
        // Route::get('/register', [HomeController::class, 'register_'])->name('register_');
    


        // Route::get('/login', function () {
        //     return view('auth.login');
        // });
    
        Route::group(['middleware' => ['auth']], function () {
            Route::resource('roles', RoleController::class);
            Route::resource('users', UserController::class);
            include 'follow_up.php';
            include 'absent.php';
            include 'leaving.php';
            include 'resources.php';
            include 'restore.php';
            include 'force_delete.php';
            include 'create-pages.php';
            include 'edit-pages.php';
            include 'display-pages.php';

        });


        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });


        require __DIR__ . '/auth.php';

    }
);

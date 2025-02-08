<?php

use App\Http\Controllers\ProfileController;
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

// routes/web.php

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],

    function () {

        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

        //These Routes (Only for Authenticated & Verified Users)
        Route::group(['middleware' => ['auth']], function () {

            Route::get('/home', function () {
                return view('layouts/home');
            })->name('home');

            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');

            include 'follow_up.php';
            include 'absent.php';
            include 'leaving.php';
            include 'resources.php';
            include 'restore.php';
            include 'force_delete.php';
            include 'create-pages.php';
            include 'edit-pages.php';
            include 'display-pages.php';


            Route::middleware('auth')->group(function () {
                Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
                Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
                Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
            });

        });

        require __DIR__ . '/auth.php';

    });

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/



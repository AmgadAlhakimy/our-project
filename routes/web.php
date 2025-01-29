<?php

use Illuminate\Support\Facades\Route;
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

        Route::get('/', function () {
            return view('layouts/home');
        });

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


/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

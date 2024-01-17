<?php


use Illuminate\Support\Facades\Route;
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

        Route::get('/', function () {
            return view('layouts/sidebar');
        });
//        Route::get('/', function () {
//            return view('welcome');
//        });

        Route::get('marks', function () {
            return view('marks/add');
        });

        Route::get('class-activities', function () {
            return view('academic_dep/relations/class-activities');
        });

//        Route::get('class-subjects', function () {
//            return view('academic_dep/relations/class-subjects');
//        });

        Route::get('class-teacher', function () {
            return view('academic_dep/relations/class-teacher');
        });

        Route::get('teacher-subjects', function () {
            return view('academic_dep/relations/teacher-subjects');
        });

        Route::get('relations-page', function () {
            return view('academic_dep/relations/relations-page');
        });

        require __DIR__.'/resources.php';
        require __DIR__.'/restore.php';
        require __DIR__.'/force_delete.php';
    }
);

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

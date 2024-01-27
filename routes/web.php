<?php


use App\Http\Controllers\EducationalLevelController;
use App\Http\Controllers\StudentController;
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
        require __DIR__.'/search.php';
        require __DIR__.'/resources.php';
        require __DIR__.'/restore.php';
        require __DIR__.'/force_delete.php';

<<<<<<< HEAD
        // testing
        Route::get('student_form', function () {
            return view('students_affairs/students/student_form_info');
        });
        // absence
        Route::get('absence', function () {
            return view('students_affairs/absence/absent_students');
        });
=======
        // a route to show more info about a student
        Route::get('students/more/{id}',
            [StudentController::class, 'more'])
            ->name('students.more');
>>>>>>> e0512e35d213e1b0b3210a25bbf1989e15944131
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

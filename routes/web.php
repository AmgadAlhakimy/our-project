<?php


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
        require __DIR__.'/extra.php';
        require __DIR__.'/search.php';
        require __DIR__.'/resources.php';
        require __DIR__.'/restore.php';
        require __DIR__.'/force_delete.php';



        // absence
        Route::get('school', function () {
            return view('teachers_affairs/daily/school-follow-up');
        });
        // nursery
        Route::get('nursery', function () {
            return view('teachers_affairs/daily/follow-up-nursery');
        });
        // nursery
        Route::get('children', function () {
            return view('teachers_affairs/daily/follow-up-children');
        });

        // absence
        Route::get('add_marks', function () {
            return view('teachers_affairs/marks/add');
        });
        // absence
        Route::get('absence_class', function () {
            return view('teachers_affairs/absence/absent_student_class');
        });

        // absence
        Route::get('absence', function () {
            return view('students_affairs/absence/absent_students');
        });

        // a route to show more info about a Student
        Route::get('students/more/{id}',
            [StudentController::class, 'more'])
            ->name('students.more');

            
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

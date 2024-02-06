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

        include 'follow_up.php';
        include 'marks.php';
        include 'search.php';
        include 'resources.php';
        include 'restore.php';
        include 'force_delete.php';


        Route::get('/classrooms/{id}',
            [StudentController::class, 'getClassrooms']);

        // absence
        Route::get('school', function () {
            return view('teachers_affairs/follow_up_students/school-follow-up');
        });
        // absence
        Route::get('students_view', function () {
            return view('teachers_affairs/follow_up_students/index_school_follow_up');
        });
        // nursery
        Route::get('nursery', function () {
            return view('teachers_affairs/follow_up_children/follow-up-nursery');
        });

        // nursery
        Route::get('children_view', function () {
            return view('teachers_affairs/follow_up_children/index_children_follow_up');
        });
        // all_students
        Route::get('all_children', function () {
            return view('teachers_affairs/follow_up_children/follow_up_all_children');
        });
        // index_absence
        Route::get('index_absence', function () {
            return view('teachers_affairs/absence/index_absent_children');
        });
        // nursery
        Route::get('children', function () {
            return view('teachers_affairs/follow_up_children/follow-up-children');
        });

        // absence
        Route::get('add_marks', function () {
            return view('teachers_affairs/marks/add');
        });
        // absence
        Route::get('absence_class', function () {
            return view('teachers_affairs/absence/absent_student_class');
        });
        // -----------------------
        // absence
        Route::get('student_info', function () {
            return view('parents/student_info');
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

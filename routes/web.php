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

        // -----------------
        // teacher_classes
        Route::get('teacher_classes', function () {
            return view('academic_dep/relationships/class-teatcher');
        });
        // dis_sub_teacher
        Route::get('dis_class_activity', function () {
            return view('academic_dep/relationships/display_relationships/display_class_activities');
        });
        // dis_class_teacher
        Route::get('dis_class_teacher', function () {
            return view('academic_dep/relationships/display_relationships/display_class-teatcher');
        });
        // dis_sub_class
        Route::get('dis_sub_class', function () {
            return view('academic_dep/relationships/display_relationships/display_subject_classrooms');
        });

        // dis_sub_teacher
        Route::get('dis_sub_teacher', function () {
            return view('academic_dep/relationships/display_relationships/display_teacher_subjects');
        });




        // index_absence
        Route::get('index_absence', function () {
            return view('teachers_affairs/absence/index_absent_children');
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

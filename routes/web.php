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
// ------------------- شؤون الطلاب ---------------------
        // صفحة اضافة طالب
        Route::get('student-info', function () {
            return view('students/create');
        });
        // استعراض الطلاب
        Route::get('students-info', function () {
            return view('students/student-info-table');
        });
        //  الطلاب الغائبين
        Route::get('absence', function () {
            return view('students/absence/absent_students');
        });
// --------------------------------------------------------
// ------------------- شؤون الموظفين ---------------------
//  اضافة مدرس
Route::get('add-teacher', function () {
    return view('emp_dep/add_teachers/create');
});
//  اضافة موظف
Route::get('add-emp', function () {
    return view('emp_dep/add_employees/create');
});
// --------------------------------------------------------
// ------------------- المدرسين---------------------
//  اضافة الدرجات
Route::get('add-marks', function () {
    return view('teatchers/marks/add');
});
//  دفتر متابعة روضة
Route::get('follow-up_nersory', function () {
    return view('teatchers/daily/children-follow-up');
});
//  دفتر متابعة مدرسة
Route::get('follow-up_school', function () {
    return view('teatchers/daily/school-follow-up');
});
//  دفتر متابعة مدرسة
Route::get('follow-up_schoo', function () {
    return view('teatchers/daily/student-list');
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

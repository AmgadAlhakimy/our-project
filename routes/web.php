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
        include 'marks.php';
        include 'search.php';
        include 'resources.php';
        include 'restore.php';
        include 'force_delete.php';
        include 'create-pages.php';
        include 'edit-pages.php';
        include 'display-pages.php';



//        Route::get('/classrooms/{educationalLevelId}', function ($educationalLevelId) {
//            $classrooms = Classroom::where('edu_id', $educationalLevelId)->get()->toArray();
//            return response()->json($classrooms);
//        });
//
//        // school
//        Route::get('school', function () {
//            return view('teachers-affairs/follow_up_students/school-follow-up');
//        });
//        // students_view
//        Route::get('students_view', function () {
//            return view('teachers-affairs/follow_up_students/index_school_follow_up');
//        });
//
//        // -----------------
//        // teacher_classes
//        Route::get('teacher_classes', function () {
//            return view('academic-dep/relationships/class-teatcher');
//        });
//
//        // index_absence
//        Route::get('index_absence', function () {
//            return view('teachers-affairs/absence/index_absent_children');
//        });
//
//
//        // add_marks
//        Route::get('add_marks', function () {
//            return view('teachers-affairs/marks/add');
//        });
//        // absence_class
//        Route::get('absence_class', function () {
//            return view('teachers-affairs/absence/absent_student_class');
//        });
//        //
//        Route::get('check_out', function () {
//            return view(view: 'teachers-affairs/check-out/creat_check_out');
//        });
//        // -----------------------
//        // student_info
//        Route::get('student_info', function () {
//            return view('parents/student_info');
//        });
//
//
//        // you have check on this code
//        // absence
//        Route::get('absence', function () {
//            return view('students-affairs/absence/absent_students');
//        });
//        // Distribution_of_powers.blade
//        Route::get('Distribution_of_powers', function () {
//            return view('layouts/powers/Distribution_of_powers');
//        });
//
//        // ========================
//        // control
//        // m_marks
//        Route::get('m_marks', function () {
//            return view('control/monthly/marks_of_month');
//        });
//        // all_m_marks
//        Route::get('all_m_marks', function () {
//            return view('control/monthly/all_marks_of_month');
//        });
//        // first_term_income
//        Route::get('first_term_income', function () {
//            return view('control/first_term/first_term_income');
//        });
//
//        // all_marks_of_first_term
//        Route::get('all_marks_of_first_term', function () {
//            return view('control/first_term/all_marks_of_first_term');
//        });
//
//        // a route to show more info about a CreateStudent
//        Route::get('students/more/{id}',
//            [StudentController::class, 'more'])
//            ->name('students.more');
//
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

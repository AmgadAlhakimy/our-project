<?php

use App\Http\Controllers\Student\StudentController;
use App\Livewire\AcademicDep\DisplayActivities;
use App\Livewire\AcademicDep\DisplayActivityClassrooms;
use App\Livewire\AcademicDep\DisplayClassrooms;
use App\Livewire\AcademicDep\DisplayClassSubjects;
use App\Livewire\AcademicDep\DisplayClassTeachers;
use App\Livewire\AcademicDep\DisplayEducationalLevels;
use App\Livewire\AcademicDep\DisplaySubjects;
use App\Livewire\AcademicDep\DisplaySubjectTeachers;
use App\Livewire\DisplayFollowUp;
use App\Livewire\DisplayFollowUpMonthly;
use App\Livewire\DisplayMajors;
use App\Livewire\DisplayTeachers;
use App\Livewire\FollowUpNoteBook;
use App\Livewire\StudentsAffairs\Parents\DisplayParents;
use App\Livewire\StudentsAffairs\Student\DisplayStudents;
use Illuminate\Support\Facades\Route;

Route::get('/activity-classrooms',DisplayActivityClassrooms::class)->name('display-activity-classrooms');
Route::get('/subject-teachers',DisplaySubjectTeachers::class)->name('display-subject-teachers');
Route::get('/class-subjects',DisplayClassSubjects::class)->name('display-class-subjects');
Route::get('/class-teachers',DisplayClassTeachers::class)->name('display-class-teachers');
Route::get('/classrooms',DisplayClassrooms::class)->name('display-classrooms');
Route::get('/activities',DisplayActivities::class)->name('display-activities');
Route::get('/levels',DisplayEducationalLevels::class)->name('display-levels');
Route::get('/subjects',DisplaySubjects::class)->name('display-subjects');
Route::get('/teachers',DisplayTeachers::class)->name('display-teachers');
Route::get('/students',DisplayStudents::class)->name('display-students');
Route::get('/majors',DisplayMajors::class)->name('display-majors');
Route::get('/parents',DisplayParents::class)->name('display-parents');
Route::get('/student/{id}',[StudentController::class,"more"])->name('student-more-info');
Route::get('/followup-children/{classroom_id}',DisplayFollowUp::class)
    ->name('follow_up_children-display');
Route::get('/display-followUpMonthly/{classroom_id}',DisplayFollowUpMonthly::class)
    ->name('display-followUpMonthly');
Route::get('/display-followUpNoteBook/{student_id}/{classroom_id}',FollowUpNoteBook::class)
    ->name('display-follow-up-notebook');

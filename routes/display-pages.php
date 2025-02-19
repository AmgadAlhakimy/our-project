<?php

use App\Http\Controllers\Student\StudentController;
use App\Livewire\Absent\AbsentSingleStudent;
use App\Livewire\AcademicDep\DisplayActivities;
use App\Livewire\AcademicDep\DisplayActivityClassrooms;
use App\Livewire\AcademicDep\DisplayClassrooms;
use App\Livewire\AcademicDep\DisplayClassSubjects;
use App\Livewire\AcademicDep\DisplayClassTeachers;
use App\Livewire\AcademicDep\DisplayEducationalLevels;
use App\Livewire\AcademicDep\DisplaySubjects;
use App\Livewire\AcademicDep\DisplaySubjectTeachers;
use App\Livewire\AcademicDep\DisplayTeachers;
use App\Livewire\FollowUp\DisplayFollowUp;
use App\Livewire\FollowUp\DisplayFollowUpMonthly;
use App\Livewire\FollowUp\FollowUpNoteBook;
use App\Livewire\Leaving\LeftSingleStudent;
use App\Livewire\Roles\DisplayRoles;
use App\Livewire\StudentPromotions;
use App\Livewire\StudentsAffairs\Parents\DisplayParents;
use App\Livewire\StudentsAffairs\Student\DisplayStudents;
use App\Livewire\Users\DisplayUsers;

Route::get('/display-followUpNoteBook/{student_id}',FollowUpNoteBook::class)->name('display-follow-up-notebook');
Route::get('/display-followUpMonthly/{classroom_id}',DisplayFollowUpMonthly::class)->name('display-followUpMonthly');
Route::get('/followup-children/{classroom_id}',DisplayFollowUp::class)->name('follow_up_children-display');
Route::get('/activity-classrooms',DisplayActivityClassrooms::class)->name('display-activity-classrooms');
Route::get('/subject-teachers',DisplaySubjectTeachers::class)->name('display-subject-teachers');
Route::get('/student-more-info/{id}',[StudentController::class,"more"])->name('student-more-info');
Route::get('/class-subjects',DisplayClassSubjects::class)->name('display-class-subjects');
Route::get('/class-teachers',DisplayClassTeachers::class)->name('display-class-teachers');
Route::get('/student/{classroom_id}',DisplayStudents::class)->name('display-students');
Route::get('/classrooms',DisplayClassrooms::class)->name('display-classrooms');
Route::get('/activities',DisplayActivities::class)->name('display-activities');
Route::get('/levels',DisplayEducationalLevels::class)->name('display-levels');
Route::get('/subjects',DisplaySubjects::class)->name('display-subjects');
Route::get('/teachers',DisplayTeachers::class)->name('display-teachers');

Route::get('/display-users', DisplayUsers::class)->name('display-users');
Route::get('/display-roles', DisplayRoles::class)->name('display-roles');
Route::get('/parents',DisplayParents::class)->name('display-parents');
Route::get('/parents/absent/child/{student_id}',AbsentSingleStudent::class)->name('absent-single-student');
Route::get('/parents/left/child/{student_id}',LeftSingleStudent::class)->name('left-single-student');
Route::get('/students/deportation/next-class',StudentPromotions::class)->name('promote-students');



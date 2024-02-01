<?php



use App\Http\Controllers\FollowUpChildController;
use App\Http\Controllers\FollowUpStudentController;
use App\Http\Controllers\MarkController;
use Illuminate\Support\Facades\Route;



Route::get('follow-up/showChildren/{id1}/{id2}',
    [FollowUpChildController::class, 'showChildren'])
    ->name('follow_up_children.showChildren');

Route::get('follow-up-student/createNote/{id}',
    [FollowUpStudentController::class, 'createNote'])
    ->name('follow_up_students.createNote');

Route::get('follow-up-child/createNote/{id}',
    [FollowUpChildController::class, 'createNote'])
    ->name('follow_up_children.createNote');

Route::get('marks/insertMarks/{id}',
    [MarkController::class, 'insertMarks'])
    ->name('marks.insertMarks');


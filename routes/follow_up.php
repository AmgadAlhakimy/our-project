<?php


use App\Http\Controllers\FollowUpChild\FollowUpChildController;
use App\Http\Controllers\FollowUpStudentController;
use Illuminate\Support\Facades\Route;


Route::get('follow-up/writingFollowUp/{classroom_id}',
    [FollowUpChildController::class, 'writingFollowUp'])
    ->name('follow_up_children.writingFollowUp');

Route::get('follow-up-student/createNote/{id}',
    [FollowUpStudentController::class, 'createNote'])
    ->name('follow_up_students.createNote');

Route::get('follow-up-child/createNote/{id}',
    [FollowUpChildController::class, 'createNote'])
    ->name('follow_up_children.createNote');

Route::get('follow-up-child/store/{id}',
    [FollowUpChildController::class, 'storeChild'])
    ->name('follow_up_children.storeChild');

Route::get('follow-up-child/storeAll/{classroom_id}',
    [FollowUpChildController::class, 'storeAll'])
    ->name('follow_up_children.storeAll');

Route::get('follow-up-children/display/{classroom_id}',
    [FollowUpChildController::class, 'displayAllChildren'])
    ->name('follow_up_children.displayAllChildren');


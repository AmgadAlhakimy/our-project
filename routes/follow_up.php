<?php


use App\Http\Controllers\FollowUpChildController;
use App\Http\Controllers\FollowUpStudentController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;




Route::get('follow-up/showChildren/{classroom_id}',
    [FollowUpChildController::class, 'showChildren'])
    ->name('follow_up_children.showChildren');

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

Route::get('follow-up-children/display',
    [FollowUpChildController::class, 'displayAllChildren'])
    ->name('follow_up_children.displayAllChildren');


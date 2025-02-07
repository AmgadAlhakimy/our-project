<?php

use App\Http\Controllers\FollowUpChild\FollowUpChildController;
//use Illuminate\Support\Facades\Route;


Route::get('follow-up/writingFollowUp/{classroom_id}',
    [FollowUpChildController::class, 'writingFollowUp'])
    ->name('follow_up_children.writingFollowUp');

Route::get('follow-up-children/storeAll/{classroom_id}',
    [FollowUpChildController::class, 'storeAll'])
    ->name('follow_up_children.storeAll');

Route::get('follow-up-children/editAllChildren/{classroom_id}',
    [FollowUpChildController::class, 'editAllChildren'])
    ->name('follow_up_children.editAllChildren');

Route::get('follow-up-children/editChild/{child_id}/{classroom_id}',
    [FollowUpChildController::class, 'editChild'])
    ->name('follow_up_children.editChild');



Route::get('follow-up-children/updateAllChildren/{classroom_id}',
    [FollowUpChildController::class, 'updateAllChildren'])
    ->name('follow_up_children.updateAllChildren');


    Route::get('follow-up-children/updateChild/{child_id}/{classroom_id}',
    [FollowUpChildController::class, 'updateChild'])
    ->name('follow_up_children.updateChild');








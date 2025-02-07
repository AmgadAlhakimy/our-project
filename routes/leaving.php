<?php


use App\Http\Controllers\LeavingController;
//use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth']], function () {

Route::get('newLeaving/{classroom_id}',
    [LeavingController::class, 'newLeaving'])
    ->name('leaving.newLeaving');

Route::get('storeLeaving/{classroom_id}',
    [LeavingController::class, 'storeLeaving'])
    ->name('leaving.storeLeaving');

Route::get('displayLeaving/{classroom_id}',
    [LeavingController::class, 'displayLeaving'])
    ->name('leaving.display');

Route::get('editLeaving/{classroom_id}',
    [LeavingController::class, 'editLeaving'])
    ->name('leaving.editLeaving');

Route::get('updateLeaving/{classroom_id}',
    [LeavingController::class, 'updateLeaving'])
    ->name('leaving.updateLeaving');
});

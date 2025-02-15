<?php


use App\Http\Controllers\AbsentController;
//use Illuminate\Support\Facades\Route;

Route::get('newPresenting/{classroom_id}',
    [AbsentController::class, 'newPresenting'])
    ->name('absent.newPresenting');

Route::get('storePresenting/{classroom_id}',
    [AbsentController::class, 'storeAbsent'])
    ->name('absent.storeAbsent');

Route::get('displayPresenting/{classroom_id}',
    [AbsentController::class, 'displayAbsent'])
    ->name('absent.display');

Route::get('editPresenting/{classroom_id}',
    [AbsentController::class, 'editAbsent'])
    ->name('absent.editAbsent');

Route::get('updatePresenting/{classroom_id}',
    [AbsentController::class, 'updateAbsent'])
    ->name('absent.updateAbsent');


Route::get('display-absent-monthly/{classroom_id}',
    [AbsentController::class, 'displayAbsentMonthly'])
    ->name('absent-monthly');



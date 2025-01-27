<?php


use App\Http\Controllers\AbsentController;
use Illuminate\Support\Facades\Route;

Route::get('newPresenting/{classroom_id}',
    [AbsentController::class, 'newPresenting'])
    ->name('absent.newPresenting');

Route::get('storePresenting/{classroom_id}',
    [AbsentController::class, 'storeAbsent'])
    ->name('absent.storeAbsent');

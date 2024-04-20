<?php


use App\Http\Controllers\MarkController;
use Illuminate\Support\Facades\Route;




Route::get('marks/insert/{id}',
    [MarkController::class, 'insert'])
    ->name('marks.insert');

Route::get('marks/modify/{id}',
    [MarkController::class, 'modify'])
    ->name('marks.modify');


<?php


use App\Http\Controllers\MarkController;
use Illuminate\Support\Facades\Route;




Route::get('marks/insertMarks/{id}',
    [MarkController::class, 'insertMarks'])
    ->name('marks.insertMarks');


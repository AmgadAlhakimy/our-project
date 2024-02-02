<?php



use App\Http\Controllers\FollowUpChildController;
use App\Http\Controllers\FollowUpStudentController;
use App\Http\Controllers\MarkController;
use Illuminate\Support\Facades\Route;




Route::get('marks/insertMarks/{id}',
    [MarkController::class, 'insertMarks'])
    ->name('marks.insertMarks');


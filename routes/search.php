<?php


use App\Http\Controllers\EducationalLevelController;
use Illuminate\Support\Facades\Route;



Route::get('educational_levels/search',
    [EducationalLevelController::class, 'search'])
    ->name('educational_levels.search');

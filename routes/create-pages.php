<?php

use App\Livewire\MyTest;
use App\Livewire\StudentsAffairs\CreateParents;
use App\Livewire\StudentsAffairs\CreateStudent;
use Illuminate\Support\Facades\Route;


Route::get('/CreateStudent',CreateStudent::class)->name('create-student');
Route::get('/CreateParents',CreateParents::class)->name('create-parents');
Route::get('/test',MyTest::class)->name('my-test');

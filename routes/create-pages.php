<?php

use App\Livewire\StudentsAffairs\Parents\CreateParents;
use App\Livewire\StudentsAffairs\Student\CreateStudent;
//use Illuminate\Support\Facades\Route;
use App\Livewire\Users\CreateUser;
use App\Livewire\Roles\CreateRole;


Route::get('/CreateStudent',CreateStudent::class)->name('create-student');
Route::get('/CreateParents',CreateParents::class)->name('create-parents');
Route::get('/CreateUser',CreateUser::class)->name('create-user');
Route::get('/CreateUser',CreateUser::class)->name('create-user');
Route::get('/CreateRole',CreateRole::class)->name('create-role');


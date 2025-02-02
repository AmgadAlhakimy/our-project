<?php


use App\Livewire\StudentsAffairs\Parents\EditParents;
use App\Livewire\StudentsAffairs\Student\EditStudent;
use Illuminate\Support\Facades\Route;
use App\Livewire\Users\EditUser;
use App\Livewire\Roles\EditRole;

Route::get('/EditParents/{id}',EditParents::class)->name('edit-parents');
Route::get('/EditStudent/{id}',EditStudent::class)->name('edit-student');
Route::get('/EditUser/{id}',EditUser::class)->name('edit-user');
Route::get('/EditRole/{id}',EditRole::class)->name('edit-role');

<?php


use App\Livewire\StudentsAffairs\Parents\EditParents;
use App\Livewire\StudentsAffairs\Student\EditStudent;
use Illuminate\Support\Facades\Route;

Route::get('/EditParents/{id}',EditParents::class)->name('edit-parents');
Route::get('/EditStudent/{id}',EditStudent::class)->name('edit-student');

<?php



use App\Livewire\StudentsAffairs\EditParents;
use Illuminate\Support\Facades\Route;

Route::get('/EditParents/{id}',EditParents::class)->name('edit-parents');

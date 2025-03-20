<?php

use App\Livewire\Admin\Create as AdminCreate;
use App\Livewire\Admin\Index as AdminIndex;
use App\Livewire\Aluno\Create;
use App\Livewire\Aluno\Dashboard\Dashboard;
use App\Livewire\Aluno\Edit;
use App\Livewire\Aluno\Index;
use App\Livewire\Auth\Login;
use App\Livewire\Professor\Create as ProfessorCreate;
use App\Livewire\Professor\Index as ProfessorIndex;
use Illuminate\Support\Facades\Route;

Route::get('/aluno/create', Create::class);
Route::get('/aluno/index', Index::class);

Route::get('/', Login::class)->name('login');

Route::get('/admin', function(){
    return 'login admin';
})->middleware('auth', 'role:admin')->name('admin.dashboard');

Route::get('/aluno/dashboard', Dashboard::class)->middleware('auth', 'role:aluno')->name('aluno.dashboard');
Route::get('editar', Edit::class)->middleware(['auth', 'role:aluno'])->name('aluno.edit');




Route::get('/professor', function(){
    return 'login professor';
})->middleware('auth', 'role:professor')->name('professor.edit');


Route::get('/professor/create', ProfessorCreate::class);
Route::get('/professor/index', ProfessorIndex::class);

Route::get('/admin/create', AdminCreate::class);
Route::get('/admin/index', AdminIndex::class);
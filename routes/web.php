<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Auth\Login;
use App\Livewire\Funcionario\Dashboard as FuncionarioDashboard;
use Illuminate\Support\Facades\Route;



Route::get('/', Login::class)->name('login');

Route::get('/admin/dashboard', Dashboard::class)->middleware(['auth','user_type:admin'])->name('admin.dashboard');


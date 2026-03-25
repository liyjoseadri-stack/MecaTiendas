<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    
    // --- RUTAS QUE PIDE TU NAVBAR ---
    
    // Dashboard Cliente (Este es el que te marcaba error)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard.cliente'); 

    // Dashboard Empleado
    Route::get('/empleado/dashboard', function () {
        return view('empleado');
    })->name('dashboard.empleado');

    // Dashboard Gerente
    Route::get('/gerente/dashboard', function () {
        return view('gerente');
    })->name('dashboard.gerente');

    // --- CRUD Y PERFIL ---
    Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Ruta extra para que el logo de Breeze no truene si busca 'dashboard' a secas
Route::get('/home', function() {
    return redirect()->route('dashboard.cliente');
})->name('dashboard');

require __DIR__.'/auth.php';
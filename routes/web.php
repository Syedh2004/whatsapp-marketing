<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    RoleController,
    UserController,
    ProductController,
    UsersController,
    IsActiveController,
    RolesController,
    WhatsappNumberController
};

Route::get('/is_active', [IsActiveController::class, 'index'])->name('is_active');

Auth::routes();
Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolesController::class);
    Route::resource('whatsapp-number', WhatsappNumberController::class);
    Route::get('users', [UsersController::class, 'index'])->name('users');
    Route::get('users/create', [UsersController::class, 'create'])->name('users.create');
    Route::get('users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
    Route::patch('users/update/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::get('users/destroy/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
    Route::post('users/store', [UsersController::class, 'store'])->name('users.store');
    Route::get('users/show/{id}', [UsersController::class, 'show'])->name('users.show');
    Route::resource('products', ProductController::class);
});


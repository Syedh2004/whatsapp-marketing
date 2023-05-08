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
    WhatsappNumberController,
    SendMessageController,
    APIKeyController
};

use App\Http\Controllers\MyController;

Route::get('/is_active', [IsActiveController::class, 'index'])->name('is_active');

Auth::routes();
Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');


Route::get('importExportView', [MyController::class, 'importExportView']);
Route::get('export', [MyController::class, 'export'])->name('export');
Route::post('import', [MyController::class, 'import'])->name('import');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolesController::class);

    Route::get('whatsapp-number', [WhatsappNumberController::class, 'index'])->name('whatsapp-number.index');
    Route::get('whatsapp-number/create', [WhatsappNumberController::class, 'create'])->name('whatsapp-number.create');
    Route::post('whatsapp-number/store', [WhatsappNumberController::class, 'store'])->name('whatsapp-number.store');
    Route::post('whatsapp-number/store', [WhatsappNumberController::class, 'store'])->name('whatsapp-number.store');
    Route::get('whatsapp-number/import', [WhatsappNumberController::class, 'import'])->name('whatsapp-number.import');
    Route::get('whatsapp-number/edit/{id}', [WhatsappNumberController::class, 'edit'])->name('whatsapp-number.edit');
    Route::patch('whatsapp-number/update/{id}', [WhatsappNumberController::class, 'update'])->name('whatsapp-number.update');
    Route::get('whatsapp-number/destroy/{id}', [WhatsappNumberController::class, 'destroy'])->name('whatsapp-number.destroy');
    Route::post('whatsapp-number/import-store', [WhatsappNumberController::class, 'importStore'])->name('whatsapp-number.import-store');

    Route::get('users', [UsersController::class, 'index'])->name('users');
    Route::get('users/create', [UsersController::class, 'create'])->name('users.create');
    Route::get('users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
    Route::patch('users/update/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::get('users/destroy/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
    Route::post('users/store', [UsersController::class, 'store'])->name('users.store');
    Route::get('users/show/{id}', [UsersController::class, 'show'])->name('users.show');
    Route::resource('products', ProductController::class);

    Route::get('send-message', [SendMessageController::class, 'index'])->name('send-message.index');
    Route::post('apikey/store', [APIKeyController::class, 'store'])->name('apikey.store');
    Route::get('apikey', [APIKeyController::class, 'index'])->name('apikey.index');
});


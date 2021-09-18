<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LoginAdminController;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Backend\TrashController;
use App\Http\Controllers\Frontend\LoginUserController;
use Illuminate\Support\Facades\Route;

// *** Admin route *** \\
Route::prefix('admin')->group(function () {

    // *** Login - Register Route *** \\
    Route::get('/login', [
        LoginAdminController::class,
        'showLoginForm'
    ])->name('admin.show_login_form');

    // Login
    Route::post('/login', [LoginAdminController::class, 'login'])->name('admin.handle_login');

    // Forgot Password
    Route::get('/forgot-password', [LoginAdminController::class, 'showFormEnterMail'])->name('admin.forgot_password');

    // Send to email
    Route::post('/forgot-password', [LoginAdminController::class, 'sendMailReset'])->name('admin.send_mail_reset');

    // Confirm reset
    Route::get('/confirm-reset/{token}', [LoginAdminController::class, 'confirmToken'])->name('admin.confirm_reset');

    // Show form enter new pass
    Route::get('/reset-password', [LoginAdminController::class, 'showFormReset'])->name('admin.reset_password');

    // Update password
    Route::post('/reset-password', [LoginAdminController::class, 'handleReset'])->name('admin.handle_reset-password');

    // Admin Middleware (Auth::guard('admin')
    Route::middleware(['admin'])->group(function () {

        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

        // Route Logout
        Route::get('/logout', [LoginAdminController::class, 'logout'])->name('admin.logout');

        // Categories
        Route::resource('categories', CategoryController::class);
        // Categories Trash
        Route::get('/trash/categories', [CategoryController::class, 'trash'])->name('categories.trash');
        Route::post('/trash/categories', [CategoryController::class, 'trashAction'])->name('categories.action');
        // Rooms
        Route::resource('rooms', RoomController::class)->where(['room', '[0-9]+']);

        // Rooms Trash
        Route::get('/trash/rooms', [RoomController::class, 'trash'])->name('rooms.trash')->where(['room', '[a-z]+']);
        Route::post('/trash/rooms', [RoomController::class, 'trashAction'])->name('rooms.action');
    });
});

// *** User route *** \\
// Show register form
Route::get('/register', [
    LoginUserController::class,
    'showRegisterForm'
])->name('user.show_register_form');

// Register
Route::post('/register', [LoginUserController::class, 'register'])->name('user.handle_register');

Route::get('/login', [
    LoginUserController::class,
    'showLoginForm'
])->name('user.show_login_form');

// Login
Route::post('/login', [LoginUserController::class, 'login'])->name('user.handle_login');

// Route Logout
Route::get('/logout', [LoginUserController::class, 'logout'])->name('user.logout');

Route::get('/', function () {
    return view('home');
})->name('home');
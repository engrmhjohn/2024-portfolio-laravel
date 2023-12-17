<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () { return view('backend.home.dashboard');})->name('dashboard');
});

Route::controller(AdminController::class)->prefix('/admin')->group(function () {
    Route::get('/role/{id}/{newRole}', 'role')->name('role');
    Route::get('/manage-admin', 'manageAdmin')->name('manage_admin');
    Route::get('/profile-admin', 'adminProfile')->name('profile_admin');
    Route::delete('/delete-admin/{id}', 'deleteAdmin')->name('delete_admin');
});

Route::get('/clear', function () {
    \Artisan::call('optimize:clear');
    return redirect()->back();
})->name('clear');

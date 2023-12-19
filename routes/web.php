<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CMSController;
use App\Http\Controllers\FrontViewController;


Route::controller(FrontViewController::class)->group(function () {
    Route::get('/', 'index')->name('/');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () { return view('backend.home.dashboard');})->name('dashboard');

    Route::controller(AdminController::class)->prefix('/admin')->group(function () {
        Route::get('/role/{id}/{newRole}', 'role')->name('role');
        Route::get('/manage-admin', 'manageAdmin')->name('manage_admin');
        Route::get('/profile-admin', 'adminProfile')->name('profile_admin');
        Route::delete('/delete-admin/{id}', 'deleteAdmin')->name('delete_admin');
    });

    Route::controller(CMSController::class)->prefix('/admin')->name('admin.')->group(function () {
        
    Route::get('/add-menu', 'addMenu')->name('add_menu');
    Route::post('/save-menu', 'saveMenu')->name('save_menu');
    Route::get('/manage-menu', 'manageMenu')->name('manage_menu');
    Route::get('/edit-menu/{id}', 'editMenu')->name('edit_menu');
    Route::post('/update-menu', 'updateMenu')->name('update_menu');

    Route::get('/add-footer', 'addFooter')->name('add_footer');
    Route::post('/save-footer', 'saveFooter')->name('save_footer');
    Route::get('/manage-footer', 'manageFooter')->name('manage_footer');
    Route::get('/edit-footer/{id}', 'editFooter')->name('edit_footer');
    Route::post('/update-footer', 'updateFooter')->name('update_footer');
    });
});

Route::get('/clear', function () {
    \Artisan::call('optimize:clear');
    return redirect()->back();
})->name('clear');

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin all route with admin group
Route::prefix('admin/')->namespace('App\Http\Controllers\Admin')->group(function(){

    // Admin login route 
    Route::match(['get', 'post'], 'login', 'Admin_controller@login');
    Route::group(['middleware'=>['admin']], function(){

        // Admin Dashboard route 
        Route::get('dashboard', 'Admin_controller@dashboard');

        // Update admin password route 
        Route::match(['get', 'post'], 'update_admin_password', 'Admin_controller@updateAdminPassword');

        // Check Admin password 
        Route::post('check-admin_password', 'Admin_controller@checkAdminPassword');

        // Update admin Details route 
        Route::match(['get', 'post'], 'update_admin_details', 'Admin_controller@updateAdminDetails');

        //Admin Logout
        Route::get('logout', 'Admin_controller@logout');

    });


});


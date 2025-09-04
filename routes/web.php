<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\HotelController;

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

require __DIR__.'/auth.php';

// Public 404 page
Route::get('/pages/error-404', fn () => view('pages.error-404'))->name('error.404');

// All dynamic routes require login
Route::middleware('auth')->group(function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
    Route::resource('hotels', HotelController::class);
});


Route::middleware(['auth','role:super_admin'])->group(function () {
    Route::get('/admin/users/create', [UserManagementController::class, 'create'])->name('users.create');
    Route::post('/admin/users', [UserManagementController::class, 'store'])->name('users.store');
});


// route also work like this
//  Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
//     Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
//     Route::get('{any}', [RoutingController::class, 'root'])->name('any');


// example to use the role in single route
// Route::get('/settings/system', [SettingsController::class, 'system'])
//     ->middleware(['auth', 'role:super_admin']);

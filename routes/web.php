<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\CityController;

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


Route::middleware(['auth','role:super_admin'])->group(function () {
    Route::get('/admin/users/index', [UserManagementController::class, 'index'])->name('users.index');
    Route::get('/admin/users/create', [UserManagementController::class, 'create'])->name('users.create');
    Route::post('/admin/users', [UserManagementController::class, 'store'])->name('users.store');

    Route::get('/admin/users/{user}/edit',    [UserManagementController::class, 'edit'])->name('users.edit');
    Route::put('/admin/users/{user}',         [UserManagementController::class, 'update'])->name('users.update');
    Route::delete('/admin/users/{user}',      [UserManagementController::class, 'destroy'])->name('users.destroy');

    // hotel
    Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
    Route::get('/hotels/datatable', [HotelController::class, 'datatable'])->name('hotels.datatable'); // JSON for Grid.js
    Route::get('/hotels/create', [HotelController::class, 'create'])->name('hotels.create');
    Route::get('/hotels/{hotel}/edit', [HotelController::class, 'edit'])->name('hotels.edit');
    Route::post('/hotels', [HotelController::class, 'store'])->name('hotels.store');
    Route::put('/hotels/{hotel}', [HotelController::class, 'update'])->name('hotels.update');
    Route::delete('/hotels/{hotel}', [HotelController::class, 'destroy'])->name('hotels.destroy');
    
});


// All dynamic routes require login
Route::middleware('auth')->group(function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    // Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
    Route::resource('hotels', HotelController::class);
});





Route::middleware(['auth','role:user'])->group(function () {
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
});
// get the cities according to the district
Route::get('/district/{id}/cities', [CityController::class, 'getCitiesByDistrict'])
    ->name('district.cities');

// route also work like this
//  Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
//     Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
//     Route::get('{any}', [RoutingController::class, 'root'])->name('any');


// example to use the role in single route
// Route::get('/settings/system', [SettingsController::class, 'system'])
//     ->middleware(['auth', 'role:super_admin']);

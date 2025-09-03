<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

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
Route::get('/pages/error-404', function () {
    return view('pages.error-404');
})->name('error.404');

// Auth-only dynamic pages
Route::middleware(['auth', 'role:super_admin'])->group(function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');

    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');

    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});

// Last resort (only hits if NO route matched)
Route::fallback(function () {
    return redirect()->route('error.404');
});



// example to use the role in single route
// Route::get('/settings/system', [SettingsController::class, 'system'])
//     ->middleware(['auth', 'role:super_admin']);

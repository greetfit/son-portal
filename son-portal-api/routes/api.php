<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
// use App\Http\Controllers\Admin\UserAdminController; // add later when created

// Public
Route::get('ping', fn () => response()->json(['ok' => true, 'time' => now()]));
Route::post('login', [AuthController::class, 'login']);
Route::get('posts',        [PostController::class, 'index']);
Route::get('posts/{post}', [PostController::class, 'show']);

// Authenticated
Route::middleware(['auth:sanctum','throttle:api'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('user', fn (Request $r) => $r->user());

    // posts C/U/D
    Route::apiResource('posts', PostController::class)->except(['index', 'show']);

    // Admin-only (enable after you add the controller + role middleware)
/*
    Route::middleware('role:super_admin')->group(function () {
        Route::post('admin/users', [UserAdminController::class, 'store']);
        Route::patch('admin/users/{user}/role', [UserAdminController::class, 'updateRole']);
    });
*/
});

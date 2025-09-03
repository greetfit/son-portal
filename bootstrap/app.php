<?php

// use App\Http\Middleware\CheckRole;
// use Illuminate\Foundation\Application;
// use Illuminate\Foundation\Configuration\Exceptions;
// use Illuminate\Foundation\Configuration\Middleware;

// return Application::configure(base_path())
//     ->withRouting(
//         web: __DIR__.'/../routes/web.php',
//         commands: __DIR__.'/../routes/console.php',
//         health: '/up',
//     )
//     ->withMiddleware(function (Middleware $middleware) {
//         // register your route middleware aliases here
//         $middleware->alias([
//             'role' => CheckRole::class,   // <-- add this line
//         ]);

//         // (optional) add to groups if you want it always on web/api:
//         // $middleware->appendToGroup('web', \App\Http\Middleware\SomeGlobal::class);
//     })
//     ->withExceptions(function (Exceptions $exceptions) {
//         //
//     })
//     ->create();



use App\Http\Middleware\CheckRole;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => CheckRole::class,   // 👈 role middleware alias
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();


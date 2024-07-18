<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: [
            __DIR__.'/../routes/main.php',
            __DIR__.'/../routes/user.php',
            __DIR__.'/../routes/admin.php',
        ],
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            'log' => \App\Http\Middleware\LogMiddleware::class,
            'active' => \App\Http\Middleware\ActiveMiddleware::class,
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
            'token' => \App\Http\Middleware\TokenMiddleware::class,
        ]);

        $middleware->append(\App\Http\Middleware\LogMiddleware::class);
        $middleware->preventRequestsDuringMaintenance(except: [
            'test*',
        ]);

        $middleware->throttleApi('api');

        //$middleware->web(['active']);

        //$middleware->api(['token']);

        //$middleware->redirectGuestsTo('/blog', '/up');
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

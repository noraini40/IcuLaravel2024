<?php

use App\Http\Middleware\LogMiddleware;
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
        $middleware->redirectGuestsTo(fn () => route('auth.signin'));
        $middleware->redirectUsersTo(fn () => route('feed'));
       
        $middleware->alias([
            'log-request' => LogMiddleware::class
        ]);
    })



    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

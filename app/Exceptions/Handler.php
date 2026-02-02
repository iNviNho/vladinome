<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    // these exceptions are reported but do not show up in the Error Tracking
    protected $dontReport = [];

    protected $levels = [];

    public function register(): void
    {
        // remove ModelNotFoundException from $internalDontReport array to have this exception reported
        $this->internalDontReport = array_diff($this->internalDontReport, []);
    }

}

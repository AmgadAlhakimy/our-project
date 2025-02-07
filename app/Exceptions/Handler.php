<?php

namespace App\Exceptions;

    use Spatie\Permission\Exceptions\UnauthorizedException;
    use Illuminate\Auth\Access\AuthorizationException;
    use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        // Handle Spatie Unauthorized Exception
        if ($exception instanceof UnauthorizedException) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Unauthorized.'], 403);
            }
            abort(403, 'You do not have permission to access this page.');
        }

        // Handle Laravel Authorization Exception
        if ($exception instanceof AuthorizationException) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Forbidden.'], 403);
            }
            abort(403, 'You are not allowed to perform this action.');
        }

        // Handle Authentication Exception
        if ($exception instanceof AuthenticationException) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Unauthenticated.'], 401);
            }
            return redirect()->route('login');
        }

        return parent::render($request, $exception);
    }

}

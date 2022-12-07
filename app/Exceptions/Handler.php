<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
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
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
    * Convert a validation exception into a JSON response.
    *
    * @param  Request  $request
    * @param ValidationException $exception
    * @return JsonResponse
    */
    protected function invalidJson($request, ValidationException $exception): JsonResponse
    {
        $rules = $exception->validator->getRules();
        foreach ($rules as $field => $validations) {
            $errors[$field] = [
                'isValid' => true,
                'error' => null
            ];
        }

        $validationErrors = $exception->errors();
        foreach ($validationErrors as $field => $message) {
            $errors[$field] = [
                'isValid' => is_null($message[0]),
                'error' => $message[0]
            ];
        }

        return new JsonResponse(['errors' => $errors], $exception->status);
    }
}

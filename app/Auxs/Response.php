<?php

namespace App\Auxs;

use Exception;
use Illuminate\Http\JsonResponse;

final class Response
{
    /**
     * @throws Exception
     */
    public static function successful(array $data, ?SuccessfulMessage $message = null, int $statusCode = 200): JsonResponse
    {
        if ($statusCode > 208) {
            throw new Exception("Status code out of range");
        }

        return Response::getResponse($data, $message, $statusCode);
    }

    /**
     * @throws Exception
     */
    public static function error(ErrorMessage $message = null, int $statusCode = 500): JsonResponse
    {
        if ($statusCode < 400) {
            throw new Exception("Status code out of range");
        }

        return Response::getResponse([], $message, $statusCode);
    }

    private static function getResponse(array $data, ?SuccessfulMessage $message, int $statusCode): JsonResponse
    {
        $objetMessage = $message ? ['message' => $message->toJson()] : [];
        $response = array_merge($data, $objetMessage);

        return response()->json($response, $statusCode);
    }
}

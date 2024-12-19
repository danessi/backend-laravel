<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class ApiTestControllerReact extends Controller
{
    public function test(): JsonResponse
    {
        return response()->json([
            'message' => 'Hello from the controller@@@@',
            'status' => 200
        ]);
    }
}

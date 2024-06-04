<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    /**
     * Creates a UserServuce instance
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Retrieves the query string from the incoming HTTP request.
     * Returns a JSON response containing the usernames.
     */
    public function searchUsernames(Request $request): JsonResponse
    {
        $query = $request->input('query');
        $usernames = $this->userService->searchUsernames($query);

        return response()->json($usernames)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    }
}

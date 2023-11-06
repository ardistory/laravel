<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie(): Response
    {
        return response("Set Cookie")
            ->cookie("ardiStory-UserId", "ardiputra")
            ->cookie("ardiStory-IsMember", "true");
    }

    public function getCookie(Request $request): JsonResponse
    {
        return response()
            ->json([
                "ardiStory-UserId" => $request->cookie("ardiStory-UserId", "guest"),
                "ardiStory-IsMember" => $request->cookie("ardiStory-IsMember", "false")
            ]);
    }

    public function clearCookie(): Response
    {
        return response("Clear Cookie")
            ->withoutCookie("ardiStory-UserId")
            ->withoutCookie("ardiStory-IsMember");
    }
}

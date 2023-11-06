<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ResponseController extends Controller
{
    public function responseText(Request $request): Response
    {
        return response("Ini responseText")
            ->withHeaders([
                'Author' => 'ardiStory',
            ]);
    }

    public function responseJson(): JsonResponse
    {
        $body = [
            'first' => 'ardi',
            'last' => 'putra'
        ];

        return response()
            ->json($body);
    }

    public function responseRenderFile(): BinaryFileResponse
    {
        return response()
            ->file(public_path("/storage/hasilUpload/pattern.png"));
    }

    public function responseDownloadFile(): BinaryFileResponse
    {
        return response()
            ->download(public_path("/storage/hasilUpload/pattern.png"));
    }
}

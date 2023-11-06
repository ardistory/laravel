<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function getUpload()
    {
        return response()->view('upload', [
            'title' => 'Test Upload GUI',
        ]);
    }
    public function uploadFile(Request $request): string
    {
        $picture = $request->file("picture");
        $picture->storePubliclyAs("hasilUpload", $picture->getClientOriginalName(), "public");

        return "Berhasil Upload : " . $picture->getClientOriginalName();
    }
}

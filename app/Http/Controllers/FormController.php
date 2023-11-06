<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FormController extends Controller
{
    public function form(): Response
    {
        return response()->view('form');
    }
    public function postForm(Request $request): Response
    {
        $pesan = $request->post('pesan');

        return response($pesan);
    }
}

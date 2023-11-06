<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CekHeaderMiddlewareController extends Controller
{
    public function cekHeader(Request $request): Response
    {
        return response("Masuk!");
    }

    public function cekHeaderGroup(Request $request): Response
    {
        return response("Group!");
    }
}

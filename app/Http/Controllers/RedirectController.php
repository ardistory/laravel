<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RedirectController extends Controller
{
    public function redirectFrom(): RedirectResponse
    {
        return redirect("/redirect/to");
    }

    public function redirectTo(): string
    {
        return "Redirect To Here";
    }

    public function redirectName(): RedirectResponse
    {
        return redirect()->route('redirect.hello', [
            'a' => 'ardi',
            'b' => 'putra'
        ]);
    }

    public function redirectHello(string $namaDepan, string $namaBelakang): string
    {
        return "Hay {$namaDepan} {$namaBelakang}";
    }

    public function redirectAction(): RedirectResponse
    {
        return redirect()->action([RedirectController::class, 'redirectHello'], [
            'a' => 'ardi',
            'b' => 'putra'
        ]);
    }

    public function redirectAway(): RedirectResponse
    {
        return redirect()->away('http://ardistory.us.to');
    }
}

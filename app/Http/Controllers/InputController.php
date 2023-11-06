<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function input(Request $request): string
    {
        $name = $request->input('name');

        return "Hello $name";
    }
    public function binding($param1, $param2)
    {
        return view('binding', [
            'param1' => $param1,
            'param2' => $param2
        ]);
    }

    public function allMethod(Request $request): string
    {
        return $request->path() . PHP_EOL .
            $request->url() . PHP_EOL .
            $request->fullUrl() . PHP_EOL .
            $request->method() . PHP_EOL .
            $request->isMethod('GET') . PHP_EOL;
    }

    public function validation(Request $request): string
    {
        if ($request->input('password') === 'ardi123') {
            return "Selamat datang!";
        } else {
            return "Password salah!";
        }
    }

    public function onlyInput(Request $request)
    {
        $dataInput = $request->only(['username', 'password']);

        return json_encode($dataInput);
    }

    public function exceptInput(Request $request)
    {
        $dataInput = $request->except(['admin']);

        return json_encode($dataInput);
    }

    public function mergeInput(Request $request)
    {
        $request->mergeIfMissing(['ardi' => 'ganteng']);

        $result = $request->input();

        return json_encode($result);
    }
}

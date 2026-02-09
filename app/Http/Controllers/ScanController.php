<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScanController extends Controller
{
    public function scan(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $resultado = $num1 + $num2;

        return view('home', compact('resultado'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalController extends Controller
{
    public function calculadora()
    {
        return view('calculadora');
    }
    public function suma(Request $request)
    {
        $numb1 = (float)$request->input('numb1');
        $numb2 = (float)$request->input('numb2');

        $suma = $numb1 + $numb2;
        return view('suma',[
            'numb1' => $numb1,
            'numb2' => $numb2,
            'suma' => $suma
        ]);
    }

    public function resta(Request $request)
    {
        $numb1 = (float)$request->input('numb1');
        $numb2 = (float)$request->input('numb2');

        $resta = $numb1 - $numb2;
        return view('resta',[
            'numb1' => $numb1,
            'numb2' => $numb2,
            'resta' => $resta,
        ]);
    }

    public function multip(Request $request)
    {
        $numb1 = (float)$request->input('numb1');
        $numb2 = (float)$request->input('numb2');

        $multip = $numb1 * $numb2;
        return view('multip', [
            'numb1' => $numb1,
            'numb2' => $numb2,
            'multip' => $multip
        ]);
    }

    public function div(Request $request)
    {
        $numb1 = (float)$request->input('numb1');
        $numb2 = (float)$request->input('numb2');

        $div = $numb1 / $numb2;
        return view('div', [
            'numb1' => $numb1,
            'numb2' => $numb2,
            'div' => $div
        ]);
    }

    public function pow(Request $request)
    {
        $numb1 = (float)$request->input('numb1');
        $numb2 = (float)$request->input('numb2');

        $pow = pow($numb1, $numb2);
        return view('pow', [
            'numb1' => $numb1,
            'numb2' => $numb2,
            'pow' => $pow
        ]);
    }
}

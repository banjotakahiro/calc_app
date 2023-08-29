<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($value_1,$operator,$value_2)
    {
        $data = [
        'value_1' => $value_1,
        'operator' => $operator,
        'value_2' => $value_2
        ];

        return view('calc.calculate',$data);
    }
}

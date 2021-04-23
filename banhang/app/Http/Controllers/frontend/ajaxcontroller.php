<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ajaxcontroller extends Controller
{

    public function form()
    {
        return view('frontend.form');
    }
    public function form2()
    {

        return view('frontend.form2',);
    }
    public function smform(Request $request)
    {
        $so = rand();
        return view('frontend.form', ['d' => $so]);
    }
    public function smform2(Request $request)
    {
        //dd(1512312);
        //     // e;
        $so = rand();
        $s = str::random(10);
        $c = '#' . rand(100000, 999999);
        $data = [
            'so' => $so,
            'color' => $c,
            'str' => $s,

        ];
        //return $so;
        return response()->json($data, 200);
        // }
    }
    //
}
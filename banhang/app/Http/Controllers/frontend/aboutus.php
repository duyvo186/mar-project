<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutus extends Controller
{
    public function index()
    {
        $data =
            [
                'title' => 'Aboutu Us',
                'cart' => session('giohang')
            ];
        return view('frontend.about', $data);
        //
    }
}
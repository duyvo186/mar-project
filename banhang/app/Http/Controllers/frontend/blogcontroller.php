<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogcontroller extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Blog Cua Toi',
            'cart' => session('giohang')

        ];
        return view('frontend.blog', $data);
    }
    //
}
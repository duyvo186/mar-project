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
        $data = [
            // 'title' => 'Trang chủ',
            // // 'newproducts' => $dssp,
            // 'anqua' => $anqua,
            // 'bongmat' => $bongmat,
            // 'trongnuoc' => $trongnuoc,
            // 'noithat' => $noithat,
            // // 'route' => $this->route,
            // 'spmoi' => $spmoi,
            // 'news' => $tintuc,
            // 'spchitiet' => session('productsingle'),
            'cart' => session('giohang')


        ];
        return view('frontend.form', $data);
    }
    public function minicart()
    {
        $data = [
            // 'title' => 'Trang chủ',
            // // 'newproducts' => $dssp,
            // 'anqua' => $anqua,
            // 'bongmat' => $bongmat,
            // 'trongnuoc' => $trongnuoc,
            // 'noithat' => $noithat,
            // // 'route' => $this->route,
            // 'spmoi' => $spmoi,
            // 'news' => $tintuc,
            // 'spchitiet' => session('productsingle'),
            'cart' => session('giohang'),


        ];
        return view('frontend.mincart', $data);
    }
    public function form2()
    {
        $data = [

            'cart' => session('giohang'),
        ];
        return view('frontend.form2', $data);
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
            'cart' => session('giohang'),
        ];
        //return $so;
        // return response()->json($data, 200);
        // }
    }
    //
}
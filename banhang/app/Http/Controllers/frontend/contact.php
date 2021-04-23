<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\customer;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class contact extends Controller
{
    public function submit(request $request)
    {
        //dd($request->all());
        $request->validate([
            'ten' => 'required',
            'email' => 'bail|required|email',
            'sdt' => 'required',
        ]);

        $day = customer::create();
        // $day->mavach = $request->mavach;
        $day->ten = $request->ten;
        $day->email = $request->email;
        $day->trangthai = 1;
        //$day->diachi = $request->diachi;
        $day->sdt = $request->sdt;
        $day->subject = $request->subject;
        $day->ngaytao = now();
        $day->ngaycapnhat = now();

        if ($day->save());
        //huy session giohang
        return redirect()->route('f.home')->with(['day' => $day, 'msg' => 'Tạo đơn hàng thành công', 'type' => 'success']);
    }
    public function index()
    {
        $data =
            [
                'title' => 'Contact Us',
                'cart' => session('giohang'),
            ];
        return view('frontend.contact', $data);
    } //
}
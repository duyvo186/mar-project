<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class homecontroller extends Controller
{
    public function index()
    {
        $newproducts = Product::where('trangthai', 1)->orderBy('ngaycapnhat', 'DESC')->take(10)->get();
        $data = [
            'title' => 'Trang chủ',
            'cart' => session('giohang'),
            'newproducts' => $newproducts,

        ];
        return view('frontend.home', $data);
    }
    public function testmail()
    {
        $data = [
            'title' => 'Send Mail',
            'cart' => session('giohang')
        ];
        return view('frontend.sendmail', $data);
    }
    public function sendmail(Request $request)
    {
        //dd($request->all());
        //    Mail::send('Html.view', $data, function ($message) {
        //        $message->from('john@johndoe.com', 'John Doe');
        //        $message->sender('john@johndoe.com', 'John Doe');
        //        $message->to('john@johndoe.com', 'John Doe');
        //        $message->cc('john@johndoe.com', 'John Doe');
        //        $message->bcc('john@johndoe.com', 'John Doe');
        //        $message->replyTo('john@johndoe.com', 'John Doe');
        //        $message->subject('Subject');
        //        $message->priority(3);
        //        $message->attach('pathToFile');
        //    });

        Mail::raw($request->noidung, function ($message) use ($request) {
            //$message->from('john@johndoe.com', 'John Doe');
            //$message->sender('john@johndoe.com', 'John Doe');
            $message->to($request->email, $request->ten);
            //$message->cc('john@johndoe.com', 'John Doe');
            //$message->bcc('john@johndoe.com', 'John Doe');
            //$message->replyTo('john@johndoe.com', 'John Doe');
            $message->subject($request->tieude);
            //$message->priority(3);
            //$message->attach('pathToFile');
        });
        if (Mail::failures()) {
            return redirect()->back();
        }
    }
}
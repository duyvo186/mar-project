<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\news;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class homecontroller extends Controller
{
    public function index(request $request)
    {
        // $tongtest = 0;
        $anqua = Product::where('manhacungcap', '3')->orderBy('ngaycapnhat', 'DESC')->take(10)->get();
        $bongmat = Product::where('manhacungcap', '6')->orderBy('ngaycapnhat', 'DESC')->take(10)->get();
        $trongnuoc = Product::where('manhacungcap', '5')->orderBy('ngaycapnhat', 'DESC')->take(10)->get();
        $noithat = Product::where('manhacungcap', '1')->orderBy('ngaycapnhat', 'DESC')->take(10)->get();
        // $dssp = Product::where('trangthai', 1)->orderBy('ngaycapnhat', 'DESC')->take(10)->get();
        $tintuc = news::where('trangthai', '!=', -1)->orderBy('ma', 'DESC')->take(10)->get();;
        $newproducts = Product::where('trangthai', '!=', -1);
        // if (!session('giohang')) {
        //     return redirect()->route('f.home');
        // }
        if ($request->key) {
            $key = $request->key;
            // $bongmat = $bongmat->where('ten', 'like', "%$key%");
            // $anqua = $->where('ten', 'like', "%$key%");
            // $trongnuoc = $bongmat->where('ten', 'like', "%$key%");
            // $noithat = $bongmat->where('ten', 'like', "%$key%");
            $newproducts = $newproducts->where('ten', 'like', "%$key%");
        }
        $newproducts = $newproducts->orderBy('ma', 'DESC')
            ->paginate(14); //nhieu


        $spmoi = Product::where('maloai', '15')->orderBy('ngaycapnhat', 'DESC')->take(5)->get();
        $datatimsp = [
            'title' => 'Trang chủ',
            // 'anqua' => $anqua,
            // 'bongmat' => $bongmat,
            // 'trongnuoc' => $trongnuoc,
            // 'noithat' => $noithat,
            'newproducts' => $newproducts,
            'cart' => session('giohang')
        ];
        // $soluongmua = 'soluongmua';
        // if ($soluongmua) {
        //     $tongtest += $soluongmua;
        // }
        $data = [
            // 'tongtest' => $tongtest,
            'title' => 'Trang chủ',
            // 'newproducts' => $dssp,
            'anqua' => $anqua,
            'bongmat' => $bongmat,
            'trongnuoc' => $trongnuoc,
            'noithat' => $noithat,
            // 'route' => $this->route,
            'spmoi' => $spmoi,
            'news' => $tintuc,
            'spchitiet' => session('productsingle'),
            'cart' => session('giohang')


        ];
        if ($request->key) {
            return view('frontend.timsp', $datatimsp);
        } else {
            return view('frontend.home', $data);
        }
    }

    // public function psingle($id)
    // {

    //     $item = Product::where('ma', $id)
    //         ->where('trangthai', '!=', '-1')->first();
    //     // session(['giohang' => null]);
    //     // session()->flush();
    //     // dd(session('giohang'));
    //     // dd($request->all());

    //     // cap nhat lai cai gio

    //     //dd($item->supplier);
    //     if (!$item)
    //         return redirect()->route($this->route . '.index')->with(['msg' => 'Không tìm thấy item', 'type' => 'danger']);
    //     $data = [
    //         'pagename' => 'Sửa sản phẩm',
    //         'method' => 'POST',

    //         'item' => $item
    //     ];

    //     return view('frontend.productsingle', $data);
    // }
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

        Mail::send('frontend.myorder', [], function ($message) use ($request) {
            //$message->from('john@johndoe.com', 'John Doe');
            //$message->sender('john@johndoe.com', 'John Doe');
            $message->to($request->email, $request->ten);
            //$message->cc('john@johndoe.com', 'John Doe');
            //$message->bcc('john@johndoe.com',  'John Doe');
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
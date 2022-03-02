<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ordercontroller extends Controller
{
    public function submit(Request $request)
    {
        // dd($request->all());

        $cart = session('giohang');
        // $orders = session('orders');
        if (!$cart)
            return redirect()->route('f.home');
        $request->validate([
            'ten' => 'required',
            'email' => 'required',
            'sdt' => 'required',
        ]);
        $order = Order::create();
        $order->ten = $request->ten;
        $order->email = $request->email;
        $order->sdt = $request->sdt;
        $order->diachi = $request->diachi;
        $order->tennhan = $request->tennhan ? $request->tennhan : $request->ten;
        $order->emailnhan = $request->emailnhan ? $request->emailnhan : $request->email;
        $order->sdtnhan = $request->sdtnhan ? $request->sdtnhan : $request->sdt;
        $order->diachinhan = $request->diachinhan ? $request->diachinhan : $request->diachi;
        $order->ghichu = $request->ghichu;
        $order->pttt = $request->pttt;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order->ngaydat = now();
        $order->ngaytao = now();
        $order->ngaycapnhat = now();
        $order->trangthai = 1;
        $order->trangthaidonhang = 1;
        $order->code = time();
        if ($order->save()) {
            //ghi tiep bang chi tiet don hang
            $tongtien = 0;
            foreach ($cart as $id => $item) {
                $tongtien += $item['soluongmua'] * $item['gia'];
                OrderDetails::insert(
                    [
                        'masanpham' => $id,
                        'madonhang' => $order->ma,
                        'soluong' => $item['soluongmua'],
                        'gia' => $item['gia'],
                        'giamgia' => 0,
                        'trangthai' => 1,
                        'ngaytao' => now(),
                        'ngaycapnhat' => now()
                    ]
                );
            }


            $data = [
                'ten' => $order->ten,
                'email' => $order->email,
                'sdt' => $order->sdt,
                'code' => $order->code,
                'ngaydat' => $order->ngaydat,
                'diachi' => $order->diachi,
                // 'hinh' => $product->hinhdaidien,
                // 'mota' => $product->mota,
                // 'motachitiet' => $product->motachitiet,
                // 'soluonggoc' => $product->soluong,
                // 'soluongmua' => 1,
                // 'tongtest' => $tongtest,

            ];


            // session(['order' => $order]);
            //cap nhat lai
            $order->tongtien = $tongtien;
            $order->save();
            //huy session giohang
            Mail::send('frontend.myorder', ["data1" => $data], function ($message) use ($request) {
                //$message->from('john@johndoe.com', 'John Doe');
                //$message->sender('john@johndoe.com', 'John Doe');
                $message->to($request->email, $request->ten);
                //$message->cc('john@johndoe.com', 'John Doe');
                //$message->bcc('john@johndoe.com',  'John Doe');
                //$message->replyTo('john@johndoe.com', 'John Doe');
                $message->subject('Đặt hàng thành công');
                //$message->priority(3);
                //$message->attach('pathToFile');
            });
            if (Mail::failures()) {
                return redirect()->back();
            }
            session()->forget('giohang');


            return redirect()->route('checkout.done')->with(['order' => $order, 'msg' => 'Tạo đơn hàng thành công', 'type' => 'success']);
        } else {
            return redirect()->route('checkout.index')->with(['msg' => 'Tạo đơn hàng thất bại', 'type' => 'danger']);
        }
    }

    public function index()
    {

        if (!session('giohang')) {
            return redirect()->route('f.home');
        }
        $data = [
            'title' => 'Tiến hành đặt hàng',
            'cart' => session('giohang')
        ];
        return view('frontend.checkout', $data);
    }
    public function done()
    {
        $order = session('order');
        if (!$order) {
            return redirect()->route('f.home');
        }
        $data = [
            'title' => 'Hoàn tất đơn hàng',
            'order' => $order,
            'cart' => session('giohang')
        ];
        return view('frontend.done', $data);
    }
}
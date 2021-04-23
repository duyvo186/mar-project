<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use Illuminate\Http\Request;

class ordercontroller extends Controller
{
    public function submit(Request $request)
    {
        // dd($request->all());

        $cart = session('giohang');
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
            //cap nhat lai
            $order->tongtien = $tongtien;
            $order->save();
            //huy session giohang
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
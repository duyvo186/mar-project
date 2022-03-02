<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class giohangcontroller extends Controller
{



    public function addtocart(Request $request)
    {

        if (!$request->id)
            return redirect()->route('f.home');
        $product = Product::where(['ma' => $request->id, 'trangthai' => 1])->first();
        if (!$product)
            return redirect()->route('f.home');
        if ($product->soluong <= 0)
            return redirect()->route('f.home');
        // add vao gio hang
        $giohang = session('giohang');
        if (isset($giohang[$product->ma])) {
            $giohang[$product->ma]['soluongmua']++;
        } else {
            $giohang[$product->ma] = [
                'ma' => $product->ma,
                'ten' => $product->ten,
                'gia' => $product->gia,
                'hinh' => $product->hinhdaidien,
                'soluonggoc' => $product->soluong,
                'soluongmua' => 1
            ];
        }
        // cap nhat lai cai gio
        session(['giohang' => $giohang]);
        return redirect()->route('cart.index');
        //return response()->json($product, 200);

        //return response()->json($product, 200);
    }
    public function update(Request $request)
    {
        // dd($request->all());
        if (!is_array($request->soluongmua) || !session('giohang'))
            return redirect()->route('cart.index')->with(['msg' => 'Du lieu khong hop le', 'type' => 'danger']);
        $giohang = session('giohang');
        $msg = '';
        foreach ($request->soluongmua as $id => $soluong) {
            if ($giohang[$id]['soluonggoc'] < $soluong) {
                $msg .= $giohang[$id]['ten'] . ' khong du so luong ban<br>';
            } else {
                $giohang[$id]['soluongmua'] = $soluong;
            }
        }
        if ($msg)
            $type = 'danger';
        else {
            $msg = 'Cap nhat thanh cong';
            $type = 'success';
        }
        session(['giohang' => $giohang]);
        //return response()->json($giohang, 200);
        return redirect()->route('cart.index')->with(['type' => $type, 'msg' => $type]);
    }
    public function delitem($id)
    {
        $giohang = session('giohang');
        if (isset($giohang[$id])) {
            unset($giohang[$id]);
        }
        // cap nhat lai cai gio
        session(['giohang' => $giohang]);
        return redirect()->route('cart.index')->with(['msg' => 'xoa thanh cong', 'type' => 'success']);
    }
    public function index()
    {
        // session(['giohang' => null]);
        // session()->flush();
        // // dd(session('giohang'));
        if (!session('giohang')) {
            return redirect()->route('f.home');
        }
        $data = [
            'title' => 'Giỏ hàng của bạn',
            'cart' => session('giohang')
        ];
        return view('frontend.cart', $data);
    }
}
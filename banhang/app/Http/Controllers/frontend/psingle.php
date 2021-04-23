<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class psingle extends Controller

{

    // public function edit($id)
    // {
    //     $item = Product::where('ma', $id)
    //         ->where('trangthai', '!=', '-1')->first();

    //     //dd($item->supplier);
    //     if (!$item)
    //         return redirect()->route($this->route . '.index')->with(['msg' => 'Không tìm thấy item', 'type' => 'danger']);
    //     $data =
    //         [
    //             'pagename' => 'Sửa sản phẩm',
    //             'route' => $this->route,
    //             'action' => route($this->route . '.update', $item->ma),
    //             'method' => 'PUT',
    //             'item' => $item
    //         ];
    //     return view('frontend.productsingle', $data);
    // }

    public function addtop(Request $request)
    {
        if (!$request->id)
            return redirect()->route('f.home');
        $product = Product::where(['ma' => $request->id, 'trangthai' => 1])->first();
        if (!$product)
            return redirect()->route('f.home');
        if ($product->soluong <= 0)
            return redirect()->route('f.home');
        //add vao gio hang
        $giohang = session('giohang');
        if (isset($giohang[$product->ma])) {
            $giohang[$product->ma];
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

        //cap nhat lai cai gio
        session(['giohang' => $giohang]);
        return redirect()->route('pg.index');
    }
    // public function addtocart(Request $request)
    // {
    //     if (!$request->id)
    //         return redirect()->route('f.home');
    //     $product = Product::where(['ma' => $request->id, 'trangthai' => 1])->first();
    //     if (!$product)
    //         return redirect()->route('f.home');
    //     if ($product->soluong <= 0)
    //         return redirect()->route('f.home');
    //     // add vao gio hang
    //     $giohang = session('giohang');
    //     if (isset($giohang[$product->ma])) {
    //         $giohang[$product->ma]['soluongmua']++;
    //     } else {
    //         $giohang[$product->ma] = [
    //             'ma' => $product->ma,
    //             'ten' => $product->ten,
    //             'gia' => $product->gia,
    //             'hinh' => $product->hinhdaidien,
    //             'soluonggoc' => $product->soluong,
    //             'soluongmua' => 1
    //         ];
    //     }
    //     // cap nhat lai cai gio
    //     session(['giohang' => $giohang]);
    //     return redirect()->route('cart.index');
    // }
    // public function update(Request $request)
    // {
    //     // dd($request->all());
    //     if (!is_array($request->soluongmua) || !session('giohang'))
    //         return redirect()->route('pg.index')->with(['msg' => 'Du lieu khong hop le', 'type' => 'danger']);
    //     $giohang = session('giohang');
    //     $msg = '';
    //     foreach ($request->soluongmua as $id => $soluong) {
    //         if ($giohang[$id]['soluonggoc'] < $soluong) {
    //             $msg .= $giohang[$id]['ten'] . ' khong du so luong ban<br>';
    //         } else {
    //             $giohang[$id]['soluongmua'] = $soluong;
    //         }
    //     }
    //     if ($msg)
    //         $type = 'danger';
    //     else {
    //         $msg = 'Cap nhat thanh cong';
    //         $type = 'success';
    //     }
    //     session(['giohang' => $giohang]);
    //     return redirect()->route('pg.index')->with(['msg' => $msg, 'type' => $type]);
    // }
    // public function delitem($id)
    // {
    //     $giohang = session('giohang');
    //     if (isset($giohang[$id])) {
    //         unset($giohang[$id]);
    //     }
    //     // cap nhat lai cai gio
    //     session(['giohang' => $giohang]);
    //     return redirect()->route('pg.index')->with(['msg' => 'xoa thanh cong', 'type' => 'success']);
    // }
    // public function add(Request $request)
    // {

    //     if (!$request->id)
    //         return redirect()->route('f.home');
    //     $products = Product::where(['ma' => $request->id, 'trangthai' => 1])->first();

    //     if (!$products)
    //         return redirect()->route('f.home');
    //     $dulieu = session('dulieu');
    //     if (isset($showdulieu[$products->ma])) {
    //         $dulieu[$products->ma];
    //     } else {
    //         $dulieu[$products->ma] = [
    //             'ma' => $products->ma,
    //             'ten' => $products->ten,
    //             'hinh' => $products->hinhdaidien
    //         ];
    //     }
    //     session(['dulieu' => $dulieu]);
    //     return redirect()->route('pg.index');
    // }
    public function index()
    {

        // session(['giohang' => null]);
        // session()->flush();
        // dd(session('giohang'));
        // dd($request->all());

        // cap nhat lai cai gio
        if (!session('giohang')) {
            return redirect()->route('f.home');
        }

        $data = [
            'title' => 'Giỏ hàng của bạn',
            'cart' => session('giohang')
        ];

        return view('frontend.productsingle', $data);
    }

    //

}
<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Iterator;
use IteratorAggregate;
use Traversable;

class psingle extends Controller

{
    var $route = 'psingle';
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
        $item = Product::where(['ma' => $request->id, 'trangthai' => 1])->first();
        if (!$item)
            return redirect()->route('f.home');
        if ($item->soluong <= 0)
            return redirect()->route('f.home');
        // add vao gio hang
        $productsingle = session('productsingle');
        if (isset($productsingle[$item->ma])) {
            $productsingle[$item->ma]['soluongmua']++;
        } else {
            $productsingle[$item->ma] = [
                'ma' => $item->ma,
                'ten' => $item->ten,
                'gia' => $item->gia,
                'hinh' => $item->hinhdaidien,
                'mota' => $item->mota,
                'motachitiet' => $item->motachitiet,
                'soluonggoc' => $item->soluong,
                'soluongmua' => 1

            ];
        }
        //dd($item->supplier);


        session(['productsingle' => $productsingle]);
        return redirect()->route('pg.index');
    }
    // public function addtocart(Request $request)
    // {
    //     if (!$request->id)
    //         return redirect()->route('f.home');
    //     $item = Product::where(['ma' => $request->id, 'trangthai' => 1])->first();
    //     if (!$item)
    //         return redirect()->route('f.home');
    //     if ($item->soluong <= 0)
    //         return redirect()->route('f.home');
    //     // add vao gio hang
    //     $giohang = session('giohang');
    //     if (isset($giohang[$item->ma])) {
    //         $giohang[$item->ma]['soluongmua']++;
    //     } else {
    //         $giohang[$item->ma] = [
    //             'ma' => $item->ma,
    //             'ten' => $item->ten,
    //             'gia' => $item->gia,
    //             'hinh' => $item->hinhdaidien,
    //             'soluonggoc' => $item->soluong,
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
    //     $items = Product::where(['ma' => $request->id, 'trangthai' => 1])->first();

    //     if (!$items)
    //         return redirect()->route('f.home');
    //     $dulieu = session('dulieu');
    //     if (isset($showdulieu[$items->ma])) {
    //         $dulieu[$items->ma];
    //     } else {
    //         $dulieu[$items->ma] = [
    //             'ma' => $items->ma,
    //             'ten' => $items->ten,
    //             'hinh' => $items->hinhdaidien
    //         ];
    //     }
    //     session(['dulieu' => $dulieu]);
    //     return redirect()->route('pg.index');
    // }
    public function themspchitiet()
    {

        //dd($item->supplier);
        if (!session('productsingle')) {
            return redirect()->route('f.home');
        }
        $data =
            [
                'pagename' => 'Sản Phẩm Chi Tiết',
                'spchitiet' => session('productsingle'),
                'cart' => session('giohang')
            ];
        return view('frontend.productsingle', $data);
    }
    function is_iterable($cart)
    {
        return $cart !== null
            && (is_array($cart)
                || $cart instanceof Traversable
                || $cart instanceof Iterator
                || $cart instanceof IteratorAggregate
            );
    }
    //

}
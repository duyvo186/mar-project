<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class productcontroller extends Controller
{
    var $route = 'product';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
    }
    public function index(Request $request)
    {
        // if(!Auth::guard('backend')->check())
        //  return false;// redirect()->route('b.login')->with(['msg'=>'vui lòng đăng nhập','type'=>'warning']);
        $dssp =  Product::where('trangthai', '!=', -1);
        // dd($dssp);
        //DB::table('sanpham')
        //->where('trangthai','!=','-1');
        // ->where('tencot','toantu','giatri')
        //xu ly tim kiem
        if ($request->key) {
            $key = $request->key;
            $dssp = $dssp->where('ten', 'like', "%$key%");
        }

        $dssp = $dssp->orderBy('ma', 'DESC')
            ->paginate(14); //nhieu
        /// first();
        //dd($dssp->total());
        $data =
            [
                'collection' => $dssp,
                'pagename' => 'Danh sách sản phẩm',
                'route' => $this->route
            ];
        return view('backend.products.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ncc =  Supplier::where('trangthai', 1)->get();
        $loai = Category::options();
        $data =
            [
                'pagename' => 'Thêm sản phẩm',
                'route' => $this->route,
                'action' => route($this->route . '.store'),
                'method' => 'POST',
                'ncc' => $ncc,
                'loai' => $loai
            ];
        return view('backend.products.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //  $arr =
        //kiem tra du lieu dau vao
        $request->validate([
            'hinhdaidien' => ['required'],
            'ten' => ['required', 'min:5', 'max:255'],
            'mavach' => ['required', 'min:5', 'max:20', 'unique:sanpham,mavach'],
        ], [
            //noi dung
            'hinhdaidien.required' => 'ban chua chon hinh dai dien',
            'ten.required' => 'ban chua nhap ten',
            'ten.min' => 'ten nho nhat 5 ky tu',
            'mavach.unique' => 'ma vach da dc su dung',
        ]);

        //code se chay qua day neu validate thanh cong nguoc lai tra ve loi va quay ve trang hồi nãy
        $item =  Product::create();
        $item->hinhdaidien = $request->hinhdaidien;
        $item->ten = $request->ten;
        $item->mavach = $request->mavach;
        $item->gia = $request->gia;
        $item->soluong = $request->soluong;
        $item->manhacungcap = $request->nhacungcap;
        $item->maloai = $request->loai;
        $item->mota = $request->mota;
        $item->motachitiet = $request->chitiet;
        $item->tieude = $request->tieude;
        $item->tukhoa = $request->tukhoa;
        $item->motatimkiem = $request->motatimkiem;
        $item->hinhchiase = $request->hinhshare;
        $item->tenrutgon = $request->tenrutgon;
        $item->trangthai = $request->trangthai;
        $item->ngaytao = now();
        $item->ngaycapnhat = now();
        //$item->save();// true false
        //DB::table('sanpham')->insert(
        //     [
        //         "hinhdaidien" => $request->hinhdaidien,
        //         "ten" => $request->ten,
        //         "mavach" => $request->mavach,
        //         "gia" => $request->gia,
        //         "soluong" => $request->soluong,
        //         "manhacungcap" =>$request->nhacungcap,
        //         "maloai" =>$request->loai,
        //         "mota" =>$request->mota,
        //         "motachitiet" =>$request->chitiet,
        //         "tieude" => $request->tieude,
        //         "tukhoa" => $request->tukhoa,
        //         "motatimkiem" => $request->motatimkiem,
        //         "hinhchiase" =>$request->hinhshare,
        //         "tenrutgon" => $request->tenrutgon,
        //         "trangthai" =>$request->trangthai,
        //         "ngaytao"=>now(),
        //         "ngaycapnhat"=>now(),
        //     ]
        // );
        if ($item->save())
            return redirect()->back()->with(['msg' => 'Thêm thành công', 'type' => 'success']);
        else
            return redirect()->back()->with(['msg' => 'Thêm thất bại', 'type' => 'danger']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ncc = Supplier::where('trangthai', 1)->get();
        $loai = Category::options();
        $item = Product::where('ma', $id)
            ->where('trangthai', '!=', '-1')->first();

        //dd($item->supplier);
        if (!$item)
            return redirect()->route($this->route . '.index')->with(['msg' => 'Không tìm thấy item', 'type' => 'danger']);
        $data =
            [
                'pagename' => 'Sửa sản phẩm',
                'route' => $this->route,
                'action' => route($this->route . '.update', $item->ma),
                'method' => 'PUT',
                'ncc' => $ncc,
                'loai' => $loai,
                'item' => $item
            ];
        return view('backend.products.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $item = Product::where('ma', $id)
            ->where('trangthai', '!=', '-1')->first();
        if (!$item)
            return redirect()->route($this->route . '.index')->with(['msg' => 'Không tìm thấy item', 'type' => 'danger']);
        $item->hinhdaidien = $request->hinhdaidien;
        $item->ten = $request->ten;
        $item->mavach = $request->mavach;
        $item->gia = $request->gia;
        $item->soluong = $request->soluong;
        $item->manhacungcap = $request->nhacungcap;
        $item->maloai = $request->loai;
        $item->mota = $request->mota;
        $item->motachitiet = $request->chitiet;
        $item->tieude = $request->tieude;
        $item->tukhoa = $request->tukhoa;
        $item->motatimkiem = $request->motatimkiem;
        $item->hinhchiase = $request->hinhshare;
        $item->tenrutgon = $request->tenrutgon;
        $item->trangthai = $request->trangthai;
        $item->ngaycapnhat = now();
        // dd($item->ma);
        // DB::table('sanpham')->where('ma',$item->ma)->update(
        //     [
        //         "hinhdaidien" => $request->hinhdaidien,
        //         "ten" => $request->ten,
        //         "mavach" => $request->mavach,
        //         "gia" => $request->gia,
        //         "soluong" => $request->soluong,
        //         "manhacungcap" =>$request->nhacungcap,
        //         "maloai" =>$request->loai,
        //         "mota" =>$request->mota,
        //         "motachitiet" =>$request->chitiet,
        //         "tieude" => $request->tieude,
        //         "tukhoa" => $request->tukhoa,
        //         "motatimkiem" => $request->motatimkiem,
        //         "hinhchiase" =>$request->hinhshare,
        //         "tenrutgon" => $request->tenrutgon,
        //         "trangthai" =>$request->trangthai,
        //         "ngaycapnhat"=>now(),
        //     ]
        // );
        // dd(234);
        if ($item->save())
            return redirect()->back()->with(['msg' => 'Sửa thành công', 'type' => 'success']);
        else
            return redirect()->back()->with(['msg' => 'Sửa thất bại', 'type' => 'danger']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Product::where('ma', $id)
            ->where('trangthai', '!=', '-1')->first();
        if (!$item)
            return redirect()->route($this->route . '.index')->with(['msg' => 'Không tìm thấy item', 'type' => 'danger']);
        // dd($item->ma);
        // DB::table('sanpham')->where('ma',$item->ma)->update(
        //     [
        //         "trangthai" =>-1,
        //         "ngaycapnhat"=>now(),
        //     ]
        // );
        $item->trangthai = -1;
        $item->save();
        // dd(234);
        return redirect()->route($this->route . '.index')->with(['msg' => 'Xóa thành công', 'type' => 'success']);
    }
}
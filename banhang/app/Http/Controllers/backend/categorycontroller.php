<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categorycontroller extends Controller
{
    var $route = "category";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $dssp = Category::where('trangthai', '!=', -1);
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
            ->paginate(10); //nhieu
        /// first();
        //dd($dssp->total());
        $data =
            [
                'collection' => $dssp,
                'pagename' => 'Danh Sách Loại Cây',
                'route' => $this->route
            ];
        return view('backend.danhmucsp.list', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data =
            [
                'pagename' => 'Thêm Loại Sản Phẩm',
                'route' => $this->route,
                'action' => route($this->route . '.store'),
                'method' => 'POST'
            ];
        return view('backend.danhmucsp.form', $data);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $item =  Category::create();
        $item->ten = $request->ten;
        $item->mota = $request->mota;
        $item->icon = $request->icon;
        $item->macha = $request->macha;
        $item->tieude = $request->tieude;
        $item->tukhoa = $request->tukhoa;
        $item->motatimkiem = $request->motatimkiem;
        $item->hinhchiase = $request->hinhchiase;
        $item->tenrutgon = $request->tenrutgon;
        $item->trangthai = 1;
        $item->ngaytao = now();
        $item->ngaycapnhat = now();
        // $item->save(); // true false
        // DB::table('khachhang')->insert(
        //     [

        //         "ten" => $request->ten,

        //         "sdt" => $request->sdt,

        //         "email" => $request->email,


        //         "trangthai" => $request->trangthai,

        //     ]
        // );
        if ($item->save())
            return redirect()->back()->with(['msg' => 'Thêm thành công', 'type' => 'success']);
        else
            return redirect()->back()->with(['msg' => 'Thêm thất bại', 'type' => 'danger']);
        // }
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

        $item = Category::where('ma', $id)
            ->where('trangthai', '!=', '-1')->first();

        //dd($item->supplier);
        if (!$item)
            return redirect()->route($this->route . '.index')->with(['msg' => 'Không tìm thấy item', 'type' => 'danger']);
        $data =
            [
                'pagename' => 'Sửa loại sản phẩm',
                'route' => $this->route,
                'action' => route($this->route . '.update', $item->ma),
                'method' => 'PUT',

                'item' => $item
            ];
        return view('backend.danhmucsp.form', $data);
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

        $item = Category::where('ma', $id)
            ->where('trangthai', '!=', '-1')->first();
        if (!$item)
            return redirect()->route($this->route . '.index')->with(['msg' => 'Không tìm thấy item', 'type' => 'danger']);

        $item->ten = $request->ten;
        $item->mota = $request->mota;
        $item->icon = $request->icon;
        $item->macha = $request->macha;
        $item->tieude = $request->tieude;
        $item->tukhoa = $request->tukhoa;
        $item->motatimkiem = $request->motatimkiem;
        $item->hinhchiase = $request->hinhchiase;
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
        $item = Category::where('ma', $id)
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
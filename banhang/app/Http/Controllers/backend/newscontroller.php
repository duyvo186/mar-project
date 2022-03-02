<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class newscontroller extends Controller
{
    var $route = 'news';
    public function index(request $request)
    {
        $dssp = news::where('trangthai', '!=', -1);
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
        $data = [
            'pagename' => 'Tin Tức',
            'collection' => $dssp,
            'route' => $this->route

        ];
        return view('backend.news.list', $data);
    }
    public function create()
    {

        $data =
            [
                'pagename' => 'Thêm tin tức',
                'route' => $this->route,
                'action' => route($this->route . '.store'),
                'method' => 'POST',

            ];
        return view('backend.news.form', $data);
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


        ], [
            //noi dung
            'hinhdaidien.required' => 'ban chua chon hinh dai dien',


        ]);

        //code se chay qua day neu validate thanh cong nguoc lai tra ve loi va quay ve trang hồi nãy
        $item =  news::create();
        $item->hinhdaidien = $request->hinhdaidien;
        $item->tieude = $request->tieude;

        $item->mota = $request->mota;

        $item->trangthai = $request->trangthai;

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

        $item = news::where('ma', $id)
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

                'item' => $item
            ];
        return view('backend.news.form', $data);
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

        $item = news::where('ma', $id)
            ->where('trangthai', '!=', '-1')->first();
        if (!$item)
            return redirect()->route($this->route . '.index')->with(['msg' => 'Không tìm thấy item', 'type' => 'danger']);
        $item->hinhdaidien = $request->hinhdaidien;





        $item->mota = $request->mota;

        $item->tieude = $request->tieude;



        $item->trangthai = $request->trangthai;

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
        $item = news::where('ma', $id)
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
    //
}
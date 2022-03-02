<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class customercontroller extends Controller
{
    var $route = 'customer';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $dssp = customer::where('trangthai', '!=', -1);
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
                'pagename' => 'Danh Sách Khách Hàng',
                'route' => $this->route
            ];
        return view('backend.infocustomer.ttkh', $data);
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
                'pagename' => 'Thêm Khách Hàng',
                'route' => $this->route,
                'action' => route($this->route . '.store'),
                'method' => 'POST'
            ];
        return view('backend.infocustomer.themtt', $data);
        //     }

        //     /**
        //      * Store a newly created resource in storage.
        //      *
        //      * @param  \Illuminate\Http\Request  $request
        //      * @return \Illuminate\Http\Response
        //      */

    }
    public function store(Request $request)
    {
        //dd($request->all());
        //  $arr =
        //kiem tra du lieu dau vao

        $request->validate([
            'ten' => ['required', 'min:5', 'max:255'],

            'sdt' => ['required', 'min:10', 'max:20'],
            'email' => 'bail|required|email',
        ], [
            //noi dung
            'ten.required' => 'ban chua nhap ten',
            'ten.min' => 'ten nho nhat 5 ky tu',
            'mavach.unique' => 'ma vach da dc su dung',
            'sdt.required' => 'so dien thoai phai co it nhat 10 ky tu',
        ]);

        $item =  customer::create();
        $item->ten = $request->ten;

        $item->sdt = $request->sdt;

        $item->email = $request->email;
        $item->trangthai = $request->trangthai;
        $item->save(); // true false
        DB::table('khachhang')->insert(
            [

                "ten" => $request->ten,

                "sdt" => $request->sdt,

                "email" => $request->email,


                "trangthai" => $request->trangthai,

            ]
        );
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = customer::where('ma', $id)
            ->where('trangthai', '!=', '-1')->first();

        //dd($item->supplier);
        if (!$item)
            return redirect()->route($this->route . '.index')->with(['msg' => 'Không tìm thấy item', 'type' => 'danger']);
        $data =
            [
                'pagename' => 'Sửa Khach hang',
                'route' => $this->route,
                'action' => route($this->route . '.update', $item->ma),
                'method' => 'PUT',
                'item' => $item
            ];
        return view('backend.infocustomer.themtt', $data);
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

        $item = customer::where('ma', $id)
            ->where('trangthai', '!=', '-1')->first();
        if (!$item)
            return redirect()->route($this->route . '.index')->with(['msg' => 'Không tìm thấy item', 'type' => 'danger']);
        $item->ten = $request->ten;

        $item->sdt = $request->sdt;
        $item->email = $request->email;

        $item->trangthai = $request->trangthai;

        //         // dd($item->ma);
        //         // DB::table('sanpham')->where('ma',$item->ma)->update(
        //         //     [
        //         //         "hinhdaidien" => $request->hinhdaidien,
        //         //         "ten" => $request->ten,
        //         //         "mavach" => $request->mavach,
        //         //         "gia" => $request->gia,
        //         //         "soluong" => $request->soluong,
        //         //         "manhacungcap" =>$request->nhacungcap,
        //         //         "maloai" =>$request->loai,
        //         //         "mota" =>$request->mota,
        //         //         "motachitiet" =>$request->chitiet,
        //         //         "tieude" => $request->tieude,
        //         //         "tukhoa" => $request->tukhoa,
        //         //         "motatimkiem" => $request->motatimkiem,
        //         //         "hinhchiase" =>$request->hinhshare,
        //         //         "tenrutgon" => $request->tenrutgon,
        //         //         "trangthai" =>$request->trangthai,
        //         //         "ngaycapnhat"=>now(),
        //         //     ]
        //         // );
        //         // dd(234);
        if ($item->save())
            return redirect()->back()->with(['msg' => 'Sửa thành công', 'type' => 'success']);
        else
            return redirect()->back()->with(['msg' => 'Sửa thất bại', 'type' => 'danger']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
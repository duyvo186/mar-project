<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class ordercontroller extends Controller
{
    var $route = 'order';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $dssp = OrderDetails::where('trangthai', '!=', -1);
        // dd($dssp);
        //DB::table('sanpham')
        //->where('trangthai','!=','-1');
        // ->where('tencot','toantu','giatri')
        //xu ly tim kiem
        if ($request->key) {
            $key = $request->key;
            $dssp = $dssp->where('ten', 'like', "%$key%");
        }

        $dssp = $dssp->orderBy('madonhang', 'DESC')
            ->paginate(10); //nhieu
        /// first();
        //dd($dssp->total());
        $data =
            [
                'collection' => $dssp,
                'pagename' => 'Danh Sách Đơn Hàng',
                'route' => $this->route
            ];
        return view('backend.donhang.list', $data);
        //
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        $item = Order::where('ma', $id)
            ->where('trangthai', '!=', '-1')->first();

        //dd($item->supplier);
        if (!$item)
            return redirect()->route($this->route . '.index')->with(['msg' => 'Không tìm thấy item', 'type' => 'danger']);
        $data =
            [
                'pagename' => 'Sửa Đơn Hàng',
                'route' => $this->route,
                'action' => route($this->route . '.update', $item->ma),
                'method' => 'PUT',

                'item' => $item
            ];
        return view('backend.donhang.form', $data);
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
        $item = Order::where('ma', $id)
            ->where('trangthai', '!=', '-1')->first();
        if (!$item)
            return redirect()->route($this->route . '.index')->with(['msg' => 'Không tìm thấy item', 'type' => 'danger']);
        $item->ten = $request->ten;
        $item->email = $request->email;
        $item->sdt = $request->sdt;
        $item->diachi = $request->diachi;
        $item->tennhan = $request->tennhan ? $request->tennhan : $request->ten;
        $item->emailnhan = $request->emailnhan ? $request->emailnhan : $request->email;
        $item->sdtnhan = $request->sdtnhan ? $request->sdtnhan : $request->sdt;
        $item->diachinhan = $request->diachinhan ? $request->diachinhan : $request->diachi;
        $item->ghichu = $request->ghichu;
        $item->pttt = $request->pttt;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $item->ngaydat = now();
        $item->ngaytao = now();
        $item->ngaycapnhat = now();
        $item->trangthai = $request->trangthai;
        $item->trangthaidonhang = $request->trangthai;
        $item->code = time();
        if ($item->save()) {
            //ghi tiep bang chi tiet don hang


            $item = OrderDetails::where('madonhang', $id)
                ->where('trangthai', '!=', '-1')->first();
            $item->trangthai = $request->trangthai;
        }

        //cap nhat lai

        // $item->save();
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
        //
    }

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
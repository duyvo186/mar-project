<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\news;
use Illuminate\Http\Request;

class blogcontroller extends Controller
{
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
            'title' => 'Tin Tức',
            'news' => $dssp,
            'newschitiet' => session('newsdetail'),
            'cart' => session('giohang'),

        ];
        return view('frontend.blog', $data);
    }
    public function indexdetail()
    {
        // if (!session('newsdetail')) {
        //     return redirect()->route('f.home');
        // }
        $data = [
            'title' => 'Tin Tức',

            'newschitiet' => session('blogsingle'),
            'cart' => session('giohang'),

        ];
        return view('frontend.blogsingle', $data);
    }
    public function blogdetail(Request $request)
    {

        if (!$request->id)
            return redirect()->route('c.index');
        $item = news::where(['ma' => $request->id, 'trangthai' => 1])->first();
        if (!$item)
            return redirect()->route('c.index');
        // if ($item->soluong <= 0)
        //     return redirect()->route('c.index');
        // add vao gio hang
        $blogsingle = session('blogsingle');
        if (isset($productsingle[$item->ma])) {
            $blogsingle[$item->ma]++;
        } else {
            $blogsingle[$item->ma] = [
                'ma' => $item->ma,
                'tieude' => $item->tieude,
                'hinh' => $item->hinh,
                'mota' => $item->mota,
                'motachitiet' => $item->motachitiet,




            ];
        }

        //dd($item->supplier);


        session(['blogsingle' => $blogsingle]);
        return redirect()->route('blog.detail');
    }
    //
}
<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class usercontroller extends Controller
{
    public function login()
    {
        return view('backend.users.login');
    }
    public function loginPost(Request $request)
    {
        // dd($request->all(0));
        $request->validate([
            'username' => ['required', 'min:5', 'max:32', 'exists:quantri,username'],
            'password' => ['required', 'min:5', 'max:32']
        ], [
            'username.required' => 'Tên đăng nhập không được trống',
            'username.min' => 'Tên đăng nhập từ 5 tới 32 ký tự',
            'username.max' => 'Tên đăng nhập từ 5 tới 32 ký tự',
            'username.exists' => 'Thông tin đăng nhập không đúng',
            'password.required' => 'Mật khẩu không được trống',
            'password.min' => 'Mật khẩu từ 5 tới 32 ký tự',
            'password.max' => 'Mật khẩu từ 5 tới 32 ký tự'
        ]);

        if (Auth::guard('backend')->attempt([
            'username' => $request->username,
            'password' => $request->password
        ], $request->remember)) {
            return redirect()->route('dash.index')->with(['msg' => 'Xin chào bạn', 'type' => 'success']);
        } else {
            return redirect()->route('b.login')->with(['msg' => 'Thông tin đăng nhập không đúng', 'type' => 'danger']);
        }
    }

    public function logout()
    {
        Auth::guard('backend')->logout();
        return redirect()->route('b.login')->with(['msg' => 'Bạn vừa thoát hệ thống', 'type' => 'success']);
    }
    public function pass(Request $request)
    {
        return Hash::make($request->p);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //
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
@extends('backend.empty')
@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Đăng nhập hệ thống</h1>
                                    @if (session('msg'))
                                    <div class="col-12 alert alert-{{session('type')}}">{{session('msg')}}</div>
                                  @endif
                                  @if($errors->any())
                                    <div class="col-12 alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            {{$error}}<br>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                                <form class="user" action="{{route('b.loginpost')}}" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp" name="username"
                                            placeholder="Tên đăng nhập">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Mật khẩu" name="password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" value="1" name="remember" class="custom-control-input"
                                                id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Nhớ đăng
                                                nhập</label>
                                        </div>
                                    </div>
                                    @csrf

                                    <button class="btn btn-primary btn-user btn-block">
                                        Đâng nhập
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<style>
    body{
        background: white!important;
        height: 745px;
    }
    </style>

@endsection


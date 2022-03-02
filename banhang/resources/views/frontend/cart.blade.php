@extends('frontend.master')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                </span>
                <h2 style="margin-top:30px;" class="mb-0 bread">{{$title}}</h2>
                @if (session('msg'))
                <div class="col-12 alert alert-{{session('type')}}">{!!session('msg')!!}</div>
                @endif
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">


    <div class="container">
        <div class="row">
            <div class="table-wrap">
                <form action="{{route('cart.update')}}" method="post">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr>
                                <th>check</th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $tong = 0; @endphp
                            @php $tongtest = 0; @endphp
                            @php $xoasp = 0; @endphp
                            @foreach ($cart as $id=>$item)
                            @php $tongsoluong=$item['soluongmua']; $tongtest+=$tongsoluong; @endphp
                            @php $tt = $item['gia']*$item['soluongmua']; $tong+=$tt; @endphp
                            @php $xoasp+=$id @endphp
                            <tr class="alert" role="alert">

                                <td>
                                    <label class="checkbox-wrap checkbox-primary">
                                        <input value="" name="{{$id}}" type="checkbox" >
                                        <span class="checkmark"></span>

                                    </label>
                                </td>

                                <td>
                                    <div class="cart-media"><a href="#"><img id="hinh"
                                                src="{{$item['hinh']}}"
                                                alt="product"></a></div>
                                    {{-- <div class="img spday" style="background-image: url({{$item['hinh']}}); "></div> --}}
                                </td>
                                <td> {{$item['ten']}}</td>
                                <td>{{number_format($item['gia'])}}</td>
                                <td class="quantity">
                                    <div class="input-group">
                                        <input id="soluong" type="text" name="soluongmua[{{$id}}]"
                                            value="{{$item['soluongmua']}}" class="quantity form-control input-number"
                                            min="1" max="100">
                                    </div>

                                </td>
                                <td>{{number_format($tt)}}</td>
                                <td>
                                    {{-- <a onclick="return confirm('bạn có chắc muốn xóa sp ko')"
                                        href="{{route('cart.del',[$id])}}">
                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                    </a> --}}
                                    {{-- <input id="csrf" type="hidden" value="{{csrf_token()}}" /> --}}
                                    <a onclick="return confirm('bạn có chắc muốn xóa sp ko')"
                                        href="{{route('cart.del',$id)}}">
                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                    </a>


                                </td>

                            </tr>
                            @endforeach
                        </tbody>
            </div>
            </table>
            <div class="row">
                <div class="col-9">
                    <a id="edittext" style="padding: .5rem .5rem !important;"
                        class=" mr-2 btn btn-primary float-left py-3 px-4" href="{{route('f.home')}}">Mua tiếp</a>
                    <a id="edittext" style="padding: .5rem .5rem !important; margin-left:10px; margin-right:10px;"
                        for="del" class=" btn btn-primary float-left py-3 px-5"
                        onclick="return confirm('bạn có chắc muốn xóa sp ko')" href="{{route('cart.del',$id)}}">Xóa
                        Item Đã Chọn</a>
                    <input id="csrf" type="hidden" value="{{csrf_token()}}" />
                    <button id="edittext" style="padding: .5rem .5rem !important;"
                        class=" btn btn-primary py-3 px-4  ">Cập nhật giỏ hàng</button>
                </div>
                <div class="col-3">

                    <div class="cart-total mb-3" style="float: right">
                        <h3>Tổng Tiền:</h3>

                        <p class="d-flex total-price">

                            <span style="margin-left:28px;">{{number_format($tong)}}</span>
                        </p>
                    </div>
                    @csrf




                </div>
            </div>
            <a id="edittext" style="float:right;" href="{{route('checkout.index')}}"
                class="btn btn-primary py-3 px-4">Thanh Toán</a>
            </tbody>
            </form>
        </div>
    </div>
    <style>
        .img.spday {
            width: 100%;
            height: 200;
        }

        #edittext {
            font-size: 13px;
            background: var(--primary);
        }
    </style>
</section>
@endsection

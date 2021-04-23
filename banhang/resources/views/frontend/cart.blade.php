@extends('frontend.master')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">{{$title}} <i class="fa fa-chevron-right"></i></a></span> <span><a href="product.html">Products <i class="fa fa-chevron-right"></i></a></span> <span>Products Single <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">{{$title}}</h2>
        </div>
      </div>
    </div>
  </section>
<section>
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('f.home')}}">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Cart <i
                            class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread"></h2>
                @if (session('msg'))
                <div class="col-12 alert alert-{{session('type')}}">{!!session('msg')!!}</div>
                @endif
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <p class="d-flex">
    </p>
    <div class="row">
    <div class="col-md-12 mb-4 text-center py-4 px-5">
    <p
     class="breadcrumbs mb-0">
        <span class="mr-2"><h4>Product Number:  {{count($cart)}} PRD</h4> </span>
</p></div></div>
    <div class="container">
        <div class="row">
            <div class="table-wrap">
                <form  action="{{route('cart.update')}}" method="post">
                <table class="table">
                    <thead class="thead-primary">
                        <tr>
                            <th>check</th>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>total</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $tong = 0; @endphp
                        @foreach ($cart as $id=>$item)
                        @php $tt = $item['gia']*$item['soluongmua']; $tong+=$tt; @endphp
                        <tr class="alert" role="alert">
                            <td>
                                <label class="checkbox-wrap checkbox-primary">
                                      <input  value="" name="{{$id}}" type="checkbox" checked>
                                      <span class="checkmark"></span>
                                    </label>
                            </td>
                            <td>
                                <div  class="img d-flex align-items-center justify-content-center" style="background-image: url({{$item['hinh']}}); "></div>
                            </td>
                            <td>
                                <div   class="email">
                                    <span>{{$item['ten']}}</span>
                                    {{-- <span>Fugiat voluptates quasi nemo, ipsa perferendis</span> --}}
                                </div>
                            </td>
                            <td>{{number_format($item['gia'])}}</td>
                            <td class="quantity">
                                <div  class="input-group" >
                                    <input id="soluong" type="text"  name="soluongmua[{{$id}}]" value="{{$item['soluongmua']}}" class="quantity form-control input-number"
                                    min="1" max="100">
                                </div>

                            </td>
                            <td>{{number_format($tt)}}</td>
                            <td>
                                {{-- <a onclick="return confirm('bạn có chắc muốn xóa sp ko')" href="{{route('cart.del',[$id])}}"  >
                                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                </a> --}}
                                {{-- <input id="csrf" type="hidden" value="{{csrf_token()}}"/> --}}
                                <a  onclick="return confirm('bạn có chắc muốn xóa sp ko')" href="{{route('cart.del',$id)}}"  >
                                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                </a>


                            </td>

                        </tr>
                @endforeach
                    </tbody>
            </div>
        </table>
        <a class=" mr-2 btn btn-primary float-left py-3 px-4" href="{{route('f.home')}}">Mua tiếp</a>
        {{-- <a for="del"class=" btn btn-primary float-left py-3 px-5" onclick="return confirm('bạn có chắc muốn xóa sp ko')" href="{{route('cart.del',[$id])}}">Xóa Item Đã Chọn</a> --}}
        <div class="row justify-content-end">
            <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>Subtotal</span>
                        <span>$20.60</span>
                    </p>

                    <p class="d-flex">
                        <span>Discount</span>
                        <span>$3.00</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>{{number_format($tong)}}</span>
                    </p>
                </div>
                 @csrf
                {{-- <input id="csrf" type="hidden" value="{{csrf_token()}}" /> --}}
                <p> <button class=" btn btn-primary py-3 px-4   ">Cập nhật giỏ hàng</button> </p>

                <p class="text-center"><a href="{{route('checkout.index')}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a>
                </p>
            </div>

        </div>
    </tbody>
    </form>
    </div>
    </div>
</section>
@endsection

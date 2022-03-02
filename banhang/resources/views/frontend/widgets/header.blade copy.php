@if ($cart)
<aside class="cart-sidebar">
    <div class="cart-header">
        <div style="font-size: 18px;" class="cart-total"></i><span> Giỏ Hàng </span></div>

        <button
            class="cart-close"><i class="icofont-close"></i></button>
    </div>

    <ul class="cart-list">

        @php $tong = 0; @endphp
        @php $tongtest = 0; @endphp
        @foreach ($cart as $id=>$item)
        @php $tongsoluong=$item['soluongmua']; $tongtest+=$tongsoluong; @endphp
        @php $tt = $item['gia']*$item['soluongmua']; $tong+=$tt;  @endphp
        <li class="cart-item">
            <div class="cart-media"><a href="#"><img src="{{$item['hinh']}}" alt="product"></a><button
                    class="cart-delete"  onclick="window.location.href='{{route('cart.del',$id)}}';"><i class="far fa-trash-alt"></i></button></div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.html">{{$item['ten']}}</a></h6>
                    <p>{{number_format($item['gia'])}}</p>
                </div>
                <div class="cart-action-group">

                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                class="icofont-minus"></i></button><input class="action-input" title="Quantity Number"
                            type="text" name="soluongmua[{{$id}}]" value="{{$item['soluongmua']}}"><button class="action-plus" title="Quantity Plus"><i
                                class="icofont-plus"></i></button></div>
                    <h6>{{number_format($tt)}}</h6>
                </div>
            </div>
        </li>

        @endforeach


    </ul>

    <div class="cart-footer"><button class="coupon-btn">Do you have a coupon code?</button>

        <form class="coupon-form"><input type="text" placeholder="Enter your coupon code"><button
                type="submit"><span>apply</span></button></form><a class="cart-checkout-btn" href="{{route('checkout.index')}}"><span
                class="checkout-label">Thanh Toán</span><span class="checkout-price">{{$tong}}</span></a>
    </div>
</aside>
@else
    @php
    $cart=0
    @endphp
    @endif
<header class="header-part">

    <div class="container">
        <div class="header-content">
            <div class="header-media-group"><button class="header-user"><img src="images/user.png"
                        alt="user"></button><a href="{{route('f.home')}}"><img
                        src="http://127.0.0.1:8000/frontend/images/logo3.png" alt="logo"></a><button
                    class="header-src"><i class="fas fa-search"></i></button></div><a href="f.home"
                class="header-logo"><img src="http://127.0.0.1:8000/frontend/images/logo3.png" alt="logo"></a>
            <form class="header-form"><input type="text" placeholder="Tìm kiếm . . ."><button><i
                        class="fas fa-search"></i></button></form>

            <div class="header-widget-group"><button class="header-widget header-cart dropdown-toggle-split"
                    title="Cartlist" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <i class="fas fa-shopping-basket"> </i>
                    @if ($cart)
                    <div class="dropdown-menu dropdown-menu-right" >
                        <style>
.dropdown-menu.dropdown-menu-right.show
{
    left: -32px !important;
}
                        </style>




{{--
                        <div class="dropdown-item d-flex align-items-start" href="{{route('cart.index')}}">

                            <img  src="{{$item['hinh']}}">
                            <div class="text pl-3" style="
                            margin-left: 18px;
                        ">
                                <h4>{{$item['ten']}}</h4>
                                <p class="mb-0"><a href="#" style="color: var(--primary);" class="price"> {{number_format($item['gia'])}}</a><span
                                        class="quantity ml-3">Số Lượng: {{$item['soluongmua']}} </span></p>
                            </div>


                        </div> --}}
                        {{-- @endforeach
                        @php $tong = 0; @endphp
                        @php $tongtest = 0; @endphp
                        @php $tongsoluong=$item['soluongmua']; $tongtest+=$tongsoluong; @endphp
                        @php $tt = $item['gia']*$item['soluongmua']; $tong+=$tt;  @endphp --}}


                    </div>

                    <div class="d-flex justify-content-center align-items-center" style="
                    margin-bottom: 36px;
                    border-radius: 50%;
                    width: 20px;
                    height: 20px;
                    background: var(--primary);
                    color: white">

                    <small>{{$tongtest}} </small>

                    </div>
                    @else
                    @php
                    $cart=0
                    @endphp
                    @endif
                    {{-- <sup>{{count($cart)}}</sup><span>
                        Tổng giá <small> --}}
                            {{-- @php $tong = 0; @endphp



                            @foreach ($cart as $id=>$item)
                            @php $tt = $item['gia']*$item['soluongmua']; $tong+=$tt; $tongsoluong=$item['soluongmua'];
                            $tongtest+=$tongsoluong; @endphp
                            @endforeach
                            {{number_format($tong)}} --}}
                            {{-- @php $tong = 0; @endphp
                            @php $tongtest = 0; @endphp
                            @foreach ($cart as $id=>$item)
                            @php $tongsoluong=$item['soluongmua']; $tongtest+=$tongsoluong; @endphp
                            @php $tt = $item['gia']*$item['soluongmua']; $tong+=$tt; @endphp
                            @endforeach --}}
                        </small></span>
                </button></div>

        </div>
    </div>
</header>



{{-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">DuyVo <span>store</span></a>

        @if ($cart)


        <div class="order-lg-last btn-group">
            <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="flaticon-shopping-bag"></span>

                <div class="d-flex justify-content-center align-items-center"> <small>{{count($cart)}} </small></div>


            </a>

            <div class="dropdown-menu dropdown-menu-right">


                @foreach ($cart as $id=>$item)


                <div class="dropdown-item d-flex align-items-start" href="#">

                    <div class="img" style="background-image: url({{$item['hinh']}});"></div>
                    <div class="text pl-3">
                        <h4>{{$item['ten']}}</h4>
                        <p class="mb-0"><a href="#" class="price"> {{number_format($item['gia'])}}</a><span
                                class="quantity ml-3">Quantity: {{$item['soluongmua']}} </span></p>
                    </div>


                </div>
                @endforeach



                <a class="dropdown-item text-center btn-link d-block w-100" href="{{route('cart.index')}}">
                    View All
                    <span class="ion-ios-arrow-round-forward"></span>
                </a>

            </div>


        </div>
        @else
        @php
        $cart=0
        @endphp
        <div class="order-lg-last btn-group">
            <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="flaticon-shopping-bag"></span>

                <div class="d-flex justify-content-center align-items-center"> <small>{{$cart}} </small></div>


            </a>




        </div>
        @endif --}}





        {{--

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">DuyVo <span>store</span></a>

                @if ($cart)


                <div class="order-lg-last btn-group">
                    <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="flaticon-shopping-bag"></span>

                        <div class="d-flex justify-content-center align-items-center"> <small>{{count($cart)}} </small>
                        </div>


                    </a>

                    <div class="dropdown-menu dropdown-menu-right">


                        @foreach ($cart as $id=>$item)


                        <div class="dropdown-item d-flex align-items-start" href="#">

                            <div class="img" style="background-image: url({{$item['hinh']}});"></div>
                            <div class="text pl-3">
                                <h4>{{$item['ten']}}</h4>
                                <p class="mb-0"><a href="#" class="price"> {{number_format($item['gia'])}}</a><span
                                        class="quantity ml-3">Quantity: {{$item['soluongmua']}} </span></p>
                            </div>


                        </div>
                        @endforeach



                        <a class="dropdown-item text-center btn-link d-block w-100" href="">
                            View All
                            <span class="ion-ios-arrow-round-forward"></span>
                        </a>

                    </div>


                </div>
                @else
                @php
                $cart=0
                @endphp
                <div class="order-lg-last btn-group">
                    <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="flaticon-shopping-bag"></span>

                        <div class="d-flex justify-content-center align-items-center"> <small>{{$cart}} </small></div>


                    </a>




                </div>
                @endif



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item "><a href="{{route('f.home')}}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{route('abu.index')}}" class="nav-link">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Products</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="{{route('cart.index')}}">Products</a>
                                <a class="dropdown-item" href="{{route('pg.index')}}">Single Product</a>
                                <a class="dropdown-item" href="">Cart</a>
                                <a class="dropdown-item" href="{{route('checkout.index')}}">Checkout</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="{{route('blog.index')}}" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="{{route('contact.index')}}" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="{{route('f.testmail')}}" class="nav-link">Feedback</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        --}}
<style>
     .header-part::after{
       width: 100% !important;
       position: fixed !important;
       z-index: 3000 !important;
    }
</style>



<aside class="cart-sidebar">

    <div class="cart-header">
        <div style="font-size: 18px;" class="cart-total"></i><span> Giỏ Hàng </span></div>

        <button class="cart-close"><i class="icofont-close"></i></button>
    </div>

    <ul class="cart-list">
        @if($cart)
        @php $tong = 0; @endphp
        @php $tongtest = 0; @endphp
        @foreach ($cart as $id=>$item)
    @php $tongsoluong=$item['soluongmua']; $tongtest+=$tongsoluong; @endphp
        @php $tt = $item['gia']*$item['soluongmua']; $tong+=$tt; @endphp
        <li id="maminicart" class="cart-item" >
            <div class="cart-media"><a href="#"><img id="hinh" src="{{$item["hinh"]}}" alt="product"></a><button
                    class="cart-delete" onclick="window.location.href='{{route('cart.del',$id)}}';"><i
                        class="far fa-trash-alt"></i></button></div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a id="ten" href="product-single.html" >{{$item["ten"]}}</a></h6>
                    <p id="gia">{{number_format($item["gia"])}}</p>
                </div>
                <div class="cart-action-group">
                    {{-- <input   type="hidden" name="id" value="{{$item->ma}}" /> --}}
                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                class="icofont-minus"></i></button><input id="soluongmua" class="action-input" title="Quantity Number"
                            type="text" name="soluongmua[{{$id}}]" value="{{$item['soluongmua']}}"><button
                            class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                    <h6>{{number_format($tt)}}</h6>
                </div>
            </div>
        </li>

        @endforeach


    </ul>


    <div class="cart-footer"><button class="coupon-btn">Do you have a coupon code?</button>

        <form class="coupon-form"><input type="text" placeholder="Enter your coupon code"><button
                type="submit"><span>apply</span></button></form><a class="cart-checkout-btn"
            href="{{route('checkout.index')}}"><span class="checkout-label">Thanh Toán</span><span
                class="checkout-price">{{$tong}}</span></a>
    </div>
    @else
@php
$cart=0
@endphp
@endif

</aside>


<header class="header-part">
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="header-top-welcome">

                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="header-top-welcome" style="
    text-align: center;
">
                    <p>TEL: 0988.580.657 - 0382.831.686</p>
                </div>

            </div>
            <div class="col-md-7 col-lg-4">
                <ul class="header-top-list">
                    <li><a href="offer.html">Thời gian làm việc Thứ 2 - Chủ Nhật 7:00 - 8:00</a></li>
                    <li><a href="faq.html"></a></li>
                    <li><a href="contact.html"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



{{-- <header class="heaer-part"> --}}
        {{-- <p id="demo" > </p>
        <script>
            document.getElementById("demo").innerHTML =
            "The full URL of this page is:<br>" + window.location.href;
            </script> --}}
    {{-- <form action="" method="get">
        <div class="form-row">
            <div class="form-group col-9">
                <input type="text" name="key" id="" class=" form-control" placeholder="Từ khóa"
                    >
            </div>
            <div class="form-group col-3 text-right">
                <input  class="btn btn-sm btn-success" value="Tìm">
                <a href="{{route('nt.index')}}" class="btn btn-sm btn-danger">Tất cả</a>
            </div>
        </div>
    </form> --}}
    <div class="container">
          <div class="header-content-cus">

                <div class="row">


                    <div class="col-4 ">
                        <div class="navbar-content" style="
        /* color: black; */
    ">
                            <ul class="navbar-list" style="
        color: blak;
        /* color: black!important; */
    ">
                                <li class="navbar-item dropdown"><a class="navbar-link "
                                        href="{{route('f.home')}}">TRANG CHỦ</a>

                                </li>
                                <li class="navbar-item dropdown"><a class="navbar-link dropdown-arrow" href="#">CỬA
                                        HÀNG</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="{{route('bm.index')}}">Cây Bóng Mát</a></li>
                                        <li><a href="{{route('nt.index')}}">Cây Nội Thất</a></li>
                                        <li><a href="{{route('f.home')}}">Cây Trồng Trong Nước</a></li>
                                        <li><a href="{{route('bonsai.index')}}">Bonsai Nghệ Thuật</a></li>
                                        <li><a href="{{route('anqua.index')}}">Cây Ăn Quả</a></li>
                                        <li><a href="{{route('ct.index')}}">Cây Công Trình</a></li>
                                    </ul>
                                </li>





                                <li class="navbar-item "><a class="navbar-link " href="{{route('blog.index')}}">TIN
                                        TỨC</a>

                                </li>

                                <li class="navbar-item"><a class="navbar-link" href="{{route('c.index')}}">LIÊN HỆ</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-4 menu">
                        <div class="header-media-group"><button style="visibility:hidden;" class="header-user"><img
                            src="images/user.png" alt="user"></button><a ><img
                            src="{{asset('frontend/images/logo3.png')}}" alt="logo"></a><button class="header-src"><i
                            class="fas fa-search"></i></button></div>

                            <a  class="header-logo"><img
                        src="{{asset('frontend/images/logo3.png')}}" alt="logo"></a>
        </div>
        <div class="col-lg-2 input">
            <form class="header-form-cus" action="" method="get">
            <input type="text" name="key" id="ok"  placeholder="Search..." value="{{Request::input('key')}}" >

            <button style="    position: absolute;
            /* display: block; */
            margin-top: 13px;
            margin-left: -42px;" type="submit" >
                <i style="postion:absolute"class="fas fa-search"> </i>
            </button>
            </form>
</div>

<div class="column-login">

    <button class="hero-button">

        <p id="hidden-login" style=" display:none;
        position: absolute; width:180px;
         "> Đăng Nhập </p>
        <i class="fa fa-user" aria-hidden="true"> </i>
    </button>

</div>

<div style="z-index:4;"class="column-minicart">
<div class="header-widget-group" style="    margin-left: 153%;
margin-top: 81%;"><button class="header-widget header-cart dropdown-toggle-split"
    title="Cartlist" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

    <i class="fas fa-shopping-basket"> </i>

    <div class="dropdown-menu dropdown-menu-right">
        <style>
            .dropdown-menu.dropdown-menu-right.show {
                left: -32px !important;
            }
        </style>






    </div>
    {{-- @if(!view('frontend.productsingle')) --}}
<div class="covertjson">
    @if ($cart)
    <div class="d-flex justify-content-center align-items-center" style="
   ">


        <small>{{$tongtest}} </small>
        {{-- @endif --}}


    </div>
    @else
        @php
        $cart=0
        @endphp
        @endif
</div>

</button></div>
</div>



<style>
    .column-login{
        width: 150px;
        height: 96px;
    }
    .column-minicart{
        width: 50px;
        height: 96px;
    }
    .col-lg-1.login {
        /* text-align: center;
        justify-content: center; */


    }
    .hero-button{
        /* float: right; */
        margin-top: 18%;
        /* padding-top: 20px; */
        border-radius: 50%;

        width: 40px;
        height: 40px;
        background-color: #f5f5f5;
        transition-property: width, padding-right, border-radius, color;
        transition-duration: 1s;

    }
    #hero-button{transition-timing-function: ease-in-out;}
    .hero-button:hover{
        padding-right:80%;
        width: 150px;
        border-radius: 50px 20px 20px 50px;
        /* color: red; */

    }
    .active-login#hidden-login{
        display: block;
        opacity: 0;


    -webkit-transition: opacity 2s ease-in;
       -moz-transition: opacity 2s ease-in;
        -ms-transition: opacity 2s ease-in;
         -o-transition: opacity 2s ease-in;
            transition: opacity 2s ease-in;


    }
    .active-login#hidden-login:hover{
        /* margin-left: 10px; */
        opacity: 1;

    }
    /* p.hidden-login:hover{
        display: block;
    } */
    .header-content-cus{
        padding: 17px 0px;
    }
    .col-lg-2.input{
        padding:16px;
    }
    .col-lg-4.menu{
        /* margin-left: 50px */
        text-align: center;
    }
input#ok{
    border:none;
    background: var(--chalk);
/* box-shadow: 0px 1px 1px 1px #888; */
    border-radius: 42px;
    /* border: 1px solid; */
     width: 100%;
    height: 55px;
    font-size: 15px;
    padding-left: 13px;
    /* float: right; */
    /* margin-left: 255px; */
}
input#ok:hover{
    box-shadow: 0px 3px 9px var(--primary);
  background: #fff;

}
.navbar-link, .navbar-item.dropdown:hover{
    border: 0 0 0 12px solid seagreen;
}
.d-flex.justify-content-center.align-items-center.active{
    background: var(--primary);
}
.d-flex.justify-content-center.align-items-center{
    margin-bottom: 36px;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    background: var(--primary);
    color: white

}
</style>




          </div>
    </div>
</header>

<div class="popup-form">
<a href="#"  class="close-formlogin" style=" margin-right:12px; float: right;">X</a>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{asset('frontend/images/img-login3.png')}}">
        </div>
        <div style ="padding-top:10%;"class="col-lg-6">
            <div class="form-group">
                <label  for="">Đăng Nhập</label>


              </div>
<div class="form-group">
  <label for="">Email</label>
  <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">

</div>
<div class="form-group">
    <label for="">Password</label>
    <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">

  </div>
<div class="form-group">
<button class="button-login">Đăng nhập</button>

</div>
<small id="emailHelpId" class="form-text text-muted">Bạn Quên Mật Khẩu</small>
        </div>

    </div>
</div>
</div>
<style>
    .close-formlogin{
        font-weight: bold;
        color: var(--primary);
    }
    .button-login{
        font-size: 13px;
        background: var(--primary);
        color: white;
        width: 100px;
        height: 50px;
        border-radius: 10px
    }
    .transparent{
        width: 100%;
        height: 100%;
        background-color: black;
    }
.popup-form{
    display: none;
    box-shadow: 0px 3px 9px var(--primary);
    background: white;
    border-radius: 20px;
   margin: -37px 100px 100px 490px;
    z-index: 100;
    position: fixed;
width: 500px;
height: 500px;
}
.popup-form.activelogin{
    display: block;

}

</style>
</div>


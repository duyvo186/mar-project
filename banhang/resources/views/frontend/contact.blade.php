@extends('frontend.master')
@section('content')
<link rel="stylesheet" href="{{asset('frontend/css/contact.css')}}">
<section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>Liên Hệ</h2>
        <ol class="breadcrumb">

            <li class="breadcrumb-item active" aria-current="page">contact us</li>
        </ol>
    </div>
</section>
<section class="inner-section contact-part">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="contact-card"><i class="icofont-location-pin"></i>
                    <h4>Cửa Hàng</h4>
                    <p>200/ Lũy bán bích, q tân phú, tphcm</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-card active"><i class="icofont-phone"></i>
                    <h4>Số Điện Thoại</h4>
                    <p><a href="#">0792925016 </a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-card"><i class="icofont-email"></i>
                    <h4>Mail Liên Hệ</h4>
                    <p><a href="#">huuduy8989@gmail.com</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501706.82508711744!2d106.68364426538837!3d10.766465313823481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f0887349557%3A0x19459d46624a55b1!2zQsOhbiBjw6J5IGPhuqNuaCDEkeG6uXA!5e0!3m2!1svi!2s!4v1642506573893!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            </div>
            <div class="col-lg-6">
                <form class="contact-form">

                    <div class="form-group">
                        <div class="form-input-group"><input class="form-control" type="text" placeholder="Họ Và Tên"><i class="icofont-user-alt-3"></i></div>
                    </div>
                    <div class="form-group">
                        <div class="form-input-group"><input class="form-control" type="text" placeholder="Email Của Bạn"><i class="icofont-email"></i></div>
                    </div>
                    <div class="form-group">
                        <div class="form-input-group"><input class="form-control" type="text" placeholder="Tiêu đề" ><i class="icofont-book-mark"></i></div>
                    </div>
                    <div class="form-group">
                        <div class="form-input-group"><textarea class="form-control" placeholder="Nội Dung"></textarea><i class="icofont-paragraph"></i></div>
                    </div><button type="submit" class="form-btn-group"><i class="fas fa-envelope"></i><span>Gửi Tin Nhắn</span></button>
                </form>
            </div>
        </div>

    </div>
</section>
      @endsection

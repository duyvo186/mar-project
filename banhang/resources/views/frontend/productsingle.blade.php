@extends('frontend.master')
@section('content')
@foreach ($spchitiet as $id=>$item)

@endforeach

{{-- @php
$giohang = session('giohang');
if (isset($giohang[$id])) {
$giohang[$id]=[
'soluongmua'=>1
];
unset($giohang[$id]);

}
// cap nhat lai cai gio
session(['giohang' => $giohang]);
@endphp
@php
$tongtest=0
@endphp --}}
<link rel="stylesheet" href="{{asset('frontend/css/product-details.css')}}">
<div class="backdrop"></div><a class="backtop fas fa-arrow-up" style="display: none;"></a>
<section class="single-banner inner-section" style="background: url(images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>product simple</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Home</a></li>
            <li class="breadcrumb-item"><a>{{$pagename}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">product-simple</li>
        </ol>
    </div>
</section>
<section class="inner-section">
    <div class="container">
        <div class="row">






            <div class="col-lg-6">
                <div class="details-gallery">
                    <div class="details-label-group"><label class="details-label new">new</label><label
                            class="details-label off">-10%</label></div>
                    <ul class="details-preview slick-initialized slick-slider">
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 3180px;">
                                <li class="slick-slide slick-current slick-active" data-slick-index="0"
                                    aria-hidden="false"
                                    style="width: 636px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"
                                    tabindex="0"><img src="{{$item['hinh']}}" alt="product">
                                </li>
                                <li class="slick-slide" data-slick-index="1" aria-hidden="true"
                                    style="width: 636px; position: relative; left: -636px; top: 0px; z-index: 998; opacity: 0;"
                                    tabindex="-1"><img src="" alt="product">
                                </li>
                                <li class="slick-slide" data-slick-index="2" aria-hidden="true"
                                    style="width: 636px; position: relative; left: -1272px; top: 0px; z-index: 998; opacity: 0;"
                                    tabindex="-1"><img src="" alt="product">
                                </li>
                                <li class="slick-slide" data-slick-index="3" aria-hidden="true"
                                    style="width: 636px; position: relative; left: -1908px; top: 0px; z-index: 998; opacity: 0;"
                                    tabindex="-1"><img src="" alt="product">
                                </li>
                                <li class="slick-slide" data-slick-index="4" aria-hidden="true"
                                    style="width: 636px; position: relative; left: -2544px; top: 0px; z-index: 998; opacity: 0;"
                                    tabindex="-1"><img src="" alt="product">
                                </li>
                            </div>
                        </div>
                    </ul>
                    <ul class="details-thumb slick-initialized slick-slider">
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                style="opacity: 1; width: 640px; transform: translate3d(0px, 0px, 0px);">
                                <li class="slick-slide slick-current slick-active" data-slick-index="0"
                                    aria-hidden="false" style="width: 112px;" tabindex="0"><img src="{{$item['hinh']}}"
                                        alt="product"></li>
                                <li class="slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                    style="width: 112px;" tabindex="0"><img src="{{$item['hinh']}}" alt="product"></li>
                                <li class="slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                    style="width: 112px;" tabindex="0"><img src="{{$item['hinh']}}" alt="product"></li>


                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">

                <div class="details-content">
                    <h3 class="details-name"><a
                            href="https://mironmahmud.com/greeny/assets/ltr/product-simple.html#">{{$item['ten']}}</a>
                    </h3>
                    <div class="details-meta">


                    </div>
                    {{-- <div class="details-rating"><i class="active icofont-star"></i><i
                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                            class="active icofont-star"></i><i class="icofont-star"></i><a
                            href="https://mironmahmud.com/greeny/assets/ltr/product-simple.html#">(3 reviews)</a>
                    </div> --}}
                    <h3 class="details-price"><span id="gia" name="gia"
                            class="price">{{(number_format($item['gia']))}}<small>đ</small></span></h3>
                    <div class="input-group">
                        <input id="soluong" type="text" name="soluongmua[{{$id}}]" value="{{$item['soluongmua']}}"
                            class="quantity form-control input-number" min="1" max="100">
                    </div>
                    {{-- <p class="details-desc"> --}}
                        {!!$item['mota']!!}
                        {{--
                    <div class="details-list-group"><label class="details-list-title">tags:</label>
                        <ul class="details-tag-list">
                            <li><a href="https://mironmahmud.com/greeny/assets/ltr/product-simple.html#">organic</a>
                            </li>
                            <li><a href="https://mironmahmud.com/greeny/assets/ltr/product-simple.html#">fruits</a>
                            </li>
                            <li><a href="https://mironmahmud.com/greeny/assets/ltr/product-simple.html#">chilis</a>
                            </li>
                        </ul>
                    </div>
                    <div class="details-list-group"><label class="details-list-title">Share:</label>
                        <ul class="details-share-list">
                            <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                            <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                            <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                            <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                        </ul>
                    </div> --}}
                    <div class="details-add-group">
                        <form class="meta-prod d-flex" action="{{route('cart.add')}}" method="post">
                            <fieldset>
                                <input type="hidden" name="id" value="{{$item['gia']}}" />
                                @csrf

                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>Thêm Vào Giỏ Hàng</span></button>
                            </fieldset>
                        </form>
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

{{--
<textarea class="form-control" name="chitiet" id="chitiet" rows="3">{{$item['motachitiet']}}</textarea>
<script>
    CKEDITOR.replace('chitiet')
</script> --}}

<!DOCTYPE html>
<html lang="en">
<?php $item['motachitiet'] ?>

</html>

<section class="inner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-details-frame">
                    <h3 class="frame-title">Mô Tả Chi Tiết</h3>
                    <div class="tab-descrip">
                        <p name="chitiet" id="chitiet">{!!$item['motachitiet']!!}

                        </p>


                    </div>
                    <div class="product-details-frame">
                        <h3 class="frame-title">Spacification</h3>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row">Product code</th>
                                    <td>SKU: 101783</td>
                                </tr>
                                <tr>
                                    <th scope="row">Weight</th>
                                    <td>1kg, 2kg</td>
                                </tr>
                                <tr>
                                    <th scope="row">Styles</th>
                                    <td>@Girly</td>
                                </tr>
                                <tr>
                                    <th scope="row">Properties</th>
                                    <td>Short Dress</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="product-details-frame">
                        <h3 class="frame-title">Reviews (2)</h3>
                        <ul class="review-list">
                            <li class="review-item">
                                <div class="review-media"><a class="review-avatar"
                                        href="https://mironmahmud.com/greeny/assets/ltr/product-simple.html#"><img
                                            src="./Product Simple - Greeny_files/01(1).jpg" alt="review"></a>
                                    <h5 class="review-meta"><a
                                            href="https://mironmahmud.com/greeny/assets/ltr/product-simple.html#">miron
                                            mahmud</a><span>June 02, 2020</span></h5>
                                </div>
                                <ul class="review-rating">
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rate-blank"></li>
                                </ul>
                                <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus
                                    hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis
                                    dolores nulla excepturi ea nobis!</p>
                                <form class="review-reply"><input type="text"
                                        placeholder="reply your thoughts"><button><i
                                            class="icofont-reply"></i>reply</button></form>
                                <ul class="review-reply-list">
                                    <li class="review-reply-item">
                                        <div class="review-media"><a class="review-avatar"
                                                href="https://mironmahmud.com/greeny/assets/ltr/product-simple.html#"><img
                                                    src="./Product Simple - Greeny_files/02(1).jpg" alt="review"></a>
                                            <h5 class="review-meta"><a
                                                    href="https://mironmahmud.com/greeny/assets/ltr/product-simple.html#">labonno
                                                    khan</a><span><b>author -</b>June 02, 2020</span></h5>
                                        </div>
                                        <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque
                                            blanditiis dolores nulla excepturi ea nobis!</p>
                                        <form class="review-reply"><input type="text"
                                                placeholder="reply your thoughts"><button><i
                                                    class="icofont-reply"></i>reply</button></form>
                                    </li>
                                    <li class="review-reply-item">
                                        <div class="review-media"><a class="review-avatar"
                                                href="https://mironmahmud.com/greeny/assets/ltr/product-simple.html#"><img
                                                    src="./Product Simple - Greeny_files/03(1).jpg" alt="review"></a>
                                            <h5 class="review-meta"><a
                                                    href="https://mironmahmud.com/greeny/assets/ltr/product-simple.html#">tahmina
                                                    bonny</a><span>June 02, 2020</span></h5>
                                        </div>
                                        <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque
                                            blanditiis dolores nulla excepturi ea nobis!</p>
                                        <form class="review-reply"><input type="text"
                                                placeholder="reply your thoughts"><button><i
                                                    class="icofont-reply"></i>reply</button></form>
                                    </li>
                                </ul>
                            </li>
                            <li class="review-item">
                                <div class="review-media"><a class="review-avatar"
                                        href="https://mironmahmud.com/greeny/assets/ltr/product-simple.html#"><img
                                            src="./Product Simple - Greeny_files/04(1).jpg" alt="review"></a>
                                    <h5 class="review-meta"><a
                                            href="https://mironmahmud.com/greeny/assets/ltr/product-simple.html#">shipu
                                            shikdar</a><span>June 02, 2020</span></h5>
                                </div>
                                <ul class="review-rating">
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rate-blank"></li>
                                </ul>
                                <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus
                                    hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis
                                    dolores nulla excepturi ea nobis!</p>
                                <form class="review-reply"><input type="text"
                                        placeholder="reply your thoughts"><button><i
                                            class="icofont-reply"></i>reply</button></form>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="product-details-frame">
                        <h3 class="frame-title">Đánh giá sản phẩm</h3>
                        <form method="post" action="{{route('rate.add')}}" class="review-form">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="star-rating">
                                        <input value="1" type="radio" name="rating-oke" id="star-1">
                                        <label for="star-1"> </label>
                                        <input value="2" type="radio" name="rating-oke" id="star-2">
                                        <label for="star-2"></label>
                                        <input value="3" type="radio" name="rating-oke" id="star-3">
                                        <label for="star-3"></label>
                                        <input value="4" type="radio" name="rating-oke" id="star-4">
                                        <label for="star-4"></label>
                                        <input value="5" type="radio" name="rating-oke" id="star-5">
                                        <label for="star-5"></label>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group"><textarea class="form-control"
                                            placeholder="Nội dung"></textarea></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group"><input type="text" class="form-control" placeholder="Tên">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group"><input type="email" class="form-control"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-12"><button type="submit" class="btn btn-inline"><i
                                            class="icofont-water-drop"></i><span>Đánh giá</span></button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            ClassicEditor.ClassicEditor
        </script>

        @endsection

@extends('frontend.master')
@section('content')
@foreach ($newschitiet as $id=>$item )
@endforeach

<link rel="stylesheet" href="{{asset('frontend/css/blog-details.css')}}">
<section class="inner-section blog-details-part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-10">
                <article class="blog-details"><a class="blog-details-thumb" href="#"><img src="{{asset($item['hinh'])}}"
                            alt="blog"></a>
                    <div class="blog-details-content">
                        <ul class="blog-details-meta">
                            <li><i class="icofont-ui-calendar"></i><span>february 02, 2021</span></li>
                            <li><i class="icofont-user-alt-3"></i><span>Miron mahmud</span></li>
                            <li><i class="icofont-speech-comments"></i><span>25 comments</span></li>
                            <li><i class="icofont-share-boxed"></i><span>34 share</span></li>
                        </ul>
                        <h2 class="blog-details-title">{{$item['tieude']}}</h2>

                        <p class="blog-details-desc">{!!$item['mota']!!}</p>

            </div>
        </div>
    </div>
</section>

@php
            $blogsingle = session('blogsingle ');

            unset($blogsingle[$id]);


        // cap nhat lai cai gio
        session(['blogsingle' => $blogsingle]);
        @endphp

@endsection

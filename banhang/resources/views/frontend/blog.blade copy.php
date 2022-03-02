@extends('frontend.master')
@section('content')


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">{{$title}}</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
          @foreach ( $news as $item )


        <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
            <div class="blog-entry d-md-flex">
                <a href="blog-single.html" class="block-20 img" style=" width:245px; height:171px;
                background-image: url({{asset($item->hinhdaidien) }});">
            </a>
            <div class="text p-4 " style="width:245px; height:171px;">
                <div class="meta">
                    <p><span class="fa fa-calendar"></span> 23 April 2020</p>
                </div>
              <h3 class="heading mb-3"><a href="#">{{$item->tieude }}</a></h3>
              <p>{{$item->mota}}</p>
              <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

            </div>
          </div>
        </div>
        @endforeach

        </div>

      </div>
<style>

.bg-light{
    background-color: none!important;
}
body{
    background: none;
}
</style>

    </div>
  </section>
  @endsection

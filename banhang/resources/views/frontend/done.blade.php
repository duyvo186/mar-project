@extends('frontend.master')
@section('content')

    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            {{-- <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Checkout <i class="fa fa-chevron-right"></i></span></p> --}}
          {{-- <h2 class="mb-0 bread">Checkout</h2> --}}
          @if (session('msg'))
              <div class="col-12 alert alerts-{{session('type')}}">{!!session('msg')!!}</div>
              @endif
        </div>
      </div>
    </div>

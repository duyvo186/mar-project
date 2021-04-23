@extends('frontend.master')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Checkout <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">{{$title}}</h2>
          @if (session('msg'))
              <div class="col-12 alert alert-{{session('type')}}">{!!session('msg')!!}</div>
              @endif
        </div>
      </div>
    </div>
  </section>

            <div class="col-md-12 order-md-1">
                <form action="{{route('f.sendmail')}}" method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Họ tên</label>
                            <input type="text" class="form-control" id="ten" name="ten" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Email nhận</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Tiêu đề</label>
                            <input type="text" class="form-control" id="tieude" name="tieude" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nội dung</label>
                            <textarea type="text" class="form-control" id="noidung" name="noidung"
                                required></textarea>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    </div>


                    <hr class="mb-4">
                    @csrf
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Hoàn tất</button>
                </form>
            </div>
@endsection

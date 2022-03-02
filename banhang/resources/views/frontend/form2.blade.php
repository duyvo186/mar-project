@extends('frontend.master')
@section('content')


            <div class="col-md-12 order-md-1 m-5">
                <h4 class="mb-3 title">test ajax</h4>
{{-- <form action="{{route('f.f22')}}" method="post"> --}}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">test</label>
                            <input type="text" class="form-control" id="ten" placeholder=""
                                >
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">nhan ket qua tu server</label>
                            <input type="text" class="form-control" id="kq" name="ten" placeholder="" value=""
                                >
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    <hr class="mb-4">
                     {{-- @csrf --}}
                     {{-- @csrf --}}
                    {{-- {{csrf_field()}} --}}
                    <input id="csrf"type="hidden" value="{{csrf_token()}}"/>
                    <a id="btntest"class="btn btn-primary btn-lg btn-block" type="submit">Hoàn tất</a>


            </div>
        {{-- </form> --}}
            {{-- <script src="{{asset('public/frontend/js/ajax.js')}}"></script> --}}
@endsection


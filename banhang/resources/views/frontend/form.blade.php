@extends('frontend.master')
@section('content')

            <div class="col-md-12 order-md-1 m-5">
                <h4 class="mb-3">test khong ajax</h4>
                <form action="{{route('f.f11')}}" method="post">
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
                            <input type="text" class="form-control" id="ten" name="ten" placeholder="" value="{{$d??''}}"
                                >
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                    <hr class="mb-4">
                    @csrf
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Hoàn tất</button>
                </form>
            </div>
@endsection

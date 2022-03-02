@extends('frontend.master')
@section('content')
<!-- checkout page -->
<div class="privacy py-sm-5 py-4">
    <div class="container">
        <div class="py-5 text-center">

            <h2>{{$title}}</h2>
            <p class="lead">Vui lòng nhập đầy đủ thông tin để tiến hành đặt hàng</p>
            @if (session('msg'))
            <div class="col-12 alert alert-{{session('type')}}">{!!session('msg')!!}</div>
          @endif
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Giỏ hàng</span> <a href="{{route('cart.index')}}">Sửa</a>
                    <span class="badge badge-primary badge-pill">{{count($cart)}}</span>
                </h4>
                <ul class="list-group mb-3">
                    @php $tong = 0; @endphp
                    @foreach ($cart as  $item)
                    @php $tong+= $item['gia']*$item['soluongmua'];@endphp
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{$item['ten']}}</h6>
                            <span class="text-muted">x</span><strong>{{$item['soluongmua']}}</strong>
                        </div>
                        <span class="text-danger"><strong>{{number_format($item['gia'])}}</strong></span>
                    </li>
                    @endforeach


                    <li class="list-group-item d-flex justify-content-between">
                        <span>Tổng thành tiền (VNĐ)</span>
                        <strong  class="text-danger">{{number_format($tong)}}</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Áp dụng</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Thông tin mua hàng</h4>
                <form action="{{route('checkout.submit')}}" method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Họ và tên</label>
                            <input type="text" class="form-control" id="ten" name="ten" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="lastName">Điện thoại</label>
                                <input type="text" class="form-control" id="sdt" name="sdt" placeholder="" value=""
                                    required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="lastName">Địa chỉ</label>
                                <input type="text" class="form-control" id="diachi" name="diachi" placeholder=""
                                    value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input onchange="if(this.checked){$('#thongtinnhan').removeClass('d-none')}else{$('#thongtinnhan').addClass('d-none')}" type="checkbox" class="custom-control-input" id="khac">
                        <label class="custom-control-label" for="khac">Thông tin nhận khác mua</label>
                    </div>
                    <hr class="mb-4">
                    <div id="thongtinnhan" class="d-none">
                        <h4 class="mb-3">Thông tin nhận hàng</h4>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Họ và tên</label>
                                <input type="text" class="form-control" id="tennhan" name="tennhan" placeholder="" value=""
                                    >
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Email</label>
                                <input type="email" class="form-control" id="emailnhan" name="emailnhan" placeholder="" value=""
                                    >
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="lastName">Điện thoại</label>
                                    <input type="text" class="form-control" id="sdtnhan" name="sdtnhan" placeholder="" value=""
                                        >
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="lastName">Địa chỉ</label>
                                    <input type="text" class="form-control" id="diachinhan" name="diachinhan" placeholder=""
                                        value="" >
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="lastName">Ghi chú (tối đa 100 ký tự)</label>
                                <textarea class="form-control" id="ghichu" name="ghichu" rows="3" placeholder=""
                                   ></textarea>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-3">Phương thức thanh toán</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="cod" name="paymentMethod"  value="Giao hàng nhận tiền" type="radio" class="custom-control-input" checked
                                required>
                            <label class="custom-control-label" for="credit">COD</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="atm" disabled  value="Thẻ nội địa"  name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="debit">ATM</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="visa" disabled  value="Thể quốc tế"  name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="paypal">Visa/Master Card</label>
                        </div>
                    </div>
                    <hr class="mb-4">
                    @csrf
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Hoàn tất</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //checkout page -->
@endsection

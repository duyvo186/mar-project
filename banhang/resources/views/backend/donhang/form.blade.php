@extends('backend.master')
@section('content')
 <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{$pagename}}</h1>
  </div>
  @if (session('msg'))
  <div class="col-12 alert alert-{{session('type')}}">{{session('msg')}}</div>
@endif
@if($errors->any())
<div class="col-12 alert alert-danger">
    @foreach ($errors->all() as $error)
        {{$error}}<br>
    @endforeach
</div>
@endif
  <form method="post" action="{{$action}}">

      <div class="form-row">
          <div class="col-lg-6">
              <label for="">Tên</label>
              <input type="text" name="ten" onchange="stralias('ten','tenrutgon')" id="ten" class="form-control" placeholder="" value="{{$item->ten??old('ten')}}">
              @error('ten')
              <span class="text-danger d-block">{{$message}}</span>
         @enderror
              <label for="">Địa Chỉ Nhận</label>
              <input type="text" name="diachinhan" id="diachinhan" class="form-control" placeholder="" value="{{$item->diachinhan??old('diachinhan')}}">
              @error('diachinhan')
              <span class="text-danger d-block">{{$message}}</span>
         @enderror
          </div>


    <div class="col-lg-6">
        <label style="margin-top:30px;"for="">Tình Trạng Đơn Hàng</label>
        <select style="margin-left:30px;" class="checkdonhang" required class="form-control" name="trangthai" id="">
              <option value="">Chọn tình trạng</option>
              <option  @if(isset($item)  && $item->trangthai==1) selected="selected" @endif name="trangthai" value="1">Chưa Hoàn Thành</option>
              <option  @if(isset($item)  && $item->trangthai==0) selected="selected" @endif name="trangthai" value="0">Đã Hoàn Thành</option>
        </select>
    </div>

      </div>



      <div class="form-row">
        <div class="col-lg-6">
            <label for="">Số Điện Thoại Nhận</label>
            <input type="text" name="sdtnhan"  id="sdtnhan" class="form-control" placeholder="" value="{{$item->sdtnhan??old('sdtnhan')}}">
            @error('sdtnhan')
            <span class="text-danger d-block">{{$message}}</span>
       @enderror
            <label for="">Số Điện Thoại Giao</label>
            <input type="text" name="sdt" id="sdt" class="form-control" placeholder="" value="{{$item->sdt??old('sdt')}}">
            @error('sdt')
            <span class="text-danger d-block">{{$message}}</span>
       @enderror
        </div>
        <div class="col-lg-6">
            <label for="">Phí Ship</label>
            <input type="text" name="phiship"  id="phiship" class="form-control" placeholder="" value="{{$item->phiship??old('phishipn')}}">
            @error('phiship')
            <span class="text-danger d-block">{{$message}}</span>
       @enderror
            <label for="">Ghi Chú</label>
            <input type="text" name="ghichu" id="ghichu" class="form-control" placeholder="" value="{{$item->ghichu??old('ghichu')}}">
            @error('ghichu')
            <span class="text-danger d-block">{{$message}}</span>
       @enderror
        </div>

    {{-- <div class="col-lg-6">
      <label style="margin-top:30px;"for="">Tình Trạng Đơn Hàng</label>

          <select style="margin-left:30px;" class="checkdonhang" required class="form-control" name="nhacungcap" id="">




            <option  @if(isset($item)  && $item->trangthai==1) selected="selected" @endif name="trangthai" value="1">Chưa Hoàn Thành</option>
            <option  @if(isset($item)  && $item->trangthai==0) selected="selected" @endif name="trangthai" value="0">Đã Hoàn Thành</option>

         </select>
  </div> --}}

    </div>

      <div class="form-group">
          <label for="">email</label>
          <input type="text" name="email" id="" class=" form-control" placeholder="" value="{{$item->email??''}}">
      </div>



      @csrf
      @method($method)
      <div  class="form-group">
          <input type="submit" class="btn btn-sm btn-success" value="Ghi">
          <a href="{{route($route.'.index')}}" class="btn btn-sm btn-info">Bỏ qua</a>
      </div>
  </form>
@endsection

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
              <label for="">Tên rút gọn</label>
              <input type="text" name="tenrutgon" id="tenrutgon" class="form-control" placeholder="" value="{{$item->tenrutgon??old('tenrutgon')}}">
              @error('tenrutgon')
              <span class="text-danger d-block">{{$message}}</span>
         @enderror
          </div>

      </div>


{{--
      <div class="form-group">
        <label for="">Mô tả</label>
        <textarea class="form-control" name="mota" id="mota" rows="3">{{$item->mota??''}}</textarea>
        <script>CKEDITOR.replace('mota')</script>
    </div>

      <div class="form-group">
          <label for="">Tiêu đề</label>
          <input type="text" name="tieude" id="" class=" form-control" placeholder="" value="{{$item->tieude??''}}">
      </div>
      <div class="form-group">
          <label for="">Từ khóa</label>
          <input type="text" name="tukhoa" id="" class=" form-control" placeholder="" value="{{$item->tukhoa??''}}">
      </div>
      <div class="form-group">
          <label for="">Mô tả tìm kiếm</label>
          <textarea class="form-control" name="motatimkiem" id="" rows="3">{{$item->motatimkiem??''}}</textarea>
      </div>
      <div class="form-group">
          <label for="">Hình chia sẻ</label>
          <input type="text" name="hinhshare" id="" class=" form-control" placeholder="" value="{{$item->hinhchiase??''}}">
      </div>
      <div class="form-group">
          <label for="">Trạng thái</label>
          <label><input type="radio" @if(isset($item)  && $item->trangthai==1) checked @endif name="trangthai" checked value="1" id="" > Hiển thị</label>
          <label><input type="radio" @if(isset($item)  &&  $item->trangthai==0) checked @endif name="trangthai" value="0" id="" > Ẩn</label>
      </div> --}}
      @csrf
      @method($method)
      <div  class="form-group">
          <input type="submit" class="btn btn-sm btn-success" value="Ghi">
          <a href="{{route($route.'.index')}}" class="btn btn-sm btn-info">Bỏ qua</a>
      </div>
  </form>
@endsection

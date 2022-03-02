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
      <div class="form-group">
          <label for="">Hình đại diện</label>
          <img src="{{$item->hinhdaidien??old('hinhdaidien')}}" width="100"/> (600x600px)
          <input type="hidden" name="hinhdaidien" id="hinhdaidien" class="form-control" placeholder="" value="{{$item->hinhdaidien??old('hinhdaidien')}}">
          <button class="btn btn-sm btn-success" type="button" onclick="openfile('hinhdaidien')">Chọn hình</button>
           @error('hinhdaidien')
                <span class="text-danger d-block">{{$message}}</span>
           @enderror
      </div>
      <div class="form-row">

          <div class="col-lg-6">
            <label for="">Tiêu đề</label>
            <input type="text" name="tieude" id="" class=" form-control" placeholder="" value="{{$item->tieude??''}}">
        </div>

      </div>



      <div class="form-group">
        <label for="">Mô tả</label>
        <textarea class="form-control" name="mota" id="mota" rows="3">{{$item->mota??''}}</textarea>
        <script>CKEDITOR.replace('mota')</script>
    </div>





      <div class="form-group">
          <label for="">Trạng thái</label>
          <label><input type="radio" @if(isset($item)  && $item->trangthai==1) checked @endif name="trangthai" checked value="1" id="" > Hiển thị</label>
          <label><input type="radio" @if(isset($item)  &&  $item->trangthai==0) checked @endif name="trangthai" value="0" id="" > Ẩn</label>
      </div>
      @csrf
      @method($method)
      <div class="form-group">
          <input type="submit" class="btn btn-sm btn-success" value="Ghi">
          <a href="{{route($route.'.index')}}" class="btn btn-sm btn-info">Bỏ qua</a>
      </div>
  </form>
@endsection

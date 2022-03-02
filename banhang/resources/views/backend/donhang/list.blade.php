@extends('backend.master')
@section('content')
 <!-- Page Heading -->
  <div class="row mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{$pagename}} ({{$collection->total()}} dòng)</h1>
    @if (session('msg'))
        <div class="col-12 alert alert-{{session('type')}}">{{session('msg')}}</div>
    @endif
  </div>
  {{-- <a href="{{route($route.'.create')}}" class="btn btn-sm btn-primary">Thêm</a> --}}
  <div class="row mt-3">
        <div class="col-12">
            <form action="" method="get">
                <div class="form-row">
                    <div class="form-group col-9">
                        <input type="text" name="key" id="" class=" form-control" placeholder="Từ khóa" value="{{Request::input('key')}}">
                    </div>
                    <div class="form-group col-3 text-right">
                        <input type="submit" class="btn btn-sm btn-success" value="Tìm">
                        <a href="{{route($route.'.index')}}" class="btn btn-sm btn-danger">Tất cả</a>
                    </div>
                </div>
            </form>
        </div>
  </div>
  <table class="table">
      <thead>
          <tr>
              <th>Mã</th>

              <th>Mã Đơn Hàng</th>
              <th>Mã Sản Phẩm</th>

              <th>Số Lượng</th>

              <th>Gía</th>
              <th>Tình Trạng Đơn Hàng</th>
              <th>Thời Gian Đặt Hàng</th>
          </tr>
      </thead>
      <tbody>
        @php
$tt='Hoàn Thành'
        @endphp


          @foreach ($collection as $i=>$item)
          <tr>
            <td scope="row">{{$item->ma}}</td>

            <td>{{$item->madonhang}}</td>
            <td>{{$item->masanpham}}</td>

            <td>{{$item->soluong}}</td>
            <td>{{$item->gia}}</td>

            <td @if(isset($item)  && $item->trangthai==1)
                @php  $tt='Chưa Hoàn Thành';  @endphp
                @endif>{{$tt}}</td>





            <td>{{$item->ngaycapnhat}}</td>
            <td>
                <a href="{{route($route.'.edit',$item->madonhang,$item->ma)}}" class="btn btn-sm btn-success">Sửa</a>
                <form class="d-inline" method="POST" action="{{route($route.'.destroy',$item->ma)}}">
                  @csrf
                  @method('DELETE')
                <button onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-sm btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
          @endforeach


      </tbody>
  </table>
{{$collection->appends(Request::all())->links()}}
@endsection

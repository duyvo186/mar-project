@extends('backend.master')
@section('content')
 <!-- Page Heading -->
  <div class="row mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{$pagename}} ({{$collection->total()}} dòng)</h1>
    @if (session('msg'))
        <div class="col-12 alert alert-{{session('type')}}">{{session('msg')}}</div>
    @endif
  </div>
  <a href="{{route($route.'.create')}}" class="btn btn-sm btn-primary">Thêm</a>
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

              <th>Tên</th>
              <th>Tiêu Đề</th>

              <th>Từ Khóa</th>

              <th>Tác vụ</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($collection as $i=>$item)
          <tr>
            <td scope="row">{{$item->ma}}</td>

            <td>{{$item->ten}}</td>
            <td>{{$item->tieude}}</td>

            <td>{{$item->tukhoa}}</td>
            <td>
                <a href="{{route($route.'.edit',$item->ma)}}" class="btn btn-sm btn-success">Sửa</a>
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

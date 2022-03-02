{{-- @if($cart)
@php $tong = 0; @endphp
@php $tongtest = 0; @endphp

@php $tongsoluong=$item['soluongmua']; $tongtest+=$tongsoluong; @endphp
@php $tt = $item['gia']*$item['soluongmua']; $tong+=$tt; @endphp --}}

    {{-- <p id="demo" > </p>
    <script>
        document.getElementById("demo").innerHTML =
        "The full URL of this page is:<br>" + window.location.href;
        </script> --}}
{{-- <form action="" method="get">
    <div class="form-row">
        <div class="form-group col-9">
            <input type="text" name="key" id="" class=" form-control" placeholder="Từ khóa"
                >
        </div>
        <div class="form-group col-3 text-right">
            <input  class="btn btn-sm btn-success" value="Tìm">
            <a href="{{route('nt.index')}}" class="btn btn-sm btn-danger">Tất cả</a>
        </div>
    </div>
</form> --}}
{{-- @foreach ($cart as $id=>$item) --}}

<div class="d-flex justify-content-center align-items-center" style="
">
@php $tong = 0; @endphp
        @php $tongtest = 0; @endphp
        @foreach ($cart as $id=>$item)

        @php $tongsoluong=$item['soluongmua']; $tongtest+=$tongsoluong; @endphp
        @endforeach
                    <small>{{$tongtest}} </small>

                    {{-- @endif --}}
                    {{-- @endforeach --}}
                    {{-- @else
                    @php
                    $cart=0
                    @endphp
                    @endif --}}
                    {{-- @endif --}}

</div>

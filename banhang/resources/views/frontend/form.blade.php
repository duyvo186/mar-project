

    @if($cart)
    <div class="cart-header">
        <div style="font-size: 18px;" class="cart-total"></i><span> Giỏ Hàng </span></div>

        <button class="cart-close"><i class="icofont-close"></i></button>
    </div>

    <ul class="cart-list">

        @php $tong = 0; @endphp
        @php $tongtest = 0; @endphp
        @foreach ($cart as $id=>$item)
        @php $tongsoluong=$item['soluongmua']; $tongtest+=$tongsoluong; @endphp
        @php $tt = $item['gia']*$item['soluongmua']; $tong+=$tt; @endphp
        <li id="maminicart" class="cart-item" >
            <div class="cart-media"><a href="#"><img id="hinh" src="{{$item["hinh"]}}" alt="product"></a><button
                    class="cart-delete" onclick="window.location.href='{{route('cart.del',$id)}}';"><i
                        class="far fa-trash-alt"></i></button></div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a id="ten" href="product-single.html" >{{$item["ten"]}}</a></h6>
                    <p id="gia">{{number_format($item["gia"])}}</p>
                </div>
                <div class="cart-action-group">
                    {{-- <input   type="hidden" name="id" value="{{$item->ma}}" /> --}}
                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                class="icofont-minus"></i></button><input id="soluongmua" class="action-input" title="Quantity Number"
                            type="text" name="soluongmua[{{$id}}]" value="{{$item['soluongmua']}}"><button
                            class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                    <h6>{{number_format($tt)}}</h6>
                </div>
            </div>
        </li>

        @endforeach


    </ul>


    <div class="cart-footer"><button class="coupon-btn">Do you have a coupon code?</button>

        <form class="coupon-form"><input type="text" placeholder="Enter your coupon code"><button
                type="submit"><span>apply</span></button></form><a class="cart-checkout-btn"
            href="{{route('checkout.index')}}"><span class="checkout-label">Thanh Toán</span><span
                class="checkout-price">{{$tong}}</span></a>
    </div>
    @else
    @php
    $cart=0
    @endphp
    @endif






<!-- Popup: Shopping cart items -->
<div class="modal fade popup-cart" id="popup-cart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="container">
            <div class="cart-items">
                <div class="cart-items-inner">
                    @php $totalPrice = 0; @endphp
                    @if ($cart)
                        @foreach($cart as $product)
                            <div class="media">
                                <a class="pull-left" href="#"><img class="media-object item-image" src="/upload/product/{{$product['photo']}}" alt=""></a>
                                <p class="pull-right item-price">{{number_format($product['price'])}} đ</p>
                                <div class="media-body">
                                    <h4 class="media-heading item-title"><a href="#">{{$product['name']}}</a></h4>
                                    <h5 class="item-desc">Số lượng: {{$product['quantity']}}</h5>
                                </div>
                            </div>
                            @php $totalPrice += $product['price'] * $product['quantity'] @endphp
                        @endforeach
                    @endif
                    <div class="media">
                        <p class="pull-right item-price">{{number_format($totalPrice)}} đ</p>
                        <div class="media-body">
                            <h4 class="media-heading item-title summary">Thành tiền</h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <div>
                                <a href="#" class="btn btn-theme btn-theme-dark" data-dismiss="modal">Close</a>
                                <a href="{{route('store.view_cart')}}" class="btn btn-theme btn-theme-transparent btn-call-checkout">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Popup: Shopping cart items -->
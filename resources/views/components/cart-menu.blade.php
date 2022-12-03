<div id="_desktop_cart">
    <div class="blockcart cart-preview active"
        data-refresh-url="//demo.bestprestashoptheme.com/savemart/ar/module/ps_shoppingcart/ajax">
        <div class="header-cart">
            <div class="cart-left">
                <div class="shopping-cart"><i class="zmdi zmdi-shopping-cart"></i>
                </div>
                <div class="cart-products-count">
                    {{ $items->count() }}
                </div>
            </div>
            <div class="cart-right d-flex flex-column align-self-end ml-13">
                <span class="title-cart">سلة الشراء</span>
                <span class="cart-item"> items</span>
            </div>
        </div>
        <div class="cart_block has-scroll">
            <div class="cart-block-content">
                <ul>
                    @foreach ($items as $item)
                        <li>
                            <div class="media">
                                <img class="d-flex product-image"
                                    src="{{ asset('uploads/Products/' . $item->product->image) }}" alt=""
                                    title="">
                                <div class="media-body">
                                    <div class="product-name">{{ $item->product->name }}</div>
                                    <div class="group-price">
                                        <span class="product-price">{{ $item->product->price }}
                                            <sub><span class="quantity badge badge-success mt-3"
                                                    style="font-size: 1.2rem"> {{ $item->quantity }}</span></sub>
                                        </span>
                                    </div>
                                    <a class="remove-item remove-from-cart" data-id="{{ $item->id }}"
                                        href="">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                    <span class="quantity"> {{ $item->quantity }}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="cart-subtotals">
                    <div class="products">
                        <span class="badge badge-primary text-bold font-weight-bold p-1 mb-2"
                            style="font-size: 1.2rem">إجمالي الطلب:</span>
                        <span class="">{{ $total }}</span>
                    </div>
                    <div class="shipping">
                        <span class="badge badge-primary text-bold font-weight-bold p-1"
                            style="font-size: 1.2rem">الشحن:</span>
                        <span class="">مجاناً</span>
                    </div>
                </div>
                <div class="cart-total">
                    <span class="badge badge-primary text-bold font-weight-bold p-1"
                        style="font-size: 1.5rem">الإجمالي:</span>
                    <span class="">{{ $total }}</span>
                </div>
                <div class="cart-buttons d-flex">
                    <a href="{{ route('cart.index') }}" class="btn btn-primary">السلة</a>
                    <a href="{{ route('checkout') }}" class="btn btn-primary">اتمام</a>
                </div>
            </div>
        </div>
    </div>
</div>



<!---  End if categories is Exists    -->





{{-- <!--  Start  cart is Empty --->
        <div class="cart_block ">
            <div class="cart-block-content">
                <div class="no-items">
                    No products in the cart
                </div>
            </div>
        </div>
        <!--  End  cart is Empty ---> --}}


</div>
</div>

<script>
    const csrf_token = "{{ csrf_token() }}";
</script>
<script src="{{ asset('js/cart.js') }}"></script>

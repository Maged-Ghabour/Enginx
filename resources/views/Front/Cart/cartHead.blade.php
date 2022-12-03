{{-- <div id="_desktop_cart">
    <div class="blockcart cart-preview active"
        data-refresh-url="//demo.bestprestashoptheme.com/savemart/ar/module/ps_shoppingcart/ajax">
        <div class="header-cart">
            <div class="cart-left">
                <div class="shopping-cart"><i class="zmdi zmdi-shopping-cart"></i>
                </div>
                <div class="cart-products-count">0</div>
            </div>
            <div class="cart-right d-flex flex-column align-self-end ml-13">
                <span class="title-cart">سلة الشراء</span>
                <span class="cart-item"> items</span>
            </div>
        </div>

        <!--  Start if categories is Exists    -->

        <div class="cart_block has-scroll">
            <div class="cart-block-content">



                <ul>
                        @foreach ($cart -> get() as $item )
                        <li>
                            <div class="media">
                                <img class="d-flex product-image"
                                    src="{{$item ->product->image}}"
                                    alt="" title="">
                                <div class="media-body">
                                    <div class="product-name">{{$item->product->name}}</div>
                                    <div class="group-price">
                                        <span class="product-price">{{$item->product->price}}</span>
                                        <span class="quantity"> {{$item->quantity}}</span>
                                    </div>
                                    <a class="remove-from-cart" rel="nofollow"
                                        href="https://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق?delete=1&amp;id_product=2&amp;id_product_attribute=60&amp;token=28add935523ef131c8432825597b9928"
                                        data-link-action="remove-from-cart" title="إزالة من سلة المشتريات">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        @endforeach

                </ul>



                <div class="cart-subtotals">
                    <div class="products">
                        <span class="label">إجمالي الطلب:</span>
                        <span class="value">{{$item->quantity * $item->product->price}}</span>
                    </div>
                    <div class="shipping">
                        <span class="label">الشحن:</span>
                        <span class="value">مجاناً</span>
                    </div>
                </div>
                <div class="cart-total">
                    <span class="label">الإجمالي:</span>
                    <span class="value">{{$cart->total()}}</span>
                </div>
                <div class="cart-buttons d-flex">
                    <a href=""
                        class="btn btn-primary">View cart</a>
                    <a href="#" class="btn btn-primary">اتمام
                        الطلب</a>
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
{{--

    </div>
</div>
 --}} --}}

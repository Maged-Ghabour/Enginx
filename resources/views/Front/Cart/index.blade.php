@include('Front.includes.head')
@include('Front.includes.header-top')
@include('Front.includes.header-center')
@include('Front.includes.header-bottom')



<div id="wrapper-site">


    <!-- Start Breadcrumb -->
    <nav data-depth="1" class="breadcrumb-bg" style="background-color: #f3f3f3">
        <div class="container no-index">
            <div class="breadcrumb">

                <ol>
                    <li>
                        <a itemprop="item" href="#">
                            <span itemprop="name">الصفحة الرئيسية</span>
                        </a>
                    </li>
                </ol>

            </div>
        </div>
    </nav>

    <!-- End Breadcrumb -->



    <div class="container no-index">

        <div class="row">
            <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <section id="main">
                    <h1 class="page-title">سلة الشراء</h1>
                    <div class="cart-grid row">

                        <!-- Left Block: cart product informations & shpping -->
                        <div class="cart-grid-body col-xs-12 col-lg-9">

                            <!-- cart products detailed -->
                            <div class="cart-container">


                                <div class="cart-overview js-cart">
                                    <ul class="cart-items list-group">



                                    <!-- Start Item Loop --->
                                        @foreach ($cart->get() as $item )
                                            <li class="cart-item list-group p-5" style="background:#eff5f6" id="{{$item->id}}">

                                                <div class="product-line-grid row spacing-10">
                                                    <!--  product left content: image-->
                                                    <div class="product-line-grid-left col-sm-2 col-xs-4">
                                                        <span class="product-image media-middle">
                                                            <img class="img-fluid"
                                                                src="{{asset('uploads/Products/'. $item->product->image)}}"
                                                                alt="{{$item->product->name}}">
                                                        </span>
                                                    </div>

                                                    <!--  product left body: description -->
                                                    <div class="product-line-grid-body col-sm-10 col-xs-8">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-xs-12">
                                                                <div class="product-line-info">
                                                                    <a class="label"
                                                                        href="#"
                                                                    >{{$item->product->name}}
                                                                    </a>
                                                                </div>

                                                                <div class="product-line-info product-price">
                                                                    <span class="value">{{$item->product->price}}</span>
                                                                </div>



                                                            </div>
                                                            <div
                                                                class="text-center product-line-actions col-sm-6 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-sm-9 col-xs-12">
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-xs-6 qty">
                                                                                <div class="label">الكمـية :</div>
                                                                                <div
                                                                                    class="input-group bootstrap-touchspin">
                                                                                    <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>

                                                                                        <input id="quantity_wanted" class="item-quantity form-control" type="text" value="{{$item->quantity}}"
                                                                                            data-id="{{$item->id}}"   name="quantity" min="1" style="display: block;">

                                                                                       <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                                                                        <span class="input-group-btn-vertical">
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-xs-6 price">
                                                                                <div class="label">الإجمالي:</div>
                                                                                <div class="product-price total">
                                                                                    {{$item->product->price * $item->quantity }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div  class="col-sm-3 col-xs-12 text-xs-right align-self-end">
                                                                        <div class=" ">
                                                                            <a class="remove-item"  data-id="{{$item->id}}"  href="">

                                                                                <i class="fa fa-trash-o"></i>

                                                                            </a>



                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>

                                        @endforeach

                                    <!-- End Item Loop --->

                                    </ul>
                                </div>


                            @if(session("cart_added"))

                                <!-- Start Modal --->


                                {{-- <div id="blockcart-modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block; padding-right: 17px;">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title text-xs-center" id="myModalLabel"><i class="fa fa-check"></i>تم أضافة المنتج بنجاح إلى سلة التسوق الخاصة بك</h4>
                                          <button type="button" id="ModalClose" class="close" data-dismiss="modal" aria-label="Close">
                                            <i class="material-icons close">close</i>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                            <div class="col-md-6 divide-right">
                                              <div class="row no-gutters">
                                                <div class="col-md-5">
                                                  <img class="product-image img-fluid" src="https://demo.bestprestashoptheme.com/savemart/34-cart_default/the-best-is-yet-to-come-framed-poster.jpg" alt="" title="" itemprop="image">
                                                </div>
                                                <div class="col-md-7">
                                                  <div class="h5 product-name">Mauris molestie porttitor diam</div>
                                                  <div class="product-price">30.00&nbsp;UK£</div>

                                                                    <span>الحجم: ص</span><br>
                                                                    <span>: احمر</span><br>
                                                                  <p>الكميَّة:&nbsp;1</p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="cart-content">
                                                                <p class="cart-products-count">هناك 3 في سلتك.</p>
                                                              <p>إجمالي المنتجات:&nbsp;76.80&nbsp;UK£</p>
                                                <p>تكلفة الشحن&nbsp;مجاناً </p>
                                                              <p>الإجمالي:&nbsp;76.80&nbsp;UK£ (شامل للضريبة)</p>

                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-primary" data-dismiss="modal">الاستمرار في التسوق</button>
                                          <a href="//demo.bestprestashoptheme.com/savemart/ar/عربة التسوق?action=show" class="btn btn-primary"><i class="fa fa-check-square-o" aria-hidden="true"></i>اتمام الطلب</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div> --}}
                                <!-- End Modal --->

                            @endif





                            </div>





                            <a class="btn btn-primary mt-5" href="{{route('Product.index')}}">
                                الاستمرار في التسوق
                            </a>






                            <!-- shipping informations -->



                        </div>

                        <!-- Right Block: cart subtotal & cart total -->
                        <div class="cart-grid-right col-xs-12 col-lg-3">


                            <div class="cart-summary">







                                <div class="cart-detailed-totals">
                                    <div class="cart-summary-products">
                                        <div class="summary-label">هناك عدد من المنتجات في السلة</div>
                                    </div>

                                    <div class="">
                                        <div class="cart-summary-line" id="cart-subtotal-products">
                                            <span class="label js-subtotal">
                                                إجمالي المنتجات:
                                            </span>
                                            <span class="value">{{$cart->total()}} جنية</span>
                                        </div>
                                        <div class="cart-summary-line" id="cart-subtotal-shipping">
                                            <span class="label">
                                                إجمالي الشحن:
                                            </span>
                                            <span class="value">مجاناً</span>
                                            <div><small class="value"></small></div>
                                        </div>
                                    </div>




                                    <div class="">
                                        <div class="cart-summary-line cart-total">
                                            <span class="label">الإجمالي:</span>
                                            <span class="value">{{$cart->total()}} جنية (شامل للضريبة)</span>
                                        </div>

                                    </div>

                                </div>





                                <div class="checkout cart-detailed-actions">
                                    <div class="text-xs-center">
                                        <a href="{{route('checkout')}}" class="btn btn-primary">اتمام الطلب</a>

                                    </div>
                                </div>



                            </div>





                        </div>

                    </div>
                </section>

            </div>
        </div>
    </div>



</div>
@include('Front.includes.footer')
@include('Front.includes.downbar')
@include('Front.includes.scripts')

<script>
    const csrf_token = "{{ csrf_token() }}";
</script>
<script src="{{asset('js/cart.js')}}"></script>




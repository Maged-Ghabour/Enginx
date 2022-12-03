@extends('Front.layouts.app')

@section('title', 'Order')
@section('content')

    <div class="container">
        <section id="wrapper">

            <!-- Start  BreadCrumb --->
            <nav data-depth="1" class="breadcrumb-bg">
                <div class="container no-index">
                    <div class="breadcrumb">

                        <ol>
                            <li itemprop="itemListElement">
                                <a>
                                    <span>الصفحة الرئيسية</span>
                                </a>

                            </li>
                        </ol>

                    </div>
                </div>
            </nav>

            <!-- End BreadCrumb --->
            <div class="container">

                <!----    personal Information           -->
                <section id="content">
                    <div class="row">
                        <div class="col-md-9">


                            <section id="checkout-personal-information-step"  class="checkout-step -current -reachable js-current-step -clickable">


                                <div class="content">



                         <!--- Addressed --->
                <section class="form-fields">


                <form action="{{route('checkout')}}" method="POST">
                    @csrf
                    <h1 class="step-title h3 mb-20 badge badge-default fs-3" style="font-size: 1.5em;padding:10px">
                            المعلومات الشخصية :
                    </h1>

                    {{-- <input type="hidden" name="id_address" value="">


                    <input type="hidden" name="id_customer" value="">


                    <input type="hidden" name="back" value=""> --}}



                              <!--- Billing --->

                    <div class="form-group row no-gutters">
                        <label class="col-md-2 form-control-label mb-xs-5 required">
                            الاسم الأول :
                        </label>
                        <div class="col-md-6">

                         <x-form.input type="text" name="addr[billing][first_name]" placeholder="الاسم الأول"/>


                        </div>

                        <div class="col-md-4 form-control-comment right">
                        </div>
                    </div>


                    <div class="form-group row no-gutters">
                        <label class="col-md-2 form-control-label mb-xs-5 required">
                            الاسم الأخير :
                        </label>
                        <div class="col-md-6">

                            <x-form.input type="text" name="addr[billing][last_name]"  placeholder="الاسم الأخير"/>


                        </div>

                        <div class="col-md-4 form-control-comment right">
                        </div>
                    </div>


                    <div class="form-group row no-gutters">
                        <label class="col-md-2 form-control-label mb-xs-5 required">
                            الايميل  :
                        </label>
                        <div class="col-md-6">

                            <x-form.input type="text" name="addr[billing][email]" placeholder="الايميل"/>


                        </div>

                        <div class="col-md-4 form-control-comment right">
                        </div>
                    </div>


                    <div class="form-group row no-gutters">
                        <label class="col-md-2 form-control-label mb-xs-5 required">
                            رقم الهاتف  :
                        </label>
                        <div class="col-md-6">

                            <x-form.input type="text" name="addr[billing][phone_number]" placeholder="رقم الموبيل"/>


                        </div>

                        <div class="col-md-4 form-control-comment right">
                        </div>
                    </div>


                    <div class="form-group row no-gutters">
                        <label class="col-md-2 form-control-label mb-xs-5">
                            الشركة :
                        </label>
                        <div class="col-md-6">

                            <input class="form-control" name="company" type="text" value="" maxlength="255">



                        </div>

                        <div class="col-md-4 form-control-comment right">
                            (اختياري)
                        </div>
                    </div>


                    <div class="form-group row no-gutters">
                        <label class="col-md-2 form-control-label mb-xs-5 required">
                            العنوان :
                        </label>
                        <div class="col-md-6">

                            <x-form.input type="text" name="addr[billing][street_address]"/>



                        </div>

                        <div class="col-md-4 form-control-comment right">
                        </div>
                    </div>


                    <div class="form-group row no-gutters">
                        <label class="col-md-2 form-control-label mb-xs-5 required">
                            المدينة :
                        </label>
                        <div class="col-md-6">

                            <x-form.input type="text" name="addr[billing][city]"/>




                        </div>

                        <div class="col-md-4 form-control-comment right">
                        </div>
                    </div>

                    <div class="form-group row no-gutters">
                        <label class="col-md-2 form-control-label mb-xs-5 required">
                            الرمز البريدي :
                        </label>

                        <div class="col-md-6">
                            <x-form.input type="text" name="addr[billing][postal_code]"/>

                        </div>

                        <div class="col-md-4 form-control-comment right">
                        </div>
                    </div>

                    <div class="form-group row no-gutters">
                        <label class="col-md-2 form-control-label mb-xs-5 required">
                            الدولة :
                        </label>
                        <div class="col-md-6">

                            <select class="form-control form-control-select js-country" name="addr[billing][country]" required="">
                                <option value="" disabled="" selected="">-- اختر من فضلك --</option>
                                <option value="46">آروبا</option>
                                <option value="47">أذربيجان</option>
                                <option value="45">أرمينيا</option>
                                <option value="24">أستراليا</option>
                                <option value="231">أفغانستان</option>
                                <option value="230">ألبانيا</option>
                                <option value="232">أنتاركتيكا</option>
                                <option value="43">أنتيغوا وبربودا</option>
                                <option value="40">أندورا</option>
                                <option value="41">أنغولا</option>
                                <option value="42">أنغويلا</option>
                                <option value="44">الأرجنتين</option>
                                <option value="235">الإقليم البريطاني في المحيط الهندي</option>
                                <option value="48">الباهاما</option>
                                <option value="49">البحرين</option>
                                <option value="58">البرازيل</option>
                                <option value="233">البوسنة والهرسك</option>
                                <option value="38">الجزائر</option>
                                <option value="65">الرأس الأخضر</option>
                                <option value="5">الصين</option>
                                <option value="64">الكاميرون</option>
                                <option value="17" selected="">المملكة المتحدة</option>
                                <option value="2">النمسا</option>
                                <option value="57">بتسوانا</option>
                                <option value="51">بربادوس</option>
                                <option value="55">برمودا</option>
                                <option value="59">بروناي</option>
                                <option value="3">بلجيكا</option>
                                <option value="236">بلغاريا</option>
                                <option value="53">بليز</option>
                                <option value="50">بنجلاديش</option>
                                <option value="54">بنين</option>
                                <option value="56">بوتان</option>
                                <option value="60">بوركينا فاسو</option>
                                <option value="62">بوروندي</option>
                                <option value="34">بوليفيا</option>
                                <option value="67">تشاد</option>
                                <option value="244">جزر آلاند</option>
                                <option value="70">جزر القمر</option>
                                <option value="237">جزر الكايمن</option>
                                <option value="223">جزر فرجين البريطانية</option>
                                <option value="239">جزر كوكوس</option>
                                <option value="238">جزيرة الكريسماس</option>
                                <option value="234">جزيرة بوفيه</option>
                                <option value="66">جمهورية أفريقيا الوسطى</option>
                                <option value="52">روسيا البيضاء</option>
                                <option value="39">ساموا الأمريكية</option>
                                <option value="68">شيلي</option>
                                <option value="63">كمبوديا</option>
                                <option value="4">كندا</option>
                                <option value="69">كولومبيا</option>
                            </select>



                        </div>

                        <div class="col-md-4 form-control-comment right">
                        </div>
                    </div>


                        <!-- Shipping -->




                </section>

                                </div>
                            </section>


                        </div>

                        <!---- Start Cart ---->
                        <div class="col-md-3">


                            <div id="js-checkout-summary" class="cart-summary js-cart" >


                                <div class="cart-summary-products">
                                    <div class="summary-label"> هناك عدد  {{$cart->get()->count()}} من المنتجات في السلة </div>
                                    <div class="show-details">
                                        <a href="#" data-toggle="collapse"
                                            data-target="#cart-summary-product-list">
                                            إظهار التفاصيل
                                        </a>
                                    </div>

                                    <div class="collapse" id="cart-summary-product-list">
                                        <ul class="media-list">

                                            @foreach ($cart->get() as $item )
                                            <li class="media">
                                                <div class="media-left d-flex align-self-start">
                                                    <a href="" title="">
                                                        <img class="media-object" src="{{asset('uploads/Products/'. $item->product->image)}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body d-flex flex-column">
                                                    <span class="product-name">{{$item->product->name}}</span>
                                                    <span class="product-quantity">x 1</span>
                                                    <span class="product-price pull-xs-right"></span>{{$item->product->price}}&nbsp;جنيه</span>

                                                </div>

                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>

                                </div>



                                <div class="cart-summary-line" id="cart-subtotal-products">
                                    <span class="label js-subtotal">
                                        إجمالي المنتجات:
                                    </span>
                                    <span class="value">{{$cart->total()}}&nbsp;جنية</span>
                                </div>
                                <div class="cart-summary-line" id="cart-subtotal-shipping">
                                    <span class="label">
                                        إجمالي الشحن:
                                    </span>
                                    <span class="value">مجاناً</span>
                                    <div><small class="value"></small></div>
                                </div>






                                <div class="cart-summary-totals">



                                    <div class="cart-summary-line cart-total">
                                        <span class="label">الإجمالي:</span>
                                        <span class="value">{{$cart->total()}} &nbsp;جنية (شامل للضريبة)</span>
                                    </div>


                                </div>


                            </div>


                        </div>
                    </div>
                </section>





                <!--- payment -->
                <section id="checkout-delivery-step" class=" checkout-step -current -reachable js-current-step -clickable">
                    <h1 class="step-title h3 badge badge-default" style="font-size: 1.5em;padding:10px ; margin:50px 0 20px 0;">
                      طريقة الشحن :
                    </h1>

                    <div class="content">

                  <div id="hook-display-before-carrier">

                  </div>

                  <div class="delivery-options-list">
                          <form class="clearfix" id="js-delivery" data-url-update="//demo.bestprestashoptheme.com/savemart/ar/طلب شراء?ajax=1&amp;action=selectDeliveryOption" method="post">
                        <div class="form-fields">

                            <div class="delivery-options">
                                                <div class="row no-gutters delivery-option align-items-center">
                                    <div class="col-sm-1">
                                      <span class="custom-radio pull-xs-left">
                                        <input type="radio" name="delivery_option[131]" id="delivery_option_1" value="1," checked="">
                                        <span></span>
                                      </span>
                                    </div>
                                    <div for="delivery_option_1" class="col-sm-11 delivery-option-2">
                                      <div class="row align-items-center">
                                                                <div class="col-sm-6 col-xs-12">
                                          <div class="carrier-name">Enginx</div>
                                          <div class="carrier-delay">استلام في المتجر</div>
                                        </div>
                                        <div class="col-sm-3 col-xs-12 text-right">
                                          <span class="carrier-price">مجاناً</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row carrier-extra-content">

                                  </div>
                                                <div class="row no-gutters delivery-option align-items-center last">
                                    <div class="col-sm-1">
                                      <span class="custom-radio pull-xs-left">
                                        <input type="radio" name="delivery_option[131]" id="delivery_option_2" value="2,">
                                        <span></span>
                                      </span>
                                    </div>
                                    <div for="delivery_option_2" class="col-sm-11 delivery-option-2">
                                      <div class="row align-items-center">
                                                                <div class="col-sm-3 col-xs-12">
                                            <img class="img-fluid" src="{{asset('img/2.jpg')}}" alt="My carrier">
                                        </div>
                                                                <div class="col-sm-6 col-xs-12">
                                          <div class="carrier-name">الشحن</div>
                                          <div class="carrier-delay">توصيل في اليوم التالي!</div>
                                        </div>
                                        <div class="col-sm-3 col-xs-12 text-right">
                                          <span class="carrier-price">8.40&nbsp;جنية يشمل الضرائب.</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row carrier-extra-content" style="display:none;">

                                  </div>
                                          </div>

                          <div class="order-options">
                                                  </div>
                        </div>
                        <button type="submit" class="btn btn-primary d-block" name="confirmDeliveryOption" value="1" style="margin:30px 0 50px 0">
                          اطلب
                        </button>
                      </form>
                      </div>



                    </div>
                  </section>

            </div>
        </section>

    </div>
</form>
@endsection

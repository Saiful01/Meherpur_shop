@extends('layouts.general')
@section('title', \App\Helpers\getShopName())

@section('content')
    <main id="content" role="main">

        <!-- Slider Section -->
    @include('ecommerce.pages.home.slider')
    <!-- End Slider Section -->
        <div class="container">
            <!-- Banner -->
            @include('ecommerce.pages.home.banner')
            @include('ecommerce.pages.home.deal')

        </div>

        <div class="container">
            <!-- Prodcut-cards-carousel -->
            <div class="space-top-2">
                <dv class=" d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                    <h3 class="section-title mb-0 pb-2 font-size-22">{{__('localize.new_product')}}</h3>
                </dv>
                <div
                        class="js-slick-carousel u-slick u-slick--gutters-2 overflow-hidden u-slick-overflow-visble pt-3 pb-6"
                        data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">

                    <div class="js-slide">
                        <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">

                            @foreach($new_products as $new_product)
                                <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner p-md-3 row no-gutters">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="/product/details/{{$new_product->product_id}}/{{str_replace(' ', '-', $new_product->product_name)}}"
                                                   class="max-width-150 d-block"><img class="img-fluid"
                                                                                      src="/images/product/{{$new_product->featured_image}}"
                                                                                      alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                                <div class="mb-4">
{{--                                                    <div class="mb-2" >--}}
{{--                                                        <a--}}
{{--                                                                href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html"--}}
{{--                                                                class="font-size-12 text-gray-5">Tablets</a>--}}
{{--                                                    </div>--}}
                                                    <h5 class="product-item__title"><a
                                                                {{-- href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" --}}
                                                                href="/product/details/{{$new_product->product_id}}/{{str_replace(' ', '-', $new_product->product_name)}}"
                                                                class="text-blue font-weight-bold">{{$new_product->product_name}}</a>
                                                    </h5>
                                                </div>
                                                <div class="flex-center-between mb-3">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">{{$new_product->selling_price}} {{__('localize.taka')}} </div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a type="button"
                                                           class="btn-add-cart btn-primary transition-3d-hover" ng-click="addToCart('{{$new_product->product_id}}','{{$new_product->product_name}}','{{$new_product->featured_image}}','{{$new_product->selling_price}}')"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
{{--                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html"--}}
{{--                                                           class="text-gray-6 font-size-13"><i--}}
{{--                                                                    class="ec ec-compare mr-1 font-size-15"></i> Compare</a>--}}
                                                        <a type="button"
                                                           class="text-gray-6 font-size-13" ng-click="addToCart('{{$new_product->product_id}}','{{$new_product->product_name}}','{{$new_product->featured_image}}','{{$new_product->selling_price}}')"><i
                                                                    class="ec ec-add-to-cart mr-1 font-size-15"></i>
                                                            {{__('localize.taka')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            @endforeach

                        </ul>
                    </div>


                    <div class="js-slide">
                        <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">

                            @foreach($new_products2 as $new_product)
                                <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner p-md-3 row no-gutters">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="/product/details/{{$new_product->product_id}}/{{str_replace(' ', '-', $new_product->product_name)}}"
                                                   class="max-width-150 d-block"><img class="img-fluid"
                                                                                      src="/images/product/{{$new_product->featured_image}}"
                                                                                      alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                                <div class="mb-4">
{{--                                                    <div class="mb-2"><a--}}
{{--                                                                href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html"--}}
{{--                                                                class="font-size-12 text-gray-5">Tablets</a></div>--}}
                                                    <h5 class="product-item__title"><a
                                                                href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">{{$new_product->product_name}}</a>
                                                    </h5>
                                                </div>
                                                <div class="flex-center-between mb-3">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">{{$new_product->selling_price}} {{__('localize.taka')}}</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a type="button"
                                                           class="btn-add-cart btn-primary transition-3d-hover" ng-click="addToCart('{{$new_product->product_id}}','{{$new_product->product_name}}','{{$new_product->featured_image}}','{{$new_product->selling_price}}')"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
{{--                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html"--}}
{{--                                                           class="text-gray-6 font-size-13"><i--}}
{{--                                                                    class="ec ec-compare mr-1 font-size-15"></i> Compare</a>--}}
                                                        <a type="button"
                                                           class="text-gray-6 font-size-13" ><i
                                                                    class="ec ec-add-to-cart mr-1 font-size-15"ng-click="addToCart('{{$new_product->product_id}}','{{$new_product->product_name}}','{{$new_product->featured_image}}','{{$new_product->selling_price}}')"></i>
                                                            {{__('localize.add_cart')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>


                </div>
            </div>
            <!-- End Prodcut-cards-carousel -->
            <!-- Full banner -->

            <!-- End Full banner -->
            <!-- Recently viewed -->

            <!-- End Recently viewed -->
            <!-- Brand Carousel -->

            <!-- End Brand Carousel -->
        </div>
    </main>
@endsection

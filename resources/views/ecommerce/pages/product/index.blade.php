@extends('layouts.general')
@section('title', $product->product_name)

@section('content')


    <main id="content" role="main">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/">হোম</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/product/category/{{$product->category_id}}">{{$product->category_name}}</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{$product->product_name}}</li>

                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->
        <div class="container">
            <!-- Single Product Body -->
            <div class="mb-xl-14 mb-6">
                <div class="row">
                    <div class="col-md-5 mb-4 mb-md-0">

                        <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2"
                             data-infinite="true"
                             data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                             data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                             data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                             data-nav-for="#sliderSyncingThumb">
                            @foreach($images as $image)
                                <div class="js-slide">
                                    <img class="img-fluid" src="/images/product/{{$image->image_name}}" alt="Image Description">
                                </div>
                             @endforeach
                        </div>

                        <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                             data-infinite="true"
                             data-slides-show="5"
                             data-is-thumbs="true"
                             data-nav-for="#sliderSyncingNav">
                            @foreach($images as $image)
                                <div class="js-slide">
                                    <img class="img-fluid" src="/images/product/{{$image->image_name}}" alt="Image Description">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-7 mb-md-6 mb-lg-0">
                        <div class="mb-2">
                            <div class="border-bottom mb-3 pb-md-1 pb-3">
                                <a href="/product/category/{{$product->category_id}}" class="font-size-12 text-gray-5 mb-2 d-inline-block">{{$product->category_name}}</a>
                                <h2 class="font-size-25 text-lh-1dot2">{{$product->product_name}}</h2>
                            </div>
                            <div class="mb-2">
                                <ul class="font-size-14 pl-3 ml-1 text-gray-110">
                                    <p>{{$product->product_details}}</p>
                                </ul>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-baseline">
                                    <ins class="font-size-36 text-decoration-none">{{$product->selling_price}} {{__('localize.taka')}}</ins>
                                    <del class="font-size-20 ml-2 text-gray-6">{{$product->regular_price}} {{__('localize.taka')}}</del>
                                </div>
                            </div>

                            <div class="d-md-flex align-items-end mb-3">
                                <div class="max-width-150 mb-4 mb-md-0">
                                    <h6 class="font-size-14"> {{__('localize.quantity')}}</h6>
                                    <!-- Quantity -->
                                    <div class="border rounded-pill py-2 px-3 border-color-1">
                                        <div class="js-quantity row align-items-center">
                                            <div class="col">
                                                <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="text" value="1" ng-model="detail_page_quantity">
                                            </div>
                                            <div class="col-auto pr-1">
                                                <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;" ng-click="addQuantity()">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;" ng-click="removeQuantity()">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!-- End Quantity -->


                                <div class="ml-md-3">
                                    <a href="#" class="btn px-5 btn-primary-dark transition-3d-hover" ng-click="addToCart('{{$product->product_id}}','{{$product->product_name}}','{{$product->featured_image}}','{{$product->selling_price}}')"><i class="ec ec-add-to-cart mr-2 font-size-20"></i>  {{__('localize.add_cart')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related products -->
            <div class="mb-6">
                <div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
                    <h3 class="section-title mb-0 pb-2 font-size-22">{{__('localize.related')}}</h3>
                </div>
                <ul class="row list-unstyled products-group no-gutters">

                    @foreach($related_products as $related_product)
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                        <div class="product-item__outer h-100">
                            <div class="product-item__inner px-xl-4 p-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="#" class="font-size-12 text-gray-5" hidden>{{\App\Helpers\getProductCategoryName($related_product->product_category_id)}}</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="/product/details/{{$related_product->product_id}}/{{str_replace(' ', '-', $related_product->product_name)}}" class="text-blue font-weight-bold">{{$related_product->product_name}}</a></h5>
                                    <div class="mb-2">
                                        <a href="/product/details/{{$related_product->product_id}}/{{str_replace(' ', '-', $related_product->product_name)}}" class="d-block text-center"><img class="img-fluid" src="/images/product/{{$related_product->featured_image}}" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">{{$related_product->selling_price}} {{__('localize.taka')}}</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a type="button" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart" ng-click="addToCart('{{$related_product->product_id}}','{{$related_product->product_name}}','{{$related_product->featured_image}}','{{$related_product->selling_price}}')"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item__footer">
                                    <div class="border-top pt-2 flex-center-between flex-wrap">
{{--                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>--}}
                                        <a type="button"
                                           class="text-gray-6 font-size-13" ng-click="addToCart('{{$related_product->product_id}}','{{$related_product->product_name}}','{{$related_product->featured_image}}','{{$related_product->selling_price}}')"><i
                                                class="ec ec-add-to-cart mr-1 font-size-15"></i>
                                            {{__('localize.add_cart')}}</a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>


@endsection


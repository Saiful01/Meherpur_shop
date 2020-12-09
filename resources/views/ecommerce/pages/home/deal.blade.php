<div class="mb-5">
    <div class="row">
        <!-- Deal -->
        <div class="col-md-3 mb-6 mb-md-0">
            @foreach($featured_items as $featured_item)
                <div class="p-3 border border-width-2 border-primary borders-radius-20 bg-white">

                    <div class="d-flex justify-content-between align-items-center m-1 ml-2">
                        <h3 class="font-size-22 mb-0 font-weight-normal text-lh-28 max-width-120">স্পেশাল অফার</h3>
                        <div
                                class="d-flex align-items-center flex-column justify-content-center bg-primary rounded-pill height-75 width-75 text-lh-1">
                            <span class="font-size-12">সাশ্রয়</span>
                            <div class="font-size-18 font-weight-bold">
                                {{($featured_item->regular_price)-($featured_item->selling_price)}}{{__('localize.taka')}}</div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <a href="/product/details/{{$featured_item->product_id}}/{{str_replace(' ', '-', $featured_item->product_name)}}"
                           class="d-block text-center"><img class="img-fluid"
                                                            src="/images/product/{{$featured_item->featured_image}}"
                                                            width="100%"
                                                            alt="Image Description"></a>
                    </div>
                    <h5 class="mb-2 font-size-14 text-center mx-auto max-width-180 text-lh-18"><a href="#"
                                                                                                  class="text-blue font-weight-bold">{{$featured_item->product_name}}</a>
                    </h5>
                    <div class="d-flex align-items-center justify-content-center mb-3">
                        <del class="font-size-18 mr-2 text-gray-2">{{$featured_item->regular_price}}{{__('localize.taka')}}</del>
                        <ins class="font-size-30 text-red text-decoration-none">{{$featured_item->selling_price}} {{__('localize.taka')}}</ins>
                    </div>

                </div>
            @endforeach
        </div>

        <div class="col">
            <!-- Features Section -->
            <div class="">
                <!-- Nav Classic -->
                <div class="position-relative bg-white text-center z-index-2">
                    <ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active " id="pills-one-example1-tab" data-toggle="pill"
                               href="#pills-one-example1" role="tab" aria-controls="pills-one-example1"
                               aria-selected="true">
                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                    {{__('localize.featured_products')}}
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Nav Classic -->

                <!-- Tab Content -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel"
                         aria-labelledby="pills-one-example1-tab">
                        <ul class="row list-unstyled products-group no-gutters">
                            @foreach($featured_products as $new_product)
                                <li class="col-6 col-wd-3 col-md-4 product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="product-item__body pb-xl-2">
{{--                                                <div class="mb-2"><a--}}
{{--                                                            href="/product/category/{{$new_product->product_category_id}}"--}}
{{--                                                            class="font-size-12 text-gray-5">{{\App\Helpers\getProductCategoryName($new_product->product_category_id)}}</a>--}}
{{--                                                </div>--}}
                                                <h5 class="mb-1 product-item__title"><a
                                                            href="/product/details/{{$new_product->product_id}}/{{str_replace(' ', '-', $new_product->product_name)}}"
                                                            class="text-blue font-weight-bold">{{$new_product->product_name}}</a>
                                                </h5>
                                                <div class="mb-2">
                                                    <a href="/product/details/{{$new_product->product_id}}/{{str_replace(' ', '-', $new_product->product_name)}}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="/images/product/{{$new_product->featured_image}}"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">{{$new_product->selling_price}} {{__('localize.taka')}}</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a type="button" ng-click="addToCart('{{$new_product->product_id}}','{{$new_product->product_name}}','{{$new_product->featured_image}}','{{$new_product->selling_price}}')"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    {{--   <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html"
                                                          class="text-gray-6 font-size-13"><i
                                                               class="ec ec-compare mr-1 font-size-15"></i> Compare</a>--}}
                                                    <a type="button"
                                                       class="text-gray-6 font-size-13"  ng-click="addToCart('{{$new_product->product_id}}','{{$new_product->product_name}}','{{$new_product->featured_image}}','{{$new_product->selling_price}}')"><i
                                                                class="ec ec-add-to-cart mr-1 font-size-15"></i>{{__('localize.add_cart')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Tab Content -->
            </div>
            <!-- End Features Section -->
        </div>


    </div>
</div>


@extends('layouts.general')

@section('title', 'মেহেরপুরিয়ান শপ')

@section('content')



    <main id="content" role="main">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a
                                    href="/">হোম</a></li>
{{--                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{$category->category_name}}--}}
{{--                            </li>--}}
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

        <div class="container">
            <div class="row mb-8">
                @foreach($products as $product)
                    <div class="col-md-3">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">

                                        <h5 class="mb-1 product-item__title"><a
                                                href="#"
                                                class="text-blue font-weight-bold" tabindex="0">{{$product->product_name}}</a></h5>
                                        <div class="mb-2">
                                            <a href="/product/details/{{$product->product_id}}/{{str_replace(' ', '-', $product->product_name)}}"
                                               class="d-block text-center" tabindex="0"><img
                                                    class="img-fluid"
                                                    src="/images/product/{{$product->featured_image}}"
                                                    alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">{{$product->selling_price}}টাকা</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a type="button"
                                                   class="btn-add-cart btn-primary transition-3d-hover"
                                                   tabindex="0" ng-click="addToCart('{{$product->product_id}}','{{$product->product_name}}','{{$product->featured_image}}','{{$product->selling_price}}')"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>


@endsection




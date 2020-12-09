@extends('layouts.general')

@section('title', 'মেহেরপুরিয়ান শপ')

@section('content')

    <main id="content" role="main" class="cart-page">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/">{{__('localize.home')}}</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{__('localize.only_cart')}}</li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

        <div class="container">
            <div class="mb-4">
                <h1 class="text-center">{{__('localize.only_cart')}}</h1>
            </div>
            <div class="mb-10 cart-table">
                <form class="mb-4" action="#" method="post">
                    <table class="table" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="product-remove">&nbsp;</th>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">{{__('localize.products')}}</th>
                            <th class="product-price">{{__('localize.cost')}}</th>
                            <th class="product-quantity w-lg-15">{{__('localize.quantity')}}</th>
                            <th class="product-subtotal">{{__('localize.total_cost')}}</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr  ng-repeat="item in cartItemPList">
                            <td class="text-center">
                                <a type="button" class="text-gray-32 font-size-26"  ng-click="removeItem(item)">×</a>
                            </td>
                            <td class="d-none d-md-table-cell">
                                <a href="#"><img class="img-fluid max-width-100 p-1 border border-color-1" src="/images/product/@{{ item.image}}" alt="Image Description"></a>
                            </td>

                            <td data-title="Product">
                                <a href="#" class="text-gray-90">@{{ item.name }}</a>
                            </td>

                            <td data-title="Price">
                                <span class=""> @{{ item.price}}</span>
                            </td>

                            <td data-title="Quantity">
                                <span class="sr-only">{{__('localize.quantity')}}</span>
                                <!-- Quantity -->
                                <div class="border rounded-pill py-1 width-122 w-xl-80 px-3 border-color-1">
                                    <div class="js-quantity row align-items-center">
                                        <div class="col">
                                            <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="text" value="@{{ item.qnt}}">
                                        </div>
                                        <div class="col-auto pr-1">
                                            <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;"  ng-click="itemMinus(item)">
                                                <small class="fas fa-minus btn-icon__inner"></small>
                                            </a>
                                            <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;" ng-click="itemAdd(item)">
                                                <small class="fas fa-plus btn-icon__inner"></small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Quantity -->
                            </td>

                            <td data-title="Total">
                                <span class=""> @{{ item.qnt* item.price}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="border-top space-top-2 justify-content-center">
                                <div class="pt-md-3">
                                    <div class="d-block d-md-flex flex-center-between">
                                        <div class="mb-3 mb-md-0 w-xl-40">


                                        </div>
                                        <div class="d-md-flex">
                                             <a href="/cart/checkout" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-none d-md-inline-block">{{__('localize.checkout')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </form></div>
            <div class="mb-8 cart-total">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7 col-md-8 offset-md-4">
                        <div class="border-bottom border-color-1 mb-3">
                            <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">{{__('localize.cart_details')}}</h3>
                        </div>
                        <table class="table mb-3 mb-md-0">
                            <tbody>
                            <tr class="cart-subtotal">
                                <th>{{__('localize.total_cost')}}</th>
                                <td data-title="মোট দাম"><span class="amount">@{{ totalPriceCountAll}} {{__('localize.taka')}}</span></td>
                            </tr>
                            <tr class="shipping">
                                <th>{{__('localize.delivery_charge')}}</th>
                                <td data-title="Shipping">
                                    <span class="amount">@{{ shipping_cost}} {{__('localize.taka')}}</span>
                                   {{-- <div class="mt-1">
                                        <a class="font-size-12 text-gray-90 text-decoration-on underline-on-hover font-weight-bold mb-3 d-inline-block" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Calculate Shipping
                                        </a>

                                    </div>--}}
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>{{__('localize.intotal_cost')}}</th>
                                <td data-title="Total"><strong><span class="amount">@{{ shipping_cost+totalPriceCountAll }} {{__('localize.taka')}}</span></strong></td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-md-none">{{__('localize.checkout')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection




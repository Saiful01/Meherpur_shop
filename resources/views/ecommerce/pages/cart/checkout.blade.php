@extends('layouts.general')
@section('title', 'মেহেরপুরিয়ান শপ')


@section('content')
    <main id="content" role="main" class="checkout-page">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/">{{__('localize.home')}}</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">
                                {{__('localize.checkout')}}
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

        <div class="container">
            <div class="mb-5">
                <h1 class="text-center">{{__('localize.checkout')}}</h1>
            </div>

            <form class="js-validate" novalidate="novalidate">
                <div class="row">
                    <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                        <div class="pl-lg-3 ">
                            <div class="bg-gray-1 rounded-lg">
                                <!-- Order Summary -->
                                <div class="p-4 mb-4 checkout-table">
                                    <!-- Title -->
                                    <div class="border-bottom border-color-1 mb-5">
                                        <h3 class="section-title mb-0 pb-2 font-size-25">{{__('localize.order_details')}}</h3>
                                    </div>
                                    <!-- End Title -->

                                    <!-- Product Content -->
                                    <table class="table">

                                        <tfoot>
                                        <tr>
                                            <th>{{__('localize.total_cost')}}</th>
                                            <td>@{{ totalPriceCountAll}} {{__('localize.taka')}}</td>
                                        </tr>
                                        <tr>
                                            <th>{{__('localize.delivery_charge')}}</th>
                                            <td>@{{ shipping_cost}} {{__('localize.taka')}}</td>
                                        </tr>
                                        <tr>
                                            <th>{{__('localize.intotal_cost')}}</th>
                                            <td><strong>@{{ shipping_cost+totalPriceCountAll }} {{__('localize.taka')}}</strong></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <!-- End Product Content -->

                                    <button type="button"
                                            class="btn btn-primary-dark-w btn-block btn-pill font-size-20 mb-3 py-3"
                                            ng-click="saveProducts(cartItemPList)">{{__('localize.order')}}
                                    </button>

                                </div>
                                <!-- End Order Summary -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 order-lg-1">
                        <div class="pb-7 mb-7">
                            <!-- Title -->
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title mb-0 pb-2 font-size-25">{{__('localize.address')}}</h3>
                            </div>
                            <!-- End Title -->

                            <!-- Billing Form -->
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Input -->
                                    <div class="js-form-message mb-6">
                                        <label class="form-label">
                                            {{__('localize.name')}}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="firstName" placeholder=""
                                               aria-label="Jack" required="" data-msg="Please enter your frist name."
                                               data-error-class="u-has-error" data-success-class="u-has-success"
                                               autocomplete="off"  ng-model="customer_name">
                                        <input class="form-control" type="hidden" name="_token"
                                               value="{{csrf_token()}}" autocomplete="off">
                                    </div>
                                    <!-- End Input -->
                                </div>

                                <div class="w-100"></div>

                                <div class="col-md-8">
                                    <!-- Input -->
                                    <div class="js-form-message mb-6">
                                        <label class="form-label">
                                            {{__('localize.address')}}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="streetAddress"
                                               placeholder=" " aria-label="470 Lucy Forks" required=""
                                               data-msg="Please enter a valid address." data-error-class="u-has-error"
                                               data-success-class="u-has-success" ng-model="customer_address1">
                                    </div>
                                    <!-- End Input -->
                                </div>

                                <div class="col-md-4">
                                    <!-- Input -->
                                    <div class="js-form-message mb-6">
                                        <label class="form-label">
                                            {{__('localize.zila')}}
                                        </label>
                                        <input type="text" class="form-control" placeholder=""
                                               aria-label=" " data-msg="Please enter a valid address."
                                               data-error-class="u-has-error" data-success-class="u-has-success"  ng-model="customer_city">
                                    </div>
                                    <!-- End Input -->
                                </div>


                                <div class="col-md-6">
                                    <!-- Input -->
                                    <div class="js-form-message mb-6">
                                        <label class="form-label">
                                            {{__('localize.email')}}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="email" class="form-control" name="emailAddress"
                                               placeholder=" " aria-label="abc@gmail.com"
                                               required="" data-msg="Please enter a valid email address."
                                               data-error-class="u-has-error" data-success-class="u-has-success"  ng-model="customer_email">
                                    </div>
                                    <!-- End Input -->
                                </div>

                                <div class="col-md-6">
                                    <!-- Input -->
                                    <div class="js-form-message mb-6">
                                        <label class="form-label">
                                            {{__('localize.phone_no')}}
                                        </label>
                                        <input type="text" class="form-control" placeholder=" "
                                               aria-label="+1 (062) 109-9222" data-msg="Please enter your last name."
                                               data-error-class="u-has-error" data-success-class="u-has-success"  ng-model="customer_phone">
                                    </div>
                                    <!-- End Input -->
                                </div>

                                <div class="w-100"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection

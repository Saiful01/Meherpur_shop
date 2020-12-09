<header id="header" class="u-header u-header-left-aligned-nav">
    <div class="u-header__section">
        <!-- Topbar -->
    @include('ecommerce.includes.header.topbar')
    <!-- End Topbar -->

        <!-- Logo-Search-header-icons -->
        <div class="py-2 py-xl-5 bg-primary-down-lg">
            <div class="container my-0dot5 my-xl-0">
                <div class="row align-items-center">
                    <!-- Logo-offcanvas-menu -->
                    <div class="col-auto">
                        <!-- Nav -->
                        <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                            <!-- Logo -->
                            {{-- <a href="/" style="color: FF5510">
                                 মেহেরপুরিয়ান শপ
                             </a>--}}

                            <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center"
                               href="/" aria-label="Electro" style="color:FF5510">
{{--                               <img src="/images/logo2.png" class="logoClass"--}}
                                <strong><h3 class="shop-title">{{\App\Helpers\getShopName()}}</h3></strong>
                            </a>
                            <!-- End Logo -->

                            <!-- Fullscreen Toggle Button -->
                            <button id="sidebarHeaderInvokerMenu" type="button"
                                    class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0"
                                    aria-controls="sidebarHeader"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-hide-on-scroll="false"
                                    data-unfold-target="#sidebarHeader1"
                                    data-unfold-type="css-animation"
                                    data-unfold-animation-in="fadeInLeft"
                                    data-unfold-animation-out="fadeOutLeft"
                                    data-unfold-duration="500">
                                        <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                            <span class="u-hamburger__inner"></span>
                                        </span>
                            </button>
                            <!-- End Fullscreen Toggle Button -->
                        </nav>
                        <!-- End Nav -->

                        <!-- ========== HEADER SIDEBAR ========== -->
                    @include('ecommerce.includes.header.header_sidebar')
                    <!-- ========== END HEADER SIDEBAR ========== -->
                    </div>
                    <!-- End Logo-offcanvas-menu -->
                    <!-- Search Bar -->
                    <div class="col d-none d-xl-block">
                        <form class="js-focus-state" method="get" action="/search">
                            <label class="sr-only" for="searchproduct">{{__('localize.search')}}</label>
                            <div class="input-group">
                                <input type="text"
                                       class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary"
                                       name="query" value="{{request()->input('query')}}" id="searchproduct-item"
                                       placeholder="পণ্য অনুসন্ধান করুন" aria-label="Search for Products"
                                       aria-describedby="searchProduct1" required>
                                <div class="input-group-append">
                                    <!-- Select -->

                                    <!-- End Select -->
                                    <button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="submit"
                                            id="searchProduct1">
                                        <span class="ec ec-search font-size-24"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Search Bar -->
                    <!-- Header Icons -->
                    <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                        <div class="d-inline-flex">
                            <ul class="d-flex list-unstyled mb-0 align-items-center">
                                <!-- Search -->
                                <li class="col d-xl-none px-2 px-sm-3 position-static">
                                    <a id="searchClassicInvoker"
                                       class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary"
                                       href="javascript:;" role="button"
                                       data-toggle="tooltip"
                                       data-placement="top"
                                       title="Search"
                                       aria-controls="searchClassic"
                                       aria-haspopup="true"
                                       aria-expanded="false"
                                       data-unfold-target="#searchClassic"
                                       data-unfold-type="css-animation"
                                       data-unfold-duration="300"
                                       data-unfold-delay="300"
                                       data-unfold-hide-on-scroll="true"
                                       data-unfold-animation-in="slideInUp"
                                       data-unfold-animation-out="fadeOut">
                                        <span class="ec ec-search"></span>
                                    </a>

                                    <!-- Input -->
                                    <div id="searchClassic"
                                         class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2"
                                         aria-labelledby="searchClassicInvoker">
                                        <form class="js-focus-state input-group px-3">
                                            <input class="form-control" type="search" placeholder="Search Product">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary px-3" type="button"><i
                                                            class="font-size-18 ec ec-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Input -->
                                </li>
                                <!-- End Search -->
                                {{-- <li class="col d-none d-xl-block"><a
                                             href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html"
                                             class="text-gray-90" data-toggle="tooltip" data-placement="top"
                                             title="Compare"><i class="font-size-22 ec ec-compare"></i></a></li>
                                 <li class="col d-none d-xl-block"><a
                                             href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html"
                                             class="text-gray-90" data-toggle="tooltip" data-placement="top"
                                             title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>--}}
                                {{--<li class="col d-xl-none px-2 px-sm-3"><a
                                            href="#"
                                            class="text-gray-90" data-toggle="tooltip" data-placement="top"
                                            title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>--}}
                                <li class="col pr-xl-0 px-2 px-sm-3 d-xl-none">
                                    <a href="/cart/page"
                                       class="text-gray-90 position-relative d-flex " data-toggle="tooltip"
                                       data-placement="top" title="Cart">
                                        <i class="font-size-22 ec ec-shopping-bag"></i>
                                        <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">@{{ getProductCartInfo().totalCount }}</span>
                                        <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">@{{ totalPriceCountAll}}{{__('localize.taka')}}</span>
                                    </a>
                                </li>
                                <li class="col pr-xl-0 px-2 px-sm-3 d-none d-xl-block" style="  cursor: pointer">
                                    <div id="basicDropdownHoverInvoker" class="text-gray-90 position-relative d-flex "
                                         data-toggle="tooltip" data-placement="top" title="Cart"
                                         aria-controls="basicDropdownHover"
                                         aria-haspopup="true"
                                         aria-expanded="false"
                                         data-unfold-event="click"
                                         data-unfold-target="#basicDropdownHover"
                                         data-unfold-type="css-animation"
                                         data-unfold-duration="300"
                                         data-unfold-delay="300"
                                         data-unfold-hide-on-scroll="true"
                                         data-unfold-animation-in="slideInUp"
                                         data-unfold-animation-out="fadeOut">
                                        <i class="font-size-22 ec ec-shopping-bag"></i>
                                        <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12"
                                              ng-cloak>@{{ getProductCartInfo().totalCount }}</span>
                                        <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3"
                                              ng-cloak>@{{ totalPriceCountAll}} {{__('localize.taka')}}</span>
                                    </div>
                                    <div id="basicDropdownHover"
                                         class="cart-dropdown dropdown-menu dropdown-unfold border-top border-top-primary mt-3 border-width-2 border-left-0 border-right-0 border-bottom-0 left-auto right-0"
                                         aria-labelledby="basicDropdownHoverInvoker">
                                        <ul class="list-unstyled px-3 pt-3">


                                            <li class="border-bottom pb-3 mb-3" ng-repeat="item in cartItemPList">
                                                <div class="">
                                                    <ul class="list-unstyled row mx-n2">
                                                        <li class="px-2 col-auto">
                                                            <img class="img-fluid"
                                                                 src="/images/product/@{{ item.image}}"
                                                                 alt="Image Description" width="65px">
                                                        </li>
                                                        <li class="px-2 col">
                                                            <h5 class="text-blue font-size-14 font-weight-bold">@{{
                                                                item.name}}</h5>
                                                            <span class="font-size-14">@{{ item.qnt* item.price}} {{__('localize.taka')}}</span>
                                                        </li>
                                                        <li class="px-2 col-auto">
                                                            <a href="#" class="text-gray-90"><i
                                                                        class="ec ec-close-remove"
                                                                        ng-click="removeItem(item)"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>


                                        </ul>
                                        <div class="flex-center-between px-4 pt-2">
                                            <a href="/cart/page"
                                               class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">{{__('localize.cart')}}</a>
                                            <a href="/cart/checkout"
                                               class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5">{{__('localize.checkout')}}</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Header Icons -->
                </div>
            </div>
        </div>
        <!-- End Logo-Search-header-icons -->

        <!-- Vertical-and-secondary-menu -->
    @if( url()->current()==URL::to('/'))
        @include('ecommerce.includes.header.header_secondary_menu_bar')

    @endif
    <!-- End Vertical-and-secondary-menu -->
    </div>
</header>

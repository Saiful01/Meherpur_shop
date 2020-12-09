<aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvoker">
    <div class="u-sidebar__scroller">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">
                <!-- Toggle Button -->
                <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-4 bg-white">
                    <button type="button" class="close ml-auto"
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
                        <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                    </button>
                </div>
                <!-- End Toggle Button -->

                <!-- Content -->
                <div class="js-scrollbar u-sidebar__body">
                    <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                        <!-- Logo -->
{{--                        <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center mb-3" href="/" aria-label="Electro">--}}
{{--                            </a>--}}
                        <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center"
                           href="/" aria-label="Electro" style="color: FF5510">
                            {{--                               <img src="/images/logo2.png" class="logoClass"--}}
                            <strong><h3>{{\App\Helpers\getShopName()}}</h3></strong>
                        </a>
                        <!-- End Logo -->

                        <!-- List -->
                        <ul id="headerSidebarList" class="u-header-collapse__nav">
                            <!-- Value of the Day -->
                            @foreach($categories as $category)
                                    <li class="">
                                        <a class="u-header-collapse__nav-link font-weight-bold" href="/product/category/{{$category->category_id}}">{{$category->category_name}}</a>
                                    </li>
                            @endforeach

                        </ul>
                        <!-- End List -->
                    </div>
                </div>
                <!-- End Content -->
            </div>
            <!-- Footer -->

            <!-- End Footer -->
        </div>
    </div>
</aside>

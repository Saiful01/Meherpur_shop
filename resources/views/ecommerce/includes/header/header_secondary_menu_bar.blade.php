<div class="d-none d-xl-block container">
    <div class="row">
        <!-- Vertical Menu -->
        <div class="col-md-auto d-none d-xl-block">
            <div class="max-width-270 min-width-270">
                <!-- Basics Accordion -->
                <div id="basicsAccordion">
                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-header card-collapse border-0" id="basicsHeadingOne">
                            <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                    data-toggle="collapse"
                                    data-target="#basicsCollapseOne"
                                    aria-expanded="true"
                                    aria-controls="basicsCollapseOne">
                                                <span class="ml-0 text-gray-90 mr-2">
                                                    <span class="fa fa-list-ul"></span>
                                                </span>
                                <span class="pl-1 text-gray-90">{{__('localize.all_categories')}}</span>
                            </button>
                        </div>
                        <div id="basicsCollapseOne" class="collapse show vertical-menu"
                             aria-labelledby="basicsHeadingOne"
                             data-parent="#basicsAccordion">
                            <div class="card-body p-0">
                                @foreach($categories as $category)
                                        <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                            <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                                <ul class="navbar-nav u-header__navbar-nav">
                                                    <li class="nav-item u-header__nav-item"
                                                        data-event="hover"
                                                        data-position="left">
                                                        <a href="/product/category/{{$category->category_id}}" class="nav-link u-header__nav-link font-weight-bold">{{$category->category_name}}</a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Basics Accordion -->
            </div>
        </div>
        <!-- End Vertical Menu -->
        <!-- Secondary Menu -->
        <div class="col">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                <!-- Navigation -->
                <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                    <ul class="navbar-nav u-header__navbar-nav">
                        <!-- Button -->
                        <li class="nav-item u-header__nav-last-item">
                            <a class="text-gray-90" href="#" target="_blank">
                                {{__('localize.order_call')}}
                            </a>
                        </li>
                        <!-- End Button -->
                    </ul>
                </div>
                <!-- End Navigation -->
            </nav>
            <!-- End Nav -->
        </div>
        <!-- End Secondary Menu -->
    </div>
</div>

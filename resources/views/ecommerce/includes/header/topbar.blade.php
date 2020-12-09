<div class="u-header-topbar py-2 d-none d-xl-block">
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="topbar-left">
                <a href="#" class="text-gray-110 font-size-13 hover-on-dark"><strong><i class="font-size-22 ec ec-phone"></i> </strong><b>{{\App\Helpers\getShopNumber()}}</b></a>
            </div>
            <div class="topbar-right ml-auto">
                <ul class="list-inline mb-0"  ng-controller="languageController">
              {{--      <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                        <a href="contact-v2.html" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Store Locator</a>
                    </li>
                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/track-your-order.html" class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> Track Your Order</a>
                    </li>
                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border u-header-topbar__nav-item-no-border u-header-topbar__nav-item-border-single">
                        <div class="d-flex align-items-center">
                            <!-- Language -->
                            <div class="position-relative">
                                <a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center u-header-topbar__nav-link font-weight-normal" href="javascript:;" role="button"
                                   aria-controls="languageDropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   data-unfold-event="hover"
                                   data-unfold-target="#languageDropdown"
                                   data-unfold-type="css-animation"
                                   data-unfold-duration="300"
                                   data-unfold-delay="300"
                                   data-unfold-hide-on-scroll="true"
                                   data-unfold-animation-in="slideInUp"
                                   data-unfold-animation-out="fadeOut">
                                    <span class="d-inline-block d-sm-none">US</span>
                                    <span class="d-none d-sm-inline-flex align-items-center"><i class="ec ec-dollar mr-1"></i> Dollar (US)</span>
                                </a>

                                <div id="languageDropdown" class="dropdown-menu dropdown-unfold" aria-labelledby="languageDropdownInvoker">
                                    <a class="dropdown-item active" href="#">English</a>
                                    <a class="dropdown-item" href="#">Deutsch</a>
                                    <a class="dropdown-item" href="#">Español‎</a>
                                </div>
                            </div>
                            <!-- End Language -->
                        </div>
                    </li>
                   --}} <li>
                        <div class="form-group">
                            <select class="" ng-change="languageSetup(language)" ng-model="language">
                                <option value="bn">Bangla</option>
                                <option value="en">English</option>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    app.controller('languageController', function ($scope, $http, $window) {
        $scope.language = "<?php use Illuminate\Support\Facades\Session;
            if (Session::get('locale') != null) {
                echo Session::get('locale');
            } else {
                echo "en";
            }
            ?>";
        $scope.languageSetup = function (language) {
            console.log("language" + language);
            $http.get("/locale/" + language)
                .then(function (response) {
                    console.log("Changed to " + response.data);
                    $window.location.reload();
                });
        }
    });
</script>

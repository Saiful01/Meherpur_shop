<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->

@include('ecommerce.includes.head')

<body ng-app="myApp" ng-controller="myCtrl">

<!-- ========== HEADER ========== -->
@include('ecommerce.includes.header.header')
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->

@yield('content')
<!-- ========== END MAIN CONTENT ========== -->


<!-- ========== FOOTER Start ========== -->
@include('ecommerce.includes.footer')
<!-- ========== END FOOTER ========== -->


</body>

</html>

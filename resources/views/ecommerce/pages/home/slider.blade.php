<div class="mb-5">
    <div class="bg-img-hero" style="background-image: url(/ecommerce/img/1920X422/img1.jpg)">
        <div class="container min-height-420 overflow-hidden">
            <div class="js-slick-carousel u-slick"
                 data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-4 offset-xl-3 pl-2 pb-1">
                <div class="js-slide bg-img-hero-center" data-animation-delay="0">


                    @if(!empty($sliders))
                        <div class="carousel-inner">

                            @php($i=1)
                            @foreach($sliders as $slider)
                                @if($i<=1)
                                        <div class="row min-height-420 py-7 py-md-0">

                                            <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                                                <h1 class="font-size-64 text-lh-57 font-weight-light"
                                                    data-scs-animation-in="fadeInUp">
                                                    {{__('localize.welcome')}} {{\App\Helpers\getShopName()}} <span class="d-block font-size-55"></span>
                                                </h1>
                                               </div>
                                            <div class="col-xl-5 col-6  d-flex align-items-center"
                                                 data-scs-animation-in="fadeInRight"
                                                 data-scs-animation-delay="500">
                                                <img class="img-fluid" src="/images/slider/{{$sliders[0]->slider_image}}" alt="Image Description">
                                            </div>
                                        </div>
                                @endif
                                @php($i++)
                            @endforeach
                        </div>
                    @endif


                </div>

            </div>
        </div>
    </div>
</div>

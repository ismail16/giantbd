@extends('website.layouts.master')

@section('content')

<div id="video-player-overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div id="video-player-overlay-content">
            <iframe id="circle-video-frame" frameborder="0" width="560" height="315" src=""></iframe>
        </div>
    </div>

    <!-- Who we are section -->
    <section id="next_section" class="side-bg-content-container">
        <div class="clearfix">
            <div class="col-sm-6 col-sm-push-0 side-bg">
                <ul class="rslides slider1">
                    <li><img style="width: 508px; height: 446px !important;" src="{{asset('frontend_assets/assets_front/images/WhoWeAre/1.jpg')}}"></li>
                    <li><img style="width: 508px; height: 446px !important;" src="{{asset('frontend_assets/assets_front/images/WhoWeAre/2.jpg')}}"></li>
                    <li><img style="width: 508px; height: 446px !important;" src="{{asset('frontend_assets/assets_front/images/WhoWeAre/3.jpg')}}"></li>
                    <li><img style="width: 508px; height: 446px !important;" src="{{asset('frontend_assets/assets_front/images/WhoWeAre/4.jpg')}}"></li>
                </ul>
            </div>
        </div>

        <div class="container" id="section-counter">
            <div class="row margin_left_0" style="background-image:url('/frontend_assets/assets_front/images/done/who_we_are/who_we_are_background.jpg'); margin-left: 22%; width: 100%;">
                <div class="col-sm-7 col-sm-push-6 side-content" style="margin-left: 13%;">
                    <div class="side-content__inner pl-40" style="padding-top: 59px;">
                        <div class="child-stagger-up" data-scrollmagic>
                            <h2 class="heading-secondary" style="color: #ff224d;">Who we are </h2><br>
                            <p class="text-yellow">We are a family | Knitting large dreams | Sewing a Giant future<br><br>
                                We started our journey back in 1984 with the dream of being the best company in the industry. We have managed to sustain in this industry because of our hard work and dedication towards continuous improvement. Giant Group considers itself as an end-to-end apparel solution provider. Over the years, our size has changed, but one underlying idea has stayed the same – the customer and the environment are at the center of everything we do. We consider our skilled workforce to be our greatest asset. We take great pride in our people, our Giant family who we consider to be committed, talented and experts at what they do.<br>
                                <a href="{{ route('profiles') }}">See more...</a> </p>
                            <div class="mt-90">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sustainability strategy section -->
    <section class="side-bg-content-container bg-dark">
        <div class="clearfix">
            <div class="col-sm-6 col-sm-push-0 side-bg side-bg--left">
                <ul class="rslides slider1 take_a_tour_absolute">
                    <li><img style="width: 508px; height: 407px !important;" src="{{asset('frontend_assets/assets_front/images/SustainableStrategy/1.jpg')}}"></li>
                    <li><img style="width: 508px; height: 407px !important;" src="{{asset('frontend_assets/assets_front/images/SustainableStrategy/2.jpg')}}"></li>
                    <li><img style="width: 508px; height: 407px !important;" src="{{asset('frontend_assets/assets_front/images/SustainableStrategy/3.jpg')}}"></li>
                    <li><img style="width: 508px; height: 407px !important;" src="{{asset('frontend_assets/assets_front/images/SustainableStrategy/4.jpg')}}"></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-sm-push-6 side-content side-content--right">
                    <div class="side-content__inner pt-125 pb-20 pl-40 pt-60">
                        <div class="child-stagger-up" data-scrollmagic>
                            <h2 class="heading-secondary" style="color:green;">Sustainability strategy</h2><br>
                            <p class="text-yellow">Dream it | Believe it | Achieve it<br><br>
                                 Our organization seeks to minimize waste, promote recycling, reduce energy consumption, reduce harmful emissions and, where possible, to work with suppliers who are committed to caring and protecting for the environment. The organization ensures that all its activities are carried out in conformance with the relevant environmental legislation and the requirements of Ministry of Environment and Forest, Directorate of Environment, Government of the People’s Republic of Bangladesh. <a href="{{ route('sustainable_strategy') }}">See more...</a> </p>
                                <div class="mt-90">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- out capacity section -->
    <section class="side-bg-content-container our_capacity_run">
        <div class="clearfix">
            <div class="col-sm-6 col-sm-push-0 side-bg">
                <ul class="rslides slider1">
                    <li><img style="width: 508px; height: 385px !important;" src="{{asset('frontend_assets/assets_front/images/Capacity/1.jpg')}}"></li>
                    <li><img style="width: 508px; height: 385px !important;" src="{{asset('frontend_assets/assets_front/images/Capacity/2.jpg')}}"></li>
                    <li><img style="width: 508px; height: 385px !important;" src="{{asset('frontend_assets/assets_front/images/Capacity/3.jpg')}}"></li>
                    <li><img style="width: 508px; height: 385px !important;" src="{{asset('frontend_assets/assets_front/images/Capacity/4.jpg')}}"></li>
                </ul>
            </div>
        </div>
        <div class="row margin_left_0" style="background-image:url('/frontend_assets/assets_front/images/done/our_capacity/our_capacity_background.jpg'); margin-left: 30%; width: 100%;">
            <div class="col-sm-7 col-sm-push-6 side-content" style="margin-bottom: 35px; margin-left: 25px;">
                <div class="side-content__inner p pl-40 pb-60" style="min-height: 350px; padding-top: 25px;">
                    <div class="text-center count_capacity_wrapper child-stagger-up" data-scrollmagic>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="counter-div">
                                <div class="count_capacity_p">
                                    <p class="icon_img">
                                        <img src="{{asset('frontend_assets/assets_front/images/fabrics-icon.png')}}">
                                    </p>
                                    <p class="counter_title counter-title"><span class="our_capacity"></span>k+</p>
                                </div>
                                <p class="counter_title p counter-title">Fabric</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="counter-div">
                                <div class="count_capacity_p">
                                    <p class="icon_img">
                                        <img src="{{asset('frontend_assets/assets_front/images/done/our_capacity/garments.png')}}">
                                    </p>
                                    <p class="counter_title counter-title"><span class="our_garment"></span>k+</p>
                                </div>
                                <p class="counter_title p counter-title">Garment</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="counter-div">
                                <div class="count_capacity_p">
                                    <p class="icon_img">
                                       <img src="{{asset('frontend_assets/assets_front/images/done/our_capacity/embroidery.png')}}">
                                    </p>
                                    <p class="counter_title counter-title"><span class="our_Embroidery"></span>k+</p>
                                </div>
                                <p class="counter_title p counter-title">Embroidery</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="counter-div">
                                <div class="count_capacity_p">
                                    <p class="icon_img">
                                        <img src="{{asset('frontend_assets/assets_front/images/done/our_capacity/printing.png')}}">
                                    </p>
                                    <p class="counter_title counter-title"><span class="our_printing"></span>k+</p>
                                </div>
                                <p class="counter_title p counter-title">Printing</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="counter-div">
                                <div class="count_capacity_p">
                                    <p class="icon_img">
                                        <img src="{{asset('frontend_assets/assets_front/images/done/our_capacity/washing.png')}}">
                                    </p>
                                    <p class="counter_title counter-title"><span class="washing"></span>k+</p>
                                </div>
                                <p class="counter_title p counter-title">Washing</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="counter-div">
                                <div class="count_capacity_p">
                                    <p class="icon_img">
                                        <img src="{{asset('frontend_assets/assets_front/images/done/our_capacity/employee.png')}}">
                                    </p>
                                    <p class="counter_title counter-title"><span class="employee"></span>.5k+</p>
                                </div>
                                <p class="counter_title p counter-title">Employee</p>
                            </div>
                        </div>
                        <div class="mt-90" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Take a tour section -->
    <section class="side-bg-content-container bg-dark">
        <div class="clearfix">
            <div class="col-sm-6 col-sm-push-0 side-bg side-bg--left">
                <ul class="rslides slider1 take_a_tour_absolute">
                    <li><img style="width: 508px; height: 387px !important;" src="{{asset('frontend_assets/assets_front/images/Take_a_Tour/1.jpg')}}"></li>
                    <li><img style="width: 508px; height: 387px !important;" src="{{asset('frontend_assets/assets_front/images/Take_a_Tour/2.jpg')}}"></li>
                    <li><img style="width: 508px; height: 387px !important;" src="{{asset('frontend_assets/assets_front/images/Take_a_Tour/3.jpg')}}"></li>
                    <li><img style="width: 508px; height: 387px !important;" src="{{asset('frontend_assets/assets_front/images/Take_a_Tour/4.jpg')}}"></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-sm-push-6 side-content side-content--right">
                    <div class="side-content__inner pt-125 pb-40 pl-40 pt-60">
                        <div class="child-stagger-up" data-scrollmagic>
                            <h2 class="heading-secondary" style="color:green;">Take a tour</h2><br>
                            <p class="text-yellow">Giant was born in a country that struggled through a hard-won Independence; 
                            We give back to the society more than what we take from it. We make textiles, and we foster people. Where social and environmental impact are as important as growth. Where people’s enterprise & creativity are more valuable than the machines they work with. Where the well-being of employees extends to caring for their loved ones as well. We are Giant. Several victories, countless memories. And this is our story, through pictures. <a href="{{ route('take_a_tour') }}">See more...</a> </p>
                                <div class="mt-90">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News and publication section -->
    <section class="home-news" style="background-color: #c1c1c1; padding-top: 50px; padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <h2 style="margin-left: 85px;" class="heading-secondary text-yellow mb-60">News &amp; Publications </h2>
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="row">
                        @php $count = 0; @endphp

                        @foreach($news as $new)
                            @if($count< 2)
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="news-box">
                                        <figure>
                                            <a href="{{ route('single_news', $new->id) }}">
                                                <img class="img-responsive" src="{{asset('images/news/'.$new->image)}}"
                                                    alt="news"> </a>
                                        </figure>
                                        <div class="news-content">
                                            <span>{{ $new->created_at->format('d M Y') }}</span>
                                            <h2>
                                                <a style="color: white;" href="{{ route('single_news', $new->id) }}">{{ $new->title }}</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @php $count++  @endphp
                        @endforeach
                    </div>
                    <p style="margin-left: 34px;">
                        <a href="{{ route('news_details') }}" class="view-all view_all_margin"> View all news</a>
                    </p>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-4">
                    <div class="event">
                        <ul class="nav nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#" class="active" aria-controls="home" role="tab" data-toggle="tab">News</a>
                            </li>
                            <li role="presentation">
                                <a href="#" aria-controls="profile" role="tab" data-toggle="tab">Publications</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div style="height: 283px; overflow: auto;" role="tabpanel" class="tab-pane in fade active" id="testTalk">
                                @foreach($news as $new)
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="event-date">
                                                <strong>{{ $new->created_at->format('d') }}</strong>
                                                <b>date</b>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <a  href="{{ route('single_news', $new->id) }}">
                                                <h4 class="media-heading">{{ $new->title }}</h4>
                                                <p>{{ $new->created_at->format('d M Y') }}</p>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <p>
                            <a href="{{ route('news_details') }}" class="view-all"> view all Publications</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 0,
              $SlideDuration: 2000,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 210,
              $Align: 0
            };
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            var MAX_WIDTH = 1400;
            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
        });
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>

    <section class="parners_section">
        <br><h2 class="text-center heading-secondary">Our Partners </h2><br>
        <div  id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1200px;height:100px;overflow:hidden;visibility:hidden;">
            <div data-u="slides" style="cursor:default;position:relative;width:1200px;height:100px;">
                <div class="single_image_div">
                    <img data-u="image" class="single_image"  src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/1.png')}}" />
                </div>
                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/2.png')}}" />
                </div>
                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/3.png')}}" />
                </div>
                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/4.png')}}" />
                </div>
                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/5.png')}}" />
                </div>
                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/6.png')}}" />
                </div>
                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/7.png')}}" />
                </div>
                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/8.png')}}" />
                </div>
                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/9.png')}}" />
                </div>
                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/10.png')}}" />
                </div>

                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/11.png')}}" />
                </div>
                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/12.png')}}" />
                </div>
                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/13.png')}}" />
                </div>
                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/14.png')}}" />
                </div>
                <div>
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/15.png')}}" />
                </div>
                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/16.png')}}" />
                </div>
                <div class="single_image_div">
                     <img data-u="image" class="single_image" src="{{asset('frontend_assets/assets_front/images/done/our_partners_logo/17.png')}}" />
                </div>

            </div>
        </div>
    </section>
@endsection()


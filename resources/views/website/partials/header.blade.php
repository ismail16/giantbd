<!DOCTYPE html>
<html lang="en-US">
    <head>
        <!--<script src="js/triangle.js"></script>-->
        <meta charset="UTF-8">
        <meta name="Description" CONTENT="One of the pioneers in Textile & Readymade garments since the mid eighties. A conglomerate of 100% export oriented companies, ensuring the highest quality">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-param" content="_csrf-frontend">
        <meta name="csrf-token" content="eW12OWFsTWQBLkYPVB1gHk4iBQECWyhUFhhPCDsfeAILVTRYIF0uHQ==">
        <meta name="msapplication-config" content="images/static/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <!--<link href="https://fonts.googleapis.com/css?family=Sofia" rel="stylesheet">-->
        
        <link href="{{asset('frontend_assets/assets_front/fonts/Sofia-Pro-Medium.ttf')}}" rel="stylesheet">
        <link href="{{asset('frontend_assets/assets_front/fonts/Sofia-Pro-SemiBold.ttf')}}" rel="stylesheet">
        <link href="{{asset('frontend_assets/assets_front/fonts/sofiapro-light.otf')}}" rel="stylesheet">
        <title>
            Giant Group - Home        </title>
        <link rel="stylesheet" id="MyStyle-css" href="{{asset('frontend_assets/assets_front/css/news_bootstrap.min.css')}}" type="text/css" media="all">
        <link rel="stylesheet" id="MyStyle1-css" href="{{asset('frontend_assets/assets_front/css/news_style.css')}}" type="text/css" media="all">
        <link rel="stylesheet" id="MyStyle2-css" href="{{asset('frontend_assets/assets_front/css/font.css')}}" type="text/css" media="all">
        <link rel="stylesheet" media="all" href="{{asset('frontend_assets/assets_front/css/style.min.css')}}">
        <link rel="stylesheet" media="all" href="{{asset('frontend_assets/assets_front/css/home.bundle.min.css')}}">
        <link rel="stylesheet" media="all" href="{{asset('frontend_assets/assets_front/css/circle.css')}}" >
        <link rel="stylesheet" media="all" href="{{asset('frontend_assets/assets_front/css/style.css')}}" >
        <link rel="stylesheet" href="{{asset('frontend_assets/assets_front/home_slider/slider.css')}}">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
       
        <?php if(strpos($_SERVER['REQUEST_URI'], "fbclid") !== false ){ ?>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php } ?>

        <?php if(Route::currentRouteName() == 'index'){ ?>
            <style type="text/css">
            @media screen and (max-width: 480px){
                .menu__item {
                    font-size: 1.725rem !important;
                }
            }
            </style>
        <?php } ?>

        <!-- <link rel="apple-touch-icon" sizes="60x60" href="imagesapple-touch-icon.png"> -->
        <!-- <link rel="icon" type="<?php //echo BASE; ?>/files/assets_front/image/png" sizes="32x32" href="<?php //echo BASE; ?>/files/assets_front/imagesfavicon-32x32.png"> -->
        <!-- <link rel="icon" type="<?php //echo BASE; ?>/files/assets_front/image/png" sizes="16x16" href="<?php //echo BASE; ?>/files/assets_front/images/favicon-16x16.png"> -->
        <!-- <link rel="mask-icon" href="<?php //echo BASE; ?>/files/assets_front/images/safari-pinned-tab.svg" color="#5bbad5"> -->
        <link rel="shortcut icon" href="{{asset('frontend_assets/assets_front/images/FaviconGiantGroup.png')}}">

        <link rel="manifest" href="{{asset('frontend_assets/assets_front/images/manifest.json')}}">
        <script src="{{asset('frontend_assets/assets_front/js/jquery_modernizr.bundle.min.js')}}"></script>
        <script src="{{asset('frontend_assets/assets_front/js/google_maps_api.js')}}"></script>

        <script src="https://jssors8.azureedge.net/script/jssor.slider-27.5.0.min.js"></script>

        <?php if(strpos($_SERVER['REQUEST_URI'], "giant_future") !== false || strpos($_SERVER['REQUEST_URI'], "our_pride_bangladesh") !== false || strpos($_SERVER['REQUEST_URI'], "profile") !== false){ ?>
            <link rel="stylesheet" href="{{asset('frontend_assets/assets_front/vip_css/vip_swiper.min.css')}}">
            <link rel="stylesheet" href="{{asset('frontend_assets/assets_front/vip_css/vip_style.css')}}" />
        <?php } ?>

        <?php if(strpos($_SERVER['REQUEST_URI'], "job_anouncement") !== false){ ?>
            <link rel="stylesheet" href="{{asset('frontend_assets/assets_front/css/job_acounce.css')}}">
        <?php } ?>

        <?php if(strpos($_SERVER['REQUEST_URI'], "join_us") !== false){ ?>
            <link rel="stylesheet" href="{{asset('frontend_assets/assets_front/css/join_us.css')}}">
        <?php } ?>

        <?php if(strpos($_SERVER['REQUEST_URI'], "profile") !== false){ ?>
            <link rel="stylesheet" href="{{asset('frontend_assets/assets_front/carousel_slider/docs.theme.min.css')}}">
            <link rel="stylesheet" href="{{asset('frontend_assets/assets_front/carousel_slider/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('frontend_assets/assets_front/carousel_slider/owl.theme.default.min.css')}}">
            <script src="{{asset('frontend_assets/assets_front/carousel_slider/owl.carousel.js')}}"></script>

            <!-- profile slider -->
            <link href="{{asset('frontend_assets/assets_front/css/profile_4_0_0_bootstrap.min.css')}}" rel="stylesheet">
            <script src="{{asset('frontend_assets/assets_front/js/profile_4_0_0_bootstrap.min.js')}}"></script>
            <link href="{{asset('frontend_assets/assets_front/css/profile.css')}}" rel="stylesheet">
        <?php } ?>

        <?php if(strpos($_SERVER['REQUEST_URI'], "take_a_tour") !== false){ ?>
            <link rel="stylesheet" href="{{asset('frontend_assets/assets_front/css/take_a_tour.css')}}">
            <link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
            <script src="{{asset('frontend_assets/assets_front/js/bootstrap_4_1_1.min.js')}}"></script>
            <script type="text/javascript">
               $(document).ready(function(){  
                      load_data();  
                      
                      function load_data(page)  
                      {  
                           $.ajax({  
                                url: '{{'/'}}/gallery_pagination', 
                                method:"POST",  
                                data:{page:page},  
                                success:function(data){  
                                    $('#pagination_data').html(data);  
                                }
                           })  
                      }
                      function load_data(page, cat){
                        $.ajax({  
                            url: '{{'/'}}/gallery_pagination', 
                            method:"POST",  
                            data:{page:page, filter: cat},  
                            success:function(data){  
                                $('#pagination_data').html(data);
                            }
                       }) 
                      }  
                      $(document).on('click', '.giant_pagination_link', function(){  
                           var page = $(this).attr("id");  
                           var cat = $(".giant_pagination_link").attr('class');
                                cat = cat.split(" ");
                           if(cat[1] !=""){
                                load_data(page, cat[1]);
                           }else{
                                load_data(page);  
                           }
                      });  
                 }); 
             </script>
        <?php } ?>
        <?php if(strpos($_SERVER['REQUEST_URI'], "our_concerns") !== false){ ?>
           <style type="text/css">
                .menu__item{
                    padding-top: .14rem !important;
                    margin-bottom: 4px !important;
                }
                .scrollup{
                    padding-top: 8px !important;
                }
                .scrolldown{
                    padding-top: 12px !important;
                }
                .social_list{
                    margin-bottom: 5px !important;
                }
           </style>
        <?php } ?>

        <link rel="stylesheet" href="{{asset('frontend_assets/assets_front/css/responsive.css')}}">
        <style type="text/css">
            .font-sofia-light{
                font-family: sofia-pro, sans-serif;
                font-style: normal;
                /*Sofia Pro Light*/
                font-weight: 300;
            }
            .font-sofia-medium{
                font-family: sofia-pro, sans-serif;
                font-style: normal;
                /*Sofia Pro Medium*/
                font-weight: 500;
            }
            .font-sofia-bold{
                font-family: sofia-pro, sans-serif;
                font-style: normal;
                 /*Sofia Pro Semi Bold*/
                font-weight: 600;
            }
            body{
                font-family: 'Sofia Pro',Helvetica Neue,Helvetica,Arial,sans-serif;
                font-style: normal;
                /*Sofia Pro Light*/
                font-weight: 500;
                
            }

            .scrollup{
                font-size: 18px;
                color: #fff;
                background-color: #0066cc;
                border: 1px solid #A2A2A2;
                text-align: center;
                padding: 12px; 
                width: 50px;
                height: 50px;
                position: fixed;
                bottom: 30px;
                right: 30px;
                cursor: pointer;
                z-index: 999;
                border-radius: 60px;
            }

            .scrolldown{
                font-size: 18px;
                color: #ffffff;
                /* background-color: #0066cc; */
                border: 3px solid #fff;
                text-align: center;
                padding: 14px 0px;
                width: 35px;
                height: 60px;
                position: absolute;
                bottom: 20px;
                cursor: pointer;
                z-index: 999;
                border-radius: 60px;
                opacity: .8;
            }
        </style>
        <style type="text/css">
            @media (max-width: 450px){
                .scrolldown{
                    display: none !important;
                }
            }
        </style>
    </head>

    <?php 
        if(strpos($_SERVER['REQUEST_URI'], "single_news") !== false){

        }else{
            ?>
            <div class="text-center" style="margin-right: 30px;">
                <a class="scrolldown" href="#next_section">
                    <i class="fa fa-arrow-down"></i>
                </a>
            </div>
            <?php
        }
    ?>

    <body class="home-page">
        <script type="text/javascript">
            var site_url_info = {
                baseUrl: 'http://test.com',
                themeUrl: 'http://test.com/themes/real_estate'
            }
        </script>

        <div class="site-main-wrapper">

            <!-- preloader -->
            <div class="loader ">
                <div class="custom-progress"></div>
                <div class="loader-logo">
                    <h2 class="heading-secondary">
                        <span>
                            <span>LIVE TODAY, THINK BEYOND...</span>
                        </span>
                    </h2>
                </div>
            </div>

            <header>
                <div class="page _page_loading" id="root">
                    <div class="mobile-menu-bar"></div>
                    <a class="ui-logo " href="{{'/'}}">
                        <img src="{{asset('frontend_assets/assets_front/images/logo.png')}}">
                    </a>
                    <span class="ui-menu">
                        <span class="ui-menu__bar"></span>
                        <span class="ui-menu__bar"></span>
                        <span class="ui-menu__bar"></span>
                    </span>
                    <nav class="menu">
                        <i class="menu__close">
                            <img src="{{asset('frontend_assets/assets_front/icons/hamburger-close.png')}}" alt="">
                        </i>
                        <div class="menu-inner-wrapper">
                            <span class="menu-svg-animation-holder">

                                <svg id="home-giant" version="1.1" class="svg-animation" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <image x="0" y="60" width="700" height="133" xlink:href="{{asset('frontend_assets/assets_front/icons/giant/home-giant.png')}}"
                                    />
                                </svg>

                                <svg id="profile-icon" version="1.1" class="svg-animation" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <image x="0" y="0" width="700" height="264" xlink:href="{{asset('frontend_assets/assets_front/icons/giant/profile-giant-final.png')}}"
                                    />
                                </svg>

                                <svg id="sustainability-icon" version="1.1" class="svg-animation" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <image x="0" y="0" width="700" height="264" xlink:href="{{asset('frontend_assets/assets_front/icons/giant/sustainability-icon.png')}}"
                                    />
                                </svg>

                                <svg id="take-a-tour-giant" version="1.1" class="svg-animation" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <image x="0" y="0" width="700" height="264" xlink:href="{{asset('frontend_assets/assets_front/icons/giant/Take_a_Tour.png')}}"
                                    />
                                </svg>

                                <svg id="our-concerns" version="1.1" class="svg-animation" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <image x="0" y="0" width="700" height="264" xlink:href="{{asset('frontend_assets/assets_front/icons/giant/our-concerns.png')}}"
                                    />
                                </svg>

                                <svg id="future-icon" version="1.1" class="svg-animation" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <image x="0" y="0" width="700" height="264" xlink:href="{{asset('frontend_assets/assets_front/icons/giant/Giant_Future.png')}}"
                                    />
                                </svg>

                                <svg id="career-icon" version="1.1" class="svg-animation" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <image x="0" y="0" width="700" height="264" xlink:href="{{asset('frontend_assets/assets_front/icons/giant/Career.png')}}"
                                    />
                                </svg>

                                <svg id="pride-bangladesh" version="1.1" class="svg-animation" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <image x="0" y="0" width="700" height="300" xlink:href="{{asset('frontend_assets/assets_front/icons/giant/map-bangladesh-giant.png')}}"
                                    />
                                </svg>

                                <svg id="contact-icon" version="1.1" class="svg-animation" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <image x="0" y="0" width="700" height="264" xlink:href="{{asset('frontend_assets/assets_front/icons/giant/take-a-tour-giant.png')}}"
                                    />
                                </svg>
                            </span>

                            <menu class="menu__content" style="margin-top: 7%;">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <?php 
                                        if (Route::currentRouteName() == 'index') {
                                            ?>
                                                <style type="text/css">
                                                    .all_page_menu{
                                                        margin-left: -35px !important;
                                                        margin-top: 5px !important;
                                                        font-weight: normal !important;
                                                    }

                                                </style>
                                            <?php
                                        }
                                        if (strpos($_SERVER['REQUEST_URI'], "profile") !== false) {
                                            ?>
                                                <style type="text/css">
                                                    .all_page_menu{
                                                        margin-left: 44px !important;
                                                    }
                                                    @media (max-width: 450px){
                                                       .all_page_menu{
                                                            margin-left: 0px !important;
                                                            margin-top: 5px !important;
                                                            font-weight: normal !important;
                                                        }
                                                        .owl-stage{
                                                            height: 150px !important; 
                                                        }
                                                        .owl-carousel{
                                                            height: 150px !important;
                                                            margin-left: -12px !important;
                                                            width: 378px !important;
                                                        }
                                                        .modal-body{
                                                            overflow: auto !important;
                                                        }
                                                    }
                                                    .menu__item{
                                                        font-weight: 400 !important;
                                                        margin-bottom: 10px !important;
                                                    }
                                                    .navbar_socail_link{
                                                        margin-left: -14px !important;
                                                    }
                                                    .heading-secondary{
                                                        font-size: 14px !important;
                                                    }
                                                </style>
                                            <?php
                                        }

                                        if (strpos($_SERVER['REQUEST_URI'], "sustainable_strategy") !== false) {
                                            ?>
                                                <style type="text/css">
                                                    .menu__item{
                                                        padding-top: 0px !important;
                                                        margin-bottom: 6px !important;
                                                    }
                                                    .glyphicon-triangle-top{
                                                        padding-top: 9px !important;
                                                    }
                                                    .scrolldown{
                                                        padding-top: 12px !important;
                                                    }
                                                    .social_list{
                                                        margin-bottom: 5px !important;
                                                    }
                                                    .heading-secondary{
                                                        font-size: 14px !important;
                                                    }
                                                </style>
                                            <?php
                                        }

                                        if (strpos($_SERVER['REQUEST_URI'], "take_a_tour") !== false || strpos($_SERVER['REQUEST_URI'], "giant_future") !== false || strpos($_SERVER['REQUEST_URI'], "our_pride_bangladesh") !== false || strpos($_SERVER['REQUEST_URI'], "join_us") !== false || strpos($_SERVER['REQUEST_URI'], "contact") !== false) {
                                            ?>
                                                <style type="text/css">
                                                     @media (max-width: 450px){
                                                        .menu__item{
                                                            font-size: 18px !important;
                                                        }
                                                        .margin_left_right{
                                                            margin: 0px 20px !important;
                                                        }
                                                    }
                                                </style>
                                            <?php
                                        }

                                        if (strpos($_SERVER['REQUEST_URI'], "job_announcement") !== false) {
                                            ?>
                                                <style type="text/css">
                                                     @media (max-width: 450px){
                                                        .menu__item{
                                                            font-size: 18px !important;
                                                        }
                                                        .featured-jobs {
                                                            margin-top: 50px !important;
                                                        }
                                                        .feature-link{
                                                            display: -webkit-inline-box !important;
                                                        }

                                                        .apply_btn{
                                                            margin-top: 70px !important;
                                                        }
                                                    }
                                                </style>
                                            <?php
                                        }

                                    
                                        if (strpos($_SERVER['REQUEST_URI'], "our_concerns") !== false) {
                                            ?>
                                                <style type="text/css">
                                                    .heading-secondary{
                                                        font-size: 14px !important;
                                                    }
                                                </style>
                                            <?php
                                        }
                                    ?>

                                    <div class="col-md-4 all_page_menu">

                                        <a data-target="home-giant" class="menu__item main-menu-item" href="{{'/'}}">Home</a>

                                        <a data-target="profile-icon" class="menu__item main-menu-item" href="{{ route('profiles') }}">Profile</a>

                                        <a data-target="sustainability-icon" class="menu__item main-menu-item" href="{{ route('sustainable_strategy') }}">Sustainability Strategy</a>

                                        <a data-target="take-a-tour-giant" class="menu__item main-menu-item" href="{{ route('take_a_tour') }}">Take a tour</a>

                                        <a data-target="our-concerns" class="menu__item main-menu-item" href="{{ route('our_concerns') }}">Our Concerns</a>

                                        <a data-target="future-icon" class="menu__item main-menu-item" href="{{ route('giant_future') }}">Giant future</a>

                                        <a data-target="career-icon" class="menu__item main-menu-item" href="{{ route('join_us') }}">Career</a>

                                        <a data-target="pride-bangladesh" class="menu__item main-menu-item" href="{{ route('our_pride_bangladesh') }}">Bangladesh - Our Pride</a>

                                        <a data-target="contact-icon" class="menu__item main-menu-item" href="{{ route('contact') }}">Contact Us</a>

                                        <div class="navbar_socail_link">               
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="sub-menu">
                                    </div>
                                </div>
                            </menu>
                        </div>
                    </nav>
                    <noindex>

                        <div class="rotate">

                            <i class="rotate__logo"></i>

                            <i class="rotate__icon"></i>

                            <div class="rotate__text">Please rotate your&nbsp;device for&nbsp;better experience</div>

                        </div>

                    </noindex>

                <?php if( Route::currentRouteName() == 'index' || strpos($_SERVER['REQUEST_URI'], "fbclid") !== false){ ?>
                    <section class="promo">
                        <div class="promo__content">
                            <img style="width: 100%; height: inherit;" src="{{asset('frontend_assets/assets_front/images/Home-Page.jpg')}}">
                            <div class="circle-container header-circle" data-video-src="https://www.youtube.com/embed/23mbiZqrOoU?autoplay=1" onclick="openNav(this)"
                                style="cursor: pointer; z-index: 99999999999 !important">
                                <div id="circle" style="z-index: 99999;">
                                    <div class="circle0 sub-border res_circle_1" style="position: absolute; width: 250px; height: 250px; top: 0px; left: 0px; animation: spin2 10s linear infinite; z-index: 99999;"></div>
                                    <div class="circle1 sub-border res_circle_2" style="position: absolute; width: 234px; height: 234px; top: 8px; left: 8px; animation: spin 12s linear infinite; z-index: 99999;"></div>
                                    <div class="circle2 sub-border res_circle_3" style="position: absolute; width: 218px; height: 218px; top: 15px; left: 15px; animation: spin2 15s linear infinite; z-index: 99999;"></div>
                                </div>
                                <div class="video_div_area">
                                    <video src="{{asset('frontend_assets/assets_front/video/Giant.mp4')}}" autoplay muted type="video/mp4"></video>
                                </div>
                            </div>
                        </div>
                    </section>

                    <style type="text/css">
                        @media (max-width: 450px){
                            .res_circle_1 {
                                position: absolute !important;
                                width: 65px !important;
                                height: 65px !important;
                                top: 153px !important;
                                left: 153px !important;
                            }

                            .res_circle_2 {
                                position: absolute !important;
                                width: 80px !important;
                                height: 80px !important;
                                top: 145px !important;
                                left: 145px !important;
                            }

                            .res_circle_3 {
                                position: absolute !important;
                                width: 90px !important;
                                height: 90px !important;
                                top: 140px !important;
                                left: 140px !important;
                            }

                            .res_circle_1:after {
                                width: 20px !important;
                                height: 20px !important;
                                top: 42px !important;
                            }

                            .res_circle_2:after {
                                width: 20px !important;
                                height: 20px !important;
                                top: 52px !important;
                            }

                            .res_circle_3:after {
                                width: 20px !important;
                                height: 20px !important;
                                top: 62px !important;
                            }

                            .video_div_area{
                                position: absolute !important;
                                width: 70px !important;
                                height: 70px !important;
                                top: 133px !important;
                                left: 133px !important;
                                border-radius: 125px !important;
                                -webkit-mask-image: -webkit-radial-gradient(circle, #d7c2a7 100%, black 100%);
                            }

                            
                        }
                    </style>

                 <?php }else if(strpos($_SERVER['REQUEST_URI'], "join_us") !== false){ ?>
                    <section class="promo">
                        <div class="promo__content">
                            <video autoplay loop muted style="width: 100%;">
                              <source src="{{asset('frontend_assets/Videos/Career-Giant-Group.mp4')}}" type="video/mp4">
                            </video>
                            <div class="promo_tour_con_h1">
                                <h1 class="promo_tour_con_header" style="font-size: 26px; padding-left: 16%; padding-right: 16%; line-height: 25px;">"We believe the people that call Giant Group home are the ones who shape our present and design our future. And their future is what inspires us to do our best everyday and realize our dreams for a better tomorrow"<br><span style="font-size: 17px;">Azfar Hassan</span></h1>
                            </div>
                        </div>
                    </section>

                    <style type="text/css">
                        
                        @media (max-width: 450px){
                            
                            .promo_tour_con_header{
                                padding-left: 8% !important;
                                padding-right: 6% !important;
                                line-height: 18px !important;
                            }
                        }
                    </style>

                <?php }else if(strpos($_SERVER['REQUEST_URI'], "sustainable_strategy") !== false){ ?>
                    <section class="promo">
                        <div class="promo__content">
                            <video autoplay loop muted style="width: 100%;">
                              <source src="{{asset('frontend_assets/Videos/Sustainable-Strategy.mp4')}}" type="video/mp4">
                            </video>
                            <div class="promo_tour_con_h1">
                                <h1 style="font-size: 26px; padding-left: 16%; padding-right: 16%; line-height: 25px;">"The greatest threat to our planet is the belief that someone else will save it"&nbsp;<br><span style="font-size: 17px;">Robert Swan</span></h1>
                            </div>
                        </div>
                    </section>
                    <style type="text/css">
                        .scrollup{
                            padding: 3px !important;
                        }
                    </style>
                <?php }else if(strpos($_SERVER['REQUEST_URI'], "profiles") !== false){ ?>
                    <section class="promo">
                        <div class="promo__content">
                            <video autoplay loop muted style="width: 100%;">
                              <source src="{{asset('frontend_assets/Videos/Profile.mp4')}}" type="video/mp4">
                            </video>
                            <div class="promo_tour_con_h1">
                                <h1 style="font-size: 26px; padding-left: 16%; padding-right: 16%; line-height: 25px;">"Growth is never by mere chance; it is the result of forces working together"&nbsp;&nbsp;<br><span style="font-size: 17px;">James Cash Penney</span></h1>
                            </div>
                        </div>
                    </section>

                <?php }else if(strpos($_SERVER['REQUEST_URI'], "contact") !== false){ ?>

                    <section class="promo">
                        <div class="promo__content">
                            <video autoplay loop muted style="width: 100%;">
                                <source src="{{asset('frontend_assets/Videos/contact.mp4')}}" type="video/mp4">
                            </video>
                            <div class="promo_tour_con_h1">
                                <h1 style="font-size: 26px; padding-left: 16%; padding-right: 16%; line-height: 25px;">"The Future is in the Details"&nbsp;<br><span style="font-size: 17px;">Feroz M. Hassan</span></h1>
                            </div>
                        </div>
                    </section>

                <?php }else if(strpos($_SERVER['REQUEST_URI'], "take_a_tour") !== false){ ?>

                    <section class="promo">
                        <div class="promo__content">
                            <video autoplay loop muted style="width: 100%;">
                                <source src="{{asset('frontend_assets/Videos/Take-a-tour.mp4')}}" type="video/mp4">
                            </video>
                            <div class="promo_tour_con_h1">
                                <h1 style="font-size: 26px; padding-left: 16%; padding-right: 16%; line-height: 25px;">"We truly believe the bigger the challenges, the bigger the opportunities"&nbsp;<br><span style="font-size: 17px;">Majedur Rahim</span></h1>
                            </div>
                        </div>
                    </section>

                <?php }else if(strpos($_SERVER['REQUEST_URI'], "giant_future") !== false){ ?>

                    <section class="promo">
                        <div class="promo__content">
                            <video autoplay loop muted style="width: 100%;">
                                <source src="{{asset('frontend_assets/Videos/Giant-Future.mp4')}}" type="video/mp4">
                            </video>
                            <div class="promo_tour_con_h1">
                                <h1 style="font-size: 26px; padding-left: 16%; padding-right: 16%; line-height: 25px;">Small Stories, Giant Future<br><span style="font-size: 15px;"></span></h1>
                            </div>
                        </div>
                    </section>

                <?php }else if(strpos($_SERVER['REQUEST_URI'], "our_concerns") !== false){ ?>

                    <section class="promo">
                        <div class="promo__content">
                            <video autoplay loop muted style="width: 100%;">
                                <source src="{{asset('frontend_assets/Videos/Our-Concern.mp4')}}" type="video/mp4">
                            </video>
                            <div class="promo_tour_con_h1">
                                <h1 style="font-size: 26px; padding-left: 16%; padding-right: 16%; line-height: 25px;">“As a group, we try not to make any decisions that we’re not excited about”<br><span style="font-size: 17px;">Mehrin Hassan</span></h1>
                            </div>
                        </div>
                    </section>

                <?php }else if(strpos($_SERVER['REQUEST_URI'], "our_pride_bangladesh") !== false){ ?>

                    <section class="promo">
                        <div class="promo__content">
                            <video autoplay loop muted style="width: 100%;">
                                <source src="{{asset('frontend_assets/Videos/Bangladesh-our-pride.mp4')}}" type="video/mp4">
                            </video>
                            <div class="promo_tour_con_h1">
                                <h1 style="font-size: 32px; padding-left: 16%; padding-right: 16%; line-height: 25px;">বাংলাদেশ- আমাদের গর্ব &nbsp;&nbsp;<br><span style="font-size: 15px;">Bangladesh - Our Pride</span></h1>
                            </div>
                        </div>
                    </section>

                <?php } ?>
                    <!-- <section class="promo"> -->
                        <!-- <div class="promo__content"> -->
                            <!-- <img style="width: 100%; height: inherit;" src="{{asset('frontend_assets/assets_front/images/Giant-Textile-Building.jpg')}}"> -->
                            <!-- <div class="promo_tour_con_h1"> -->
                               <!--  <h1 style="font-size: 20px; padding-left: 10%; padding-right: 10%;">“WE BELIEVE THE PEOPLE THAT CALL GIANT GROUP HOME ARE THE ONES WHO SHAPE OUR PRESENT AND DESIGN OUR FUTURE. AND THEIR FUTURE IS WHAT INSPIRES US TO DO OUR BEST EVERYDAY AND REALIZE OUR DREAMS FOR A BETTER TOMORROW”</h1> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </section> -->

                </div>
            </header>

            <script>
                $(document).ready(function(){
                  // Add smooth scrolling to all links
                  $("a").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                      // Prevent default anchor click behavior
                      event.preventDefault();

                      // Store hash
                      var hash = this.hash;

                      // Using jQuery's animate() method to add smooth page scroll
                      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                      $('html, body').animate({
                        scrollTop: $(hash).offset().top
                      }, 800, function(){
                   
                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                      });
                    } // End if
                  });
                });
            </script>


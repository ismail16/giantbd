@extends('website.layouts.master')

@section('content')
<div class="container giant_wrap" style="padding-left: 50px; padding-right: 50px;" id="section-counter">
        <div class="row" id="next_section">
           <div class="col-sm-4 images_giant_wrap">
                <img class="images_giant_" alt="" src="{{asset('frontend_assets/assets_front/images/Take_a_Tour/Giant-Textile-Unit-Info.jpg')}}" />
                <div class="centered"><button class="btn_click" style="font-size: 13px;" data-toggle="modal" data-target="#textile_unit" type="button">GIANT TEXTILE UNIT</button></div>
           </div>
           <div class="col-sm-4 images_giant_wrap" >
                <img class="images_giant_" alt="" src="{{asset('frontend_assets/assets_front/images/Take_a_Tour/Giant-Joydebpur-Unit-Info.jpg')}}" />
                <div class="centered"><button class="btn_click" style="font-size: 13px;" data-toggle="modal" data-target="#joydebpur_unit" type="button">JOYDEBPUR UNIT</button></div>
           </div>
           <div class="col-sm-4 images_giant_wrap">
                <img class="images_giant_" alt="" src="{{asset('frontend_assets/assets_front/images/Take_a_Tour/Giant-Tower-info.jpg')}}" />
                <div class="centered"><button class="btn_click" style="font-size: 13px;" data-toggle="modal" data-target="#headquater" type="button">GIANT HEADQUATER</button></div>
           </div>
        </div>
    </div>
    <style>
        .giant_wrap{
            padding-top: 30px;
            padding-bottom: 30px;
        }
        .images_giant_wrap{
            /*background-color: red;*/
        }
        .btn_click{
            background-color: #000;
            padding: 5px 25px;
            border: none;
        }
        .images_giant{
           /* height: 350px;
            width: 350px;*/
        }
        .container {
            position: relative;
            text-align: center;
            color: white;
        }
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

    <div id="textile_unit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-uppercase">Giant Textile Unit</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-12">
                                <p style="color: #000; text-align: left;">Our composite knit apparel and textile manufacturing unit Giant Textiles Ltd started its journey in 2012. GTL is comprised of Design and Product Development, Sample, Knitting, Dyeing, Washing, Printing, Embroidery, Cutting, Sewing and Finishing sections. <br><br>

                                The products of GTL range from men’s wear, ladies’ wear and kids’ wear. This unit has the Fabric capacity of 25,000 kgs/day with a Biological Effluent treatment plant. The green facility is fully equipped with state of the art machineries and includes :
                                Printing: 30,000 Pcs/day
                                Embroidery: 20,000 Pcs/day
                                Washing (acid, Dip Dye, Garment dye etc.) : 6,000-8,000  Pcs/day
                                We are planning to add 30 sewing lines and an all over print facility in Giant Textiles Unit by 2021. <br><br>

                                GTL seeks to minimize waste, promote recycling, reduce energy consumption, reduce harmful emissions and, where possible, to work with suppliers who are committed to caring and protecting for the environment. The facility is designed for low energy consumption by reducing power-demand and by using energy-efficient equipment.</p>
                            </div>
                            <div class="col col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="joydebpur_unit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-uppercase">Joydebpur Unit</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-12" style="color: #000; text-align: left;">
                                <p>Giant was established in 1988 and now has 2 locations and 5 units in total. The Joydepur Unit, which has 4garment manufacturing units with 35 lean manufacturing lines and has the production capacity of 50,000 pcs/day. 
                                This unit is where Giant started its journey. This Accord certified facility has very skilled workforce with a management team that is extremely proactive and efficient. JU is comprised of Design and Product Development, Sample, Printing, Embroidery, Cutting, Sewing and Finishing sections. The products of JU range from men’s wear, ladies’ wear and kids’ wear.</p><br>
                                The four garment manufacturing units are</p>
                                <ul>
                                    <li> 1.  Shafi Processing Industries Ltd.</li>
                                    <li> 2.  Mavis Garments Ltd.</li>
                                    <li> 3.  Giant Apparels Ltd.</li>
                                    <li> 4.  Giant Knit Fashion Ltd.</li>
                                </ul>
                                <br>
                                JU seeks to minimize waste, promote recycling, reduce energy consumption, reduce harmful emissions and, where possible, to work with suppliers who are committed to caring and protecting for the environment.</p>
                            </div>
                            <div class="col col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="headquater" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-uppercase">Giant Business Tower</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-12" style="color: #000; text-align: left;">
                                <p>13 (+2 basement) Storied Exclusive Energy efficient Green Corporate Office Building by Giant Shafi Holdings Limited (GSHL) a concern of Giant Group. <br><br>
                                Location: Plot # 3 & 3/A, Sector # 3, Uttara C/A, Dhaka-1230, Bangladesh.  <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul>
                                            <li>Occupants</li>
                                            <li>GIANT GROUP </li>
                                            <li>JAMUNA BANK</li>
                                            <li>BRAC BANK </li>
                                            <li>EASTERN BANK</li>
                                            <li>INDITEX</li>
                                            <li>H&M DIALOGUE OFFICE</li>

                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul>
                                            <li>LI & FUNG</li>
                                            <li>HARRIS & MENUK</li>
                                            <li>LIDL</li>
                                            <li>CARREFOUR</li>
                                            <li>DEKKO GROUP</li>
                                            <li>LAILA GROUP</li>
                                            <li>SECOND CUP COFFEE COMPANY</li>
                                        </ul>
                                    </div>                                     
                                </div> 
                                </p>
                            </div>
                            <div class="col col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- video section -->
    <section class="wow fadeIn" data-stellar-background-ratio="0.3" style="background-size: cover; overflow: hidden; padding-top: 140px;padding-bottom: 140px; background-image:url('/frontend_assets/assets_front/images/Profile-Video-Cover-Photo.jpg');">
        <div class="opacity-extra-medium bg-black"></div>
        <div class="container">
            <div class="row">
                <div style="float: none;margin-left: auto; margin-right: auto;" class="col-lg-6 col-md-6 col-sm-10 col-xs-12 text-center center-col last-paragraph-no-margin">
                    <!-- <div data-video-src="https://www.youtube.com/embed/LPOArssP_9U?autoplay=1" onclick="openNav(this)" -->
                    <div data-video-src="{{asset('frontend_assets/Videos/Giant-Group-Home-Video.mp4')}}" onclick="openNav(this)"
                    style="cursor: pointer; z-index: 99999999999 !important">
                        <img data-toggle="modal" data-target="#videoModal" src="{{asset('frontend_assets/assets_front/vip_images/icon-play.png')}}">
                    </div>
                    <h4 class="alt-font text-white margin-15px-bottom xs-margin-20px-bottom">We Do, Best Effort</h4>
                    <p class="text-extra-large font-weight-300 text-light-gray width-85 xs-width-100 display-inline-block margin-25px-bottom">How we provide our best effort...</p>
                </div>
                <div id="video-player-overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div id="video-player-overlay-content">
                        <iframe id="circle-video-frame" frameborder="0" width="560" height="315" src=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <div class="container take_tour_pic_category" style="padding-left: 50px; padding-right: 50px;" id="section-counter">
        <div class="row">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: left;padding-bottom: 20px; padding-top: 40px; padding-left: 27px;">
                <button class="filter-button selected btn_gallary btn-primary" id="Giant_Textile_Unit">Giant Textile Unit</button>
                <button class="filter-button btn_gallary btn-primary" id="Joydepur_Unit">Joydepur Unit</button>
                <button class="filter-button btn_gallary btn-primary" id="Giant_Business_Tower">Giant Business Tower</button>
            </div>      
        </div>      
    </div>

    <style type="text/css">
        .filter{
            display: none;
        }
        .load_more_tour{
            width: 100%;
            text-align: center;
            padding-bottom: 5rem;
            cursor: pointer;
            color: #000;
        }
    </style>



    <script>
        jQuery(function($) {
            var $els = $('.g_filter').hide(), $curr;

            $('.filter-button').on('click', function() {
                var $this = $(this);
                $this.addClass('selected');
                $curr = $els.filter('.' + this.id).hide();
                if($curr.size()==0){
                    $('.g_filter').hide();
                    $('.load_more').hide();
                }else if($curr.size()<8){
                    $('.load_more').hide();
                }else{
                    $('.load_more').show();
                }

                $x = 8;
                $curr.slice(0, $x).show();
                $els.not($curr).hide();
            }).filter('.selected').click();

            $('.load_more').click(function() {
                if($curr.filter(':hidden').length==0){
                    $('.load_more').hide();
                }
                $curr.filter(':hidden').slice(0, $x).show();
            });
        });
    </script>


    <div class="container gallery_container_wrapper" style="padding-left: 52px; padding-right: 50px;">
        <div id="myCarousel_Scroller" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="item active" style="margin-bottom: 5rem;">
                    <div class="row">
                        <div id="lightgallery" class="col-md-12 thumbnailsclients" style="height: 620px; overflow: auto; margin-bottom: 5rem;">

                                <div class=" Textile col-sm-3 col-xs-12 g_filter> overlay"  data-responsive="">
                                    <div class="gallery_product">
                                        <a class="fancybox thumbnail" rel="ligthbox" href="">
                                            <img class="img-responsive imageclient1" alt="" src="" />
                                        </a>
                                    </div>
                                </div>
                        </div>
                        <div style="display: none;" class="load_more_tour load_more" id="load_more_tour"><span style="padding: 10px; background-color: #000000; color: #fff; font-size: 15px; border-radius: 5px;">View More</span></div>
                    </div>
                </div>
                <!--/item-->
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $( document ).ready(function() {
            $('.Joydepur').hide();
            $('.Business').hide();
        });

        function giant_textile(){
            $('.Giant_Textile_Unit').show();
            $('.Joydepur_Unit').hide();
            $('.Giant_Business_Tower').hide();
        }

        function joydepur_unit(){
            $('.Giant_Textile_Unit').hide();
            $('.Joydepur_Unit').show();
            $('.Giant_Business_Tower').hide();
        }

        function business_tower(){
            $('.Giant_Textile_Unit').hide();
            $('.Joydepur_Unit').hide();
            $('.Giant_Business_Tower').show();
        }

        $(document).ready(function(){
          $('.carousel').carousel({
             interval: false
          }); 
        })
    </script>

    <script type="text/javascript">
       (function($) {
            $.fn.countTo = function(options) {
                // merge the default plugin settings with the custom options
                options = $.extend({}, $.fn.countTo.defaults, options || {});
                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(options.speed / options.refreshInterval),
                    increment = (options.to - options.from) / loops;

                return $(this).each(function() {
                    var _this = this,
                        loopCount = 0,
                        value = options.from,
                        interval = setInterval(updateTimer, options.refreshInterval);
                    function updateTimer() {
                        value += increment;
                        loopCount++;
                        $(_this).html(value.toFixed(options.decimals));
                        if (typeof(options.onUpdate) == 'function') {
                            options.onUpdate.call(_this, value);
                        }
                        if (loopCount >= loops) {
                            clearInterval(interval);
                            value = options.to;
                            if (typeof(options.onComplete) == 'function') {
                                options.onComplete.call(_this, value);
                            }
                        }
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0,  // the number the element should start at
                to: 100,  // the number the element should end at

                speed: 1000,  // how long it should take to count between the target numbers

                refreshInterval: 100,  // how often the element should be updated

                decimals: 0,  // the number of decimal places to show

                onUpdate: null,  // callback method for every time the element is updated,

                onComplete: null,  // callback method for when the element finishes updating

            };

        })(jQuery);



        jQuery(function($) {

            $('.price').countTo({

                from: 50,

                to: 20000,

                speed: 5000,

                refreshInterval: 50,

                onComplete: function(value) {

                    console.debug(this);

                }

            });



            $('.embroidery').countTo({

                from: 50,

                to: 10000,

                speed: 5000,

                refreshInterval: 50,

                onComplete: function(value) {

                    console.debug(this);

                }

            });



            $('.fabric').countTo({

                from: 50,

                to: 20000,

                speed: 5000,

                refreshInterval: 50,

                onComplete: function(value) {

                    console.debug(this);

                }

            });



            $('.garment').countTo({

                from: 20,

                to: 50000,

                speed: 5000,

                refreshInterval: 50,

                onComplete: function(value) {

                    console.debug(this);

                }

            });



             $('.yearly').countTo({

                from: 20,

                to: 35,

                speed: 5000,

                refreshInterval: 50,

                onComplete: function(value) {

                    console.debug(this);

                }

            });





             $('.yearly').countTo({

                from: 20,

                to: 35,

                speed: 5000,

                refreshInterval: 50,

                onComplete: function(value) {

                    console.debug(this);

                }

            });



            $('.total').countTo({

                from: 20,

                to: 475200,

                speed: 5000,

                refreshInterval: 50,

                onComplete: function(value) {

                    console.debug(this);

                }

            });



            $('.floor').countTo({

                from: 20,

                to: 205573,

                speed: 5000,

                refreshInterval: 50,

                onComplete: function(value) {

                    console.debug(this);

                }

            });



            $('.production').countTo({

                from: 20,

                to: 104210,

                speed: 5000,

                refreshInterval: 50,

                onComplete: function(value) {

                    console.debug(this);

                }

            });



            $('.warehouse').countTo({

                from: 20,

                to: 22636,

                speed: 5000,

                refreshInterval: 50,

                onComplete: function(value) {

                    console.debug(this);

                }

            });



            $('.utility').countTo({

                from: 20,

                to: 17454,

                speed: 5000,

                refreshInterval: 50,

                onComplete: function(value) {

                    console.debug(this);

                }

            });

        });
    </script>
@endsection()
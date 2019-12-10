    {{-- </div> --}}
    <div class="scrollup" style="display: none;" href="#">
        <span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
    </div>

    <!-- footer section -->
    <footer class="site-main-footer bg-color-3">
        <div class="container">
            <div class="row footer-top-big-padding">
                <div class="child-stagger-up" data-scrollmagic data-from="30px">
                    <div class="row text-center ">
                        <ul class="social-list list-inline social_list" style="font-size: 14px !important;">
                            <li><a href="/contact">FIND US</a></li>
                            <li><a href="/join_us">CAREER</a></li>
                        </ul>
                        <ul class="social-list list-inline">
                            <li><p style="color: #bfbfbf; text-transform: uppercase; font-size: 14px !important;">© GIANT GROUP 2018. DEVELOPED BY <a style="color: #ff7800; text-transform: capitalize;" class="all_right_reserve_a" target="_blank" href="http://webxltd.com/">WebX</a></p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- script added -->
    <script type="text/javascript">
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $(".mouse").on('click', function(event) {
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
        //bottom to top
        // fadeIn fadeOut
        $(window).scroll(function () {
            if ($(this).scrollTop() > 0) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
        
            // scrolltop
        $('.scrollup').click(function (){
            $("html,body").animate({
            scrollTop: 0
            }, 1500);
            return false;
        });
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
            $('.our_capacity').countTo({
                from: 10,
                to: 50,
                speed: 2000,
                refreshInterval: 2,
                onComplete: function(value) {
                    console.debug(this);
                }
            });

            $('.our_garment').countTo({
                from: 10,
                to: 50,
                speed: 2000,
                refreshInterval: 2,
                onComplete: function(value) {
                    console.debug(this);
                }
            });

            $('.our_Embroidery').countTo({
                from: 5,
                to: 20,
                speed: 2000,
                refreshInterval: 2,
                onComplete: function(value) {
                    console.debug(this);
                }
            });

            $('.our_printing').countTo({
                from: 5,
                to: 35,
                speed: 2000,
                refreshInterval: 2,
                onComplete: function(value) {
                    console.debug(this);
                }
            });

            $('.washing').countTo({
                from: 2,
                to: 8,
                speed: 2000,
                refreshInterval: 2,
                onComplete: function(value) {
                    console.debug(this);
                }
            });

            $('.employee').countTo({
                from: 1,
                to: 4,
                speed: 2000,
                refreshInterval: 2,
                onComplete: function(value) {
                    console.debug(this);
                }
            });
        });

        $(document).ready(function () {
            $(".our_capacity_run").hover(function () {
                $('.our_capacity').countTo({
                    from: 5,
                    to: 25,
                    speed: 2000,
                    refreshInterval: 2,
                    onComplete: function(value) {
                        console.debug(this);
                    }
                });

                $('.our_garment').countTo({
                    from: 10,
                    to: 50,
                    speed: 2000,
                    refreshInterval: 2,
                    onComplete: function(value) {
                        console.debug(this);
                    }
                });

                $('.our_Embroidery').countTo({
                    from: 5,
                    to: 20,
                    speed: 2000,
                    refreshInterval: 2,
                    onComplete: function(value) {
                        console.debug(this);
                    }
                });

                $('.our_printing').countTo({
                    from: 5,
                    to: 35,
                    speed: 2000,
                    refreshInterval: 2,
                    onComplete: function(value) {
                        console.debug(this);
                    }
                });

                 $('.washing').countTo({
                    from: 2,
                    to: 8,
                    speed: 2000,
                    refreshInterval: 2,
                    onComplete: function(value) {
                        console.debug(this);
                    }
                });

                $('.employee').countTo({
                    from: 1,
                    to: 4,
                    speed: 2000,
                    refreshInterval: 2,
                    onComplete: function(value) {
                        console.debug(this);
                    }
                });
            });
        });

        $(function () {
          $(".slider1").responsiveSlides({
            speed: 800
          });
        });
    </script>

    <?php 
    if(strpos($_SERVER['REQUEST_URI'], "giant_future") !== false || strpos($_SERVER['REQUEST_URI'], "our_pride_bangladesh") !== false || strpos($_SERVER['REQUEST_URI'], "profile") !== false)

        { ?>

    <!-- image slider -->
    <script type="text/javascript" src="{{asset('frontend_assets/assets_front/vip_js/vip_swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend_assets/assets_front/vip_js/vip_main.js')}}"></script>
    <?php } ?>

    <?php if(strpos($_SERVER['REQUEST_URI'], "take_a_tour") !== false){ ?>
        <script>
        $(document).ready(function(){
                $('#lightgallery').lightGallery(); 
            });
        </script>
    <?php } ?>

    <script type="text/javascript" src="{{asset('frontend_assets/assets_front/js/home.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend_assets/assets_front/js/script.min.js')}}"></script>
    <script src="{{asset('frontend_assets/assets_front/home_slider/responsiveslides.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend_assets/assets_front/js/main_script.js')}}"></script>

    <?php if(strpos($_SERVER['REQUEST_URI'], "profile") !== false){ ?>
        <!-- profile slider -->
        <script type="text/javascript">
            $('#carouselExample').on('slide.bs.carousel', function (e) {
                var $e = $(e.relatedTarget);
                var idx = $e.index();
                var itemsPerSlide = 4;
                var totalItems =  $('.carousel-item').length;

                if (idx >= totalItems-(itemsPerSlide-1)) {
                    var it = itemsPerSlide - (totalItems - idx);
                    for (var i=0; i<it; i++) {
                        // append slides to end
                        if (e.direction=="left") {
                            $('.carousel-item').eq(i).appendTo('.carousel-inner');
                        }
                        else {
                            $('.carousel-item').eq(0).appendTo('.carousel-inner');
                        }
                    }
                }
            });

            $('#carouselExample').carousel({ 
                interval: 5000
            });

            $(document).ready(function() {
                $('a.thumb').click(function(event){
                  event.preventDefault();
                  var content = $('.modal-body');
                  content.empty();
                    var title = $(this).attr("title");
                    $('.modal-title').html(title);        
                    content.html($(this).html());
                    $(".modal-profile").modal({show:true});
                });
            });
        </script>
        <!-- start certificate and machines slider? -->
        <script src="{{asset('frontend_assets/assets_front/carousel_slider/highlight.js')}}"></script>
        <script src="{{asset('frontend_assets/assets_front/carousel_slider/app.js')}}"></script>
        <!-- end certificate and machines slider? -->
    <?php } ?>

    <?php if(strpos($_SERVER['REQUEST_URI'], "take_a_tour") !== false){ ?>
        <script src="{{asset('frontend_assets/assets_front/js/lightGallery_min.js')}}"></script>

    <?php } ?>

    </body>
</html>
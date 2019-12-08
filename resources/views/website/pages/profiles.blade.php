@extends('website.layouts.master')

@section('content')

    <!-- start profile  -->
    <section id="next_section" style="padding-top: 50px; padding-bottom: 30px" class="container our_leader" id="section-counter">
        <h2 class="heading-secondary" style="padding-bottom: 50px; padding-left: 66px; font-size: 1.8rem !important;">Our Leaders</h2>
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
            <div class="carousel-inner row w-100 mx-auto profile" role="listbox">
                <div class="carousel-item col-md-3  active">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <div class="img-box">
                                <a href="#" title="image 1" class="thumb">
                                  <img class="img-fluid mx-auto d-block" src="{{asset('frontend_assets/assets_front/images/Profile/FEROZ-HASSAN.jpg')}}" alt="slide 1">
                                </a>
                            </div>
                            <h1>Feroz M Hassan.</h1>
                            <h2>Chairman</h2>
                            <button data-toggle="modal" data-target="#profile_detail1" class="btn-primary btn-block">PROFILE</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <div class="img-box">
                                <a href="#" title="image 1" class="thumb">
                                  <img class="img-fluid mx-auto d-block" src="{{asset('frontend_assets/assets_front/images/Profile/Faruque-Hassan.jpg')}}" alt="slide 1">
                                </a>
                            </div>
                            <h1>Faruque Hassan</h1>
                            <h2>Managing Director</h2>
                            <button data-toggle="modal" data-target="#profile_detail2" class="btn-primary btn-block">PROFILE</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <div class="img-box">
                                <a href="#" title="image 1" class="thumb">
                                  <img class="img-fluid mx-auto d-block" src="{{asset('frontend_assets/assets_front/images/Profile/MAJEDUR-RAHIM.jpg')}}" alt="slide 1">
                                </a>
                            </div>
                            <h1><font size="4">S.M Majedur Rahim</font></h1>
                            <h2>Director </h2>
                            <button data-toggle="modal" data-target="#profile_detail3" class="btn-primary btn-block">PROFILE</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <div class="img-box">
                                <a href="#" title="image 1" class="thumb">
                                  <img class="img-fluid mx-auto d-block" src="{{asset('frontend_assets/assets_front/images/Profile/Mushfiq-M-Hassan.jpg')}}" alt="slide 1">
                                </a>
                            </div>
                            <h1>Mushfiq M Hassan</h1>
                            <h2>Director</h2>
                            <button data-toggle="modal" data-target="#profile_detail4" class="btn-primary btn-block">PROFILE</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <div class="img-box">
                                <a href="#" title="image 1" class="thumb">
                                  <img class="img-fluid mx-auto d-block" src="{{asset('frontend_assets/assets_front/images/Profile/Mehrin-Hassan.jpg')}}" alt="slide 1">
                                </a>
                            </div>
                            <h1>Mehrin Hassan</h1>
                            <h2>Director</h2>
                            <button data-toggle="modal" data-target="#profile_detail5" class="btn-primary btn-block">PROFILE</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3">
                   <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <div class="img-box">
                                <a href="#" title="image 1" class="thumb">
                                  <img class="img-fluid mx-auto d-block" src="{{asset('frontend_assets/assets_front/images/Profile/Azfar_Hasan.jpg')}}" alt="slide 1">
                                </a>
                            </div>
                            <h1>Azfar Hassan</h1>
                            <h2>Director</h2>
                            <button data-toggle="modal" data-target="#profile_detail6" class="btn-primary btn-block">PROFILE</button>
                       </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>
    <!-- end profile old -->


    <!--Start Profile detailles -->
    <div id="profile_detail1" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="margin-left: 0px;">
                <h4 class="modal-title">PROFILE</h4>
                <button  style="padding: 0px !important; font-size: 25px !important;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <div class="modal-body">
            <div class="row modal-body-row">
                <div class="col-sm-6 profile_desc">
                    <img src="{{asset('frontend_assets/assets_front/images/Profile/FEROZ-HASSAN.jpg')}}">
                </div>
                <div class="col-sm-6 profile_desc">
                    <p>Mr. Feroz Hassan, the Chairman of Giant Group is one of the pioneers of garments industry in Bangladesh. Highly educated and well respected Feroz Hassan is a visionary businessman who also happens to be a very devoted social worker. His contribution in the affairs of BGMEA in the early years to provide a strong footing of this industry is unforgettable. Mr. Hassan is actively associated with social activities as a part of CSR. He is a Trustee Board Member of Shafiuddin Ahmed Foundation and ManabikShahajyaSangstha (MSS). He is also actively involved in the agricultural sector of Bangladesh devoting a lot of time and effort towards Giant Agro Processing Limited - the production, processing, preservation, storage and marketing of agro seeds. 
                    </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="profile_detail2" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="margin-left: 0px;">
                <h4 class="modal-title">PROFILE</h4>
                <button  style="padding: 0px !important; font-size: 25px !important;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <div class="modal-body">
            <div class="row modal-body-row">
                <div class="col-sm-6 profile_desc">
                    <img src="{{asset('frontend_assets/assets_front/images/Profile/Faruque-Hassan.jpg')}}">
                </div>
                <div class="col-sm-6 profile_desc">
                    <p>Mr. Faruque Hassan has completed his post graduation in Management from Dhaka University. He started his career back in 1982 and became an iconic business figure in the garment industry. Mr. Faruque Hassan has been working hard with dignity and perseverance to contribute in development of Textile and RMG sector. He served BGMEA as elected Director for two consecutive tenures 2001-2002, 2003-2004 and Vice President for two consecutive terms from 2009-2010, 2011-2012 and as Senior Vice-President from 22nd September 2015 till date.<br>

                    Mr. Hassan is a man who wears many hats, having greatly contributed to the RMG sector. As President of Dutch Bangla Chamber of Commerce & Industry (DBCCI), the first bilateral chamber in Bangladesh, Hassan has extensive experience serving as the Vice President of the French Chamber, alongside being involved in the German and Switzerland Chamber in Bangladesh. Recently, he is also appointed by the Greek government as the Honorary Consul General of Greece in Dhaka, Bangladesh, a prestigious position only awarded to those that have the technical expertise to globally represent the country and contribute to its strategic stability. <br>

                    He played a pivotal role to promote sustainability across the RMG and backward linkage industry of Bangladesh. He is the Co-chair of the Steering Committee of Partnership for Cleaner textile (PACT) project jointly implemented by International Finance Corporation (IFC) & BGMEA. PACT is continuously working to reduce the water footprint in the Textile processing industries making the textile industry environment friendly and sustainable. He is also actively involved & a member of the steering committee of WRG 2030 (World Bank Group), working towards cleaner water and sanitization for the community.<br>

                    Not only did he open several training centres, he also introduced and help set up the first fashion Institute, BGMEA Institute of Fashion and Technology (BIFT), in 2001 which later became a full fledged University, BGMEA University of Fashion and Technology(BUFT) in the year 2012. With the aim of providing technically skilled human resources that strengthen the country’s export oriented RMG, BUFT is an international standard institute of apparel, fashion design, apparel merchandising, textile technology Industrial Engineering and other complementary courses such as leather and accessories design, fashion modelling, fashion photography and fashion marketing. <br>

                    Mr. Hassan believes Bangladesh will not achieve its targeted growth by the cost of environment. He aspires to make Bangladesh RMG industry a role model of green industrialization in the world.
                    </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="profile_detail3" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="margin-left: 0px;">
                <h4 class="modal-title">PROFILE</h4>
                <button  style="padding: 0px !important; font-size: 25px !important;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <div class="modal-body">
            <div class="row modal-body-row">
                <div class="col-sm-6 profile_desc">
                     <img src="{{asset('frontend_assets/assets_front/images/Profile/MAJEDUR-RAHIM.jpg')}}">
                </div>
                <div class="col-sm-6 profile_desc">
                    <p>S.M. Majedur Rahim commonly known as MAJED is an MBA from IBA, the most
                    prestigious Business School in Bangladesh. Majed has extensive senior
                    management experience &  accomplished track record in last over 25 years in
                    the field of Fashion, Readymade garments, Headwear, Market Research and new
                    project developments. After working in DADA Corporation, Seoul based world's
                    largest top-notched  headwear company as Country Director for 15 years both
                    at home & abroad Majed opted to be on board with Giant Group. Teamed up with
                    Giant Group in 2009 Majed set up a new state-of-the art environment friendly
                    Composite Knit factory.<br> 

                    Looking after group's entire operation with special focus on Sales &
                    Marketing and working very closely with World's top brands both from Europe
                    and North America. He has special interest on International Business trend
                    and Human Resource Development. Majed shows keen interest on team building &
                    networking and hence involved with several social organizations. Majedur
                    Rahim is the Director of Giant Group.        
                    </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="profile_detail4" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="margin-left: 0px;">
                <h4 class="modal-title">PROFILE</h4>
                <button  style="padding: 0px !important; font-size: 25px !important;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <div class="modal-body">
            <div class="row modal-body-row">
                <div class="col-sm-6 profile_desc">
                     <img src="{{asset('frontend_assets/assets_front/images/Profile/Mushfiq-M-Hassan.jpg')}}">
                </div>
                <div class="col-sm-6 profile_desc">
                    <p>Mushfiq M Hassan had obtained Bachelor's Degree in International Business and Marketing from American Intercontinental University from the United States. He plays an active role in the Giant Group management team bringing in new energy. He primarily carries out the responsibility of growing and building the group’s Retail business.</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="profile_detail5" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="margin-left: 0px;">
                <h4 class="modal-title">PROFILE</h4>
                <button  style="padding: 0px !important; font-size: 25px !important;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <div class="modal-body">
            <div class="row modal-body-row">
                <div class="col-sm-6 profile_desc">
                    <img src="{{asset('frontend_assets/assets_front/images/Profile/Mehrin-Hassan.jpg')}}">
                </div>
                <div class="col-sm-6 profile_desc">
                    <p>Ms. Mehrin Hassan completed her Master’s degree from the University of New South Wales (UNSW), Australia, majoring in Accounting and she also completed her BBA from Australia majoring in Finance with Dual Sub-major in Financial Reporting and Management from the University of Technology, Sydney (UTS). Ms. Hassan is in the roles of Director, Finance of Giant Textiles Ltd and also Director, Business Development of Giant Agro Processing Ltd, a sister concern of Giant Group. As a Finance Director, Ms. Mehrin Hassan is delegated with the task of overseeing the overall Financial Management of the company. At the same time, Ms. Hassan is also responsible for improving Giant Agro’s market position and achieving financial growth.</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="profile_detail6" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="margin-left: 0px;">
                <h4 class="modal-title">PROFILE</h4>
                <button  style="padding: 0px !important; font-size: 25px !important;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <div class="modal-body">
            <div class="row modal-body-row">
                <div class="col-sm-6 profile_desc">
                    <img src="{{asset('frontend_assets/assets_front/images/Profile/Azfar_Hasan.jpg')}}">
                </div>
                <div class="col-sm-6 profile_desc">
                    <p>Mr. Azfar Hassan, a Bangladeshi born Canadian citizen, is a Director of Giant Group. Azfar started his career after completing his undergraduate degree from University of Toronto with an Honours Bachelors of Arts, with a Major in Digital Enterprise Management (Communication, Culture, Information, and Technology) and a Minor in Political Science and Sociology. He has also obtained a Certificate in Digital Communications from Sheridan College in Toronto, Canada. His journey abroad began much earlier, at the age of 12, when he was sent to study in a very reputed Boarding school in Malaysia KolejTuankuJa’afar, up to 10th grade. He moved to Canada just in time for high school at York Mills Collegiate Institute. This played an essential role in developing social skills, individuality, sense of responsibility and exposure to the world and Beyond.  Even though he lived away from home for years, Azfar’s heart belongs to his home and his aim is to be able to bring it success and protect its resources.</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Profile detailles -->

    <style type="text/css">
        .modal-body-row{
            height: 400px;
        }
        .profile_desc{
            overflow: auto;
        }
    </style>
    <!--start slider section -->
    <section style="font-size: 15px;" id="ourstory" class="wow fadeIn no-padding">
        <div class="swiper-auto-height-container position-relative width-100">
            <div class="swiper-wrapper overflow-hidden">
                <!-- start slider item -->
                <div class="swiper-slide padding-100px-all cover-background position-relative xs-padding-20px-all" style="background-image:url(/frontend_assets/assets_front/images/Profile/Slider/1.jpg)">
                    <div class="position-relative width-70   md-width-60 sm-width-85 xs-width-100 slide-banner last-paragraph-no-margin"> 
                        <div class="padding-25px-all bg-black-opacity sm-padding-40px-all xs-padding-30px-all xs-text-center xs-width-100">
                            <!-- <h3 class="alt-font text-white width-90_ sm-width-100_">Story One</h3> -->
                            <p style="color: white" class="width-90_ sm-width-100_">We are a family, Knitting large dreams, Sewing a Giant future. We started our journey back in 1984 with the dream of being the best company in the industry. We have managed to sustain in this industry because of our hard work and dedication towards continuous improvement. Giant Group considers itself as an end-to-end apparel solution provider. Over the years, our size has changed, but one underlying idea has stayed the same – the customer and the environment are at the center of everything we do. We consider our skilled workforce to be our greatest asset. We take great pride in our people, our Giant family who we consider to be committed, talented and experts at what they do.</p>
                        </div>  
                    </div>
                </div>
                <!-- end slider item -->


                <!-- start slider item -->
                <div class="swiper-slide padding-100px-all cover-background position-relative xs-padding-20px-all" style="background-image:url(/frontend_assets/assets_front/images/Profile/Slider/2.jpg)">
                    <div class="position-relative width-70   md-width-60 sm-width-85 xs-width-100 slide-banner last-paragraph-no-margin">
                        <div class="padding-25px-all bg-black-opacity sm-padding-40px-all xs-padding-30px-all xs-text-center xs-width-100">
                            <!-- <h3 class="alt-font text-white width-90_ sm-width-100_">Story One</h3> -->
                            <p style="color: white" class="width-90_ sm-width-100_">We are a family, Knitting large dreams, Sewing a Giant future. We started our journey back in 1984 with the dream of being the best company in the industry. We have managed to sustain in this industry because of our hard work and dedication towards continuous improvement. Giant Group considers itself as an end-to-end apparel solution provider. Over the years, our size has changed, but one underlying idea has stayed the same – the customer and the environment are at the center of everything we do. We consider our skilled workforce to be our greatest asset. We take great pride in our people, our Giant family who we consider to be committed, talented and experts at what they do.</p>
                        </div>       
                    </div>
                </div>
                <!-- start slider item -->

                <!-- start slider item -->
                <div class="swiper-slide padding-100px-all cover-background position-relative xs-padding-20px-all" style="background-image:url(/frontend_assets/assets_front/images/Profile/Slider/3.jpg)">
                    <div class="position-relative width-70   md-width-60 sm-width-85 xs-width-100 slide-banner last-paragraph-no-margin">
                        <div class="padding-25px-all bg-black-opacity sm-padding-40px-all xs-padding-30px-all xs-text-center xs-width-100">
                            <!-- <h3 class="alt-font text-white width-90_ sm-width-100_">Story One</h3> -->
                            <p style="color: white" class="width-90_ sm-width-100_">We are a family, Knitting large dreams, Sewing a Giant future. We started our journey back in 1984 with the dream of being the best company in the industry. We have managed to sustain in this industry because of our hard work and dedication towards continuous improvement. Giant Group considers itself as an end-to-end apparel solution provider. Over the years, our size has changed, but one underlying idea has stayed the same – the customer and the environment are at the center of everything we do. We consider our skilled workforce to be our greatest asset. We take great pride in our people, our Giant family who we consider to be committed, talented and experts at what they do.</p>
                        </div>       
                    </div>
                </div>
                <!-- end slider item -->

                 <!-- start slider item -->
                <div class="swiper-slide padding-100px-all cover-background position-relative xs-padding-20px-all" style="background-image:url(/frontend_assets/assets_front/images/Profile/Slider/4.jpg)">
                    <div class="position-relative width-70   md-width-60 sm-width-85 xs-width-100 slide-banner last-paragraph-no-margin">
                        <div class="padding-25px-all bg-black-opacity sm-padding-40px-all xs-padding-30px-all xs-text-center xs-width-100">
                            <!-- <h3 class="alt-font text-white width-90_ sm-width-100_">Story One</h3> -->
                            <p style="color: white" class="width-90_ sm-width-100_">We are a family, Knitting large dreams, Sewing a Giant future. We started our journey back in 1984 with the dream of being the best company in the industry. We have managed to sustain in this industry because of our hard work and dedication towards continuous improvement. Giant Group considers itself as an end-to-end apparel solution provider. Over the years, our size has changed, but one underlying idea has stayed the same – the customer and the environment are at the center of everything we do. We consider our skilled workforce to be our greatest asset. We take great pride in our people, our Giant family who we consider to be committed, talented and experts at what they do.</p>
                        </div>       
                    </div>
                </div>
                <!-- end slider item -->

                 <!-- start slider item -->
                <div class="swiper-slide padding-100px-all cover-background position-relative xs-padding-20px-all" style="background-image:url(/frontend_assets/assets_front/images/Profile/Slider/5.jpg)">
                    <div class="position-relative width-70   md-width-60 sm-width-85 xs-width-100 slide-banner last-paragraph-no-margin">
                        <div class="padding-25px-all bg-black-opacity sm-padding-40px-all xs-padding-30px-all xs-text-center xs-width-100">
                            <!-- <h3 class="alt-font text-white width-90_ sm-width-100_">Story One</h3> -->
                            <p style="color: white" class="width-90_ sm-width-100_">We are a family, Knitting large dreams, Sewing a Giant future. We started our journey back in 1984 with the dream of being the best company in the industry. We have managed to sustain in this industry because of our hard work and dedication towards continuous improvement. Giant Group considers itself as an end-to-end apparel solution provider. Over the years, our size has changed, but one underlying idea has stayed the same – the customer and the environment are at the center of everything we do. We consider our skilled workforce to be our greatest asset. We take great pride in our people, our Giant family who we consider to be committed, talented and experts at what they do.</p>
                        </div>       
                    </div>
                </div>
                <!-- end slider item -->

                 <!-- start slider item -->
                <div class="swiper-slide padding-100px-all cover-background position-relative xs-padding-20px-all" style="background-image:url(/frontend_assets/assets_front/images/Profile/Slider/6.jpg)">
                    <div class="position-relative width-70   md-width-60 sm-width-85 xs-width-100 slide-banner last-paragraph-no-margin">
                        <div class="padding-25px-all bg-black-opacity sm-padding-40px-all xs-padding-30px-all xs-text-center xs-width-100">
                            <!-- <h3 class="alt-font text-white width-90_ sm-width-100_">Story One</h3> -->
                            <p style="color: white" class="width-90_ sm-width-100_">We are a family, Knitting large dreams, Sewing a Giant future. We started our journey back in 1984 with the dream of being the best company in the industry. We have managed to sustain in this industry because of our hard work and dedication towards continuous improvement. Giant Group considers itself as an end-to-end apparel solution provider. Over the years, our size has changed, but one underlying idea has stayed the same – the customer and the environment are at the center of everything we do. We consider our skilled workforce to be our greatest asset. We take great pride in our people, our Giant family who we consider to be committed, talented and experts at what they do.</p>
                        </div>       
                    </div>
                </div>
                <!-- end slider item -->

            </div>

            <div class="navigation-area">
                <div class="swiper-button-next swiper-next-style4 bg-primary text-white"><i class="fas fa-arrow-up" aria-hidden="true"></i></div>
                <div class="swiper-button-prev swiper-prev-style4"><i class="fas fa-arrow-down" aria-hidden="true"></i></div>
            </div>
        </div>
    </section>
    <!--start slider section -->

    <section class="our_belief" style="background-color: white; margin-top: 0px; padding-bottom: 50px; padding-top: 0px;font-size: 15px;">
        <div class="container">
            <div class="row child-stagger-up" style="max-width: 69.5rem !important;" data-scrollmagic>
                <div class="col-md-6">
                    <div data-scrollmagic style="margin-left: 45px; padding-top: 35px;">
                        <h3 style="padding-left: 10px; background-color: #0d64b3; color: #fff;">VISION. MISSION. VALUE</h3>
                        <p style="color: #000;">
                            Our vision is to be the best company in the industry.<br>
                            Our mission is not to survive but to thrive by :
                            <ul>
                                <li>●  Establishing Giant as a one-stop source for the global Knit Apparel market.</li>
                                <li>●  Satisfying customer’s expectation by developing and delivering products and services in timely manner.</li>
                                <li>●  Offer value in terms of quality, price and time.</li>
                                <li>●  Assuring complete compliance with global quality standards.</li>
                                <li>●  Providing employees’ congenial working environment with all standard facilities.</li>
                                <li>●  Promoting development and best use of human resources & equal opportunity employment.</li>
                                <li>●  Attaining highest level of competence through continuous development of the professional management system and our operations.</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="col-md-6" style="padding-top: 11px;">
                    <div class="col-lg-12">
                        <h3>
                            <img src="{{asset('frontend_assets/assets_front/images/Profile/ProfileGIF.gif')}}">
                        </h3>
                    </div>
                    <ul style="color: #000;">
                        <h4>Values</h4>
                        <li>●   Ethical business practice</li>
                        <li>●   Integrity</li>
                        <li>●   Innovation</li>              
                        <li>●   Protecting the environment</li>              
                        <li>●   Commitment to the society </li>              
                        <li>●   Customer satisfaction</li>              
                        <li>●   Human spirit within the organization</li>              
                    </ul><br>
                </div>
            </div>
        </div>
    </section>



    <!--  start our belief section -->
    <!-- <section class="our_belief" style="background-color: white; margin-top: 0px; padding-bottom: 80px; padding-top: 40px;font-size: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 child-stagger-up margin_left_0" data-scrollmagic style="margin-left: 45px;">
                    <div class="col-lg-12">
                        <h3 style="padding-left: 10px; background-color: yellow" class="t_h3">Our BelieThe Wonders Of...</h3>
                        <p>We don’t believe in words, we believe in work. People make promise with no intention to keep. But our intention is crystal clear. We don’t make promises, we take actions. We don’t say, we do.<br>
                        Our mission is not to survive but to thrive. <br>
                        Our vision is to make the world a better place by caring about its people. </p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. <br>
                        Ut enim ad minim veniam,<br>
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.<br>
                    </div>
                </div>

                <div class="col-md-5 child-stagger-up" data-scrollmagic style="margin-left:;">
                    <div class="col-lg-12">
                        <h3 class="t_h3">
                            <img src="{{asset('frontend_assets/assets_front/images/wow.gif')}}">
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End tour belief section -->



    <!-- start Certification We Trust -->
    <section class="our_certification" style="background-color: #efeee9; padding-bottom: 0px;">
        <h3 style="padding-bottom: 50px; color: #000;" class="text-center">Certifications </h3>
        <div>
            <div id="demos">
                <div class="large-12 columns">
                  <div class="owl-certification owl-theme">
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/certification/1.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/certification/2.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/certification/3.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/certification/4.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/certification/5.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/certification/6.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/certification/7.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/certification/8.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/certification/9.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/certification/10.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/certification/11.png')}}">
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
          var owl = $('.owl-certification');
          owl.owlCarousel({
            items: 6,
            loop: true,
            // rtl:true,
            margin: 10,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 2000,
            autoplaySpeed: 2000,
            // autoplayHoverPause: true
          });
          $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [2000])
          })
          $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
          })
        })

        // $(document).ready(function () {
        //     var owl = $('.owl-carousel2');
        //     owl.owlCarousel({
        //         items: 8,
        //         rtl: true,
        //         loop: true,
        //         margin: 20,
        //         autoplay: true,
        //         slideTransition: 'linear',
        //         autoplayTimeout: 0,
        //         autoplaySpeed: 3000,
        //         autoplayHoverPause: false
        //     });
        // });
    </script>

    <!-- end Certification We Trust -->

    <!-- start Machines We Trust -->
    <section class="our_certification"  style="padding-bottom: 0px;">
        <h3 class="text-center" style="padding-bottom: 50px;">MACHINES WE TRUST</h3>
        <div>
            <div id="demos">
                <div class="large-12 columns">
                  <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Dyeing/1.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Dyeing/2.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/finishing/1.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/finishing/2.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/finishing/3.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/finishing/4.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/finishing/5.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/finishing/6.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/finishing/7.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Generators/1.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Generators/2.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Generators/3.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Knitting/1.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Knitting/2.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Printing/1.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Printing/2.png')}}">
                    </div>

                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Sewing/1.png')}}">
                    </div> 
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Sewing/2.png')}}">
                    </div> 
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Sewing/3.png')}}">
                    </div> 
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Sewing/4.png')}}">
                    </div> 
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Sewing/5.png')}}">
                    </div> 
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Sewing/6.png')}}">
                    </div> 
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Sewing/7.png')}}">
                    </div> 
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Sewing/8.png')}}">
                    </div> 
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Sewing/9.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Washing/1.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('frontend_assets/assets_front/images/done/machine_we_trust/Washing/2.png')}}">
                    </div> 
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
          var owl = $('.owl-carousel');
          owl.owlCarousel({
            items: 6,
            loop: true,
            rtl:true,
            margin: 10,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 2000,
            autoplaySpeed: 2000,
            // autoplayHoverPause: true
          });
          $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [2000])
          })

          $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
          })
        })
    </script>
    <style type="text/css">
        .owl-item {
            margin-right: 0px !important;
        }
    </style>
@endsection()
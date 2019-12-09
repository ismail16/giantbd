@extends('website.layouts.master')

@section('content')

 <section class="our_belief_" id="section-counter" style="padding-top: 20px; padding-bottom: 20px; margin-top: 0px;  ">
        <div class="container_" id="next_section">
            <div class="child-stagger-up" data-scrollmagic style="">
                <div class="row">
                    <div class="contact_map_area">
                        <div class="col-lg-8" id="second_order_swap">
                            <div id="contact" class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.1829861360516!2d90.38522811474064!3d23.989314585524788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755db71dbd221d7%3A0x67172554d320824d!2sShafi+Processing+Industries+Ltd.%2C+Chandana%2C+Joydevpur%2C+Gazipur%2C+1702!5e0!3m2!1sen!2sbd!4v1541504312429" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="col-md-4" id="first_order_swap">
                            <address style="padding-left: 2rem;">
                              <strong style="text-transform: uppercase; font-size: 20px">Joydeppur Unit - Giant Group</strong><br>
                            Mouza- Chandana, Chowrasta, Joydebpur, Gazipur.<br>
                              Phone: +880-2-7911327-8, 7913980-1 <br>
                              Fax: +88-2-9256305 <br>
                            </address>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our_belief_"  style="padding-top: 20px; padding-bottom: 20px; margin-top: 0px;  background-color: #ebeced;">
        <div class="container_">
            <div class="row">
                <div class="contact_map_area">
                    <div class="col-md-4" style="text-align: right; padding-right: 2rem; ">
                        <address class="margin_left_right">
                          <strong style="text-transform: uppercase; font-size: 20px">Giant Business Tower</strong><br>
                          Level 13, Plot 03&3/A, Sector 3, Uttara - C/A Dhaka 1230.<br>
                          Phone: +880-2-7911327-8, 7913980-1<br>
                          Fax: +88-2-8914140 <br>
                        </address>

                        <div class="margin_left_right">
                          <strong style="text-transform: uppercase; font-size: 20px">For query</strong><br>
                          Mr. Sayeedul Haque Siddiquee<br>
                          Head of Marketing<br>
                          Mobile: +8801991138001<br>
                          Email: siddiquee@giantbd.com <br>
                        </div><br>
                        
                        <div class="social_icon margin_left_right">
                            <a href="https://www.facebook.com/giantbusinesstower/" class="fb-ic mr-3 icon_social"><i class="fa fa-lg fa-facebook"> </i></a>
                            <!-- <a class="tw-ic mr-3 icon_social"><i class="fa fa-lg fa-twitter"> </i></a>
                            <a class="gplus-ic mr-3 icon_social"><i class="fa fa-lg fa-google-plus"> </i></a>
                            <a class="li-ic mr-3 icon_social"><i class="fa fa-lg fa-linkedin"> </i></a>
                            <a class="ins-ic mr-3 icon_social"><i class="fa fa-lg fa-instagram"> </i></a> -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div id="contact" class="map">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.798445859913!2d90.39745641498348!3d23.86128988453486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c426e0ae7567%3A0x3a977612118cc173!2sGiant+Business+Tower!5e0!3m2!1sen!2sbd!4v1540307938145" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="our_belief_" style="padding-top: 20px; padding-bottom: 20px; margin-top: 0px; ">
        <div class="container_">
            <div class="row">
                <div class="contact_map_area">
                    <div class="col-lg-8" id="second_order_swap">
                        <div id="contact" class="map">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3640.3366138833735!2d90.41105861498917!3d24.15992478438917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sGiant+Textiles+Ltd.++Mouza-3+No+mohona%2C+baniarchala%2C+vabanipur%2C+gazipur.!5e0!3m2!1sen!2sbd!4v1540307445514" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-md-4" id="first_order_swap">
                        <address style="padding-left: 2rem;">
                          <strong style="text-transform: uppercase; font-size: 20px" >Giant Textiles Ltd.</strong><br>
                          Mouza-3 No mohona, baniarchala, vabanipur, gazipur.<br>
                          Phone: +880-2-7911327-8, 7913980-1 <br>
                          Fax: +88-2-8914140<br>
                        </address>
                        
                    </div>
                </div>
            </div> 
            </div>
        </div>
    </section>



    <section style="background-color: whitesmoke;" class="our_belief_">
        <div class="child-stagger-up" data-scrollmagic>
                <div class="conact_page_form" style="padding: 25px 200px 50px 200px;">
                    <h3 style="padding-bottom: 25px;" class="text-center t_h3">SAY HELLO TO GIANT</h3>
                    
                    <form action="{{ route('contact_post')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required="required" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" name="submit" class="btn btn-primary" id="btnContactUs"> Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>

    <style type="text/css">
        .icon_social{
            padding: 10px;
            background-color: #ddd;
            border-radius: 20px;    
        }

        .contact_map_area address{
            padding-top: 10rem;
        }
    </style>
    
@endsection()
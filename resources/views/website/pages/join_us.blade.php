@extends('website.layouts.master')

@section('content')

<div class="container" id="next_section">
        @if ($message = Session::get('success'))
            <div style="text-align: -webkit-center; position: absolute; top: 54px; left: 25%; width: 60%;">
                <div class="alert alert-success " style="width: 30%;padding: 3px 10px;margin: 0px;text-align: center;">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ $message }}
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-4 padding_div">
                <img class="img-responsive" src="{{asset('frontend_assets/assets_front/images/CareerTopLeft.jpg')}}" alt="news">
            </div>

            <div class="col-md-4 padding_div">

                
                <div class="container">
                    <div class="row">
                       <div class="col-md-12 text-center" style="padding-left: 10px;">
                            <div class="join_us_we_love_our_people">
                                <img src="{{asset('frontend_assets/assets_front/images/teamicon.png')}}" height="50px" width="50px" style="padding-top: 50px">
                                <h3 class="text-center">PICK YOUR FIT</h3>
                                <p class="text-center">Come work with us & make a world that inspires human connection!</p>
                                
                                <a href="{{ route('job_announcement') }}" target="_blank" class="btn btn-info btn-sm">
                                    <span class="glyphicon glyphicon-plus-sign"></span> See jobs 
                                </a>
                                <a href="#contactModal" data-toggle="modal" class="btn btn-info btn-sm">
                                    <span class="glyphicon glyphicon-plus-sign"></span> Apply now
                                </a>
                            </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 padding_div">
                <img class="img-responsive" src="{{asset('frontend_assets/assets_front/images/Giant-Tower-01.jpg')}}" alt="news">
            </div>

            <div class="col-md-4 padding_div">
                <div class="text-center join_us_global_movement">
                    <h3 class="text-center">ALL FOR ONE</h3>
                    <p class="text-center">Life at Giant is about the simple things.
					We work and we play. We celebrate the little things that bring us great joy. We take pride in our people.
					We learn and we grow. Every day.
					We are Giant.
					.</p>
                </div>
            </div>

            <div class="col-md-4 padding_div">
                <div class="overflow_hide_100">
                    <ul class="rslides slider1">
                        <li><img class="img-responsive" src="{{asset('frontend_assets/assets_front/images/giant-tower-002.jpg')}}" alt="news"></li>
                        <li><img class="img-responsive" src="{{asset('frontend_assets/assets_front/images/CareerBottom2.jpg')}}" alt="news"></li>
                        <li><img class="img-responsive" src="{{asset('frontend_assets/assets_front/images/CareerBottom3.jpg')}}" alt="news"></li>
                        <li><img class="img-responsive" src="{{asset('frontend_assets/assets_front/images/CareerBottom4.jpg')}}" alt="news"></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 padding_div">
              <div class="text-center join_us_global_movement">
                    <h3 class="text-center">OUR PEOPLE</h3>
                    <p class="text-center">For us, it is more than just a job. It is a quest for something better, for something more fulfilling, for creating, for fixing the world, for improving what is, for creating impact. Join us, to galvanize dreams into action.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- </section> -->

    <div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-uppercase">Drop Your CV</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-12">
                                <form role="form" action="{{ route('cv_post') }}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}

                                    <div class="form-group required">
                                        <p class='control-label'>Name</p>
                                        <input type="text" name="name" class="form-control" placeholder="Enter your name here">
                                    </div>

                                    <div class="form-group required">
                                        <p class='control-label'>Mobile</p>
                                        <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile number here">
                                    </div>

                                    <div class="form-group required">
                                        <p class='control-label'>Email</p>
                                        <input name="email" type="text" class="form-control" placeholder="Enter your Email here">
                                    </div>

                                    <div class="form-group required">
                                        <p class='control-label'>Department</p>
                                        <select name="department" class="form-control">
                                            <option value="Accounting_Finance">Accounting/Finance</option>
                                            <option value="Commercial_SupplyChain">Commercial/Supply Chain</option>
                                            <option value="Research_and_Development">Research and Development</option>
                                            <option value="HR_Admin_&_Compliance">HR Admin & Compliance</option>
                                            <option value="Information_Technology">Information Technology</option>
                                            <option value="Marketing_&_Merchandising">Marketing & Merchandising</option>
                                            <option value="Production_Operation">Production/Operation</option>
                                            <option value="Planning_&_Controlling">Planning & Controlling</option>
                                            <option value="Purchase_&_Procurement">Purchase & Procurement</option>
                                            <option value="Knitting_&_Dyeing">Knitting & Dyeing</option>
                                            <option value="Printing">Printing</option>
                                            <option value="Embroidery">Embroidery</option>
                                            <option value="Store_Management">Store Management</option>
                                            <option value="IE_&_Planning">IE & Planning</option>
                                            <option value="Maintenance">Maintenance</option>
                                            <option value="Quality">Quality</option>
                                            <option value="Agro_Processing">Agro Processing</option>
                                            <option value="Retail_Store_RMG">Retail Store-RMG</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <p for="exampleInputFile">CV (DOC/PDF) </p>
                                        <input type="file" name="cv" class="form-control-file">
                                    </div>

                                    <ul style="text-align: right;" class="media-date text-uppercase reviews list-inline">
                                        <li class="mm"><button name="submit" type="submit" class="btn btn-primary">Submit</button></li>
                                    </ul>
                                </form>
                            </div>
                            <div class="col col-md-2"></div>

                        </div>
                    </div>
                </div><!-- End of Modal body -->
            </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
    </div>

@endsection()
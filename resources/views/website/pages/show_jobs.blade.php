@extends('website.layouts.master')

@section('content')

 

    <section id="next_section" class="featured-jobs" >

        <div class="container featured_jobs_container" style="padding: 0px 90px;">

            <div style="padding-top: 30px; padding-bottom: 30px;"><h1 class="heading-secondary">Details jobs </h1></div>


            <div class="row well">
             
                <div class="col-sm-6 col-md-3 single_job thumbnail">
                      <img src="{{asset('images/PostJob/'.$PostJob->job_image)}}">              
                </div>

                <div class="col-sm-6 col-md-9 single_job">
                    <div class="thumbnail">
                        <h3>{{ $PostJob->title }}</h3>
                        <p style="">{!! $PostJob->details !!}</p>
                        <span class="meta">Posted by Recruiter - {{ $PostJob->created_at->format('d M Y') }}</span>
                    </div>
                     <div style="text-align: right; margin-top: -15px;" class="feature-btns">
                        <a target="_blank" href="{{ $PostJob->job_link }}" class="btn btn-primary apply_btn">Apply Now</a>
                    </div>
                </div>

            </div>

        </div>

    </section>

<style type="text/css">
        .single_job{
            padding-bottom: 40px;
        }
        .featured-jobs {
          margin-top: 166px;
          background: #f2f0f1;
        }
        .thumbnail{
          /*height: 92px !important;*/
          padding: 0px 26px 8px 10px;
        }
        .featured-jobs .thumbnail img {
          float: left;
          margin: 0 10px 10px 0;
        }
        .featured-jobs .thumbnail .feature-link {
          color: #77c7dc;
        }
        .featured-jobs .thumbnail .feature-link h3 {
          padding-left: 10px;
          margin: 0 0 6px;
          font-size: 18px;
        }
        .featured-jobs .thumbnail .meta {
          color: #f16060;
          font-size: 11px;
        }
        .featured-jobs .thumbnail p {
          font-size: 12px;
          margin: 0 0 5px;
        }
        .featured-jobs .thumbnail .feature-btns {
          position: absolute;
          bottom: -13px;
          left: 15px;
        }
        @media only screen and (max-width: 1024px) {
        .thumbnail { margin-bottom:50px; }
        .featured-jobs .thumbnail .feature-btns { bottom:17px; }
            }
        @media only screen and (max-width: 790px) {
        .thumbnail { margin-bottom:50px; }
        .featured-jobs .thumbnail .feature-btns { bottom:-33px; }
        }

    </style>
@endsection()
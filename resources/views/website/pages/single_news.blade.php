@extends('website.layouts.master')

@section('content')
<section id="next_section" class="featured-jobs featured-news">

        <div class="container featured-news-container" style="padding: 0px 90px;">

          <div style="padding-top: 30px; padding-bottom: 30px;">
            <h1 class="heading-secondary">{{ $news->title }}</h1>
            <span class="meta">Posted by Recruiter - {{ $news->created_at->format('d M Y') }}</span>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12 single_job">
              <img src="{{asset('images/news/'.$news->image)}}" style="max-width: 100%; width: 50%; max-height: 400px; display: block; float: left; padding-right: 10px; padding-bottom: 10px; object-fit: cover;">
              <div style="font-size: 16px;">    
                <p style="text-align: justify;"> {!! $news->details !!}</p>
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
          height: 92px !important;
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


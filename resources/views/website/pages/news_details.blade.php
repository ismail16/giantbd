@extends('website.layouts.master')

@section('content')

<section id="next_section" class="featured-jobs featured-news">

        <div class="container featured-news-container" style="padding: 0px 90px;">

            <div style="padding-top: 30px; padding-bottom: 30px;"><h1 class="heading-secondary">News &amp; Publications</h1></div>

            <div class="row">

                    @foreach($news as $new)

                    <div class="col-sm-6 col-md-6 single_job">

                        <div class="thumbnail">

                            <img src="{{asset('images/news/'.$new->image)}}" style="height: 83px; width: 100px;">

                            <a href="{{ route('single_news', $new->id) }}" class="feature-link">
                                <h3>{{ $new->title }}</h3>
                            </a>
                            <span class="meta">Posted by Recruiter - {{ $new->created_at->format('d M Y') }}</span>
                            <p> 


                            </p>                            

                        </div>

                    </div>

                    @endforeach


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


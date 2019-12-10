@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')


@push('css')

@endpush

@section('content')
<section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ App\Models\GalleryImage::all()->count()}}</h3>
                    <p>Gallary Image</p>
                </div>
                <div class="icon" style="padding: 10px;">
                    <i class="fa fa-file-image-o"></i>
                </div>
                <a href="{{ route('admin.gallery-image.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ App\Models\News::all()->count()}}<sup style="font-size: 20px"></sup></h3>
                    <p>News</p>
                </div>
                <div class="icon" style="padding: 10px;">
                    <i class="fa fa-fw fa-newspaper-o"></i>
                </div>
                <a href="{{ route('admin.news.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ App\Models\Cv::all()->count()}}</h3>
                    <p>Total CV</p>
                </div>
                <div class="icon" style="padding: 10px;">
                    <i class="fa fa-file-pdf-o"></i>
                </div>
                <a href="{{ route('admin.cv.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ App\Models\Contact::all()->count()}}</h3>
                    <p>Message</p>
                </div>
                <div class="icon" style="padding: 10px;">
                    <i class="fa fa-fw fa-envelope"></i>
                </div>
                <a href="{{ route('admin.contact.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{ App\Models\PostJob::all()->count()}}</h3>
                    <p>Jobs Post</p>
                </div>
                <div class="icon" style="padding: 10px;">
                    <i class="fa fa-bullhorn"></i>
                </div>
                <a href="{{ route('admin.post-job.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')

@endpush

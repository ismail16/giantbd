@extends('admin.layouts.app')

@section('title', 'Edit News')

@push('css')
{{--    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('admin/bower_components/ckeditor/contents.css')}}">--}}
@endpush

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
                {{-- <div class="box-header with-border">
                    <h3 class="box-title">Fill-Up Announcement Form</h3>
                </div> --}}
                <div class="box-body">
                    <form action="{{ route('admin.news.update', $news->id) }}" role="form" enctype="multipart/form-data" method="post">

                        {{csrf_field()}}
                        @method('PUT')

                        <div class="form-group">
                            <label class="col-2 col-form-label">Title</label>
                            <div class="col-10">
                                <input name="title" value="{{ $news->title }}" type="text" placeholder="Enter News Title" class="form-control">
                                @if($errors->has('title'))
                                    {{ $errors->title }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="recipient-name" class="col-form-label col-md-1"> Image:</label>
                            <input type="file" name="image" class="col-md-4">
                            <img class="col-md-2" src="{{ asset('images/news/'.$news->image) }}" width="50" alt="">
                        </div>

                        <div class="form-group">
                            <label class="col-2 col-form-label">Description</label>
                            <div class="col-10">
                                <textarea name="details" id="editor1" class="form-control ckeditor" cols="5" rows="2" placeholder="Enter APC Description"> {{ $news->details }} </textarea>
                                @if($errors->has('details'))
                                    {{ $errors->details }}
                                @endif
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        #cke_1_contents{
            height: 150px !important;
        }
    </style>
@endsection

@push('scripts')
    <script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')}}"></script>

    <script type="text/javascript">
        $(function () {
            CKEDITOR.replace('editor1');
        })
    </script>
@endpush
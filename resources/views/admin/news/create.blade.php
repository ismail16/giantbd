@extends('admin.layouts.app')

@section('title', 'Create News')

@push('css')
@endpush

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
                <div class="box-body">
                    <form action="{{ route('admin.news.store') }}" role="form" enctype="multipart/form-data" method="post">

                        {{csrf_field()}}

                        <div class="form-group">
                            <label class="col-2 col-form-label">Title</label>
                            <div class="col-10">
                                <input name="title" type="text" placeholder="Enter News Title" class="form-control" required>
                                @if($errors->has('title'))
                                    {{ $errors->title }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label"> Image:</label>
                            <input type="file" name="image">
                        </div>

                        <div class="form-group">
                            <label class="col-2 col-form-label">Description</label>
                            <div class="col-10">
                                <textarea name="details" id="editor1" class="form-control ckeditor" cols="5" rows="2" placeholder="Enter APC Description"></textarea>
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
    @parent
    <script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')}}"></script>

    <script type="text/javascript">
        $(function () {
            CKEDITOR.replace('editor1');
        })
    </script>
@endpush


{{-- @push('css')

@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">News</h3>
                        </div>
                        <form role="form" action="/add_news/?process=insert_image" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                  <label for="title">Title</label>
                                  <input class="form-control" id="title" type="text" name="title">
                                </div>
                                <div class="form-group">
                                  <label for="details">Details</label>
                                  <textarea class="form-control" name="details" rows="5" id="details"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputFile">News image</label>
                                  <input type="file" name="gallery_image" id="exampleInputFile">
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </section>
    </div>


@endsection

@push('scripts')

@endpush --}}

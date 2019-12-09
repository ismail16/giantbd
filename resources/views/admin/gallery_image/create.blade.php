@extends('admin.layouts.app')

@section('title', 'Create Image')

@push('css')
@endpush
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Upload gallery image</h3>
                        </div>
                        <form role="form" action="{{ route('admin.gallery-image.store') }}" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}

                            <div class="box-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Category</label>
                                  <select name="category" class="form-control">
                                    <option value="Giant_Textile_Unit">Giant Textile Unit</option>
                                    <option value="Joydepur_Unit">Joydepur Unit</option>
                                    <option value="Giant_Business_Tower">Giant Business Tower</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputFile">File input</label>
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
   
@endpush


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
                        <form role="form" action="{{ route('admin.gallery-image.update', $gallery_image->id) }}" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}
                            @method('PUT')

                            <div class="box-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Category</label>
                                  <select name="category" class="form-control">
                                    <option value="Giant_Textile_Unit" {{ $gallery_image->category=='Giant_Textile_Unit'? 'selected':''}}>Giant Textile Unit</option>
                                    <option value="Joydepur_Unit" {{ $gallery_image->category=='Joydepur_Unit'? 'selected':''}}>Joydepur Unit</option>
                                    <option value="Giant_Business_Tower" {{ $gallery_image->category=='Giant_Business_Tower'? 'selected':''}}>Giant Business Tower</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputFile">File input</label>
                                  <input type="file" name="gallery_image" id="exampleInputFile">
                                  <img height="65" width="100" src="{{asset('images/gallery_image/'.$gallery_image->gallery_image)}}"
                                         alt="{{$gallery_image->category}}">
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
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


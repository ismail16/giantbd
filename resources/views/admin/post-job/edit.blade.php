@extends('admin.layouts.app')

@section('title', 'Create News')

@push('css')
@endpush

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
                <div class="box-body">
                    <form action="{{ route('admin.post-job.update',$PostJob->id) }}" role="form" enctype="multipart/form-data" method="post">

                         {{csrf_field()}}
                            @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-2 col-form-label">Title</label>
                                    <div class="col-10">
                                        <input name="title" type="text" value="{{ $PostJob->title }}" placeholder="Enter News Title" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Department</label>
                                    <select name="department" class="form-control" required>
                                        <option value="Accounting_Finance" {{ $PostJob->department=='Accounting_Finance'?'selected':'' }}>Accounting/Finance</option>
                                        <option value="Commercial_SupplyChain" {{ $PostJob->department=='Commercial_SupplyChain'?'selected':'' }}>Commercial/Supply Chain</option>
                                        <option value="Research_and_Development" {{ $PostJob->department=='Research_and_Development'?'selected':'' }}>Research and Development</option>
                                        <option value="HR_Admin_&_Compliance" {{ $PostJob->department=='HR_Admin_&_Compliance'?'selected':'' }}>HR Admin & Compliance</option>
                                        <option value="Information_Technology" {{ $PostJob->department=='Information_Technology'?'selected':'' }}>Information Technology</option>
                                        <option value="Marketing_&_Merchandising" {{ $PostJob->department=='Marketing_&_Merchandising'?'selected':'' }}>Marketing & Merchandising</option>
                                        <option value="Production_Operation" {{ $PostJob->department=='Production_Operation'?'selected':'' }}>Production/Operation</option>
                                        <option value="Planning_&_Controlling" {{ $PostJob->department=='Planning_&_Controlling'?'selected':'' }}>Planning & Controlling</option>
                                        <option value="Purchase_&_Procurement" {{ $PostJob->department=='Purchase_&_Procurement'?'selected':'' }}>Purchase & Procurement</option>
                                        <option value="Knitting_&_Dyeing" {{ $PostJob->department=='Knitting_&_Dyeing'?'selected':'' }}>Knitting & Dyeing</option>
                                        <option value="Printing" {{ $PostJob->department=='Printing'?'selected':'' }}>Printing</option>
                                        <option value="Embroidery" {{ $PostJob->department=='Embroidery'?'selected':'' }}>Embroidery</option>
                                        <option value="Store_Management" {{ $PostJob->department=='Store_Management'?'selected':'' }}>Store Management</option>
                                        <option value="IE_&_Planning" {{ $PostJob->department=='IE_&_Planning'?'selected':'' }}>IE & Planning</option>
                                        <option value="Maintenance" {{ $PostJob->department=='Maintenance'?'selected':'' }}>Maintenance</option>
                                        <option value="Quality" {{ $PostJob->department=='Quality'?'selected':'' }}>Quality</option>
                                        <option value="Agro_Processing" {{ $PostJob->department=='Agro_Processing'?'selected':'' }}>Agro Processing</option>
                                        <option value="Retail_Store_RMG" {{ $PostJob->department=='Retail_Store_RMG'?'selected':'' }}>Retail Store-RMG</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-2 col-form-label">Link</label>
                                    <div class="col-10">
                                        <input name="job_link" value="{{ $PostJob->job_link}}" type="text" placeholder="Enter News Title" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group row">
                                  <label for="recipient-name" class="col-form-label col-md-2"> Image:</label>
                                  <input type="file" name="job_image" class="col-md-6">
                                  <img class="col-md-6" src="{{ asset('images/PostJob/'.$PostJob->job_image) }}" width="50" alt="">
                              </div>
                                <!-- <div class="form-group"> -->
                               <!--     <label for="recipient-name" class="col-form-label"> Image:</label>
                                  <input type="file" name="job_image">
                                </div> -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-2 col-form-label">Description</label>
                            <div class="col-10">
                                <textarea name="details" id="editor1" class="form-control ckeditor" cols="5" rows="2" placeholder="Enter APC Description">{{ $PostJob->details }}</textarea>
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


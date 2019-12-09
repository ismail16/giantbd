@extends('admin.layouts.app')

@section('title', 'Create News')

@push('css')
@endpush

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
                <div class="box-body">
                    <form action="{{ route('admin.post-job.store') }}" role="form" enctype="multipart/form-data" method="post">

                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-2 col-form-label">Title</label>
                                    <div class="col-10">
                                        <input name="title" type="text" placeholder="Enter News Title" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Department</label>
                                    <select name="department" class="form-control" required>
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
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-2 col-form-label">Link</label>
                                    <div class="col-10">
                                        <input name="job_link" type="text" placeholder="Enter News Title" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                   <label for="recipient-name" class="col-form-label"> Image:</label>
                                    <input type="file" name="job_image">
                                </div>
                            </div>
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


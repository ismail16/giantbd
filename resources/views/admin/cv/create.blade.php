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
                          <h3 class="box-title">Drop Your CV</h3>
                        </div>
                        <form role="form" action="{{ route('admin.cv.store') }}" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}

                            <div class="box-body">

                                <div class="form-group required">
                                    <p class='control-label'>Name</p>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name here">
                                </div>

                                <div class="form-group required">
                                    <p class='control-label'>Mobile</p>
                                    <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile number here">
                                </div>

                                <div class="form-group required">
                                    <p class='control-label'>Email</p>
                                    <input name="email" type="text" class="form-control" placeholder="Enter your Email here">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Category</label>
                                    <select name="department" class="form-control">
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
                                <div class="form-group">
                                    <p for="exampleInputFile">CV (DOC/PDF) </p>
                                    <input type="file" name="cv" class="form-control-file">
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


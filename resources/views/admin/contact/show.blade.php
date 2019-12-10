@extends('admin.layouts.app')

@section('title', 'Message Show')

@push('css')
@endpush
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Message Show</h3>
                        </div>
                        <form role="form" action="" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}
                            @method('PUT')

                            <div class="box-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name: {{ $contact->name }}</label>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email: {{ $contact->email }}</label>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1"> Message: <br>{{ $contact->message }}</label>
                                </div>
                            </div>
                            <div class="box-footer">
                                <a href="{{ route('admin.contact.index') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Back</a>
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


@extends('admin.layouts.app')

@section('breadcumb')
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="breadcrumb-item active"><a href="{{route('admin.news.index')}}">news</a></li>
@endsection

@section('title', 'News')

@push('css')
    <link rel="stylesheet" href="{{asset('admin/bower_components/datatables-bs/css/dataTables.bootstrap.min.css')}}">
    <style>
        .table-actions-bar .table-action-btn {
            color: #98a6ad;
            display: inline-block;
            width: 28px;
            border-radius: 50%;
            text-align: center;
            line-height: 24px;
            font-size: 20px;
        }
    </style>
@endpush

@section('content')

    @if ($message = Session::get('success'))
        <div style="text-align: -webkit-center; position: absolute; top: 54px; left: 25%; width: 60%;">
            <div class="alert alert-success " style="width: 30%;padding: 3px 10px;margin: 0px;text-align: center;">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ $message }}
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <a href="{{route('admin.news.create')}}" class="pull-right btn btn-xs btn-primary"> <i
                                class="fa fa-plus"></i> Add New</a>
                    <br>
                    <br>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Creation Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $new)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>
                                    <img height="65" width="100" src="{{asset('images/news/'.$new->image)}}"
                                         alt="{{$new->title}}">
                                </td>
                                <td>{{$new->title}}</td>
                                <td>{{$new->created_at->format('d M Y')}}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.news.edit' ,$new->id) }}"
                                       class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('admin.news.destroy',$new->id ) }}" method="post"
                                          style="display: inline;"
                                          onsubmit="return confirm('Are you Sure? Want to delete')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-xs btn-danger" type="submit"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>

            </div>

        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{asset('js/bootbox.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>

    <script>
        $(document).on("click", ".about_us_delete", function (e) {
            var index = $(this).data('content');

            bootbox.confirm({
                message: "Do you want to remove this?",
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-vinndo'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-default'
                    }
                },
                callback: function (result) {
                    if (result) {
                        $("#about_us_delete" + index).submit();
                    }
                }
            });
        });
    </script>
@endpush

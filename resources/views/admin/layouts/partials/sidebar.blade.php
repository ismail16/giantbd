<aside class="main-sidebar" style="position: fixed !important;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar fixed" style="position: absolute; top: 50px; left: 0px; right: 0px; bottom: 0px; overflow: auto; height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('images/default.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href=""><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"> Dashboard Section</li>
            <li class="{{Request::is('admin/dashboard')? 'active':''}}">
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>


{{--            <li class="{{Request::is('admin/refundPolicy*')? 'active':''}}">--}}
{{--                <a href="{{route('admin.refundPolicy.index')}}">--}}
{{--                    <i class="fa fa-file-pdf-o"></i>--}}
{{--                    <span> Refund Policy</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="{{Request::is('admin/delivery-policy*')? 'active':''}}">--}}
{{--                <a href="{{route('admin.delivery-policy.index')}}">--}}
{{--                    <i class="fa fa-file-pdf-o"></i>--}}
{{--                    <span> Delivery Policy</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="{{Request::is('admin/delivery-web*')? 'active':''}}">--}}
{{--                <a href="{{route('admin.indexweb')}}">--}}
{{--                    <i class="fa fa-comments-o"></i>--}}
{{--                    <span>Delivery Policy Web</span>--}}
{{--                </a>--}}
{{--            </li>--}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

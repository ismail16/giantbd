<aside class="main-sidebar" style="position: fixed !important;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar fixed" style="position: absolute; top: 50px; left: 0px; right: 0px; bottom: 0px; overflow: auto; height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://anotherjavaduke.files.wordpress.com/2018/08/avataaars-2.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href=""><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"> Dashboard Section</li>
            <li class="{{Request::is('admin/dashboard')? 'active':''}}">
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview" style="height: auto;">
                <a href="#">
                    <i class="fa fa-bullhorn"></i> <span>News</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="{{ route('admin.news.create') }}"><i class="fa fa-circle-o"></i>Add News</a></li>
                    <li><a href="{{ route('admin.news.index') }}"><i class="fa fa-circle-o"></i>Manage News</a></li>
                </ul>
            </li>

            <li class="">
                <a href="{{ route('admin.cv.index') }}">
                    <i class="fa fa-file-pdf-o"></i> <span>CV</span>
                </a>
            </li>
            
            </li>

            <li class="treeview" style="height: auto;">
                <a href="#">
                    <i class="fa fa-file-image-o"></i> <span>Image Gallery</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="{{ route('admin.gallery-image.create') }}"><i class="fa fa-circle-o"></i>Add Image</a></li>
                    <li><a href="{{ route('admin.gallery-image.index') }}"><i class="fa fa-circle-o"></i>Manage News</a></li>
                </ul>
            </li>

            

        </ul>
    </section>
</aside>

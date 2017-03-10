<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/img/avatar3.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, Admin</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="/">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            @foreach($cruds as $crud)
            <li class="treeview">
                <a href="#">
                    <i class="{{$crud->fontawesome_class}}"></i>
                    <span>{{$crud->crud_name}}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                @if($crud->creatable==1||$crud->editable==1||$crud->listable==1)
                <ul class="treeview-menu">
                    @if($crud->creatable==1)
                        <li><a href="/table/{{$crud->table_name}}/create"><i class="fa fa-angle-double-right"></i> Create</a></li>
                    @endif
                    @if($crud->listable==1)
                        <li><a href="/table/{{$crud->table_name}}/list"><i class="fa fa-angle-double-right"></i> List</a></li>
                    @endif
                    <li><a href="/table/{{$crud->table_name}}/settings"><i class="fa fa-angle-double-right"></i> Settings</a></li>
                </ul>
                @endif
            </li>
            @endforeach
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
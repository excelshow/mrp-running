<aside class="main-sidebar" >
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" >
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ photo_user() }}" style="width:400px;height: 50px;" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{name_user()}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu tree" data-widget="tree">
      <li class="header" style="background: #ffffff">MAIN NAVIGATION</li>
      <li class="" style="">
        <a href="{{url('home')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      {{sidebar_akses()}}

      <li class="treeview {{ Request::is('operations/*') || Request::is('operations/*/*') || Request::is('operations/*/*/*') ? 'menu-open active' : '' }}">
        <a href="#">
          <i class="fa fa-cogs"></i> <span>Operations</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('operations/manufacturing') || Request::is('operations/manufacturing/*') || Request::is('operations/manufacturing/*/*') ? 'active' : '' }}" style="">
            <a href="{{ url('operations/manufacturing') }}">
              <i class="fa fa-cubes"></i> <span>Manufacturing Orders</span>
            </a>
          </li>
          <li class="{{ Request::is('operations/unbuild') || Request::is('operations/unbuild/*') || Request::is('operations/unbuild/*/*') ? 'active' : '' }}" style="">
            <a href="{{ url('operations/unbuild') }}">
              <i class="fa fa-square"></i> <span>Unbuild Orders</span>
            </a>
          </li>
          <li class="{{ Request::is('operations/scrap') || Request::is('operations/scrap/*') || Request::is('operations/scrap/*/*') ? 'active' : '' }}" style="">
            <a href="{{ url('operations/scrap') }}">
              <i class="fa fa-tasks"></i> <span>Scrap Orders</span>
            </a>
          </li>
        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
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
  
      {{-- manufacturing --}}
      <li class="treeview {{ Request::is('manufacturing/operations') || Request::is('manufacturing/operations/*') || Request::is('manufacturing/operations/*/*') || Request::is('manufacturing/operations/*/*/*') || Request::is('manufacturing/operations/*/*/*/*') || Request::is('manufacturing/reporting') || Request::is('manufacturing/reporting/*') || Request::is('manufacturing/reporting/*/*') || Request::is('manufacturing/reporting/*/*/*') || Request::is('manufacturing/reporting/*/*/*/*')? 'menu-open active' : '' }}">
        <a href="#">
          <i class="fa fa-cogs"></i> <span>Manufacturing</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          
          <li class="{{ Request::is('manufacturing/operations') || Request::is('manufacturing/operations/*') || Request::is('manufacturing/operations/*/*') ? 'active' : '' }}" style="">
            <a href="{{ url('manufacturing/operations') }}">
              <i class="fa fa-cubes"></i> <span>Operations</span>
            </a>
          </li>
          <li class="{{ Request::is('manufacturing/reporting') || Request::is('manufacturing/reporting/*') || Request::is('manufacturing/reporting/*/*') ? 'active' : '' }}" style="">
            <a href="{{ url('manufacturing/reporting') }}">
              <i class="fa fa-bar-chart"></i> <span>Reporting</span>
            </a>
          </li>

        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
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

      <li class="{{ Request::is('manufacturing') || Request::is('manufacturing/*') || Request::is('manufacturing/*/*') ? 'active' : '' }}" style="">
        <a href="{{ url('manufacturing') }}">
          <i class="fa fa-cubes"></i> <span>Manufacturing</span>
        </a>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
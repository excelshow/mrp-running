<div class="wrapper">
<header class="main-header">
  <a href="{{ url('home') }}" class="logo" style="background-color: #ffffff" >
    <span class="logo-mini" style="color: #0001fe;font-weight: bold;"><b>ERP</b></span>
    <span class="logo-lg pull-left" style="color: #0001fe;font-weight: bold;"><img src="{{asset('new_logo.png')}}" width="24%" style="">
      <span>PAMINDO</span>
    </span>
  </a>
  <nav class="navbar navbar-static-top" style="background-color: #3a6983" >
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ photo_user() }}" class="user-image" alt="">
            <span class="hidden-xs">{{name_user()}}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img src="{{ photo_user() }}" class="img-circle" alt="">
              <p>
                {{name_user()}}
                <small>{{role_user()}}</small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="/profile" class="btn btn-default btn-flat">Edit Profile</a>
              </div>
              <div class="pull-right">
                <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

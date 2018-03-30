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
      
      {{-- dynamic menu --}}
      {{-- {{sidebar_akses()}} --}}
  
      {{-- <li class="treeview {{ Request::is('manufacturing/operations') || Request::is('manufacturing/operations/*') || Request::is('manufacturing/operations/*/*') || Request::is('manufacturing/operations/*/*/*') || Request::is('manufacturing/operations/*/*/*/*') || Request::is('manufacturing/reporting') || Request::is('manufacturing/reporting/*') || Request::is('manufacturing/reporting/*/*') || Request::is('manufacturing/reporting/*/*/*') || Request::is('manufacturing/reporting/*/*/*/*') ? 'menu-open active' : '' }}">
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
      
      <li class="treeview {{ Request::is('planning/*') || Request::is('planning/*/*') ? 'menu-open active' : '' }}">
        <a href="#">
          <i class="fa fa-location-arrow"></i> <span>Planning</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          
          <li class="{{ Request::is('planning/maintenance-data-day-off') || Request::is('planning/maintenance-data-day-off/*') ? 'active' : '' }}" style="">
            <a href="{{ url('planning/maintenance-data-day-off') }}">
              <i class="fa fa-refresh"></i> <span>Maintenace Data Day Off</span>
            </a>
          </li>
          <li class="{{ Request::is('planning/maintenance-data-planning') || Request::is('planning/maintenance-data-planning/*') ? 'active' : '' }}" style="">
            <a href="{{ url('planning/maintenance-data-planning') }}">
              <i class="fa fa-refresh"></i> <span>Maintenace Data Planning</span>
            </a>
          </li>
          <li class="{{ Request::is('planning/maintenance-data-work-center') || Request::is('planning/maintenance-data-work-center/*') ? 'active' : '' }}" style="">
            <a href="{{ url('planning/maintenance-data-work-center') }}">
              <i class="fa fa-refresh"></i> <span>Maintenace Data Work Center</span>
            </a>
          </li>

        </ul>
      </li>
      
      <li class="treeview {{ Request::is('inventory/operations') || Request::is('inventory/operations/*') || Request::is('inventory/operations/*/*') || Request::is('inventory/operations/*/*/*') || Request::is('inventory/operations/*/*/*/*') || Request::is('inventory/reporting') || Request::is('inventory/reporting/*') || Request::is('inventory/reporting/*/*') || Request::is('inventory/reporting/*/*/*') || Request::is('inventory/reporting/*/*/*/*') ? 'menu-open active' : '' }}">
        <a href="#">
          <i class="fa fa-archive"></i> <span>Inventory</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          
          <li class="{{ Request::is('inventory/operations') || Request::is('inventory/operations/*') || Request::is('inventory/operations/*/*') ? 'active' : '' }}" style="">
            <a href="{{ url('inventory/operations') }}">
              <i class="fa fa-cubes"></i> <span>Operations</span>
            </a>
          </li>
          <li class="{{ Request::is('inventory/reporting') || Request::is('inventory/reporting/*') || Request::is('inventory/reporting/*/*') ? 'active' : '' }}" style="">
            <a href="{{ url('inventory/reporting') }}">
              <i class="fa fa-bar-chart"></i> <span>Reporting</span>
            </a>
          </li>

        </ul>
      </li> --}}

      <div class="divider"></div>

      <li class="treeview {{ Request::is('sales/*') || Request::is('sales/*/*') || Request::is('sales/*/*/*') || Request::is('sales/*/*/*/*') ? 'menu-open active' : '' }}">
        <a href="#">
          <i class="fa fa-certificate"></i>
          <span>Sales</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('sales/orders') || Request::is('sales/orders/*/*') || Request::is('sales/orders/*/*/*') || Request::is('sales/orders/*/*/*/*') ? 'menu-open active' : '' }}">
            <a href="{{ url('sales/orders') }}"><i class="fa fa-circle-o"></i> Customer Order</a>
          </li>
          <li class="{{ Request::is('sales/contracts') || Request::is('sales/contracts/*/*') || Request::is('sales/contracts/*/*/*') || Request::is('sales/contracts/*/*/*/*') ? 'menu-open active' : '' }}">
            <a href="{{ url('sales/contracts') }}"><i class="fa fa-circle-o"></i> Customer Contract</a>
          </li>
        </ul>
      </li>

      <li class="treeview {{ Request::is('engineering/*') || Request::is('engineering/*/*') || Request::is('engineering/*/*/*') || Request::is('engineering/*/*/*/*') ? 'menu-open active' : '' }}">
        <a href="#">
          <i class="fa fa-cogs"></i> <span>Production Engineering</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">

          <li class="treeview {{ Request::is('engineering/master-materials') || Request::is('engineering/master-materials/*') || Request::is('engineering/master-materials/*/*') || Request::is('engineering/master-materials/*/*/*') ? 'menu-open active' : '' }}">
            <a href="#"><i class="fa fa-circle-o"></i> Master Material
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ Request::is('engineering/master-materials/maintenance-data') || Request::is('engineering/master-materials/maintenance-data/*') || Request::is('engineering/master-materials/maintenance-data/*/*') || Request::is('engineering/master-materials/maintenance-data/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('engineering/master-materials/maintenance-data') }}"><i class="fa fa-circle-o"></i> Maintenance Data</a>
              </li>
              <li class="{{ Request::is('engineering/master-materials/approval') || Request::is('engineering/master-materials/approval/*') || Request::is('engineering/master-materials/approval/*/*') || Request::is('engineering/master-materials/approval/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('engineering/master-materials/approval') }}"><i class="fa fa-circle-o"></i> Approval</a>
              </li>
            </ul>
          </li>

          <li class="treeview {{ Request::is('engineering/bill-of-materials') || Request::is('engineering/bill-of-materials/*') || Request::is('engineering/bill-of-materials/*/*') || Request::is('engineering/bill-of-materials/*/*/*') ? 'menu-open active' : '' }}">
            <a href="#"><i class="fa fa-circle-o"></i> Bill Of Material
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ Request::is('engineering/bill-of-materials/maintenance-data') || Request::is('engineering/bill-of-materials/maintenance-data/*') || Request::is('engineering/bill-of-materials/maintenance-data/*/*') || Request::is('engineering/bill-of-materials/maintenance-data/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('engineering/bill-of-materials/maintenance-data') }}"><i class="fa fa-circle-o"></i> Maintenance Data</a>
              </li>
              <li class="{{ Request::is('engineering/bill-of-materials/approval') || Request::is('engineering/bill-of-materials/approval/*') || Request::is('engineering/bill-of-materials/approval/*/*') || Request::is('engineering/bill-of-materials/approval/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('engineering/bill-of-materials/approval') }}"><i class="fa fa-circle-o"></i> Approval</a>
              </li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Routing Master
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Maintenance Data</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Approval</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="treeview {{ Request::is('planning/*') || Request::is('planning/*/*') || Request::is('planning/*/*/*') || Request::is('planning/*/*/*/*') ? 'menu-open active' : '' }}">
        <a href="#">
          <i class="fa fa-cog"></i>
          <span>Production Planning</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('planning/labors') || Request::is('planning/labors/*') || Request::is('planning/labors/*/*') || Request::is('planning/labors/*/*/*') ? 'active' : '' }}">
            <a href="{{ url('planning/labors') }}"><i class="fa fa-circle-o"></i> Labors Data</a>
          </li>
          <li class="{{ Request::is('planning/machines') || Request::is('planning/machines/*') || Request::is('planning/machines/*/*') || Request::is('planning/machines/*/*/*') ? 'active' : '' }}">
            <a href="{{ url('planning/machines') }}"><i class="fa fa-circle-o"></i> Machines Data</a>
          </li>

          <li class="{{ Request::is('planning/work-center') || Request::is('planning/work-center/*') || Request::is('planning/work-center/*/*') || Request::is('planning/work-center/*/*/*') ? 'active' : '' }}">
            <a href="{{ url('planning/work-center') }}"><i class="fa fa-circle-o"></i> Work Center</a>
          </li>
          <li><a href="#"><i class="fa fa-circle-o"></i> MRP Running</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Capacity Planning</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-tasks"></i>
          <span>Production Control</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/work-order"><i class="fa fa-circle-o"></i> Create Order</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Release Order</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Print Order</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Scheduling</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-bars"></i>
          <span>Shop Floor Control</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Order Tracking</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Opr. and Order Confirmation</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Closed Order</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-indent"></i>
          <span>Inventory Control</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Goods Received</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Goods Issued</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-asterisk"></i>
          <span>Purchasing</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Purchase Requisition</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Purchase Order</a></li>
        </ul>
      </li>

      <li class="treeview {{ Request::is('master/*') || Request::is('master/*/*') || Request::is('master/*/*/*') || Request::is('master/*/*/*/*') ? 'menu-open active' : '' }}">
        <a href="#">
          <i class="fa fa-archive"></i> <span>Master Data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview {{ Request::is('master/reference') || Request::is('master/reference/*') || Request::is('master/reference/*/*') || Request::is('master/reference/*/*/*') ? 'menu-open active' : '' }}">
            <a href="#"><i class="fa fa-circle-o"></i> Data Reference
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Unit Of Measure</a></li>
              <li class="{{ Request::is('master/reference/kurs') || Request::is('master/reference/kurs/*') || Request::is('master/reference/kurs/*/*') || Request::is('master/reference/kurs/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('master/reference/kurs') }}"><i class="fa fa-circle-o"></i> Kurs (Currency)</a>
              </li>
              <li class="{{ Request::is('master/reference/stores') || Request::is('master/reference/stores/*') || Request::is('master/reference/stores/*/*') || Request::is('master/reference/stores/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('master/reference/stores') }}"><i class="fa fa-circle-o"></i> Stores Code</a>
              </li>
              <li class="{{ Request::is('master/reference/koding') || Request::is('master/reference/koding/*') || Request::is('master/reference/koding/*/*') || Request::is('master/reference/koding/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('master/reference/koding') }}"><i class="fa fa-circle-o"></i> Koding Code</a>
              </li>
              
              <li><a href="#"><i class="fa fa-circle-o"></i> Operation Status Code </a></li>
              <li class="{{ Request::is('master/reference/part-class') || Request::is('master/reference/part-class/*') || Request::is('master/reference/part-class/*/*') || Request::is('master/reference/part-class/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('master/reference/part-class') }}"><i class="fa fa-circle-o"></i> Part Class</a>
              </li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Sales Document Type</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Shop Code</a></li>
            </ul>
          </li>

        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
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

          {{-- <li class="treeview {{ Request::is('engineering/bill-of-materials') || Request::is('engineering/bill-of-materials/*') || Request::is('engineering/bill-of-materials/*/*') || Request::is('engineering/bill-of-materials/*/*/*') ? 'menu-open active' : '' }}">
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
          </li> --}}

          <li class="treeview {{ Request::is('engineering/e-bom') || Request::is('engineering/e-bom/*') || Request::is('engineering/e-bom/*/*') || Request::is('engineering/e-bom/*/*/*') ? 'menu-open active' : '' }}">
            <a href="#"><i class="fa fa-circle-o"></i> Engineering BOM
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ Request::is('engineering/e-bom/assy') || Request::is('engineering/e-bom/assy/*') || Request::is('engineering/e-bom/assy/*/*') || Request::is('engineering/e-bom/assy/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('engineering/e-bom/assy') }}"><i class="fa fa-circle-o"></i> Assy</a>
              </li>
              <li class="{{ Request::is('engineering/e-bom/single-parts') || Request::is('engineering/e-bom/single-parts/*') || Request::is('engineering/e-bom/single-parts/*/*') || Request::is('engineering/e-bom/single-parts/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('engineering/e-bom/single-parts') }}"><i class="fa fa-circle-o"></i> Single Parts</a>
              </li>
              <li class="{{ Request::is('engineering/e-bom/approval') || Request::is('engineering/e-bom/approval/*') || Request::is('engineering/e-bom/approval/*/*') || Request::is('engineering/e-bom/approval/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('engineering/e-bom/approval') }}"><i class="fa fa-circle-o"></i> Approval</a>
              </li>
            </ul>
          </li>

          <li class="treeview {{ Request::is('engineering/m-bom') || Request::is('engineering/m-bom/*') || Request::is('engineering/m-bom/*/*') || Request::is('engineering/m-bom/*/*/*') ? 'menu-open active' : '' }}">
            <a href="#"><i class="fa fa-circle-o"></i> Manufacturing BOM
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ Request::is('engineering/m-bom/assy') || Request::is('engineering/m-bom/assy/*') || Request::is('engineering/m-bom/assy/*/*') || Request::is('engineering/m-bom/assy/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('engineering/m-bom/assy') }}"><i class="fa fa-circle-o"></i> Assy</a>
              </li>
              <li class="{{ Request::is('engineering/m-bom/single-parts') || Request::is('engineering/m-bom/single-parts/*') || Request::is('engineering/m-bom/single-parts/*/*') || Request::is('engineering/m-bom/single-parts/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('engineering/m-bom/single-parts') }}"><i class="fa fa-circle-o"></i> Single Parts</a>
              </li>
              <li class="{{ Request::is('engineering/m-bom/approval') || Request::is('engineering/m-bom/approval/*') || Request::is('engineering/m-bom/approval/*/*') || Request::is('engineering/m-bom/approval/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('engineering/m-bom/approval') }}"><i class="fa fa-circle-o"></i> Approval</a>
              </li>
            </ul>
          </li>

          <li class="treeview {{ Request::is('engineering/routing-master') || Request::is('engineering/routing-master/*') || Request::is('engineering/routing-master/*/*') || Request::is('engineering/routing-master/*/*/*') ? 'menu-open active' : '' }}">
            <a href="#"><i class="fa fa-circle-o"></i> Routing Master
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ Request::is('engineering/routing-master/maintenance-data') || Request::is('engineering/routing-master/maintenance-data/*') || Request::is('engineering/routing-master/maintenance-data/*/*') || Request::is('engineering/routing-master/maintenance-data/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('engineering/routing-master/maintenance-data') }}"><i class="fa fa-circle-o"></i> Maintenance Data</a>
              </li>
              <li class="{{ Request::is('engineering/routing-master/approval') || Request::is('engineering/routing-master/approval/*') || Request::is('engineering/routing-master/approval/*/*') || Request::is('engineering/routing-master/approval/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('engineering/routing-master/approval') }}"><i class="fa fa-circle-o"></i> Approval</a>
              </li>
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
          <li class="{{ Request::is('planning/locations') || Request::is('planning/locations/*') || Request::is('planning/locations/*/*') || Request::is('planning/locations/*/*/*') ? 'active' : '' }}">
            <a href="{{ url('planning/locations') }}"><i class="fa fa-circle-o"></i> Locations Data</a>
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
          <li><a href="#"><i class="fa fa-circle-o"></i> Delivery</a></li>
        </ul>
      </li>

      <li class="treeview {{ Request::is('purchasing/*') || Request::is('purchasing/*/*') || Request::is('purchasing/*/*/*') || Request::is('purchasing/*/*/*/*') ? 'menu-open active' : '' }}">
        <a href="#">
          <i class="fa fa-asterisk"></i>
          <span>Purchasing</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Purchase Requisition</a></li>
          <li class="{{ Request::is('purchasing/purchase-orders') || Request::is('purchasing/purchase-orders/*') || Request::is('purchasing/purchase-orders/*/*') || Request::is('purchasing/purchase-orders/*/*/*') ? 'active' : '' }}">
            <a href="{{ url('purchasing/purchase-orders') }}"><i class="fa fa-circle-o"></i> Purchase Order</a>
          </li>
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
              <li class="{{ Request::is('master/reference/customers') || Request::is('master/reference/customers/*') || Request::is('master/reference/customers/*/*') || Request::is('master/reference/customers/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('master/reference/customers') }}"><i class="fa fa-circle-o"></i> Customers</a>
              </li>
              <li class="{{ Request::is('master/reference/units') || Request::is('master/reference/units/*') || Request::is('master/reference/units/*/*') || Request::is('master/reference/units/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('master/reference/units') }}"><i class="fa fa-circle-o"></i> Unit Of Measure</a>
              </li>
              <li class="{{ Request::is('master/reference/kurs') || Request::is('master/reference/kurs/*') || Request::is('master/reference/kurs/*/*') || Request::is('master/reference/kurs/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('master/reference/kurs') }}"><i class="fa fa-circle-o"></i> Kurs (Currency)</a>
              </li>
              <li class="{{ Request::is('master/reference/stores') || Request::is('master/reference/stores/*') || Request::is('master/reference/stores/*/*') || Request::is('master/reference/stores/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('master/reference/stores') }}"><i class="fa fa-circle-o"></i> Stores Code</a>
              </li>
              <li class="{{ Request::is('master/reference/koding') || Request::is('master/reference/koding/*') || Request::is('master/reference/koding/*/*') || Request::is('master/reference/koding/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('master/reference/koding') }}"><i class="fa fa-circle-o"></i> Koding Code</a>
              </li>
              
              <li class="{{ Request::is('master/reference/operation-status') || Request::is('master/reference/operation-status/*') || Request::is('master/reference/operation-status/*/*') || Request::is('master/reference/operation-status/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('master/reference/operation-status') }}"><i class="fa fa-circle-o"></i> Operation Status Code </a>
              </li>
              <li class="{{ Request::is('master/reference/part-class') || Request::is('master/reference/part-class/*') || Request::is('master/reference/part-class/*/*') || Request::is('master/reference/part-class/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('master/reference/part-class') }}"><i class="fa fa-circle-o"></i> Part Class</a>
              </li>
              <li class="{{ Request::is('master/reference/sales-document-type') || Request::is('master/reference/sales-document-type/*') || Request::is('master/reference/sales-document-type/*/*') || Request::is('master/reference/sales-document-type/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('master/reference/sales-document-type') }}"><i class="fa fa-circle-o"></i> Sales Document Type</a>
              </li>
              <li class="{{ Request::is('master/reference/shop-code') || Request::is('master/reference/shop-code/*') || Request::is('master/reference/shop-code/*/*') || Request::is('master/reference/shop-code/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('master/reference/shop-code') }}"><i class="fa fa-circle-o"></i> Shop Code</a>
              </li>
              <li class="{{ Request::is('master/reference/manufacturing-calendars') || Request::is('master/reference/manufacturing-calendars/*') || Request::is('master/reference/manufacturing-calendars/*/*') || Request::is('master/reference/manufacturing-calendars/*/*/*') ? 'active' : '' }}">
                <a href="{{ url('master/reference/manufacturing-calendars') }}"><i class="fa fa-circle-o"></i> Manufacturing Calendar</a>
              </li>
              
            </ul>
          </li>

        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
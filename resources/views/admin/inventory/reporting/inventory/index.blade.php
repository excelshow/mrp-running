@extends('layouts.admin.app')

@section('title', 'Inventory Reporting | ')

@section('content')

  <section class="content-header">
    <h1>
      Inventory Reporting
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Inventory Reporting</li>
    </ol>
  </section>

  <section class="content">
    
    <div class="row">
      <section class="col-lg-12 connectedSortable">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs pull-right">
            <li class="pull-left header"><i class="fa fa-inbox"></i>Inventory</li>
          </ul>
          <div class="tab-content no-padding">
              <div id="manufacturing-orders-count" style="height: 300px; min-width: 310px"></div>
          </div>
        </div>
      </section>
    </div>

    <div class="row">
      <section class="col-lg-6 connectedSortable">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs pull-right">
            <li class="pull-left header"><i class="fa fa-inbox"></i>Inventory</li>
          </ul>
          <div class="tab-content no-padding">
            <div id="unbuild-orders-count" style="min-width: 310px; height: 300px; max-width: 600px; margin: 0 auto"></div>
          </div>
        </div>
      </section>

      <section class="col-lg-6 connectedSortable">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs pull-right">
            <li class="pull-left header"><i class="fa fa-inbox"></i>Inventory</li>
          </ul>
          <div class="tab-content no-padding">
            <div id="scrap-orders-count" style="min-width: 310px; height: 300px; max-width: 600px; margin: 0 auto"></div>
          </div>
        </div>
      </section>
    </div>

  </section>

@endsection

@push('styles')
@endpush

@push('scripts')
  <script src="https://code.highcharts.com/stock/highstock.js"></script>
  <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#datatable-manufacturing').DataTable();
    });

    $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?a=e&filename=aapl-ohlc.json&callback=?', function (data) {

        // create the chart
        Highcharts.stockChart('manufacturing-orders-count', {


            rangeSelector: {
                selected: 1
            },

            title: {
                text: 'Inventory'
            },

            series: [{
                type: 'line',
                name: 'User Count',
                data: data,
              
            }]
        });
    });

    // Radialize the colors
    Highcharts.setOptions({
        colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
            return {
                radialGradient: {
                    cx: 0.5,
                    cy: 0.3,
                    r: 0.7
                },
                stops: [
                    [0, color],
                    [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                ]
            };
        })
    });

    // Build the chart
    Highcharts.chart('unbuild-orders-count', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Day Production'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Brands',
            data: [
                { name: 'Monday', y: 56.33 },
                { name: 'Tuesday',y: 24.03 },
                { name: 'Wednesday', y: 10.38 },
                { name: 'Thursday', y: 4.77 },
                { name: 'Friday', y: 0.91 },
                { name: 'Saturday', y: 0.2 }
            ]
        }]
    });
    // Build the chart
    Highcharts.chart('scrap-orders-count', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Day Production'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Brands',
            data: [
                { name: 'Monday', y: 56.33 },
                { name: 'Tuesday',y: 24.03 },
                { name: 'Wednesday', y: 10.38 },
                { name: 'Thursday', y: 4.77 },
                { name: 'Friday', y: 0.91 },
                { name: 'Saturday', y: 0.2 }
            ]
        }]
    });

  </script>
@endpush


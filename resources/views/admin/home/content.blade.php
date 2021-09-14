@include('admin.header')
<div class="page">
    @section('title', '首页')

    {{--@section('content')--}}
    <div class="container-fluid">
        <div class="row row-30">
            <div class="col-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between group-5">
                    <h2>Welcome</h2>
                    <div class="form-group">
                        <select class="form-control form-control-md rounded-pill">
                            <option>Last 7 days</option>
                            <option>Last 14 days</option>
                            <option>Last 21 days</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="widget-counter widget-counter-simple-fill widget-counter-simple-primary-fill">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <p>Visitors</p>
                            <h1 class="mt-0 widget-counter-title">14,555</h1>
                            <p class="mt-1 small"><span class="fa-caret-up pr-2"></span>+15%</p>
                        </div>
                        <div class="col-6">
                            <div class="highcharts-container"
                                 data-highcharts-options="{&quot;colors&quot;:[&quot;#fff&quot;],&quot;credits&quot;:false,&quot;chart&quot;:{&quot;type&quot;:&quot;spline&quot;,&quot;spacing&quot;:0,&quot;margin&quot;:-10},&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;xAxis&quot;:{&quot;gridLineWidth&quot;:1,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;allowDecimals&quot;:false,&quot;tickInterval&quot;:1,&quot;tickColor&quot;:&quot;#EEE&quot;},&quot;yAxis&quot;:{&quot;gridLineWidth&quot;:0,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false}},&quot;tooltip&quot;:{&quot;valueSuffix&quot;:&quot; millions&quot;,&quot;borderWidth&quot;:0,&quot;borderRadius&quot;:6,&quot;backgroundColor&quot;:&quot;#fff&quot;},&quot;plotOptions&quot;:{&quot;spline&quot;:{&quot;marker&quot;:{&quot;enabled&quot;:false}}},&quot;series&quot;:[{&quot;name&quot;:&quot;USA&quot;,&quot;data&quot;:[150,220,80,100,150,200]}]}"
                                 style="height: 100px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="widget-counter widget-counter-simple-fill widget-counter-simple-info-fill">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <p>Orders</p>
                            <h1 class="mt-0 widget-counter-title">6,325</h1>
                            <p class="mt-1 small"><span class="fa-caret-up pr-2"></span>+15%</p>
                        </div>
                        <div class="col-6">
                            <div class="highcharts-container"
                                 data-highcharts-options="{&quot;colors&quot;:[&quot;#fff&quot;],&quot;credits&quot;:false,&quot;chart&quot;:{&quot;type&quot;:&quot;spline&quot;,&quot;spacing&quot;:0,&quot;margin&quot;:-10},&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;xAxis&quot;:{&quot;gridLineWidth&quot;:1,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;allowDecimals&quot;:false,&quot;tickInterval&quot;:1,&quot;tickColor&quot;:&quot;#EEE&quot;},&quot;yAxis&quot;:{&quot;gridLineWidth&quot;:0,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false}},&quot;tooltip&quot;:{&quot;valueSuffix&quot;:&quot; millions&quot;,&quot;borderWidth&quot;:0,&quot;borderRadius&quot;:6,&quot;backgroundColor&quot;:&quot;#fff&quot;},&quot;plotOptions&quot;:{&quot;spline&quot;:{&quot;marker&quot;:{&quot;enabled&quot;:false}}},&quot;series&quot;:[{&quot;name&quot;:&quot;USA&quot;,&quot;data&quot;:[150,220,80,100,150,200]}]}"
                                 style="height: 100px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="widget-counter widget-counter-simple-fill widget-counter-simple-secondary-fill">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <p>Conversion</p>
                            <h1 class="mt-0 widget-counter-title">4,7%</h1>
                            <p class="mt-1 small"><span class="fa-caret-up pr-2"></span>+15%</p>
                        </div>
                        <div class="col-6">
                            <div class="highcharts-container"
                                 data-highcharts-options="{&quot;colors&quot;:[&quot;#fff&quot;],&quot;credits&quot;:false,&quot;chart&quot;:{&quot;type&quot;:&quot;spline&quot;,&quot;spacing&quot;:0,&quot;margin&quot;:-10},&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;xAxis&quot;:{&quot;gridLineWidth&quot;:1,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;allowDecimals&quot;:false,&quot;tickInterval&quot;:1,&quot;tickColor&quot;:&quot;#EEE&quot;},&quot;yAxis&quot;:{&quot;gridLineWidth&quot;:0,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false}},&quot;tooltip&quot;:{&quot;valueSuffix&quot;:&quot; millions&quot;,&quot;borderWidth&quot;:0,&quot;borderRadius&quot;:6,&quot;backgroundColor&quot;:&quot;#fff&quot;},&quot;plotOptions&quot;:{&quot;spline&quot;:{&quot;marker&quot;:{&quot;enabled&quot;:false}}},&quot;series&quot;:[{&quot;name&quot;:&quot;USA&quot;,&quot;data&quot;:[150,220,80,100,150,200]}]}"
                                 style="height: 100px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="widget-counter widget-counter-simple-fill widget-counter-simple-success-fill">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <p>Visitors</p>
                            <h1 class="mt-0 widget-counter-title">8,543</h1>
                            <p class="mt-1 small"><span class="fa-caret-up pr-2"></span>+15%</p>
                        </div>
                        <div class="col-6">
                            <div class="highcharts-container"
                                 data-highcharts-options="{&quot;colors&quot;:[&quot;#fff&quot;],&quot;credits&quot;:false,&quot;chart&quot;:{&quot;type&quot;:&quot;spline&quot;,&quot;spacing&quot;:0,&quot;margin&quot;:-10},&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;xAxis&quot;:{&quot;gridLineWidth&quot;:1,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;allowDecimals&quot;:false,&quot;tickInterval&quot;:1,&quot;tickColor&quot;:&quot;#EEE&quot;},&quot;yAxis&quot;:{&quot;gridLineWidth&quot;:0,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false}},&quot;tooltip&quot;:{&quot;valueSuffix&quot;:&quot; millions&quot;,&quot;borderWidth&quot;:0,&quot;borderRadius&quot;:6,&quot;backgroundColor&quot;:&quot;#fff&quot;},&quot;plotOptions&quot;:{&quot;spline&quot;:{&quot;marker&quot;:{&quot;enabled&quot;:false}}},&quot;series&quot;:[{&quot;name&quot;:&quot;USA&quot;,&quot;data&quot;:[150,220,80,100,150,200]}]}"
                                 style="height: 100px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8">
                <div class="panel">
                    <div class="panel-header">
                        <div class="group-5 d-flex flex-wrap align-items-center justify-content-between">
                            <h4 class="panel-title">Revenue & Costs</h4>
                            <div class="form-group">
                                <select class="form-control form-control-md rounded-pill">
                                    <option>Last 7 days</option>
                                    <option>Last 14 days</option>
                                    <option>Last 21 days</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="highcharts-container highcharts-container-lg"
                             data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#9e6cfd&quot;,&quot;#3ec5ff&quot;],&quot;chart&quot;:{&quot;type&quot;:&quot;areaspline&quot;,&quot;spacingTop&quot;:30,&quot;spacingRight&quot;:0},&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;xAxis&quot;:{&quot;lineColor&quot;:&quot;#2d3035&quot;,&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#A5A7A9&quot;,&quot;fontSize&quot;:&quot;16px&quot;}},&quot;categories&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;,&quot;Sep&quot;,&quot;Oct&quot;,&quot;Nov&quot;,&quot;Dec&quot;]},&quot;yAxis&quot;:{&quot;gridLineColor&quot;:&quot;#2d3035&quot;,&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#A5A7A9&quot;,&quot;fontSize&quot;:&quot;16px&quot;}},&quot;min&quot;:0,&quot;tickInterval&quot;:20,&quot;title&quot;:{&quot;text&quot;:null}},&quot;plotOptions&quot;:{&quot;areaspline&quot;:{&quot;fillOpacity&quot;:0.03,&quot;marker&quot;:{&quot;enabled&quot;:false}}},&quot;series&quot;:[{&quot;name&quot;:&quot;Revenue&quot;,&quot;data&quot;:[50,44,51,44,60,38,40,42,36,44,40,52]},{&quot;name&quot;:&quot;Costs&quot;,&quot;data&quot;:[22,13,25,18,36,18,67,55,18,19,14,20]}]}"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="panel">
                    <div class="panel-header">
                        <div class="group-5 d-flex flex-wrap align-items-center justify-content-between">
                            <h4 class="panel-titleLast">Activities</h4>
                            <div class="form-group">
                                <select class="form-control form-control-md rounded-pill">
                                    <option>Last 7 days</option>
                                    <option>Last 14 days</option>
                                    <option>Last 21 days</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="media group-15">
                            <div class="media-item"><img class="rounded-circle" src="/images/users/user-17-52x52.jpg"
                                                         width="48" height="48" alt=""></div>
                            <div class="media-body">
                                <h5>John Doe </h5>
                                <p>Added a new item to his store: Notebook</p><span class="d-block">1:25am</span>
                            </div>
                        </div>
                        <div class="media group-15">
                            <div class="media-item">
                                <div class="icon-circle bg-white"><span class="linearicons-user text-primary"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Jane Wilson</h5>
                                <p>Added a new item to her store: iPhone</p><span class="d-block">1:25am</span>
                            </div>
                        </div>
                        <div class="media group-15">
                            <div class="media-item"><img class="rounded-circle" src="/images/users/user-09-52x52.jpg"
                                                         width="48" height="48" alt=""></div>
                            <div class="media-body">
                                <h5>Alice Smith</h5>
                                <p>Added a new item to her store: iPad</p><span class="d-block">1:25am</span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-center"><a class="btn-link text-body" href="#">See more <span
                                class="mdi-chevron-right"></span></a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="panel">
                    <div class="panel-header">
                        <h4 class="panel-title">Top Referrals</h4>
                    </div>
                    <div class="panel-body">
                        <div class="highcharts-container"
                             data-highcharts-options="{&quot;colors&quot;:[&quot;#9e6cfd&quot;,&quot;#2d3035&quot;],&quot;credits&quot;:false,&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;chart&quot;:{&quot;type&quot;:&quot;bar&quot;},&quot;title&quot;:{&quot;text&quot;:null},&quot;xAxis&quot;:{&quot;showEmpty&quot;:false,&quot;tickLength&quot;:80,&quot;offset&quot;:1,&quot;lineColor&quot;:&quot;transparent&quot;,&quot;categories&quot;:[&quot;Google&quot;,&quot;Facebook&quot;,&quot;Twitter&quot;,&quot;Instagram&quot;,&quot;E-mail&quot;,&quot;Other&quot;],&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;align&quot;:&quot;right&quot;,&quot;style&quot;:{&quot;color&quot;:&quot;#a5a7a9&quot;,&quot;fontSize&quot;:&quot;16px&quot;}}},&quot;yAxis&quot;:{&quot;min&quot;:0,&quot;gridLineWidth&quot;:0,&quot;showEmpty&quot;:false,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false}},&quot;tooltip&quot;:{&quot;valueSuffix&quot;:&quot; %&quot;,&quot;borderWidth&quot;:0,&quot;borderRadius&quot;:6,&quot;backgroundColor&quot;:&quot;#fff&quot;},&quot;plotOptions&quot;:{&quot;bar&quot;:{&quot;colorByPoint&quot;:true,&quot;borderColor&quot;:&quot;transparent&quot;,&quot;borderRadius&quot;:6}},&quot;series&quot;:[{&quot;name&quot;:&quot;Referals&quot;,&quot;data&quot;:[52,20,15,7,6,4],&quot;dataLabels&quot;:{&quot;enabled&quot;:true,&quot;rotation&quot;:0,&quot;color&quot;:&quot;#FFFFFF&quot;,&quot;align&quot;:&quot;right&quot;,&quot;format&quot;:&quot;{point.y: f}%&quot;,&quot;y&quot;:0,&quot;style&quot;:{&quot;fontSize&quot;:&quot;12px&quot;,&quot;fontFamily&quot;:&quot;Muli, sans-serif&quot;,&quot;textOutline&quot;:&quot;0&quot;,&quot;fontWeight&quot;:&quot;normal&quot;}}}]}"
                             style="height:330px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="panel">
                    <div class="panel-header">
                        <h4 class="panel-title">Sales Analytics</h4>
                    </div>
                    <div class="panel-body">
                        <div class="highcharts-container"
                             data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#9e6cfd&quot;,&quot;#414347&quot;],&quot;chart&quot;:{&quot;type&quot;:&quot;pie&quot;,&quot;plotBackgroundColor&quot;:null,&quot;plotBorderWidth&quot;:0,&quot;plotShadow&quot;:false},&quot;title&quot;:{&quot;useHTML&quot;:true,&quot;text&quot;:&quot;&lt;h2 style=\&quot; text-align:center\&quot;&gt;51%&lt;/h1&gt;&lt;p class=\&quot;mt-1\&quot;&gt;Paid orders&lt;/p&gt;&quot;,&quot;align&quot;:&quot;center&quot;,&quot;verticalAlign&quot;:&quot;middle&quot;,&quot;y&quot;:0,&quot;style&quot;:{&quot;color&quot;:&quot;#a5a7a9&quot;,&quot;fontSize&quot;:&quot;16px&quot;}},&quot;tooltip&quot;:{&quot;pointFormat&quot;:&quot;&lt;b&gt;{point.y} items&lt;/b&gt;&quot;},&quot;plotOptions&quot;:{&quot;pie&quot;:{&quot;dataLabels&quot;:{&quot;enabled&quot;:false},&quot;borderColor&quot;:&quot;transparent&quot;,&quot;startAngle&quot;:-135,&quot;endAngle&quot;:135,&quot;center&quot;:[&quot;50%&quot;,&quot;65%&quot;],&quot;size&quot;:&quot;135%&quot;}},&quot;series&quot;:[{&quot;name&quot;:&quot;Browser share&quot;,&quot;innerSize&quot;:&quot;94%&quot;,&quot;data&quot;:[[&quot;Paid orders&quot;,1654],[&quot;Registrations&quot;,3400]]}],&quot;responsive&quot;:{&quot;rules&quot;:[{&quot;condition&quot;:{&quot;minWidth&quot;:396},&quot;chartOptions&quot;:{&quot;plotOptions&quot;:{&quot;pie&quot;:{&quot;center&quot;:[&quot;50%&quot;,&quot;65%&quot;],&quot;size&quot;:&quot;135%&quot;}}}}]}}"
                             style="height:220px;"></div>
                        <div class="d-flex align-items-center justify-content-center group-20 mt-3">
                            <div class="media"><span class="fa-circle text-500 pr-2 small mt-1"></span>
                                <div class="media-body">
                                    <h4>3,400</h4>
                                    <p class="mt-1 small">Registrations</p>
                                </div>
                            </div>
                            <div class="media mt-0"><span class="fa-circle text-primary pr-2 small mt-1"></span>
                                <div class="media-body">
                                    <h4>1,654</h4>
                                    <p class="mt-1 small">Paid orders</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="panel">
                    <div class="panel-header">
                        <div class="group-5 d-flex flex-wrap align-items-center justify-content-between">
                            <h4 class="panel-title">Orders by Regions</h4>
                            <div class="form-group">
                                <select class="form-control form-control-md rounded-pill">
                                    <option>Last 7 days</option>
                                    <option>Last 14 days</option>
                                    <option>Last 21 days</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive scroller scroller-horizontal">
                            <table class="table table-vertical-align">
                                <thead>
                                <tr>
                                    <th scope="col">Region</th>
                                    <th scope="col">amount</th>
                                    <th class="text-right" scope="col">Percent</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="py-2">
                                        <h5 class="text-primary">USA</h5>
                                    </td>
                                    <td>1,456</td>
                                    <td class="text-right">67%</td>
                                </tr>
                                <tr>
                                    <td class="py-2">
                                        <h5 class="text-secondary">Canada</h5>
                                    </td>
                                    <td>980</td>
                                    <td class="text-right">34%</td>
                                </tr>
                                <tr>
                                    <td class="py-2">
                                        <h5 class="text-info">Germany</h5>
                                    </td>
                                    <td>756</td>
                                    <td class="text-right">24%</td>
                                </tr>
                                <tr>
                                    <td class="py-2">
                                        <h5 class="text-warning">France</h5>
                                    </td>
                                    <td>549</td>
                                    <td class="text-right">15%</td>
                                </tr>
                                <tr>
                                    <td class="py-2">
                                        <h5 class="text-success">England</h5>
                                    </td>
                                    <td>200</td>
                                    <td class="text-right">4%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="panel">
                    <div class="panel-header">
                        <h4 class="panel-title">Traffic Sources</h4>
                    </div>
                    <div class="panel-body">
                        <div class="highcharts-container highcharts-container-lg"
                             data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#9e6cfd&quot;,&quot;#3ec5ff&quot;,&quot;#fac12e&quot;],&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;itemStyle&quot;:{&quot;color&quot;:&quot;#A5A7A9&quot;,&quot;fontWeight&quot;:&quot;normal&quot;,&quot;fontSize&quot;:&quot;16px&quot;},&quot;itemHoverStyle&quot;:{&quot;color&quot;:&quot;#fff&quot;}},&quot;tooltip&quot;:{&quot;pointFormat&quot;:&quot;{series.name}: &lt;b&gt;{point.percentage:.1f}%&lt;/b&gt;&quot;,&quot;borderWidth&quot;:0,&quot;borderRadius&quot;:6,&quot;backgroundColor&quot;:&quot;#fff&quot;},&quot;plotOptions&quot;:{&quot;pie&quot;:{&quot;allowPointSelect&quot;:true,&quot;showInLegend&quot;:true,&quot;dataLabels&quot;:{&quot;enabled&quot;:false,&quot;style&quot;:{&quot;fontSize&quot;:&quot;16px&quot;}},&quot;borderColor&quot;:&quot;transparent&quot;,&quot;center&quot;:[&quot;50%&quot;,&quot;50%&quot;]}},&quot;series&quot;:[{&quot;type&quot;:&quot;pie&quot;,&quot;name&quot;:&quot;Browser share&quot;,&quot;innerSize&quot;:&quot;73%&quot;,&quot;data&quot;:[[&quot;Behance&quot;,49],[&quot;Dribble&quot;,22],[&quot;Pinterest&quot;,29]],&quot;dataLabels&quot;:{&quot;style&quot;:{&quot;fontWeight&quot;:&quot;normal&quot;,&quot;color&quot;:&quot;#a5a7a9&quot;,&quot;textOutline&quot;:&quot;transparent&quot;}}}],&quot;responsive&quot;:{&quot;rules&quot;:[{&quot;condition&quot;:{&quot;minWidth&quot;:350},&quot;chartOptions&quot;:{&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;plotOptions&quot;:{&quot;pie&quot;:{&quot;dataLabels&quot;:{&quot;enabled&quot;:true}}}}}]}}"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="panel">
                    <div class="panel-header">
                        <div class="d-flex flex-wrap align-items-center justify-content-between group-5">
                            <h4 class="panel-title">Orders by Regions</h4>
                            <div class="form-group">
                                <select class="form-control form-control-md rounded-pill">
                                    <option>Last 7 days</option>
                                    <option>Last 14 days</option>
                                    <option>Last 21 days</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-vertical-align">
                                <thead class="border-bottom">
                                <tr>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tracking</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="py-3"><span class="fa-circle text-primary pr-2"></span>#3243233</td>
                                    <td>John Doe</td>
                                    <td>07/10/19</td>
                                    <td>1,456</td>
                                    <td class="text-primary">On Delivery</td>
                                    <td>DC342343</td>
                                </tr>
                                <tr>
                                    <td class="py-3"><span class="fa-circle text-success pr-2"></span>#3243256</td>
                                    <td>Alice Smith</td>
                                    <td>07/10/19</td>
                                    <td>980</td>
                                    <td class="text-success">Pending</td>
                                    <td>DC342243</td>
                                </tr>
                                <tr>
                                    <td class="py-3"><span class="fa-circle text-success pr-2"></span>#3243222</td>
                                    <td>Laura Holt</td>
                                    <td>07/10/19</td>
                                    <td>756</td>
                                    <td class="text-success">Pending</td>
                                    <td>DC342343</td>
                                </tr>
                                <tr>
                                    <td class="py-3"><span class="fa-circle text-primary pr-2"></span>#3243242</td>
                                    <td>Nick Edwards</td>
                                    <td>07/10/19</td>
                                    <td>549</td>
                                    <td class="text-primary">On Delivery</td>
                                    <td>DC343634</td>
                                </tr>
                                <tr>
                                    <td class="py-3"><span class="fa-circle text-primary pr-2"></span>#3243232</td>
                                    <td>Sarah Peters</td>
                                    <td>07/10/19</td>
                                    <td>200</td>
                                    <td class="text-primary">On Delivery</td>
                                    <td>DC454888</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="panel">
                    <div class="panel-header">
                        <div class="group-10 d-flex flex-wrap align-items-center justify-content-between">
                            <h4 class="panel-title">Sales Analytics</h4>
                            <div class="flex-grow-1 flex-sm-grow-0">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="datetime2"><span
                                                class="fa-calendar text-primary"></span></label>
                                    </div>
                                    <input class="form-control" id="datetime2" type="text" name="daterange">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="highcharts-container highcharts-container-lg"
                             data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#414347&quot;],&quot;chart&quot;:{&quot;type&quot;:&quot;column&quot;,&quot;zoomType&quot;:&quot;x&quot;,&quot;panning&quot;:true,&quot;panKey&quot;:&quot;shift&quot;},&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;tooltip&quot;:{&quot;style&quot;:{&quot;fontSize&quot;:&quot;16px&quot;},&quot;headerFormat&quot;:&quot;&quot;,&quot;footerFormat&quot;:&quot;&quot;,&quot;borderWidth&quot;:0,&quot;borderRadius&quot;:6,&quot;padding&quot;:6,&quot;backgroundColor&quot;:&quot;#fff&quot;,&quot;pointFormat&quot;:&quot; {series.name}: &lt;span style=\&quot;color:{point.color}\&quot;&gt;{point.y}&lt;/span&gt;&quot;},&quot;xAxis&quot;:{&quot;lineColor&quot;:&quot;#2d3035&quot;,&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#A5A7A9&quot;,&quot;fontSize&quot;:&quot;14px&quot;}},&quot;categories&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;,&quot;Sep&quot;,&quot;Oct&quot;,&quot;Nov&quot;,&quot;Dec&quot;]},&quot;yAxis&quot;:{&quot;tickInterval&quot;:25,&quot;gridLineColor&quot;:&quot;#2d3035&quot;,&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#A5A7A9&quot;,&quot;fontSize&quot;:&quot;14px&quot;}},&quot;title&quot;:{&quot;enabled&quot;:false}},&quot;series&quot;:[{&quot;name&quot;:&quot;Nr. of clients&quot;,&quot;data&quot;:[30,70,64,84,36,64,59,36,59,59,18,40]}],&quot;plotOptions&quot;:{&quot;column&quot;:{&quot;borderColor&quot;:&quot;transparent&quot;,&quot;maxPointWidth&quot;:30,&quot;borderRadius&quot;:6,&quot;states&quot;:{&quot;hover&quot;:{&quot;color&quot;:&quot;#9e6cfd&quot;}}}}}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--@endsection--}}

    @extends('admin.js')
    @section('js')
        <script>
        </script>
    @endsection
</div>
</body>
</html>

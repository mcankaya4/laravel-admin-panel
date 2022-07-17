@extends('backend.layouts.master')

@section('page_header')
    <div class="row page-header">
        <div class="col-lg-6 align-self-center ">
            <h2>Widgets Data</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Widgets</a></li>
                <li class="breadcrumb-item active">Widgets Data</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Product</h2>
                        <p class="text-muted">Total Product</p>
                        <span class="float-right text-primary widget-r-m">7859</span>
                    </div>
                    <div class="progress margin-b-10  progress-mini">
                        <div style="width:70%;" class="progress-bar bg-primary"></div>
                    </div>
                    <p class="text-muted float-left margin-b-0">Change</p>
                    <p class="text-muted float-right margin-b-0">70%</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Sales</h2>
                        <p class="text-muted">Total Sales</p>
                        <span class="float-right text-indigo widget-r-m">1349</span>
                    </div>
                    <div class="progress margin-b-10 progress-mini">
                        <div style="width:40%;" class="progress-bar bg-indigo"></div>
                    </div>
                    <p class="text-muted float-left margin-b-0">Change</p>
                    <p class="text-muted float-right margin-b-0">40%</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Orders</h2>
                        <p class="text-muted">Total Orders</p>
                        <span class="float-right text-success widget-r-m">285</span>
                    </div>
                    <div class="progress margin-b-10 progress-mini">
                        <div style="width:65%;" class="progress-bar bg-success"></div>
                    </div>
                    <p class="text-muted float-left margin-b-0">Change</p>
                    <p class="text-muted float-right margin-b-0">65%</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="widget  bg-light">
                <div class="row row-table ">
                    <div class="margin-b-30">
                        <h2 class="margin-b-5">Visitors</h2>
                        <p class="text-muted">Total Visitors</p>
                        <span class="float-right text-warning widget-r-m">285</span>
                    </div>
                    <div class="progress margin-b-10 progress-mini">
                        <div style="width:20%;" class="progress-bar bg-warning"></div>
                    </div>
                    <p class="text-muted float-left margin-b-0">Change</p>
                    <p class="text-muted float-right margin-b-0">20%</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card widget padding-0">
                <div class="bg-warning br-t-3">
                    <h3 class="mb-15 font-400 padding-15 ">Monthly Incomes</h3>
                    <div id="sparkline1" class=""></div>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            <p class="margin-b-0 text-muted">Gross Income</p>
                            <h4 class="mv-0">$7820</h4>
                        </div>
                        <div class="col">
                            <p class="margin-b-0 text-muted">Net Income</p>
                            <h4 class="mv-0">$154700</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card widget padding-0">
                <div class="bg-primary br-t-3">
                    <h3 class="mb-15 font-400  padding-15">Yearly Incomes</h3>
                    <div id="sparkline2" class=""></div>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            <p class="margin-b-0 text-muted">Gross Income</p>
                            <h4 class="mv-0">$77820</h4>
                        </div>
                        <div class="col">
                            <p class="margin-b-0 text-muted">Net Income</p>
                            <h4 class="mv-0">$454700</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card widget padding-0">
                <div class="bg-danger padding-15 br-t-3">
                    <h3 class="mb-15 font-400">Monthly Visitors</h3>
                    <div id="sparkline3"></div>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            <p class="margin-b-0 text-muted">Unique Visitors</p>
                            <h4 class="mv-0">98758</h4>
                        </div>
                        <div class="col">
                            <p class="margin-b-0 text-muted">Net Visitors</p>
                            <h4 class="mv-0">423701</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="widget widget-chart white-bg padding-0">
                <div class="widget-title">
                    <span class="label label-primary float-right">Monthly</span>
                    <h2 class="margin-b-0">Income</h2>
                </div>
                <div class="widget-content">
                    <div id="sparkline4" class="text-center margin-b-10 "></div>
                    <div class="font-500 text-primary float-right">98% <i class="fa fa-bolt"></i></div>
                    <p class="text-muted margin-b-0">Total income</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget widget-chart white-bg padding-0">
                <div class="widget-title">
                    <span class="label label-success float-right">Monthly</span>
                    <h2 class="margin-b-0">Orders</h2>
                </div>
                <div class="widget-content">
                    <div id="sparkline5" class="text-center margin-b-10 "></div>
                    <div class="font-500 text-success float-right">28% <i class="fa fa-level-up"></i></div>
                    <p class="text-muted margin-b-0">Total orders</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget widget-chart white-bg padding-0">
                <div class="widget-title">
                    <span class="label label-warning float-right">Monthly</span>
                    <h2 class="margin-b-0">Visitors</h2>
                </div>
                <div class="widget-content">
                    <div id="sparkline6" class="text-center margin-b-10 "></div>
                    <div class="font-500 text-warning float-right">18% <i class="fa fa-level-up"></i></div>
                    <p class="text-muted margin-b-0">Total visitor</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget widget-chart white-bg padding-0">
                <div class="widget-title">
                    <span class="label label-danger float-right">Monthly</span>
                    <h2 class="margin-b-0">Active users</h2>
                </div>
                <div class="widget-content">
                    <div id="sparkline7" class="text-center margin-b-10 "></div>
                    <div class="font-500 text-danger float-right">8% <i class="fa fa-level-down"></i></div>
                    <p class="text-muted margin-b-0">Total active users</p>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-3">
            <div class="widget widget-chart white-bg padding-0">
                <div class="widget-title">
                    <span class="label label-primary float-right">Monthly</span>
                    <h2 class="margin-b-0">Income</h2>
                </div>
                <div class="widget-content">
                    <h1 class="margin-b-10  text-primary">79,2458</h1>
                    <div class="font-500 text-primary float-right">98% <i class="fa fa-bolt"></i></div>
                    <p class="text-muted margin-b-0">Total income</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget widget-chart white-bg padding-0">
                <div class="widget-title">
                    <span class="label label-success float-right">Monthly</span>
                    <h2 class="margin-b-0">Orders</h2>
                </div>
                <div class="widget-content">
                    <h1 class="margin-b-10 text-success">6853</h1>
                    <div class="font-500 text-success float-right">28% <i class="fa fa-level-up"></i></div>
                    <p class="text-muted margin-b-0">Total orders</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget widget-chart white-bg padding-0">
                <div class="widget-title">
                    <span class="label label-warning float-right">Monthly</span>
                    <h2 class="margin-b-0">Visitors</h2>
                </div>
                <div class="widget-content">
                    <h1 class="margin-b-10 text-warning">21,7853</h1>
                    <div class="font-500 text-warning float-right">18% <i class="fa fa-level-up"></i></div>
                    <p class="text-muted margin-b-0">Total visitor</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget widget-chart white-bg padding-0">
                <div class="widget-title">
                    <span class="label label-danger float-right">Monthly</span>
                    <h2 class="margin-b-0">Active users</h2>
                </div>
                <div class="widget-content">
                    <h1 class="margin-b-10 text-danger">3758</h1>
                    <div class="font-500 text-danger float-right">8% <i class="fa fa-level-down"></i></div>
                    <p class="text-muted margin-b-0">Total active users</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="widget bg-light padding-0">
                <div class="row row-table">
                    <div class="col-xs-4 text-center padding-15 bg-primary">
                        <em class="icon-bag fa-3x"></em>
                    </div>
                    <div class="col-xs-8 padding-15 text-right">
                        <h2 class="mv-0">4758</h2>
                        <div class="margin-b-0 text-muted">Sales</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="widget bg-light padding-0">
                <div class="row row-table">
                    <div class="col-xs-4 text-center padding-15 bg-teal">
                        <em class="icon-basket fa-3x"></em>
                    </div>
                    <div class="col-xs-8 padding-15 text-right">
                        <h2 class="mv-0">785</h2>
                        <div class="margin-b-0 text-muted">Orders</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="widget bg-light padding-0">
                <div class="row row-table">
                    <div class="col-xs-4 text-center padding-15 bg-success">
                        <em class="icon-people fa-3x"></em>
                    </div>
                    <div class="col-xs-8 padding-15 text-right">
                        <h2 class="mv-0">1235</h2>
                        <div class="margin-b-0 text-muted">Users</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="widget bg-light padding-0">
                <div class="row row-table">
                    <div class="col-xs-4 text-center padding-15 bg-indigo">
                        <em class="icon-pie-chart fa-3x"></em>
                    </div>
                    <div class="col-xs-8 padding-15 text-right">
                        <h2 class="mv-0">2558 $</h2>
                        <div class="margin-b-0 text-muted">Profit</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

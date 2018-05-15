@extends('layouts.dashboard')
@section('title','Dashboard')
@section('body')
<!-- <div class="container"> -->
                <!-- BEGIN DASHBOARD TILES -->
                <div class="row ">
                    <div class="col-md-4  col-sm-6 ">
                        <div class="tiles green m-b-10 ">
                            <div class="tiles-body ">
                                <div class="controller ">
                                    <a href="javascript:; " class="reload "></a>
                                    <a href="javascript:; " class="remove "></a>
                                </div>
                                <div class="tiles-title text-black ">OVERALL SALES </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Overall Visits</span>
                                        <span class="item-count animate-number semi-bold " data-value="2415 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Today's</span>
                                        <span class="item-count animate-number semi-bold " data-value="751 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper last ">
                                        <span class="item-title ">Monthly</span>
                                        <span class="item-count animate-number semi-bold " data-value="1547 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="progress transparent progress-small no-radius m-t-20 " style="width:90% ">
                                    <div class="progress-bar progress-bar-white animate-progress-bar " data-percentage="64.8% "></div>
                                </div>
                                <div class="description ">
                                    <span class="text-white mini-description ">
                                        4% higher
                                        <span class="blend ">than last month</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-vlg-3 col-sm-6 ">
                        <div class="tiles blue m-b-10 ">
                            <div class="tiles-body ">
                                <div class="controller ">
                                    <a href="javascript:; " class="reload "></a>
                                    <a href="javascript:; " class="remove "></a>
                                </div>
                                <div class="tiles-title text-black ">OVERALL VISITS </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Overall Visits</span>
                                        <span class="item-count animate-number semi-bold " data-value="15489 " data- animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Today's</span>
                                        <span class="item-count animate-number semi-bold " data-value="551 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper last ">
                                        <span class="item-title ">Monthly</span>
                                        <span class="item-count animate-number semi-bold " data-value="1450 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="progress transparent progress-small no-radius m-t-20 " style="width:90% ">
                                    <div class="progress-bar progress-bar-white animate-progress-bar " data-percentage="54% "></div>
                                </div>
                                <div class="description ">
                                    <span class="text-white mini-description ">
                                        4% higher
                                        <span class="blend ">than last month</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-vlg-3 col-sm-6 ">
                        <div class="tiles purple m-b-10 ">
                            <div class="tiles-body ">
                                <div class="controller ">
                                    <a href="javascript:; " class="reload "></a>
                                    <a href="javascript:; " class="remove "></a>
                                </div>
                                <div class="tiles-title text-black ">SERVER LOAD </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Overall Load</span>
                                        <span class="item-count animate-number semi-bold " data-value="5695 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Today's</span>
                                        <span class="item-count animate-number semi-bold " data-value="568 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper last ">
                                        <span class="item-title ">Monthly</span>
                                        <span class="item-count animate-number semi-bold " data-value="12459 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="progress transparent progress-small no-radius m-t-20 " style="width:90% ">
                                    <div class="progress-bar progress-bar-white animate-progress-bar " data-percentage="90% "></div>
                                </div>
                                <div class="description ">
                                    <span class="text-white mini-description ">
                                        4% higher
                                        <span class="blend ">than last month</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-vlg-3 visible-xlg visible-sm col-sm-6 ">
                        <div class="tiles red m-b-10 ">
                            <div class="tiles-body ">
                                <div class="controller ">
                                    <a href="javascript:; " class="reload "></a>
                                    <a href="javascript:; " class="remove "></a>
                                </div>
                                <div class="tiles-title text-black ">OVERALL SALES </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Overall Sales</span>
                                        <span class="item-count animate-number semi-bold " data-value="5669 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Today's</span>
                                        <span class="item-count animate-number semi-bold " data-value="751 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper last ">
                                        <span class="item-title ">Monthly</span>
                                        <span class="item-count animate-number semi-bold " data-value="1547 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="progress transparent progress-small no-radius m-t-20 " style="width:90% ">
                                    <div class="progress-bar progress-bar-white animate-progress-bar " data-percentage="64.8% "></div>
                                </div>
                                <div class="description ">
                                    <span class="text-white mini-description ">
                                        4% higher
                                        <span class="blend ">than last month</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END DASHBOARD TILES -->

















    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}
<!-- </div> -->
@endsection

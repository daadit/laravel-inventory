@extends('layouts.app')

@section('menu')

<ul class="pcoded-item pcoded-left-item">
    <li class="active">
        <a href="navbar-light.htm">
            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
            <span class="pcoded-mtext">Dashboard</span>
        </a>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
            <span class="pcoded-mtext">Masters</span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-mtext">Vertical</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="menu-static.htm">
                            <span class="pcoded-mtext">Static Layout</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-header-fixed.htm">
                            <span class="pcoded-mtext">Header Fixed</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-compact.htm">
                            <span class="pcoded-mtext">Compact</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-sidebar.htm">
                            <span class="pcoded-mtext">Sidebar Fixed</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class=" pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-mtext">Horizontal</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="menu-horizontal-static.htm" target="_blank">
                            <span class="pcoded-mtext">Static Layout</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-horizontal-fixed.htm" target="_blank">
                            <span class="pcoded-mtext">Fixed layout</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-horizontal-icon.htm" target="_blank">
                            <span class="pcoded-mtext">Static With Icon</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-horizontal-icon-fixed.htm" target="_blank">
                            <span class="pcoded-mtext">Fixed With Icon</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" ">
                <a href="menu-bottom.htm">
                    <span class="pcoded-mtext">Bottom Menu</span>
                </a>
            </li>
            <li class=" ">
                <a href="box-layout.htm" target="_blank">
                    <span class="pcoded-mtext">Box Layout</span>
                </a>
            </li>
            <li class=" ">
                <a href="menu-rtl.htm" target="_blank">
                    <span class="pcoded-mtext">RTL</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
            <span class="pcoded-mtext">Transactions</span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-mtext">Vertical</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="menu-static.htm">
                            <span class="pcoded-mtext">Static Layout</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-header-fixed.htm">
                            <span class="pcoded-mtext">Header Fixed</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-compact.htm">
                            <span class="pcoded-mtext">Compact</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-sidebar.htm">
                            <span class="pcoded-mtext">Sidebar Fixed</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class=" pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-mtext">Horizontal</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="menu-horizontal-static.htm" target="_blank">
                            <span class="pcoded-mtext">Static Layout</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-horizontal-fixed.htm" target="_blank">
                            <span class="pcoded-mtext">Fixed layout</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-horizontal-icon.htm" target="_blank">
                            <span class="pcoded-mtext">Static With Icon</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-horizontal-icon-fixed.htm" target="_blank">
                            <span class="pcoded-mtext">Fixed With Icon</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" ">
                <a href="menu-bottom.htm">
                    <span class="pcoded-mtext">Bottom Menu</span>
                </a>
            </li>
            <li class=" ">
                <a href="box-layout.htm" target="_blank">
                    <span class="pcoded-mtext">Box Layout</span>
                </a>
            </li>
            <li class=" ">
                <a href="menu-rtl.htm" target="_blank">
                    <span class="pcoded-mtext">RTL</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-file-minus"></i></span>
            <span class="pcoded-mtext">Reports</span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-mtext">Vertical</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="menu-static.htm">
                            <span class="pcoded-mtext">Static Layout</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-header-fixed.htm">
                            <span class="pcoded-mtext">Header Fixed</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-compact.htm">
                            <span class="pcoded-mtext">Compact</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-sidebar.htm">
                            <span class="pcoded-mtext">Sidebar Fixed</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class=" pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-mtext">Horizontal</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="menu-horizontal-static.htm" target="_blank">
                            <span class="pcoded-mtext">Static Layout</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-horizontal-fixed.htm" target="_blank">
                            <span class="pcoded-mtext">Fixed layout</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-horizontal-icon.htm" target="_blank">
                            <span class="pcoded-mtext">Static With Icon</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="menu-horizontal-icon-fixed.htm" target="_blank">
                            <span class="pcoded-mtext">Fixed With Icon</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" ">
                <a href="menu-bottom.htm">
                    <span class="pcoded-mtext">Bottom Menu</span>
                </a>
            </li>
            <li class=" ">
                <a href="box-layout.htm" target="_blank">
                    <span class="pcoded-mtext">Box Layout</span>
                </a>
            </li>
            <li class=" ">
                <a href="menu-rtl.htm" target="_blank">
                    <span class="pcoded-mtext">RTL</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="navbar-light.htm">
            <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
            <span class="pcoded-mtext">Navigation</span>
        </a>
    </li>
</ul>

@endsection

@section('content')

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <!-- task, page, download counter  start -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-yellow update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">$30200</h4>
                                            <h6 class="text-white m-b-0">All Earnings</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <canvas id="update-chart-1" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-green update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">290+</h4>
                                            <h6 class="text-white m-b-0">Page Views</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <canvas id="update-chart-2" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-pink update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">145</h4>
                                            <h6 class="text-white m-b-0">Task Completed</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <canvas id="update-chart-3" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-lite-green update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">500</h4>
                                            <h6 class="text-white m-b-0">Downloads</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <canvas id="update-chart-4" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

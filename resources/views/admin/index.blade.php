<!DOCTYPE html>
<html class="rd-navbar-sidebar-active page-small-footer" lang="en">
<head>
    <title>@isset($breadcrumb){{ last($breadcrumb)['title'] }}@endisset - {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Template Monster Admin Template">
    <meta property="og:description" content="brevis, barbatus clabulares aliquando convertam de dexter, peritus capio. devatio clemens habitio est.">
    <meta property="og:image" content="http://digipunk.netii.net/images/radar.gif">
    <meta property="og:url" content="http://digipunk.netii.net">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/components/base/base.css">
    <link rel="stylesheet" href="/admin/css/base.css">
    <script src="/components/base/script.js"></script>
</head>
<body>
<div class="page">
    <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar">
                <div class="navbar-panel">
                    <div class="navbar-panel-inner">
                        <div class="navbar-panel-cell flex-grow-1">
                            <div class="navbar-search" id="navbar-search">
                                <input class="navbar-search-input" type="text" placeholder="Search"/>
                            </div>
                        </div>
                        <div class="navbar-panel-cell navbar-toggle-search-cell">
                            <button class="navbar-toggle navbar-toggle-search mdi-magnify" title="Search" data-multi-switch='{"targets":".navbar-panel","scope":"#navbar-search","isolate":"[data-multi-switch]"}'></button>
                        </div>
                        <div class="navbar-panel-cell">
                            <button class="navbar-toggle linearicons-menu" title="Sidebar" data-sidebar-switch="data-sidebar-switch" data-multi-switch='{"targets":".sidebar","scope":".sidebar, [data-sidebar-switch]","isolate":"[data-multi-switch]:not([data-sidebar-switch])"}'></button>
                        </div>
                        <div class="navbar-panel-cell">
                            <button class="navbar-toggle linearicons-envelope" title="Chat" data-multi-switch='{"targets":"#subpanel-chat","scope":"#subpanel-chat","isolate":"[data-multi-switch]"}'></button>
                            <div class="navbar-subpanel" id="subpanel-chat">
                                <div class="navbar-subpanel-inner">
                                    <div class="navbar-subpanel-header">
                                        <h4>Chat</h4>
                                    </div>
                                    <div class="navbar-subpanel-body scroller scroller-vertical" style="max-height: 400px;">
                                        <div class="media media-cloud group-15">
                                            <div class="media-item"><img class="rounded" src="images/users/user-02-50x50.jpg" width="50" height="50" alt=""/></div>
                                            <div class="media-body">
                                                <h5 class="media-heading offline">Sara Marshall <small>- 12:30am</small>
                                                </h5>
                                                <div class="media-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>
                                            </div>
                                        </div>
                                        <div class="media media-cloud flex-row-reverse group-15">
                                            <div class="media-item"><img class="rounded" src="images/users/user-03-50x50.jpg" width="50" height="50" alt=""/></div>
                                            <div class="media-body media-body-right-caret">
                                                <h5 class="media-heading online">Tom Jorgensen <small>- 12:30am</small>
                                                </h5>
                                                <div class="media-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>
                                            </div>
                                        </div>
                                        <div class="media media-cloud group-15">
                                            <div class="media-item"><img class="rounded" src="images/users/user-02-50x50.jpg" width="50" height="50" alt=""/></div>
                                            <div class="media-body">
                                                <h5 class="media-heading offline">Sara Marshall <small>- 12:30am</small>
                                                </h5>
                                                <div class="media-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>
                                            </div>
                                        </div>
                                        <div class="media media-cloud flex-row-reverse group-15">
                                            <div class="media-item"><img class="rounded" src="images/users/user-03-50x50.jpg" width="50" height="50" alt=""/></div>
                                            <div class="media-body media-body-right-caret">
                                                <h5 class="media-heading online">Tom Jorgensen <small>- 12:30am</small>
                                                </h5>
                                                <div class="media-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navbar-subpanel-footer">
                                        <div class="input-group form-group">
                                            <input class="form-control" type="text" placeholder="Enter your message here"/>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-panel-cell">
                            <button class="navbar-toggle linearicons-alarm" title="Notifications" data-multi-switch='{"targets":"#subpanel-notifications","scope":"#subpanel-notifications","isolate":"[data-multi-switch]"}'></button>
                            <div class="navbar-badge badge badge-danger badge-pill">1</div>
                            <div class="navbar-subpanel" id="subpanel-notifications">
                                <div class="navbar-subpanel-inner">
                                    <div class="navbar-subpanel-header">
                                        <h4>Notifications</h4>
                                    </div>
                                    <div class="navbar-subpanel-body scroller scroller-vertical">
                                        <div class="group-5">
                                            <div class="alert alert-dismissible alert-primary alert-darker alert-sm" role="alert"><span class="alert-icon fa-telegram"></span><span>Message</span>
                                                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
                                            </div>
                                            <div class="alert alert-dismissible alert-secondary alert-sm" role="alert"><span class="alert-icon fa-warning"></span><span>Warning</span>
                                                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
                                            </div>
                                            <div class="alert alert-dismissible alert-danger alert-sm" role="alert"><span class="alert-icon fa-remove"></span><span>Error</span>
                                                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
                                            </div>
                                            <div class="alert alert-dismissible alert-success alert-sm" role="alert"><span class="alert-icon fa-thumbs-up"></span><span>Success</span>
                                                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navbar-subpanel-footer"><a class="btn btn-primary btn-sm" href="alerts.html">See more</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-panel-cell">
                            <div class="navbar-toggle navbar-user" title="User Menu" data-multi-switch='{"targets":"#subpanel-user-menu","scope":"#subpanel-user-menu","isolate":"[data-multi-switch]"}'><img class="rounded" src="images/users/user-09-60x60.jpg" alt=""/></div>
                            <div class="navbar-subpanel" id="subpanel-user-menu">
                                <div class="navbar-subpanel-inner">
                                    <div class="navbar-subpanel-header">
                                        <div class="h3">Alice</div>
                                    </div>
                                    <div class="navbar-subpanel-body p-0 scroller scroller-vertical">
                                        <div class="list-group list-group-flush"><a class="list-group-item rounded-0" href="#">
                                                <div class="media align-items-center">
                                                    <div class="pr-2"><span class="fa-user"></span></div>
                                                    <div class="media-body">
                                                        <h5>My Profile</h5>
                                                    </div>
                                                </div></a><a class="list-group-item rounded-0" href="#">
                                                <div class="media align-items-center">
                                                    <div class="pr-2"><span class="fa-envelope-o"></span></div>
                                                    <div class="media-body">
                                                        <h5>My Messages</h5>
                                                    </div>
                                                    <div class="badge badge-warning">12</div>
                                                </div></a><a class="list-group-item rounded-0" href="#">
                                                <div class="media align-items-center">
                                                    <div class="pr-2"><span class="fa-rocket"></span></div>
                                                    <div class="media-body">
                                                        <h5>My Activities</h5>
                                                    </div>
                                                </div></a><a class="list-group-item rounded-0" href="#">
                                                <div class="media align-items-center">
                                                    <div class="pr-2"><span class="fa-desktop"></span></div>
                                                    <div class="media-body">
                                                        <h5>My Tasks</h5>
                                                    </div>
                                                    <div class="badge badge-success">05</div>
                                                </div></a><a class="list-group-item rounded-0" href="#">
                                                <div class="media align-items-center">
                                                    <div class="pr-2"><span class="fa-line-chart"></span></div>
                                                    <div class="media-body">
                                                        <h5>Billing</h5>
                                                    </div>
                                                </div></a></div>
                                    </div>
                                    <div class="navbar-subpanel-footer p-2">
                                        <div class="d-flex align-items-center justify-content-between"><a class="btn btn-sm btn-danger" href="#">Sign Out</a><a class="btn btn-sm btn-success" href="#">Upgrade Plan</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-sidebar-wrap">
                    <div class="navbar-sidebar-panel">
                        <button class="navbar-toggle-sidebar linearicons-menu" data-navigation-switch="data-navigation-switch"></button>
                        <div class="navbar-logo"><a class="navbar-logo-link" href="index.html"><img class="navbar-logo-default" src="/images/logo-272x84.png" width="136" alt="PART"/></a></div>
                    </div>
                    <div class="navbar-sidebar scroller scroller-vertical">
                        <div class="tabs tabs-horizontal-left">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-1" role="tab" aria-selected="true" title="Menu"><span class="linearicons-icons"></span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-2" role="tab" aria-selected="false" title="Tools"><span class="linearicons-cog"></span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-3" role="tab" aria-selected="false" title="System"><span class="linearicons-cart"></span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-4" role="tab" aria-selected="false" title="Elements"><span class="linearicons-copy"></span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="menu-1" role="tabpanel">
                                    <ul class="navbar-navigation rd-navbar-nav">
                                        <li class="navbar-navigation-item active"><a class="navbar-navigation-link" href="index.html" title="Dashboard"><span class="navbar-navigation-text">Dashboard</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="calendar.html" title="Calendar"><span class="navbar-navigation-text">Calendar</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html" title="Documentation"><span class="navbar-navigation-text">Documentation</span></a>
                                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#bootstrap-components" title="Bootstrap Components"><span class="navbar-navigation-text">Bootstrap Components</span></a>
                                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#button" title="Button"><span class="navbar-navigation-text">Button</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#badge" title="Badge"><span class="navbar-navigation-text">Badge</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#code" title="Code"><span class="navbar-navigation-text">Code</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#media" title="Media Object"><span class="navbar-navigation-text">Media Object</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#card" title="Card"><span class="navbar-navigation-text">Card</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#table" title="Table"><span class="navbar-navigation-text">Table</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#progress" title="Progress"><span class="navbar-navigation-text">Progress</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#close" title="Close"><span class="navbar-navigation-text">Close</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#pagination" title="Pagination"><span class="navbar-navigation-text">Pagination</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#alert" title="Alert"><span class="navbar-navigation-text">Alert</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#dropdown" title="Dropdown"><span class="navbar-navigation-text">Dropdown</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#nav" title="Nav"><span class="navbar-navigation-text">Nav</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#tooltip" title="Tooltip"><span class="navbar-navigation-text">Tooltip</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#modal" title="Modal"><span class="navbar-navigation-text">Modal</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#jumbotron" title="Jumbotron"><span class="navbar-navigation-text">Jumbotron</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#input" title="Input"><span class="navbar-navigation-text">Input</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#plugins" title="Plugins"><span class="navbar-navigation-text">Plugins</span></a>
                                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#Nprogress" title="Nprogress"><span class="navbar-navigation-text">Nprogress</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#highlight" title="Highlight.js"><span class="navbar-navigation-text">Highlight.js</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#dual-listbox" title="Dual Listbox"><span class="navbar-navigation-text">Dual Listbox</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#maxlength" title="Bootstrap Maxlength"><span class="navbar-navigation-text">Bootstrap Maxlength</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#typeahead" title="Typeahead.js"><span class="navbar-navigation-text">Typeahead.js</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#select2" title="Select2"><span class="navbar-navigation-text">Select2</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#spinner" title="jQuery UI Spinner"><span class="navbar-navigation-text">jQuery UI Spinner</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#time-spinner" title="Time Spinner"><span class="navbar-navigation-text">Time Spinner</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#daterangepiker" title="Date Range Picker"><span class="navbar-navigation-text">Date Range Picker</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#datetimepicker" title="Bootstrap Date/Timepicker"><span class="navbar-navigation-text">Bootstrap Date/Timepicker</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#tag-manager" title="Tags Manager"><span class="navbar-navigation-text">Tags Manager</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#colorpicker" title="Bootstrap Colorpicker"><span class="navbar-navigation-text">Bootstrap Colorpicker</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#maskedinput" title="jQuery Masked Input"><span class="navbar-navigation-text">jQuery Masked Input</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#ckeditor" title="CKeditor"><span class="navbar-navigation-text">CKeditor</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#summernote" title="Summernote"><span class="navbar-navigation-text">Summernote</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#markdown" title="Markdown.js"><span class="navbar-navigation-text">Markdown.js</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#nestable" title="Nestable jQuery Plugin"><span class="navbar-navigation-text">Nestable jQuery Plugin</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#jstree" title="jsTree"><span class="navbar-navigation-text">jsTree</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#cropper" title="Cropper.js"><span class="navbar-navigation-text">Cropper.js</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#fileupload" title="Tower File Input"><span class="navbar-navigation-text">Tower File Input</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#easyzoom" title="EasyZoom"><span class="navbar-navigation-text">EasyZoom</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#xzoom" title="xZoom"><span class="navbar-navigation-text">xZoom</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#slick" title="Slick Slider"><span class="navbar-navigation-text">Slick Slider</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#dropzone" title="DropzoneJS"><span class="navbar-navigation-text">DropzoneJS</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#pnotify" title="PNotify"><span class="navbar-navigation-text">PNotify</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#driver" title="Driver.js"><span class="navbar-navigation-text">Driver.js</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#countdown" title="αCountdown"><span class="navbar-navigation-text">αCountdown</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#progress-circle" title="αCounter &amp; αProgressCircle"><span class="navbar-navigation-text">αCounter &amp; αProgressCircle</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#particles" title="Particles.js"><span class="navbar-navigation-text">Particles.js</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#lightgallery" title="Lightgallery"><span class="navbar-navigation-text">Lightgallery</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#jvectormap" title="jVectorMap"><span class="navbar-navigation-text">jVectorMap</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#flotchart" title="Flot"><span class="navbar-navigation-text">Flot</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#rd-navbar" title="RD Navbar"><span class="navbar-navigation-text">RD Navbar</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#highcharts" title="Highcharts"><span class="navbar-navigation-text">Highcharts</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="documentation.html#multiswitch" title="MultiSwitch"><span class="navbar-navigation-text">MultiSwitch</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="menu-2" role="tabpanel">
                                    <ul class="navbar-navigation rd-navbar-nav">
                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="Admin plugins"><span class="navbar-navigation-text">Admin plugins</span></a>
                                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="admin-panels.html" title="Admin panels"><span class="navbar-navigation-text">Admin panels</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="admin-modals.html" title="Admin modals"><span class="navbar-navigation-text">Admin modals</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="admin-dock.html" title="Admin Dock"><span class="navbar-navigation-text">Admin Dock</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="Admin layouts"><span class="navbar-navigation-text">Admin layouts</span></a>
                                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="navbar.html" title="Navbar"><span class="navbar-navigation-text">Navbar</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="Topbar"><span class="navbar-navigation-text">Topbar</span></a>
                                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="topbar-menu.html" title="Topbar Menu"><span class="navbar-navigation-text">Topbar Menu</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="Content Body"><span class="navbar-navigation-text">Content Body</span></a>
                                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="blank-starter.html" title="Blank Starter"><span class="navbar-navigation-text">Blank Starter</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="jumbotron.html" title="Jumbotron"><span class="navbar-navigation-text">Jumbotron</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="content-tabs.html" title="Content Tabs"><span class="navbar-navigation-text">Content Tabs</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="menu-3" role="tabpanel">
                                    <ul class="navbar-navigation rd-navbar-nav">
                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="Info Panels"><span class="navbar-navigation-text">Info Panels</span></a>
                                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="tile-widgets.html" title="Tile Widgets"><span class="navbar-navigation-text">Tile Widgets</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="panel-widgets.html" title="Panel Widgets"><span class="navbar-navigation-text">Panel Widgets</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="admin-widgets.html" title="Admin Widgets"><span class="navbar-navigation-text">Admin Widgets</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="E-commerce"><span class="navbar-navigation-text">E-commerce</span></a>
                                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="ecommerce-dashboard.html" title="Ecommerce Dashboard"><span class="navbar-navigation-text">Ecommerce Dashboard</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="products.html" title="Products"><span class="navbar-navigation-text">Products</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="orders.html" title="Orders"><span class="navbar-navigation-text">Orders</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="customers.html" title="Customers"><span class="navbar-navigation-text">Customers</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="store-settings.html" title="Store Settings"><span class="navbar-navigation-text">Store Settings</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="menu-4" role="tabpanel">
                                    <ul class="navbar-navigation rd-navbar-nav">
                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="UI Elements"><span class="navbar-navigation-text">UI Elements</span></a>
                                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="alerts.html" title="Alerts"><span class="navbar-navigation-text">Alerts</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="animations.html" title="Animations"><span class="navbar-navigation-text">Animations</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="buttons.html" title="Buttons"><span class="navbar-navigation-text">Buttons</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="typography.html" title="Typography"><span class="navbar-navigation-text">Typography</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="panel.html" title="Panel"><span class="navbar-navigation-text">Panel</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="progress-bars.html" title="Progress Bars"><span class="navbar-navigation-text">Progress Bars</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="tabs.html" title="Tabs"><span class="navbar-navigation-text">Tabs</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="icons.html" title="Icons"><span class="navbar-navigation-text">Icons</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="grid.html" title="Grid"><span class="navbar-navigation-text">Grid</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="Form Elements"><span class="navbar-navigation-text">Form Elements</span></a>
                                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="basic-inputs.html" title="Basic Inputs"><span class="navbar-navigation-text">Basic Inputs</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="plugin-inputs.html" title="Plugin Inputs"><span class="navbar-navigation-text">Plugin Inputs</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="editors.html" title="Editors"><span class="navbar-navigation-text">Editors</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="treeview.html" title="Treeview"><span class="navbar-navigation-text">Treeview</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="nestable.html" title="Nestable"><span class="navbar-navigation-text">Nestable</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="image-tools.html" title="Image tools"><span class="navbar-navigation-text">Image tools</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="uploaders.html" title="Uploaders"><span class="navbar-navigation-text">Uploaders</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="notifications.html" title="Notifications"><span class="navbar-navigation-text">Notifications</span></a>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="content-sliders.html" title="Content Sliders"><span class="navbar-navigation-text">Content Sliders</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="Plugins"><span class="navbar-navigation-text">Plugins</span></a>
                                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="Maps"><span class="navbar-navigation-text">Maps</span></a>
                                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="google-maps.html" title="Google Maps"><span class="navbar-navigation-text">Google Maps</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="jvector-map.html" title="jVector Map"><span class="navbar-navigation-text">jVector Map</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="Charts"><span class="navbar-navigation-text">Charts</span></a>
                                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="highcharts.html" title="Highcharts"><span class="navbar-navigation-text">Highcharts</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="flotcharts.html" title="Flotcharts"><span class="navbar-navigation-text">Flotcharts</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="Tables"><span class="navbar-navigation-text">Tables</span></a>
                                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="basic-tables.html" title="Basic Tables"><span class="navbar-navigation-text">Basic Tables</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="data-tables.html" title="Data Tables"><span class="navbar-navigation-text">Data Tables</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="pricing-tables.html" title="Pricing Tables"><span class="navbar-navigation-text">Pricing Tables</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="Misc"><span class="navbar-navigation-text">Misc</span></a>
                                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="site-tour.html" title="Site Tour"><span class="navbar-navigation-text">Site Tour</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="session-timeout.html" title="Session Timeout"><span class="navbar-navigation-text">Session Timeout</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="page-progress-loader.html" title="Page Progress Loader"><span class="navbar-navigation-text">Page Progress Loader</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="Pages"><span class="navbar-navigation-text">Pages</span></a>
                                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="Utility"><span class="navbar-navigation-text">Utility</span></a>
                                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="confirmation.html" title="Confirmation"><span class="navbar-navigation-text">Confirmation</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="login.html" title="Login"><span class="navbar-navigation-text">Login</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="register.html" title="Register"><span class="navbar-navigation-text">Register</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="screenlock.html" title="Screenlock"><span class="navbar-navigation-text">Screenlock</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="password-reset.html" title="Password Reset"><span class="navbar-navigation-text">Password Reset</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="coming-soon.html" title="Coming Soon"><span class="navbar-navigation-text">Coming Soon</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="404.html" title="404"><span class="navbar-navigation-text">404</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="500.html" title="500"><span class="navbar-navigation-text">500</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#" title="Basic"><span class="navbar-navigation-text">Basic</span></a>
                                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="search-results.html" title="Search Results"><span class="navbar-navigation-text">Search Results</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="profile.html" title="Profile"><span class="navbar-navigation-text">Profile</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="timeline.html" title="Timeline"><span class="navbar-navigation-text">Timeline</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="faq.html" title="FAQ"><span class="navbar-navigation-text">FAQ</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="calendar.html" title="Calendar"><span class="navbar-navigation-text">Calendar</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="messages.html" title="Messages"><span class="navbar-navigation-text">Messages</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="messages-compose.html" title="Messages Compose"><span class="navbar-navigation-text">Messages Compose</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="gallery.html" title="Gallery"><span class="navbar-navigation-text">Gallery</span></a>
                                                        </li>
                                                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="printable-invoice.html" title="Printable Invoice"><span class="navbar-navigation-text">Printable Invoice</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section class="section-sm">
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
                                <div class="highcharts-container" data-highcharts-options="{&quot;colors&quot;:[&quot;#fff&quot;],&quot;credits&quot;:false,&quot;chart&quot;:{&quot;type&quot;:&quot;spline&quot;,&quot;spacing&quot;:0,&quot;margin&quot;:-10},&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;xAxis&quot;:{&quot;gridLineWidth&quot;:1,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;allowDecimals&quot;:false,&quot;tickInterval&quot;:1,&quot;tickColor&quot;:&quot;#EEE&quot;},&quot;yAxis&quot;:{&quot;gridLineWidth&quot;:0,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false}},&quot;tooltip&quot;:{&quot;valueSuffix&quot;:&quot; millions&quot;,&quot;borderWidth&quot;:0,&quot;borderRadius&quot;:6,&quot;backgroundColor&quot;:&quot;#fff&quot;},&quot;plotOptions&quot;:{&quot;spline&quot;:{&quot;marker&quot;:{&quot;enabled&quot;:false}}},&quot;series&quot;:[{&quot;name&quot;:&quot;USA&quot;,&quot;data&quot;:[150,220,80,100,150,200]}]}" style="height: 100px"></div>
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
                                <div class="highcharts-container" data-highcharts-options="{&quot;colors&quot;:[&quot;#fff&quot;],&quot;credits&quot;:false,&quot;chart&quot;:{&quot;type&quot;:&quot;spline&quot;,&quot;spacing&quot;:0,&quot;margin&quot;:-10},&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;xAxis&quot;:{&quot;gridLineWidth&quot;:1,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;allowDecimals&quot;:false,&quot;tickInterval&quot;:1,&quot;tickColor&quot;:&quot;#EEE&quot;},&quot;yAxis&quot;:{&quot;gridLineWidth&quot;:0,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false}},&quot;tooltip&quot;:{&quot;valueSuffix&quot;:&quot; millions&quot;,&quot;borderWidth&quot;:0,&quot;borderRadius&quot;:6,&quot;backgroundColor&quot;:&quot;#fff&quot;},&quot;plotOptions&quot;:{&quot;spline&quot;:{&quot;marker&quot;:{&quot;enabled&quot;:false}}},&quot;series&quot;:[{&quot;name&quot;:&quot;USA&quot;,&quot;data&quot;:[150,220,80,100,150,200]}]}" style="height: 100px"></div>
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
                                <div class="highcharts-container" data-highcharts-options="{&quot;colors&quot;:[&quot;#fff&quot;],&quot;credits&quot;:false,&quot;chart&quot;:{&quot;type&quot;:&quot;spline&quot;,&quot;spacing&quot;:0,&quot;margin&quot;:-10},&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;xAxis&quot;:{&quot;gridLineWidth&quot;:1,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;allowDecimals&quot;:false,&quot;tickInterval&quot;:1,&quot;tickColor&quot;:&quot;#EEE&quot;},&quot;yAxis&quot;:{&quot;gridLineWidth&quot;:0,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false}},&quot;tooltip&quot;:{&quot;valueSuffix&quot;:&quot; millions&quot;,&quot;borderWidth&quot;:0,&quot;borderRadius&quot;:6,&quot;backgroundColor&quot;:&quot;#fff&quot;},&quot;plotOptions&quot;:{&quot;spline&quot;:{&quot;marker&quot;:{&quot;enabled&quot;:false}}},&quot;series&quot;:[{&quot;name&quot;:&quot;USA&quot;,&quot;data&quot;:[150,220,80,100,150,200]}]}" style="height: 100px"></div>
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
                                <div class="highcharts-container" data-highcharts-options="{&quot;colors&quot;:[&quot;#fff&quot;],&quot;credits&quot;:false,&quot;chart&quot;:{&quot;type&quot;:&quot;spline&quot;,&quot;spacing&quot;:0,&quot;margin&quot;:-10},&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;xAxis&quot;:{&quot;gridLineWidth&quot;:1,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;allowDecimals&quot;:false,&quot;tickInterval&quot;:1,&quot;tickColor&quot;:&quot;#EEE&quot;},&quot;yAxis&quot;:{&quot;gridLineWidth&quot;:0,&quot;gridLineColor&quot;:&quot;rgba( 255,255,255, 0.4 )&quot;,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false}},&quot;tooltip&quot;:{&quot;valueSuffix&quot;:&quot; millions&quot;,&quot;borderWidth&quot;:0,&quot;borderRadius&quot;:6,&quot;backgroundColor&quot;:&quot;#fff&quot;},&quot;plotOptions&quot;:{&quot;spline&quot;:{&quot;marker&quot;:{&quot;enabled&quot;:false}}},&quot;series&quot;:[{&quot;name&quot;:&quot;USA&quot;,&quot;data&quot;:[150,220,80,100,150,200]}]}" style="height: 100px"></div>
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
                            <div class="highcharts-container highcharts-container-lg" data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#9e6cfd&quot;,&quot;#3ec5ff&quot;],&quot;chart&quot;:{&quot;type&quot;:&quot;areaspline&quot;,&quot;spacingTop&quot;:30,&quot;spacingRight&quot;:0},&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;xAxis&quot;:{&quot;lineColor&quot;:&quot;#2d3035&quot;,&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#A5A7A9&quot;,&quot;fontSize&quot;:&quot;16px&quot;}},&quot;categories&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;,&quot;Sep&quot;,&quot;Oct&quot;,&quot;Nov&quot;,&quot;Dec&quot;]},&quot;yAxis&quot;:{&quot;gridLineColor&quot;:&quot;#2d3035&quot;,&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#A5A7A9&quot;,&quot;fontSize&quot;:&quot;16px&quot;}},&quot;min&quot;:0,&quot;tickInterval&quot;:20,&quot;title&quot;:{&quot;text&quot;:null}},&quot;plotOptions&quot;:{&quot;areaspline&quot;:{&quot;fillOpacity&quot;:0.03,&quot;marker&quot;:{&quot;enabled&quot;:false}}},&quot;series&quot;:[{&quot;name&quot;:&quot;Revenue&quot;,&quot;data&quot;:[50,44,51,44,60,38,40,42,36,44,40,52]},{&quot;name&quot;:&quot;Costs&quot;,&quot;data&quot;:[22,13,25,18,36,18,67,55,18,19,14,20]}]}"></div>
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
                                <div class="media-item"><img class="rounded-circle" src="images/users/user-17-52x52.jpg" width="48" height="48" alt=""></div>
                                <div class="media-body">
                                    <h5>John Doe </h5>
                                    <p>Added a new item to his store: Notebook</p><span class="d-block">1:25am</span>
                                </div>
                            </div>
                            <div class="media group-15">
                                <div class="media-item">
                                    <div class="icon-circle bg-white"><span class="linearicons-user text-primary"></span></div>
                                </div>
                                <div class="media-body">
                                    <h5>Jane Wilson</h5>
                                    <p>Added a new item to her store: iPhone</p><span class="d-block">1:25am</span>
                                </div>
                            </div>
                            <div class="media group-15">
                                <div class="media-item"><img class="rounded-circle" src="images/users/user-09-52x52.jpg" width="48" height="48" alt=""></div>
                                <div class="media-body">
                                    <h5>Alice Smith</h5>
                                    <p>Added a new item to her store: iPad</p><span class="d-block">1:25am</span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-center"><a class="btn-link text-body" href="#">See more <span class="mdi-chevron-right"></span></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="panel">
                        <div class="panel-header">
                            <h4 class="panel-title">Top Referrals</h4>
                        </div>
                        <div class="panel-body">
                            <div class="highcharts-container" data-highcharts-options="{&quot;colors&quot;:[&quot;#9e6cfd&quot;,&quot;#2d3035&quot;],&quot;credits&quot;:false,&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;chart&quot;:{&quot;type&quot;:&quot;bar&quot;},&quot;title&quot;:{&quot;text&quot;:null},&quot;xAxis&quot;:{&quot;showEmpty&quot;:false,&quot;tickLength&quot;:80,&quot;offset&quot;:1,&quot;lineColor&quot;:&quot;transparent&quot;,&quot;categories&quot;:[&quot;Google&quot;,&quot;Facebook&quot;,&quot;Twitter&quot;,&quot;Instagram&quot;,&quot;E-mail&quot;,&quot;Other&quot;],&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;align&quot;:&quot;right&quot;,&quot;style&quot;:{&quot;color&quot;:&quot;#a5a7a9&quot;,&quot;fontSize&quot;:&quot;16px&quot;}}},&quot;yAxis&quot;:{&quot;min&quot;:0,&quot;gridLineWidth&quot;:0,&quot;showEmpty&quot;:false,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;enabled&quot;:false}},&quot;tooltip&quot;:{&quot;valueSuffix&quot;:&quot; %&quot;,&quot;borderWidth&quot;:0,&quot;borderRadius&quot;:6,&quot;backgroundColor&quot;:&quot;#fff&quot;},&quot;plotOptions&quot;:{&quot;bar&quot;:{&quot;colorByPoint&quot;:true,&quot;borderColor&quot;:&quot;transparent&quot;,&quot;borderRadius&quot;:6}},&quot;series&quot;:[{&quot;name&quot;:&quot;Referals&quot;,&quot;data&quot;:[52,20,15,7,6,4],&quot;dataLabels&quot;:{&quot;enabled&quot;:true,&quot;rotation&quot;:0,&quot;color&quot;:&quot;#FFFFFF&quot;,&quot;align&quot;:&quot;right&quot;,&quot;format&quot;:&quot;{point.y: f}%&quot;,&quot;y&quot;:0,&quot;style&quot;:{&quot;fontSize&quot;:&quot;12px&quot;,&quot;fontFamily&quot;:&quot;Muli, sans-serif&quot;,&quot;textOutline&quot;:&quot;0&quot;,&quot;fontWeight&quot;:&quot;normal&quot;}}}]}" style="height:330px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="panel">
                        <div class="panel-header">
                            <h4 class="panel-title">Sales Analytics</h4>
                        </div>
                        <div class="panel-body">
                            <div class="highcharts-container" data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#9e6cfd&quot;,&quot;#414347&quot;],&quot;chart&quot;:{&quot;type&quot;:&quot;pie&quot;,&quot;plotBackgroundColor&quot;:null,&quot;plotBorderWidth&quot;:0,&quot;plotShadow&quot;:false},&quot;title&quot;:{&quot;useHTML&quot;:true,&quot;text&quot;:&quot;&lt;h2 style=\&quot; text-align:center\&quot;&gt;51%&lt;/h1&gt;&lt;p class=\&quot;mt-1\&quot;&gt;Paid orders&lt;/p&gt;&quot;,&quot;align&quot;:&quot;center&quot;,&quot;verticalAlign&quot;:&quot;middle&quot;,&quot;y&quot;:0,&quot;style&quot;:{&quot;color&quot;:&quot;#a5a7a9&quot;,&quot;fontSize&quot;:&quot;16px&quot;}},&quot;tooltip&quot;:{&quot;pointFormat&quot;:&quot;&lt;b&gt;{point.y} items&lt;/b&gt;&quot;},&quot;plotOptions&quot;:{&quot;pie&quot;:{&quot;dataLabels&quot;:{&quot;enabled&quot;:false},&quot;borderColor&quot;:&quot;transparent&quot;,&quot;startAngle&quot;:-135,&quot;endAngle&quot;:135,&quot;center&quot;:[&quot;50%&quot;,&quot;65%&quot;],&quot;size&quot;:&quot;135%&quot;}},&quot;series&quot;:[{&quot;name&quot;:&quot;Browser share&quot;,&quot;innerSize&quot;:&quot;94%&quot;,&quot;data&quot;:[[&quot;Paid orders&quot;,1654],[&quot;Registrations&quot;,3400]]}],&quot;responsive&quot;:{&quot;rules&quot;:[{&quot;condition&quot;:{&quot;minWidth&quot;:396},&quot;chartOptions&quot;:{&quot;plotOptions&quot;:{&quot;pie&quot;:{&quot;center&quot;:[&quot;50%&quot;,&quot;65%&quot;],&quot;size&quot;:&quot;135%&quot;}}}}]}}" style="height:220px;"> </div>
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
                            <div class="highcharts-container highcharts-container-lg" data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#9e6cfd&quot;,&quot;#3ec5ff&quot;,&quot;#fac12e&quot;],&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;itemStyle&quot;:{&quot;color&quot;:&quot;#A5A7A9&quot;,&quot;fontWeight&quot;:&quot;normal&quot;,&quot;fontSize&quot;:&quot;16px&quot;},&quot;itemHoverStyle&quot;:{&quot;color&quot;:&quot;#fff&quot;}},&quot;tooltip&quot;:{&quot;pointFormat&quot;:&quot;{series.name}: &lt;b&gt;{point.percentage:.1f}%&lt;/b&gt;&quot;,&quot;borderWidth&quot;:0,&quot;borderRadius&quot;:6,&quot;backgroundColor&quot;:&quot;#fff&quot;},&quot;plotOptions&quot;:{&quot;pie&quot;:{&quot;allowPointSelect&quot;:true,&quot;showInLegend&quot;:true,&quot;dataLabels&quot;:{&quot;enabled&quot;:false,&quot;style&quot;:{&quot;fontSize&quot;:&quot;16px&quot;}},&quot;borderColor&quot;:&quot;transparent&quot;,&quot;center&quot;:[&quot;50%&quot;,&quot;50%&quot;]}},&quot;series&quot;:[{&quot;type&quot;:&quot;pie&quot;,&quot;name&quot;:&quot;Browser share&quot;,&quot;innerSize&quot;:&quot;73%&quot;,&quot;data&quot;:[[&quot;Behance&quot;,49],[&quot;Dribble&quot;,22],[&quot;Pinterest&quot;,29]],&quot;dataLabels&quot;:{&quot;style&quot;:{&quot;fontWeight&quot;:&quot;normal&quot;,&quot;color&quot;:&quot;#a5a7a9&quot;,&quot;textOutline&quot;:&quot;transparent&quot;}}}],&quot;responsive&quot;:{&quot;rules&quot;:[{&quot;condition&quot;:{&quot;minWidth&quot;:350},&quot;chartOptions&quot;:{&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;plotOptions&quot;:{&quot;pie&quot;:{&quot;dataLabels&quot;:{&quot;enabled&quot;:true}}}}}]}}"></div>
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
                                            <label class="input-group-text" for="datetime2"><span class="fa-calendar text-primary"></span></label>
                                        </div>
                                        <input class="form-control" id="datetime2" type="text" name="daterange">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="highcharts-container highcharts-container-lg" data-highcharts-options="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#414347&quot;],&quot;chart&quot;:{&quot;type&quot;:&quot;column&quot;,&quot;zoomType&quot;:&quot;x&quot;,&quot;panning&quot;:true,&quot;panKey&quot;:&quot;shift&quot;},&quot;title&quot;:{&quot;text&quot;:null},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;tooltip&quot;:{&quot;style&quot;:{&quot;fontSize&quot;:&quot;16px&quot;},&quot;headerFormat&quot;:&quot;&quot;,&quot;footerFormat&quot;:&quot;&quot;,&quot;borderWidth&quot;:0,&quot;borderRadius&quot;:6,&quot;padding&quot;:6,&quot;backgroundColor&quot;:&quot;#fff&quot;,&quot;pointFormat&quot;:&quot; {series.name}: &lt;span style=\&quot;color:{point.color}\&quot;&gt;{point.y}&lt;/span&gt;&quot;},&quot;xAxis&quot;:{&quot;lineColor&quot;:&quot;#2d3035&quot;,&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#A5A7A9&quot;,&quot;fontSize&quot;:&quot;14px&quot;}},&quot;categories&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;,&quot;Sep&quot;,&quot;Oct&quot;,&quot;Nov&quot;,&quot;Dec&quot;]},&quot;yAxis&quot;:{&quot;tickInterval&quot;:25,&quot;gridLineColor&quot;:&quot;#2d3035&quot;,&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#A5A7A9&quot;,&quot;fontSize&quot;:&quot;14px&quot;}},&quot;title&quot;:{&quot;enabled&quot;:false}},&quot;series&quot;:[{&quot;name&quot;:&quot;Nr. of clients&quot;,&quot;data&quot;:[30,70,64,84,36,64,59,36,59,59,18,40]}],&quot;plotOptions&quot;:{&quot;column&quot;:{&quot;borderColor&quot;:&quot;transparent&quot;,&quot;maxPointWidth&quot;:30,&quot;borderRadius&quot;:6,&quot;states&quot;:{&quot;hover&quot;:{&quot;color&quot;:&quot;#9e6cfd&quot;}}}}}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer footer-small">
        <div class="container-fluid">
            <p><span class="d-inline-block pr-2">PART</span>© 2019. Design by Zemez</p>
        </div>
    </footer>
    <div class="sidebar scroller">
        <div class="panel">
            <div class="panel-header">
                <h4 class="panel-title"><span class="panel-icon fa-trophy"></span><span>Right Sidebar Content</span></h4>
            </div>
            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat ac tortor eu viverra. Etiam ipsum neque, fermentum quis sagittis nec, hendrerit id diam. Mauris a tincidunt odio. Sed porttitor ex pulvinar, tristique sapien sed, malesuada nunc.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

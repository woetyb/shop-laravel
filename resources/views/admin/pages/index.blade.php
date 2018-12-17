@extends('admin.layouts.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>Dashboard</h2>
                    </div>
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-12">
                    <div class="card top_report">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-dollar text-col-blue"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>EARNINGS</h6>
                                            <span class="font700">$22,500</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="87"></div>
                                    </div>
                                    <small class="text-muted">19% compared to last week</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-bar-chart-o text-col-green"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>SALES</h6>
                                            <span class="font700">$500</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs progress-transparent custom-color-green mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="28"></div>
                                    </div>
                                    <small class="text-muted">19% compared to last week</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-shopping-cart text-col-red"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>Orders</h6>
                                            <span class="font700">215</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs progress-transparent custom-color-red mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="41"></div>
                                    </div>
                                    <small class="text-muted">19% compared to last week</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-thumbs-up text-col-yellow"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>LIKES</h6>
                                            <span class="font700">21,215</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs progress-transparent custom-color-yellow mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="75"></div>
                                    </div>
                                    <small class="text-muted">19% compared to last week</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div id="Summary1" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card bg-success text-center">
                                    <div class="body">
                                        <input type="text" class="knob2" value="82" data-width="69" data-height="69" data-thickness="0.07" data-bgColor="#2e9a4a" data-fgColor="#ffffff" readonly>
                                        <h4 class="font-22 text-col-white mt-4">
                                            <small class="font-12 d-block mb-1"><i class="fa fa-caret-up"></i> 15%</small>
                                            Lead
                                            <span class="d-block font-13 mt-1">Last Week</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card bg-warning text-center">
                                    <div class="body">
                                        <input type="text" class="knob2" value="67" data-width="69" data-height="69" data-thickness="0.07" data-bgColor="#e8a70c" data-fgColor="#ffffff" readonly>
                                        <h4 class="font-22 text-col-white mt-4">
                                            <small class="font-12 d-block mb-1"><i class="fa fa-caret-up"></i> $95 M</small>
                                            Ballance
                                            <span class="d-block font-13 mt-1">Last Month</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div id="Summary2" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card text-center">
                                    <div class="body">
                                        <input type="text" class="knob2" value="60" data-width="69" data-height="69" data-thickness="0.07" data-bgColor="#eceeef" data-fgColor="#2e9a4a" readonly>
                                        <h4 class="font-22 mt-4">
                                            <small class="font-12 d-block mb-1"><i class="fa fa-caret-up"></i> 25%</small>
                                            Sales
                                            <span class="d-block font-13 mt-1">Last Week</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card bg-dark text-center">
                                    <div class="body">
                                        <input type="text" class="knob2" value="73" data-width="69" data-height="69" data-thickness="0.07" data-bgColor="#434b52" data-fgColor="#2e9a4a" readonly>
                                        <h4 class="font-22 text-col-white mt-4">
                                            <small class="font-12 d-block mb-1"><i class="fa fa-caret-up"></i> 40K</small>
                                            Profits
                                            <span class="d-block font-13 mt-1">Last Month</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="header">
                            <h2>Connection</h2>
                        </div>
                        <div class="body pt-0">
                            <div class="row">
                                <div class="col-12 m-b-15">
                                    <h1><i class="icon-user"></i></h1>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <h4 class="font-22 text-col-green font-weight-bold">
                                        <small class="font-12 text-col-dark d-block m-b-10">Following</small>
                                        1255
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <h4 class="font-22 text-col-blue font-weight-bold">
                                        <small class="font-12 text-col-dark d-block m-b-10">Followers</small>
                                        3650
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="card overflowhidden">
                        <div class="header">
                            <h2>Analysis</h2>
                            <ul class="header-dropdown">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right animated bounceIn">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row text-center">
                                <div class="col-4">
                                    <h4>2598 <span class="font-13 d-block mt-2">New York</span></h4>
                                </div>
                                <div class="col-4 border-left border-right">
                                    <h4>8547 <span class="font-13 d-block mt-2">France</span></h4>
                                </div>
                                <div class="col-4">
                                    <h4>2707 <span class="font-13 d-block mt-2">Canada</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline" data-type="bar" data-offset="90" data-width="97%" data-height="50px" data-bar-Width="10" data-bar-Spacing="10" data-bar-Color="#7cb5ec">4,8,0,3,1,8,5,4,0,5,4,3,2,1,5,6,7,8,4,5,8,0,3</div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12">
                    <div class="card Sales_Overview">
                        <div class="header">
                            <h2>Sales Overview</h2>
                            <ul class="header-dropdown">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right animated bounceIn">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="Sales_Overview" class="ct-chart"></div>
                            <div class="body xl-slategray text-center">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4">
                                        <h2 class="font700">$15K</h2>
                                        <small>17% <i class="fa fa-level-up text-success"></i>
                                        Total Revenue</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <h2 class="font700">$1200</h2>
                                        <small>18% <i class="fa fa-level-down text-danger"></i>
                                        Current Month</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <h2 class="font700">$3489</h2>
                                        <small>18% <i class="fa fa-level-up text-success"></i>
                                        This Year</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="text-center">Site Traffic</h2>
                        </div>
                        <div class="body">
                            <div class="row text-center">
                                <div class="col-6 border-right border-bottom pb-4 pt-4">
                                    <div id="Traffic1" class="carousel vert slide" data-ride="carousel" data-interval="3000">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <label class="mb-0">Total User</label>
                                                <h4 class="font-30 font-weight-bold text-primary">11,545</h4>
                                            </div>
                                            <div class="carousel-item">
                                                <label class="mb-0">New User</label>
                                                <h4 class="font-30 font-weight-bold text-success">7,326</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 border-bottom pb-4 pt-4">
                                    <div id="Traffic1" class="carousel vert slide" data-ride="carousel" data-interval="3000">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <label class="mb-0">Chat</label>
                                                <h4 class="font-30 font-weight-bold text-warning">542</h4>
                                            </div>
                                            <div class="carousel-item">
                                                <label class="mb-0">Missed Chats</label>
                                                <h4 class="font-30 font-weight-bold text-danger">73</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header">
                            <h2 class="text-center">Complated</h2>
                        </div>
                        <div class="body">
                            <div class="form-group">
                                <label class="d-block">Positive Sentiment <span class="float-right">77%</span></label>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Return Visitors <span class="float-right">50%</span></label>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Comments <span class="float-right">23%</span></label>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card weather2">
                        <div class="body city-selected">
                            <div class="row">
                                <div class="col-12">
                                    <div class="city"><span>City:</span> San Francisco</div>
                                    <div class="night">Day - 12:07 PM</div>
                                </div>
                                <div class="info col-7">
                                    <div class="temp"><h2>34</h2></div>
                                </div>
                                <div class="icon col-5">
                                    <i class="wi wi-day-cloudy-windy"></i>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped m-b-0">
                            <tbody>
                                <tr>
                                <td>Land area</td>
                                <td class="font-medium">121.4 km</td>
                            </tr>
                            <tr>
                                <td>Humidity</td>
                                <td class="font-medium">73%</td>
                            </tr>
                            <tr>
                                <td>Pressure</td>
                                <td class="font-medium">25.56 in</td>
                            </tr>
                            <tr>
                                <td>Population</td>
                                <td class="font-medium">8.65 lakhs</td>
                            </tr>
                            <tr>
                                <td>Ceiling</td>
                                <td class="font-medium">25280 ft</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item text-center active">
                                    <div class="col-12">
                                        <ul class="row days-list list-unstyled">
                                            <li class="day col-4">
                                                <p>Monday</p>
                                                <i class="wi wi-day-hail"></i>
                                            </li>
                                            <li class="day col-4">
                                                <p>Tuesday</p>
                                                <i class="wi wi-day-lightning"></i>
                                            </li>
                                            <li class="day col-4">
                                                <p>Wednesday</p>
                                                <i class="wi wi-day-storm-showers"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="carousel-item text-center">
                                    <div class="col-12">
                                        <ul class="row days-list list-unstyled">
                                            <li class="day col-4">
                                                <p>Thursday</p>
                                                <i class="wi wi-day-hail"></i>
                                            </li>
                                            <li class="day col-4">
                                                <p>Friday</p>
                                                <i class="wi wi-showers"></i>
                                            </li>
                                            <li class="day col-4">
                                                <p>Saturday</p>
                                                <i class="wi wi-day-sunny"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Visitors </h2>
                            <ul class="header-dropdown">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right animated bounceIn">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="Visitors_chart" class="flot-chart m-b-25"></div>
                            <div class="row text-center">
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="body xl-turquoise">
                                        <h4>2,025</h4>
                                        <span>America</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="body xl-parpl">
                                        <h4>1,025</h4>
                                        <span>Canada</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="body xl-salmon">
                                        <h4>3,845</h4>
                                        <span>India</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="body xl-slategray">
                                        <h4>863</h4>
                                        <span>Other</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>ToDo List <small>This Month task list</small></h2>
                            <ul class="header-dropdown">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right animated bounceIn">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body todo_list">
                            <ul class="list-unstyled mb-4">
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox" checked>
                                        <span>Report Panel Usag</span>
                                    </label>
                                    <hr>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>Report Panel Usag</span>
                                    </label>
                                    <hr>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>New logo design for VueJs</span>
                                    </label>
                                    <hr>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>Design PSD files for clent</span>
                                    </label>
                                    <hr>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>New logo design for VueJs</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2><strong>New</strong> Connections</h2>
                        </div>
                        <div class="body">
                            <ul class="right_chat list-unstyled mb-0">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="/st-admin/assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Chris Fox</span>
                                                <span class="message">Designer, Blogger</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="/st-admin/assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Joge Lucky</span>
                                                <span class="message">Java Developer</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="/st-admin/assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Isabella</span>
                                                <span class="message">CEO, Thememakker</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="/st-admin/assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Folisise Chosielie</span>
                                                <span class="message">Art director, Movie Cut</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media mb-0">
                                            <img class="media-object " src="/st-admin/assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Alexander</span>
                                                <span class="message">Writter, Mag Editor</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Marketing</strong> Campaign <small>This Month </small></h2>
                            <ul class="header-dropdown">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right animated bounceIn">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-5">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <i class="fa fa-facebook fa-2x"></i>
                                            </td>
                                            <td>
                                                <p class="margin-0">Facebook Ads</p>
                                                <span>1.2k Likes, 418 Shares</span>
                                            </td>
                                            <td>
                                                <h6 class="m-b-0">$ 402</h6>
                                                <span class="text-muted">Spent</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="text-success">
                                                    <i class="icon-graph"></i> 23
                                                </div>
                                                <div class="text-muted">up</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-twitter fa-2x"></i>
                                            </td>
                                            <td>
                                                <p class="margin-0">Twitter Ads</p>
                                                <span>1k Likes, 128 Shares</span>
                                            </td>
                                            <td>
                                                <h6 class="m-b-0">$ 489</h6>
                                                <span class="text-muted">Spent</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="text-danger">
                                                    <i class="icon-graph"></i>
                                                    -9
                                                </div>
                                                <div class="text-muted">down</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-instagram fa-2x"></i>
                                            </td>
                                            <td>
                                                <p class="margin-0">Instagram Post</p>
                                                <span>1k Follows, 228 Likes</span>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">$ 718 </h6>
                                                <span class="text-muted">Spent</span>
                                            </td>
                                            <td class="text-right">
                                                <div class=" text-success">
                                                    <i class="icon-graph"></i>
                                                    16
                                                </div>
                                                <div class="text-muted">up</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-linkedin fa-2x"></i>
                                            </td>
                                            <td>
                                                <p class="margin-0">LinkedIn Post</p>
                                                <span>1k Follows, 228 Likes</span>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">$ 768</h6>
                                                <span class="text-muted">Spent</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="text-success">
                                                    <i class="icon-graph"></i>
                                                    27
                                                </div>
                                                <div class="text-muted">up</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

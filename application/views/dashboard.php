
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
    <title>Bantam</title>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/plugins/morris/morris.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/jquery.circliful.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/style.css">
<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index.html" class="logo">
					<img src="<?php echo base_url(); ?>./assets/img/logo.png" width="35" height="35" alt=""> <span>Bantam</span>
				</a>

			</div>
			
			<div class="menubar">
				<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>

			</div>
			
			<div class="searchbar">
				<form class="form-inline my-1 w-25 float-left">
					<input class="form-control mr-sm-2 search-input" type="search" placeholder="Search..." >
				</form>

			</div>		
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-primary float-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">
												<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid rounded-circle">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Doe</span> booking a new room<span class="noti-title"></span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> check-in   <span class="noti-title"> with payment gateway</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">L</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Misty Tison</span> check-out <span class="noti-title">Today</span> </p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">G</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span> Extended another  <span class="noti-title">two days</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new booking <span class="noti-title">for couple of days</span></p>
												<p class="noti-time"><span class="notification-time">2 days ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-primary float-right">8</span></a>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="<?php echo base_url(); ?>./assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span><?php echo $this->session->userdata('email');?></span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<a class="dropdown-item" href="<?php echo site_url('Users/logout'); ?>">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active" >
                            <a class="active" href="<?php echo site_url('Dashboard/index'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li class="submenu">
							<a href="#"><i class="fa fa-suitcase" aria-hidden="true"></i><span> Booking</span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="<?php echo site_url('Bookings/Displaydata'); ?>">All Booking</a></li>
								<li><a href="<?php echo site_url('Dashboard/addBookings'); ?>">Add Booking</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-users" aria-hidden="true"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="<?php echo site_url('Customers/DisplayCustomers'); ?>">All customers</a></li>
								<li><a href="<?php echo site_url('Customers/index'); ?>">Add Customer</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-key" aria-hidden="true"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="<?php echo site_url('Rooms/DisplayRooms'); ?>">All Rooms</a></li>
								<li><a href="<?php echo site_url('Rooms/index'); ?>">Add Room</a></li>
							</ul>
						</li>
                        <li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="<?php echo site_url('Dashboard/allStaff'); ?>">All Staff</a></li>
								<li><a href="<?php echo site_url('Dashboard/addStaff'); ?>">Add staff</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="<?php echo site_url('Dashboard/allEmployees'); ?>">Employees List</a></li>
								<li><a href="<?php echo site_url('Dashboard/allLeaves'); ?>">Leaves</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-money"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="invoices.html">Invoices</a></li>
								<li><a href="payments.html">Payments</a></li>
								<li><a href="expenses.html">Expenses</a></li>
								<li><a href="taxes.html">Taxes</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-flag-o"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="expense-reports.html"> Expense Report </a></li>
								<li><a href="invoice-reports.html"> Invoice Report </a></li>
							</ul>
						</li>
                        <li>
                            <a href="settings.html"><i class="fa fa-cog"></i> <span>Settings</span></a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 ">
                        <div class="dash-widget" style="background-color: pink">
							<div class="row no-gutters" >
								<div class="col-5">
									<div class="circle1"></div>
								</div>
								<div class="col-7" >
									<div class="dash-widget-info text-right">
										<h3>75</h3>
										<span class="widget-title1" style="background-color: pink">Total Booking </span>
									</div>
								</div>
							</div>
						</div>
					</div>
					 <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget" style="background-color: pink">
							<div class="row no-gutters">
								<div class="col-5">
									<div class="circle2"></div>
								</div>
								<div class="col-7">
									<div class="dash-widget-info text-right">
										<h3>25</h3>
										<span class="widget-title2" style="background-color: pink">Availble Rooms </span>
									</div>
								</div>
							</div>
						</div>
					</div>
					 <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget" style="background-color: pink">
							<div class="row no-gutters">
								<div class="col-5">
									<div class="circle3"></div>
								</div>
								<div class="col-7">
									<div class="dash-widget-info text-right">
										<h3>20</h3>
										 <span class="widget-title3" style="background-color: pink">Inquiry </span>
									</div>
								</div>
							</div>
						</div>
					</div>
                   <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget" style="background-color: pink">
							<div class="row no-gutters" >
								<div class="col-5">
									<div class="circle4"></div>
								</div>
								<div class="col-7">
									<div class="dash-widget-info text-right">
										<h3>$ 6000</h3>
										  <span class="widget-title4" style="background-color: pink">Collections </span>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>				
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
  
    <script src="  <?php echo base_url(); ?>./assets/js/jquery-3.2.1.min.js"></script>
    <script src="  <?php echo base_url(); ?>./assets/js/popper.min.js"></script>
    <script src="  <?php echo base_url(); ?>./assets/js/bootstrap.min.js"></script>
    <script src="  <?php echo base_url(); ?>./assets/js/jquery.slimscroll.js"></script>
    <script src="  <?php echo base_url(); ?>./assets/js/Chart.bundle.js"></script>
    <script src="  <?php echo base_url(); ?>./assets/js/chart.js"></script>
    <script src="  <?php echo base_url(); ?>./assets/plugins/morris/morris.js"></script>
    <script src="  <?php echo base_url(); ?>./assets/plugins/raphael/raphael-min.js"></script>
    <script src="  <?php echo base_url(); ?>./assets/js/jquery.circliful.min.js"></script>
    <script src="  <?php echo base_url(); ?>./assets/js/app.js"></script>
</body>
</html>
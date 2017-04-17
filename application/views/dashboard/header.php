<?php  
		header('Cache-Control: no-store, no-cache, must-revalidate'); 
		header('Cache-Control: post-check=0, pre-check=0', FALSE); 
		header('Pragma: no-cache'); 
	?>
	
 <!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php if(isset($title)){ echo $title; } ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		
		<link href="<?php echo base_url();?>assets/dashboard/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/dashboard/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/dashboard/css/dataTables/dataTables.responsive.css" rel="stylesheet">

		<!-- MetisMenu CSS -->
		<link href="<?php echo base_url();?>assets/dashboard/css/metisMenu.min.css" rel="stylesheet">

		<!-- Timeline CSS -->
		<link href="<?php echo base_url();?>assets/dashboard/css/timeline.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="<?php echo base_url();?>assets/dashboard/css/startmin.css" rel="stylesheet">

		<!-- Morris Charts CSS -->
		<link href="<?php echo base_url();?>assets/dashboard/css/morris.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="<?php echo base_url();?>assets/dashboard/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		
	</head>
   
	<body>
	<main>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Kingdomsg</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i><?php echo $this->session->userdata("USER_NAME"); ?><b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="<?php echo base_url() ?>profile"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <!--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>-->
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url() ?>/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/dashboard" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-gear fa-fw"></i> Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-home fa-fw"></i> Homepage<span class="fa arrow"></span></a>
								<ul class="nav nav-third-level">
                                    
									<li>
                                        <a href="<?php echo site_url() ?>/header-footer"><i class="fa fa-th-large fa-fw"></i>  Header/Footer</span></a>
                                    </li>
									<li>
                                        <a href="<?php echo site_url() ?>/list-exclusive"><i class="fa fa-th-large fa-fw"></i>  Section 1</span></a>
                                    </li>
									<li>
                                        <a href="<?php echo site_url() ?>/list-second-exclusive"><i class="fa fa-th-large fa-fw"></i>  Section 2</span></a>
                                    </li>
									<li>
                                        <a href="<?php echo site_url() ?>/newsletter"><i class="fa fa-envelope-o fa-fw"></i>  Newsletter</span></a>
                                    </li>
                                </ul>
                            </li>
                            <!--<li>
                                
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>-->
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

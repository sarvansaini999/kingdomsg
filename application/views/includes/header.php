<?php

	include('../model/Home_model.php');
	
	$setting = new Home_model();
	$setting = $setting->get_settings();
	
	$hlogo
?>
<?php if(isset($setting)){ 

	foreach($setting as $row){
	
	$hlogo = $row->header_logo;
?>
<?php } } ?>


 <!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php if(isset($title)){ echo "Kingdom Sports Group: ". $title; } ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
		<link rel="stylesheet" href="font/stylesheet.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/media.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome-4.4.0/css/font-awesome.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet"> 
		
	</head>
   
	<body>
		<main>


<!-- Header Start -->

<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 pad_none header_inner-part">
					<div class="col-md-4 col-sm-4 col-xs-12 pad_none logo-main">
						<a href="<?php echo base_url(); ?>">
							<img src="<?php echo base_url('upload/').$hlogo; ?>" alt="site logo"/>
						</a>
					</div>
					
					<div class="col-md-8 col-sm-8 col-xs-12 pad_none navigation-part">
						<div class="navbar-default nav_main"> 
						<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse pad_none bg_none" id="bs-example-navbar-collapse-1">
						<div class="col-sm-12 pad_none nav_bar">
						<ul>
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Gold Coast </a>
								<ul class="dropdown-menu ">
									<li><a href="#" class="dropdown-bg">The City</a></li>
									<li><a href="#">Useful Information</a></li>
								</ul>
							</li>
							<li><a href="#">The Games</a></li>
							<li><a href="#">Shop</a></li>
							<li><a href="#">About Us </a></li>
							<li><a href="#">Look and Brand</a></li>
						</ul>
						</div>
						</div>
						<!-- /.navbar-collapse --> 
						</div>
					</div>
					
				</div>
			</div>
		</div>
</header>

<!----- Header End ----->
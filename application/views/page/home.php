<?php
	$id = "";
	$bhead = "";
	$bstext = "";
	$bbtext = "";
	$bblink = "";
	$bblogo = "";
	$flink = "";
	$fslink = "";
?>
<?php if(isset($settings)){ 

	foreach($settings as $row){
	
	$id = $row->id;
	$bhead = $row->banner_heading;
	$bstext = $row->banner_sub_text;
	$bbtext = $row->banner_btn_text;
	$bblink = $row->banner_btn_link;
	$bblogo = $row->bottom_footer_logo;
	$flink = $row->footer_link;
	$fslink = $row->footer_sub_link;
	$b_img = $row->banner_img;
?>
<?php } } ?>

<!---- Banner Start ----->
<section class="banner-main" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('upload/').$b_img; ?>) no-repeat scroll center top / cover;">
	<div class="container">
		<div class="row">
			<div class=" pad_none banner-inner">
				<h2 class="fadeInUp wow" data-wow-duration="2s" data-wow-delay="0s"><?php echo $bhead; ?></h2>
				<?php echo $bstext; ?>
				<a href="<?php echo $bblink; ?>" class="read-more-banner fadeInUp wow" data-wow-duration="2s" data-wow-delay="0.3s">READ MORE <img src="<?php echo base_url();?>assets/images/banner-readmore-bg.png" class="banr-readmore3"></a>
			</div>
		</div>
	</div>
	<div class="gold-cost-right" >
		<img src="<?php echo base_url();?>assets/images/gold-cost-img.png">
	</div>
</section>
<!---- Banner END ------>



<!----- EXCLUSIVE REPRESENTATIOn start ------->
<section class="exclusive-reprensentatio-main">
	<div class="container">
		<div class="row">
			<div class="exclusive-reprensentatio-inner">
				<h2 class="fadeInUp wow" data-wow-duration="2s" data-wow-delay="0s">EXCLUSIVE <br> REPRESENTATIOn</h2>
				<div class="col-xs-12 pad_none exclusive-flages-out fadeInUp wow" data-wow-duration="2s" data-wow-delay="0s">
				
				<?php if(isset($info)){ ?>
					
					<?php foreach($info as $row){ ?>
					<a href="#">
					<div class="exclusive-firts-country">
						<span><img src="<?php echo base_url()."upload/". $row->thumb; ?>" alt="<?php echo $row->country; ?>"></span>
						<p><?php echo $row->country; ?></p>
					</div>
					</a>
					<?php } ?>
				<?php } ?>			
					
					
				</div>
			</div>
		</div>
	</div>
</section>


<!---- EXCLUSIVE REPRESENTATIOn end ------>





<!------ AUTHORISED REPRESENTATIOn start --------->
<section class="exclusive-reprensentatio-main authoriesde-part-main">
	<div class="container">
		<div class="row">
			<div class="exclusive-reprensentatio-inner">
				<h2 class="fadeInUp wow" data-wow-duration="2s" data-wow-delay="0s">EXCLUSIVE <br> REPRESENTATIOn</h2>
				<div class="col-xs-12 pad_none exclusive-flages-out fadeInUp wow" data-wow-duration="2s" data-wow-delay="0s">
					
					
					<?php if(isset($exclusive)){ ?>
					
						<?php foreach($exclusive as $row){ ?>
						<a href="#">
						<div class="exclusive-firts-country">
							<span><img src="<?php echo base_url()."upload/". $row->thumb; ?>" alt="<?php echo $row->country; ?>"></span>
							<p><?php echo $row->country; ?></p>
						</div>
						</a>
						<?php } ?>
					<?php } ?>	
				
					
				</div>
			</div>
		</div>
	</div>
</section>


<!---------------------- AUTHORISED REPRESENTATIOn end -------------------->



<!---------------------- shopping cart start ------------------------------>
<section class="shopping-cart-main">
 <div class="container">
    <div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 pad_none shopping_cart_top">
		<h2 class="fadeInUp wow" data-wow-duration="2s" data-wow-delay="0s">shopping <br>cart</h2>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
           laudantium, totam rem aperiam, eaque</p>
	</div>
	</div>
</div>

<div class="col-xs-12 pad_none shopping_cart_inner">
 <div class="container">
    <div class="row">
	<div class="col-xs-12 col-sm-5 col-md-5 pad_none guaranteed-part1-main slideInLeft wow"  data-wow-duration="1.5s" data-wow-delay="0.2s">
	
	
		<div class="col-xs-12 pad_none guaranteed-part1">
			<div class="col-xs-12 pad_none  guaranteed-part1-imgnew2">
				<a href="#">
				<img src="<?php echo base_url();?>assets/images/shopping-big-img2.jpg" alt="">
				<div class="col-xs-12 pad_none guaranteed-part1-content-main2">
				<h3>
				<span>TRAVEL PACKAGES WITH</span><br>
				GUARANTEED TICKETS
				</h3>
				<samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
				</div>
				<div class="col-xs-12 pad_none guaranteed-part1-inner">
				<div class="authprised-territories-img">
					<img src="<?php echo base_url();?>assets/images/authprised-territories-img.png" alt="">
				</div>
				<div class="guaranteed-content-sec">
				
						<h3>
						<span>TRAVEL PACKAGES WITH</span><br>
							GUARANTEED TICKETS
						</h3>
						<p>Your Complete Gold Coast 2018 Sports Tour Program including tickets, accommodation,
						   transfers, experiences and more.</p>
					</div>
				</div>
			</a>
			</div>
			
				
			<div class="col-xs-12 pad_none guaranteed-part1-inner">
				<div class="authprised-territories-img">
					<img src="<?php echo base_url();?>assets/images/authprised-territories-img.png" alt="">
					
				</div>
				<div class="guaranteed-content-sec">
				
						<h3>
						<span>TRAVEL PACKAGES WITH</span><br>
							GUARANTEED TICKETS
						</h3>
						<p>Your Complete Gold Coast 2018 Sports Tour Program including tickets, accommodation,
						   transfers, experiences and more.</p>
					</div>
			</div>
	</div>	
	<!-- <div class="col-xs-12 pad_none sales-permitted-outer">
		<a href="#">
			<div class="col-xs-12 pad_none sales3-permitted-inner">
				<h3><span>Hospitality Experience Global</span> <br>
                  Sales Permitted</h3>
				  <samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
			</div>
		</a>
	</div> -->
	
			<div class="col-xs-12 pad_none accommodation1-main sales-permitted-outer fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
			<a href="#">
				<img src="<?php echo base_url();?>assets/images/sales-permitted-img2.png" alt="">
			<div class="col-xs-12 pad_none accommodation1-main-inner">
			<h3><span>Hospitality Experience Global</span> <br>
                  Sales Permitted</h3>
			<samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
			</div>
			<div class="col-xs-12 pad_none guaranteed-part1-overlay overlay3">
			<div class="authprised-territories-img short-new">
			<img src="<?php echo base_url();?>assets/images/authprised-territories-img3.png" alt="">
			</div>
			<div class="guaranteed-content-sec">
			<h3><span>Hospitality Experience Global</span> <br>
                  Sales Permitted</h3>
			<p>Your Complete Gold Coast 2018 Sports Tour Program including tickets,</p>
			</div>
			</div>
			</a>
			</div>
	
	
	
	</div>
	
	<div class="col-xs-12 col-sm-7 col-md-7 pad_none guaranteed-part2-main-right">
	
			<div class="col-md-6 col-xs-6 col-xs-12x pad_none accommodation1-main fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
			<a href="#">
			<img src="<?php echo base_url();?>assets/images/accomodation-img2.png" alt="">
			<div class="col-xs-12 pad_none accommodation1-main-inner">
			<h3><span>ACCOMMODATION</span> <br>
			WITH TICKETS</h3>
			<samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
			</div>

			<div class="col-xs-12 pad_none guaranteed-part1-overlay">
			<div class="authprised-territories-img short-new">
			<img src="<?php echo base_url();?>assets/images/authprised-territories-img2.png" alt="">
			</div>
			<div class="guaranteed-content-sec">

			<h3><span>ACCOMMODATION</span> <br>
			WITH TICKETS</h3>
			<p>Your Complete Gold Coast 2018 Sports Tour Program including tickets,</p>
			</div>
			</div>
			</a>
			</div>
			
			<div class="col-md-6 col-xs-6 col-xs-12x pad_none accommodation1-main fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
			<a href="#">
			
			<img src="<?php echo base_url();?>assets/images/hospital-img2.png" alt="">
			<div class="col-xs-12 pad_none accommodation1-main-inner">
			<h3><span>hospitality</span> <br>
                 WITH TICKETS</h3>
			<samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
			</div>

			<div class="col-xs-12 pad_none guaranteed-part1-overlay">
			<div class="authprised-territories-img short-new">
			<img src="<?php echo base_url();?>assets/images/authprised-territories-img3.png" alt="">
			</div>
			<div class="guaranteed-content-sec">

			<h3><span>hospitality</span> <br>
                 WITH TICKETS</h3>
			<p>Your Complete Gold Coast 2018 Sports Tour Program including tickets,</p>
			</div>
			</div>
			</a>
			</div>
			
			
			<div class="col-md-6 col-xs-6 col-xs-12x pad_none accommodation1-main fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
			<a href="#">
			
			<img src="<?php echo base_url();?>assets/images/your-own-program-img2.png" alt="">
			<div class="col-xs-12 pad_none accommodation1-main-inner">
			<h3><span>CREATE YOUR OWN PROGRAM</span> <br>
                  WITH TICKETS</h3>
			<samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
			</div>

			<div class="col-xs-12 pad_none guaranteed-part1-overlay overlay2">
			<div class="authprised-territories-img short-new">
			<img src="<?php echo base_url();?>assets/images/authprised-territories-img.png" alt="">
			</div>
			<div class="guaranteed-content-sec">

			<h3><span>CREATE YOUR OWN PROGRAM</span> <br>
                  WITH TICKETS</h3>
			<p>Your Complete Gold Coast 2018 Sports Tour Program including tickets,</p>
			</div>
			</div>
			</a>
			</div>
			
			
			<div class="col-md-6 col-xs-6 col-xs-12x pad_none accommodation1-main fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
			<a href="#">
			<img src="<?php echo base_url();?>assets/images/create-new-img4.png" alt="">
			<div class="col-xs-12 pad_none accommodation1-main-inner">
			<h3><!-- <span>hospitality</span> --> <br>
                 Tickets only</h3>
			<samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
			</div>
			<div class="col-xs-12 pad_none guaranteed-part1-overlay overlay2">
			<div class="authprised-territories-img short-new">
			<img src="<?php echo base_url();?>assets/images/authprised-territories-img4.png" alt="">
			</div>
			<div class="guaranteed-content-sec">
			<h3><!-- <span>hospitality</span> --> <br>
                 Tickets only</h3>
			<p>Your Complete Gold Coast 2018 Sports Tour Program including tickets,</p>
			</div>
			</div>
			</a>
			</div>
			
			
		
		<!-- 
		<div class="col-md-6 col-xs-6 col-xs-12x pad_none create-own-program2-main fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
		<a href="#">
			<div class="col-xs-12 pad_none create-own-program2-inner">
				<h3><span>CREATE YOUR OWN PROGRAM</span> <br>
                  WITH TICKETS</h3>
				  <samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
			</div>
		</a>
		</div> -->
		
		<!-- <div class=" col-md-6 col-xs-6 col-xs-12x pad_none create-own-program2-new-right fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
		<a href="#">
			<div class="col-xs-12 pad_none create-own-program2-new-right-inner">
				<h3> <br>
                 Tickets only</h3>
				  <samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
			</div>
		</a>
		</div>
		 -->
		
	</div>
	</div>
</div>
<div class="green-ring-bg2"><img src="<?php echo base_url();?>assets/images/green-ring-bg.png"></div>
</div>

<div class="col-xs-12 pad_none shopping-botttom2-inner">
	<div class="container">
		<div class="row">
			<!-- <div class="col-xs-12 col-sm-5 col-md-5 pad_none accomdation-sales-inner-left slideInLeft wow" data-wow-duration="1.5s" data-wow-delay="0.2s">
				<a href="#">
					<div class="col-xs-12 pad_none accomdation-sales-inner-left-bottom">
					<h3><span>Accommodation Global</span> <br>
					Sales Permitted</h3>
					<samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
					</div>
				</a>
			</div> -->
			
			
			<div class="col-xs-12 col-sm-5 col-md-5 pad_none accommodation1-main globel0new fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
			<a href="#">
			<img src="<?php echo base_url();?>assets/images/accomdation-sales-inner-left2.png" alt="">
			<div class="col-xs-12 pad_none accommodation1-main-inner">
			<h3><span>Accommodation Global</span> <br>
					Sales Permitted</h3>
			<samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
			</div>

			<div class="col-xs-12 pad_none guaranteed-part1-overlay overlay4">
			<div class="authprised-territories-img short-new">
			<img src="<?php echo base_url();?>assets/images/authprised-territories-img.png" alt="">
			</div>
			<div class="guaranteed-content-sec">

			<h3><span>Accommodation Global</span> <br>
					Sales Permitted</h3>
			<p>Your Complete Gold Coast 2018 Sports Tour Program including tickets,</p>
			</div>
			</div>
			</a>
			</div>
			
			
			
			
			<div class="col-xs-12 col-sm-7 col-md-7 pad_none accomdation-sales-inner-right fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
			
				<!-- <div class="col-md-6 col-xs-6 col-xs-12x create-own-space-outer2">
					<div class="col-xs-12 sydney-program2-main2">
						<a href="#">
							<div class="col-xs-12 pad_none create-own-program2-inner sydney-program2-same2">
							<h3> <span>CREATE YOUR OWN PROGRAM</span>  <br>
							sydney</h3>
							<samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
							</div>
						</a>
					</div>
				</div> -->
				
				<div class="col-md-6 col-xs-6 col-xs-12x pad_none accommodation1-main space4 fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
				<a href="#">

				<img src="<?php echo base_url();?>assets/images/sydney-ticket2.png" alt="">
				<div class="col-xs-12 pad_none accommodation1-main-inner">
				<h3><!-- <span>CREATE YOUR OWN PROGRAM</span> --> <br>
				sydney</h3>
				<samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
				</div>

				<div class="col-xs-12 pad_none guaranteed-part1-overlay overlay5">
				<div class="authprised-territories-img short-new">
				<img src="<?php echo base_url();?>assets/images/authprised-territories-img.png" alt="">
				</div>
				<div class="guaranteed-content-sec">

				<h3><!-- <span>CREATE YOUR OWN PROGRAM</span> --> <br>
				sydney</h3>
				<p>Your Complete Gold Coast 2018 Sports Tour Program including tickets,</p>
				</div>
				</div>
				</a>
				</div>

				<div class="col-md-6 col-xs-6 col-xs-12x pad_none accommodation1-main space4 fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
				<a href="#">

				<img src="<?php echo base_url();?>assets/images/newziland-ticket2.png" alt="">
				<div class="col-xs-12 pad_none accommodation1-main-inner">
				<h3><!-- <span>CREATE YOUR OWN PROGRAM</span> --> <br>
							NEW ZEALAND</h3>
				<samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
				</div>

				<div class="col-xs-12 pad_none guaranteed-part1-overlay overlay5">
				<div class="authprised-territories-img short-new">
				<img src="<?php echo base_url();?>assets/images/authprised-territories-img.png" alt="">
				</div>
				<div class="guaranteed-content-sec">

				<h3><!-- <span>CREATE YOUR OWN PROGRAM</span> --> <br>
							NEW ZEALAND</h3>
				<p>Your Complete Gold Coast 2018 Sports Tour Program including tickets,</p>
				</div>
				</div>
				</a>
				</div>
				
				
				<div class="col-md-6 col-xs-6 col-xs-12x pad_none accommodation1-main space4 fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
				<a href="#">

				<img src="<?php echo base_url();?>assets/images/chairn-ticket2.png" alt="">
				<div class="col-xs-12 pad_none accommodation1-main-inner">
				<h3><!-- <span>CREATE YOUR OWN PROGRAM</span> --> <br>
							CAIRNS</h3>
				<samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
				</div>

				<div class="col-xs-12 pad_none guaranteed-part1-overlay overlay5">
				<div class="authprised-territories-img short-new">
				<img src="<?php echo base_url();?>assets/images/authprised-territories-img.png" alt="">
				</div>
				<div class="guaranteed-content-sec">

				<h3><!-- <span>CREATE YOUR OWN PROGRAM</span> --> <br>
							CAIRNS</h3>
				<p>Your Complete Gold Coast 2018 Sports Tour Program including tickets,</p>
				</div>
				</div>
				</a>
				</div>
				
				
				
				<div class="col-md-6 col-xs-6 col-xs-12x pad_none accommodation1-main space4 fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="0.7s">
				<a href="#">

				<img src="<?php echo base_url();?>assets/images/malbourn-ticket2.png" alt="">
				<div class="col-xs-12 pad_none accommodation1-main-inner">
			<h3><!-- <span>CREATE YOUR OWN PROGRAM</span> --> <br>
							MELBOURNE</h3>
				<samp><img src="<?php echo base_url();?>assets/images/right-arrow2.png" alt=""></samp>
				</div>

				<div class="col-xs-12 pad_none guaranteed-part1-overlay overlay5">
				<div class="authprised-territories-img short-new ">
				<img src="<?php echo base_url();?>assets/images/authprised-territories-img.png" alt="">
				</div>
				<div class="guaranteed-content-sec">

				<h3><!-- <span>CREATE YOUR OWN PROGRAM</span> --> <br>
							MELBOURNE</h3>
				<p>Your Complete Gold Coast 2018 Sports Tour Program including tickets,</p>
				</div>
				</div>
				</a>
				</div>

				
				
				
				
			
				
				
				
				
				
				
			
			</div>
		</div>
	</div>
</div>

</section>
<!---------------------- shopping cart end -------------------------------->


<!---------------------- SUBSCRIBE start -------------------------------->
<section class="subcribe-main-out">
	<div class="container">
		<div class="row">
			<div class="subscribe-inner-main2">
			<form>
				<h2 class="fadeInUp wow" data-wow-duration="2s" data-wow-delay="0s">
					<span><img src="<?php echo base_url();?>assets/images/subscribe-icon0img.png"></span>
					SUBSCRIBE
				</h2>
				<div class="sbscribe2-field-outer fadeInUp wow" data-wow-duration="2s" data-wow-delay="0s">
					<input type="email" id="email" name="email" value="" placeholder="Enter your email address" required>
					<button type="button" id="nws_btn" class="subscribe-submit">SUBMIT</button>
				</div>
				<span id="msg"></span>
			</form>	
			</div>
		</div>
	</div>
</section>

<!---------------------- SUBSCRIBE end -------------------------------->


<?php

	include('../model/Home_model.php');
	
	$setting = new Home_model();
	$setting = $setting->get_settings();
	
	$id = "";
	$bhead = "";
	$bstext = "";
	$bbtext = "";
	$bblink = "";
	$bblogo = "";
	$flink = "";
	$fslink = "";
?>
<?php if(isset($setting)){ 

	foreach($setting as $row){
	
	$id = $row->id;
	$bhead = $row->banner_heading;
	$bstext = $row->banner_sub_text;
	$bbtext = $row->banner_btn_text;
	$bblink = $row->banner_btn_link;
	$bblogo = $row->bottom_footer_logo;
	$flink = $row->footer_link;
	$fslink = $row->footer_sub_link;
	$contact_us = $row->contact_us;
	$fb = $row->facebook;
	$ins = $row->instagram;
	$tw = $row->twitter;
?>
<?php } } ?>

<!--FOOTER-->
<footer>
        <div class="container">
           <div class="row">
              <div class="col-xs-12 pad_none footer-inner">
                 <div class="col-xs-12 col-sm-3 col-md-3 footer-inner-section1 fadeInUp wow" data-wow-duration="2s" data-wow-delay="0s">
					<a href="index.html"><img src="<?php echo base_url();?>assets/images/footer-logo.png" alt=""></a>
					 <p><?php echo $bblogo; ?></p>
                </div>
                
                <div class="col-xs-12 col-sm-3 col-md-3 footer-inner-section2 fadeInUp wow" data-wow-duration="2s" data-wow-delay="0s">
                <h2>LINKS</h2>
					<?php echo $flink; ?>
                </div>
                
                 <div class="col-xs-12 col-sm-3 col-md-3 footer-inner-section2 fadeInUp wow" data-wow-duration="2s" data-wow-delay="0s">
                <h2>SUB LINKS</h2>
					<?php echo $fslink; ?>
                </div>
				
				 <div class="col-xs-12 col-sm-3 col-md-3 footer-inner-section2 fadeInUp wow" data-wow-duration="2s" data-wow-delay="0s">
                <h2>CONTACT US</h2>
					<?php echo $contact_us; ?>
					
					<div class="col-xs-12 pad_none follow-us-main2">
						<samp>Follow:</samp>
						<ul>
							<li><a href="<?php echo $fb; ?>" target="_blank"><img src="<?php echo base_url();?>assets/images/facebook-icon-footer.png" alt=""></a></li>
							<li><a href="<?php  echo $ins; ?>" target="_blank"><img src="<?php echo base_url();?>assets/images/instagram-icon-footer.png" alt=""></a></li>
							<li><a href="<?php  echo $tw; ?>" target="_blank"><img src="<?php echo base_url();?>assets/images/twiter-icon-footer.png" alt=""></a></li>
						</ul>
					</div>
					
                </div>
                
               
                
             </div>
           </div>
        </div>
        
            
		<div class="col-xs-12 pad_none copy-right-out fadeInUp wow" data-wow-duration="2s" data-wow-delay="0s">
			<p>© 2017 Kingdom Sports. All rights reserved</p>
		</div>
</footer> 
<!--FOOTER-END-->
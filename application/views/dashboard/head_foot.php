<?php
	$id = "";
	$bhead = "";
	$bstext = "";
	$bbtext = "";
	$bblink = "";
	$bblogo = "";
	$flink = "";
	$fslink = "";
	$hlogo = "";
	$b_img = "";
?>
<?php if(isset($info)){ 

	foreach($info as $row){
	
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
	$hlogo = $row->header_logo;
	$b_img = $row->banner_img;
?>
<?php } } ?>
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php if(isset($title)){ echo $title; } ?></h1>
					<span style="color:green;"><?php echo $this->session->flashdata("success_msg"); ?> </span><br/>
				
                </div>
					
				<?php echo form_open_multipart('admin/home/settings'); ?> 
					 <input type="hidden" name="id" value="<?php echo $id ?>">
					 
					<div class="col-md-6">
						<div class="form-group">
						  <label for="hlogo">Header Logo:</label>
						  <input type="file" class="form-control" name="hlogo" id="hlogo">
						  <input type="hidden" id="hlogo_url" name="hlogo_url" value="<?php echo $hlogo ?>"/>
						</div>  
						<div class="form-group logo_img">
						  <?php if($hlogo != ""){ ?>
							<input type="text" class="form-control" value="<?php echo base_url('upload/').$hlogo; ?>" readonly />
							
							<img src="<?php echo base_url('upload/').$hlogo; ?>" width="200">
						  <?php } ?>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="hlogo">Banner img:</label>
						  <input type="file" class="form-control" name="b_img" id="b_img">
						  <input type="hidden" id="banner_img" name="banner_img" value="<?php echo $b_img ?>"/>
						</div>  
						<div class="form-group logo_img">
						  <?php if($b_img != ""){ ?>
							<input type="text" class="form-control" value="<?php echo base_url('upload/').$b_img; ?>" readonly />
							
							<img src="<?php echo base_url('upload/').$b_img; ?>" width="60%">
						  <?php } ?>
						</div>
					</div>
					 
					<div class="col-md-6">
						<div class="form-group">
						  <label for="bhead">Banner Heading:</label>
						  <textarea name="bhead" class="form-control" id="bhead" placeholder="Banner Heading" style="height: 100px;"><?php echo $bhead ?></textarea>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="bstext">Banner Sub Text:</label>
						  <textarea name="bstext" class="form-control" id="bstext" placeholder="Banner Sub Text" style="height: 100px;"><?php echo $bstext ?></textarea>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="bbtext">Banner Button Text:</label>
						  <textarea name="bbtext" class="form-control" id="bbtext" placeholder="Banner Button Text" style="height: 100px;"><?php echo $bbtext ?></textarea>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="bblink">Banner Button Link:</label>
						  <textarea name="bblink" class="form-control" id="bblink" placeholder="Banner Button Link" style="height: 100px;"><?php echo $bblink ?></textarea>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="bblogo">Bottom Footer Logo:</label>
						  <textarea name="bblogo" class="form-control" id="bblogo" placeholder="Bottom Footer Logo" style="height: 100px;"><?php echo $bblogo ?></textarea>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="flink">Footer Link:</label>
						  <textarea name="flink" class="form-control" id="flink" placeholder="Footer Link" style="height: 250px;"><?php echo $flink ?></textarea>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="fslink">Footer Sub Link:</label>
						  <textarea name="fslink" class="form-control" id="fslink" placeholder="Footer Sub Link" style="height: 250px;"><?php echo $fslink ?></textarea>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="contact_us">Contact Us:</label>
						  <textarea name="contact_us" class="form-control" id="contact_us" placeholder="Contact us" style="height: 250px;"><?php echo $contact_us ?></textarea>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="contact_us">Social icon links:</label><br/>
						<div class="form-group">
						  <label for="contact_us">Facebook:</label>
						  <input type="text" name="fb" value="<?php echo $fb; ?>" class="form-control" placeholder="Facebook">
						</div>
						<div class="form-group">
						  <label for="ins">Instagram:</label>
						  <input type="text" name="ins" value="<?php echo $ins; ?>" class="form-control" placeholder="Instagram">
						</div>
						<div class="form-group">
						  <label for="tw">Twitter:</label>
						  <input type="text" name="tw" value="<?php echo $tw; ?>" class="form-control" placeholder="Twitter">
						</div>
					</div>
					
					<div class="clearfix"></div>
					<div class="col-md-6">
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-default">Update</button>
						</div>
					</div>
					
				</form>
            </div>

            <!-- ... Your content goes here ... -->

        </div>
    </div>
	  

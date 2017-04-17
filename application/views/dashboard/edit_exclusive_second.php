<?php

	if(isset($info)){
		foreach($info as $row){
			$id = $row->id;
			$cntry = $row->country;
			$thumb = $row->thumb;
			$active = $row->is_active;
		}
	}
	$checked = "";
	if($active == 1){
		$checked = "checked='checked'";
	}
	
 ?>

<div id="page-wrapper">
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php if(isset($title)){ echo $title; } ?></h1>
			</div>
			
			<?php echo form_open_multipart('admin/home/update_second_exclisive','id=" "'); ?> 
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<div class="col-md-6">
						<div class="form-group">
						  <label for="country">Country Name:</label>
						  
						  <select name="country" value="" class="form-control" id="country">
							<option value="">-Select-</option>
							<?php 
							
								if(isset($countries)){
									foreach($countries as $country){
										$name = $country->name;
										$selected = "";
										if(!empty($cntry) && $cntry == $name){ 
											$selected = "selected='selected'";
										}
										?>
										<option value='<?php echo $name ?>' <?php echo $selected ?>><?php echo $name; ?></option> 
									<?php }
								}
								
							?>
						</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="file">Uploaded image:</label>
						  <img src="<?php echo base_url('upload/'). $thumb ?>" width="30">
						</div>
					</div>
					<br/>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="active">Active:</label>
						  <input type="checkbox" name="active" class="" value="" id="active" <?php echo $checked ?>>
						</div>
					</div>
					
					<div class="clearfix"></div>
					
					<div class="col-md-6">
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-default">Submit</button>
						</div>
					</div>
					<?php echo $this->session->flashdata("success_msg"); ?> 
					
				</form>
			
		</div>

	</div>
</div>

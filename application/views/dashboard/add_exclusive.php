

<div id="page-wrapper">
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php if(isset($title)){ echo $title; } ?></h1>
			</div>
			
			<?php echo form_open_multipart('admin/home/save_exclusive','id=" "'); ?> 
				
					<div class="col-md-6">
						<div class="form-group">
						  <label for="country">Country Name:</label>
						  
						  <select name="country" value="" class="form-control" id="country">
							<option value="">-Select-</option>
							<?php 
							
								if(isset($countries)){
									foreach($countries as $country){
										$name = $country->name;
										echo "<option value='$name'>$name</option>";
									}
								}
								
							?>
						</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="file">Upload image:</label>
						  <input type="file" name="file" class="form-control" value="" id="file">
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="active">Active:</label>
						  <input type="checkbox" name="active" class="" value="" id="active">
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

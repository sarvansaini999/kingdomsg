<?php if(isset($info)){ 

	foreach($info as $row){
?>

<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php if(isset($title)){ echo $title; } ?></h1>
                </div>
				<?php echo form_open('admin/profile/update','id="loginForm"'); ?> 
					 <input type="hidden" name="user_id" value="<?php echo $row->id; ?>">
					<div class="col-md-6">
						<div class="form-group">
						  <label for="fname">First Name:</label>
						  <input type="text" name="fname" value="<?php echo $row->first_name; ?>" class="form-control" id="fname" placeholder="First Name">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="lname">Last Name:</label>
						  <input type="text" name="lname" class="form-control" value="<?php echo $row->last_name; ?>" id="lname" placeholder="Last Name">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="uname">Username:</label>
						  <input type="text" name="uname" class="form-control" value="<?php echo $row->username; ?>" id="uname" placeholder="Username">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="email">Email:</label>
						  <input type="email" name="email" class="form-control" value="<?php echo $row->email; ?>" id="email" placeholder="Enter email">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="email">Phone:</label>
						  <input type="text" name="phone" class="form-control" value="<?php echo $row->phone; ?>" id="phone" placeholder="Phone">
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-6">
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-default">Update</button>
						</div>
					</div>
					<?php echo $this->session->flashdata("success_msg"); ?> 
					
				</form>
            </div>

            <!-- ... Your content goes here ... -->

        </div>
    </div>
	  
<?php } } ?>
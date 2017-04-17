
			<?php if(isset($header)){ echo $header; } ?>
		  
			<?php if(isset($main)){  echo $main; } ?>
			<?php echo "test";$this->session->flashdata("success_msg"); ?> 
			<?php if(isset($footer)){  echo $footer; } ?>
		</main>
		<!-- jQuery -->
		<script src="<?php echo base_url();?>assets/dashboard/js/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url();?>assets/dashboard/js/bootstrap.min.js"></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script src="<?php echo base_url();?>assets/dashboard/js/metisMenu.min.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="<?php echo base_url();?>assets/dashboard/js/startmin.js"></script>
	</body>
</html>
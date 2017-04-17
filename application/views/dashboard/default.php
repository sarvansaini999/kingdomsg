
			<?php if(isset($header)){ echo $header; } ?>
		  
			<?php if(isset($main)){  echo $main; } ?>
			
			<?php if(isset($footer)){  echo $footer; } ?>
		</main>
		<!-- jQuery -->
		<script src="<?php echo base_url();?>assets/dashboard/js/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url();?>assets/dashboard/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/dataTables/dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/dataTables/jquery.dataTables.min.js"></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script src="<?php echo base_url();?>assets/dashboard/js/metisMenu.min.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="<?php echo base_url();?>assets/dashboard/js/startmin.js"></script>
		
		<script>
		$(document).ready(function() {
			$('#example').DataTable();
		} );
		
		 $(document).ready(function() {

			$('#hlogo').change(function() {
			
				var filename = $(this).val().split('\\').pop();
				console.log(filename,$('#hlogo_url'));
				var lastIndex = filename.lastIndexOf("\\");   
				$('#hlogo_url').val(filename);
			});
			$('#b_img').change(function() {
			
				var filename = $(this).val().split('\\').pop();
				console.log(filename,$('#banner_img'));
				var lastIndex = filename.lastIndexOf("\\");   
				$('#banner_img').val(filename);
			});
      });
		</script>

	</body>
</html>
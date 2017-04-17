

<div id="page-wrapper">
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
                    <h1 class="page-header"><?php if(isset($title)){ echo $title; } ?></h1>
					<a href="<?php echo site_url() ?>/add-second-exclusive">Add New</a>
                </div>
			<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align:center;">
        <thead>
            <tr>
                <th>Thumb</th>
                <th>Country</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
				<th>Thumb</th>
                <th>Country</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>
        <tbody>
		<?php if(isset($info)){ ?>
			<?php foreach($info as $row){ ?>
				<?php 
					$s = $row->is_active; 
					$status = "Pending";
					if($s == 1){
						$status = "Active";
					}
				
				?>
				<tr>
					<td><img width="30" src="<?php echo base_url()."upload/". $row->thumb; ?>"></td>
					<td><?php echo $row->country; ?></td>
					<td><?php echo $status; ?></td>
					<td><a href="<?php echo site_url('admin/home/edit_second_exclisive/' . $row->id); ?>"><i class="fa fa-pencil-square-o"></i></a></td>
					<td><a href="<?php echo site_url('admin/home/delete_second_exclisive/' . $row->id); ?>" onClick="return confirmation();"><i class="fa fa-trash"></i></a></td>
					
				</tr>
			<?php } ?>
         <?php } ?>
        </tbody>
    </table>
			
		</div>

	</div>
</div>
<script>
	function confirmation(){
		job = confirm("Are you Sure to Delete permanently?");
		if(job!=true){
			return false;
		}
		
	}
</script>


<div id="page-wrapper">
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
                    <h1 class="page-header"><?php if(isset($title)){ echo $title; } ?></h1>
				
                </div>
			<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align:center;">
        <thead>
            <tr>
                <th>Number</th>
                <th>Email</th>
                <th>Date</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
				<th>Number</th>
                <th>Email</th>
                <th>Date</th>
            </tr>
        </tfoot>
        <tbody>
		<?php if(isset($info)){ $i = 1; ?>
			<?php foreach($info as $row){ ?>
				
				<tr>
					
					<td><?php echo $i; ?></td>
					<td><?php echo $row->email; ?></td>
					<?php
						$date = date("d/m/Y", strtotime($row->created_at));
					?>
					<td><?php echo $date; ?></td>
					<!--<td><a href="<?php echo site_url('admin/home/edit/' . $row->id); ?>"><i class="fa fa-pencil-square-o"></i></a></td>
					<td><a href="<?php echo site_url('admin/home/delete/' . $row->id); ?>" onClick="return confirmation();"><i class="fa fa-trash"></i></a></td>-->
					
				</tr>
			<?php $i++;} ?>
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
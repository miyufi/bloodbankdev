<?php include('db_connect.php');?>

<?php
  if(isset($_SESSION['login_type']) && $_SESSION["login_type"] != 1) {
  echo '<font color = white>You do not have access to this page.</font>';
      exit();
  }
 ?>

<div>
	<!-- Table Panel -->
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<b>List of Users</b>
				<span class="float:right"><a class="btn btn-primary btn-block btn-sm col-sm-2 float-right" href="javascript:void(0)" id="new_user">
			<i class="fa fa-plus"></i> New Entry
		</a></span>
			</div>
			<div class="card-body">
				<table class="table table-condensed table-bordered table-hover">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="">Name</th>
							<th class="">Username</th>
							<th class="">Type</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
		 					$type = array("","Admin","Staff","Guest");
		 					$users = $conn->query("SELECT * FROM users order by name asc");
		 					$i = 1;
		 					while($row= $users->fetch_assoc()):
						 ?>
						<tr>
							<td class="text-center">
						 		<?php echo $i++ ?>
						 	</td>
							<td class="">
						 		<?php echo ucwords($row['name']) ?>
						 	</td>
							<td class="">
								 <?php echo $row['username'] ?>
							</td>
							<td class="">
								 <?php echo $type[$row['type']] ?>
							</td>
							<td class="text-center">
								<button class="btn btn-sm btn-outline-primary edit_user" type="button" data-id="<?php echo $row['id'] ?>" >Edit</button>
								<button class="btn btn-sm btn-outline-danger delete_user" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
							</td>
						</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Table Panel -->
</div>
<script>
	$('table').dataTable();
$('#new_user').click(function(){
	uni_modal('New User','manage_user.php')
})
$('.edit_user').click(function(){
	uni_modal('Edit User','manage_user.php?id='+$(this).attr('data-id'))
})
$('.delete_user').click(function(){
		_conf("Are you sure to delete this user?","delete_user",[$(this).attr('data-id')])
	})
	function delete_user($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_user',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>
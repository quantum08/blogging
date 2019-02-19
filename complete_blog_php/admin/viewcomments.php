<div class="panel panel-default">
	<div class="panel-heading">Previous Comments</div>
	<table class="table table-striped"> 
		<thead> 
			<tr> 
				<th>#</th> 
				<th>Name</th> 
				<th>Comment</th> 
				<th>Time</th> 
				<th>Status</th> 
				<th>Operations</th> 
			</tr> 
		</thead> 
		<tbody> 
			<?php
			    $sql = "SELECT * FROM comments";
			    $res = mysqli_query($conn, $sql);
				while ( $r = mysqli_fetch_assoc($res)) {
			?>
				<tr> 
					<th scope="row"><?php echo $r['id']; ?></th> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<td><?php echo $r['name'] ?></td> &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<td><?php echo $r['subject']; ?></td> &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<td><?php echo $r['submittime']; ?></td> &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
					<td><?php if(isset($r['status']) & !empty($r['status'])){echo $r['status'];}else{echo "NA";} ?></td> 
					<td><a href="editcomment.php?id=<?php echo $r['id']; ?>">Edit</a> <a href="commentstatus.php?id=<?php echo $r['id']; ?>&status=publish">App</a> <a href="commentstatus.php?id=<?php echo $r['id']; ?>&status=draft">Dis</a> <a href="delcomment.php?id=<?php echo $r['id']; ?>">Del</a></td> 
				</tr> 
				<br>
			<?php } ?>
		</tbody> 
	</table>
</div>

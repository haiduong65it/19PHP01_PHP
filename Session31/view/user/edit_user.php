<h1>Edit User</h1>
<form action="admin.php?controller=user&action=edit_user&id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
	<p>
		Avatar
		<input type="file" name="avatar">
		<img src="webroot/uploads/<?php echo $user['avatar']?>">
	</p>
	<p>
		Name
		<input type="text" name="name" value="<?php echo $user['name']?>">
	</p>
	<p>
		Level
		<input type="text" name="level" value="<?php echo $user['level']?>">
	</p>
	<p>
		<input type="submit" name="edit_user" value="Edit user">
	</p>
</form>
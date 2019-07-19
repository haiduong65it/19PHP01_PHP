<h1>Register</h1>
<form action="admin.php?controller=user&action=register" method="POST" enctype="multipart/form-data">
	<p>
		Username
		<input type="text" name="username">
	</p>
	<p>
		Password
		<input type="password" name="password">
	</p>
	<p>
		Avatar
		<input type="file" name="avatar">
	</p>
	<p>
		Name
		<input type="text" name="name">
	</p>
	<p>
		<input type="submit" name="register" value="Register">
	</p>
</form>
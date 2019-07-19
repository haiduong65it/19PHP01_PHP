<link rel="stylesheet" type="text/css" href="webroot/css/style.css">
<h1>User page here</h1>
<p>Hi <?php echo $_SESSION['name'];?></p>
<a href="admin.php?controller=user&action=logout">Logout</a>
<table class="table table-bordered">
  <tr>
    <th style="width: 10px">#</th>
    <th>Username</th>
    <th>Avatar</th>
    <th>Name</th>
    <th>Level</th>
    <th><a href="admin.php?controller=user&action=add_user">Add user</a></th>
  </tr>
 <?php 
 if ($listUser->num_rows > 0) {
 	while($row = $listUser->fetch_assoc()) {
 		$id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['username']?></td>
      <td><img src="webroot/uploads/<?php echo $row['avatar']?>" alt="image" class="avatar_user"></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['level']?></td>
      <td><a href="admin.php?controller=user&action=edit_user&id=<?php echo $id?>">Edit</a> | <a href="admin.php?controller=user&action=delete_user&id=<?php echo $id?>">Delete</a></td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="4">Khong co user nao</td>
  </tr>
  <?php }?>
</table>
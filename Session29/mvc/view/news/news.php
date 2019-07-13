<h1>News</h1>
<table class="table table-hover">
  <tr>
    <th style="width: 10px">#</th>
    <th>title</th>
    <th>description</th>
    <th>create_at</th>
    <th>image</th>
    <th colspan="2"><a href="index.php?action=add_new">Add new</a></th>
  </tr>
 <?php 
 if ($newList->num_rows > 0) {
 	while($row = $newList->fetch_assoc()) {
 		$id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td width="200px"><?php echo $row['title']?></td>
      <td width="400px">
        <?php echo $row['description']?>
      </td>
      <td><?php echo $row['create_at']?></td>
      <td><img src="uploads/news/<?php echo $row['image']?>" alt="image" class="avatar_user"></td>
       
      <td colspan="2"><a href="index.php?action=edit_new&id=<?php echo $id?>">Edit</a> | <a href="index.php?action=delete_new&id=<?php echo $id?>">Delete</a></td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="4">Khong co tin tuc nao</td>
  </tr>
  <?php }?>
</table>
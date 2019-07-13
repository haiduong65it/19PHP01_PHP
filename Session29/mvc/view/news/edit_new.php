 <h1>Edit new page</h1>
<!-- Main content -->
<section class="content">
     <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit new</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="index.php?action=edit_new&id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputName">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Enter new title" value="<?php echo $title;?>">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."><?php echo $description;?></textarea>
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" name="image">
            </div>
            <img src="uploads/news/<?php echo $image;?>">
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary" name="edit_new">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div> 
   </div>
</section>
<!-- /.content -->
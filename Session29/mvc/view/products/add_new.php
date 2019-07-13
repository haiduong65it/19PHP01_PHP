 <h1>Add new page</h1>
<!-- Main content -->
<section class="content">
     <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add new</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="index.php?action=add_new" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputName">New title</label>
              <input type="text" class="form-control" name="title" placeholder="Enter new title">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" name="image">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary" name="add_new">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div> 
   </div>
</section>
<!-- /.content -->
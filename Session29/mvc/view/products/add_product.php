<!-- <h1>Add product page</h1>
<form action="index.php?action=add_product" method="post">
	<p>Product name
		<input type="text" name="name">
	</p>
	<p>Description
		<textarea name="description" rows="8"></textarea>
	</p>
	<p>Product price
		<input type="text" name="price">
	</p>
	<p><input type="submit" name="add_product_form" value="Add product"></p>
</form> -->
<!-- Main content -->
<section class="content">
     <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add product</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="index.php?action=add_product" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Product name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
            </div>
            <div class="form-group>
              <label for="price">Product price</label>
              <input type="text" class="form-control" id="price" name="price" placeholder="Enter product price">
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" name="image">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary" name="add_product">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div> 
   </div>
</section>
<!-- /.content -->
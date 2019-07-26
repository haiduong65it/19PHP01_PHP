<?php include 'common/header.php';?>
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <h3 class="login-box-msg">Register</h3>

    <form action="admin.php?controller=user&action=register" method="post" enctype="multipart/form-data">
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
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="register">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="admin.php?controller=user&action=login" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
<?php include 'common/footer.php';?>
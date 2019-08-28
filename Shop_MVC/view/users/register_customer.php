<?php include './layout/customers/header.php';?>
<!-- page-header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li>signup form</li>
                        </ol>
                    </div>
          
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->
<!-- sign-up form -->
<div class="content">
    <div class="container">
        <div class="box sing-form">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12 ">
                    <!-- form -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                                <h3 class="mb10">Create Your Account</h3>
                                <p>Please fill all Resgister form Fields Below. </p>
                            </div>
                            <form class="forms-sample" action="index.php?controller=user&action=register" method="POST" enctype="multipart/form-data">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>User name</label>
                                        <label class="control-label sr-only" for="username"></label>
                                        <input id="username" name="username" type="text" class="form-control" placeholder="Create Your UserName"  required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <label class="control-l abel  sr-only" for="password"></label>
                                        <input id="password" name="password" type="password" class="form-control" placeholder="Create your password"  required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Re-Password</label>
                                        <label class="control-l abel  sr-only" for="password"></label>
                                        <input id="re_password" name="re_password" type="password" class="form-control" placeholder="Re-password"  required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <label class="control-label sr-only" for="name"></label>
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Enter Your Name"  required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <label class="control-label sr-only" for="phone"></label>
                                        <input id="phone" name="phone" type="text" class="form-control" placeholder=" Number"  required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <label class="control-label sr-only" for="email"></label>
                                        <input id="email" name="email" type="text" class="form-control" placeholder="Enter your email id"  required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Birthday</label>
                                        <label class="control-label sr-only" for="birthday"></label>
                                        <input id="birthday" name="birthday" type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Avatar</label>
                                        <label class="control-label sr-only" for="avatar"></label>
                                        <input id="avatar" name="avatar" type="file" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <button class="btn btn-primary btn-block mb10" name="register">Register</button>
                                    <div>
                                        <p>Have an Acount? <a href="index?controller=user&action=login" >Login</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.form -->
                    </div>
                </div>
                <!-- features -->
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                    <div class="box-body">
                        <div class="feature-left">
                            <div class="feature-icon">
                                <img src="./webroot/index/images/feature_icon_1.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4>Loyalty Points</h4>
                                <p>Aenean lacinia dictum risvitae pulvinar disamer seronorem ipusm dolor sit manert.</p>
                            </div>
                        </div>
                        <div class="feature-left">
                            <div class="feature-icon">
                                <img src="./webroot/index/images/feature_icon_2.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4>Instant Checkout</h4>
                                <p>Aenean lacinia dictum risvitae pulvinar disamer seronorem ipusm dolor sit manert.</p>
                            </div>
                        </div>
                        <div class="feature-left">
                            <div class="feature-icon">
                                <img src="./webroot/index/images/feature_icon_3.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4>Exculsive Offers</h4>
                                <p>Aenean lacinia dictum risvitae pulvinar disamer seronorem ipusm dolor sit manert.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.features -->
            </div>
        </div>
    </div>
</div>
<!-- /.sign-up form -->
<?php include './layout/customers/footer.php';?>
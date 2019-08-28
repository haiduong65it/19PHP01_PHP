<?php include 'header.php';?>
<!-- page-header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Product Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->
<!-- product-single -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="box">
                    <!-- product-description -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <img src="./webroot/admin/uploads/products/<?php echo $product['image'];?>" alt="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="product-single">
                                    <h2><?php echo $product['name']?> </h2>
                                    <div class="product-rating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                        <span class="text-secondary">&nbsp;(4.8 Review Stars)</span>
                                    </div>
                                    <p class="product-price" style="font-size: 38px;"><?php echo number_format($product['price']);?> VNĐ</p>
                                    <p>12.2 MP Rear | 8 MP Front Camera, 4GB RAM, 2700 mAh battery, Android 8.0, Qualcomm Snapdragon 835, Fingerprint Sensor</p>
                                    <form method="POST" action="index.php?controller=product&action=add_carts&id=<?php echo $product['id'];?>">
                                        <div class="product-quantity">
                                            <h5>Quantity</h5>
                                            <div class="quantity mb20">
                                                <input type="number" class="input-text qty text" step="1" min="1" max="10" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*">
                                            </div>
                                        </div>
                                    <button type="submit" class="btn btn-default" name="add_carts"><i class="fa fa-shopping-cart"></i>&nbsp;Add to cart</button>
                                    </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="box-head scroll-nav">
                    <div class="head-title"> <a class="page-scroll active" href="#product">Product Details</a>
                        <a class="page-scroll" href="#review">Add Your Reviews</a></div>
                </div>
            </div>
        </div>
        <!-- highlights -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="box" id="product">
                    <div class="box-body">
                        <div class="highlights">
                            <h4 class="product-small-title">Highlights</h4>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <ul class="arrow">
                                        <li>12.2 MP Rear | 8 MP Front Camera </li>
                                        <li>4GB RAM </li>
                                        <li>2700 mAh battery</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <ul class="arrow">
                                        <li>Android 8.0 </li>
                                        <li>Qualcomm Snapdragon 835</li>
                                        <li>Fingerprint Sensor</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="highlights">
                            <h4 class="product-small-title">Specification</h4>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h4>General</h4>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb30">
                                    <ul>
                                        <li>Brand</li>
                                        <li>Model Number </li>
                                        <li>Body Material</li>
                                        <li>Sim Size</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb30">
                                    <ul>
                                        <li style="color: #1c1e1e;">Google Pixel </li>
                                        <li style="color: #1c1e1e;">Google XYZ</li>
                                        <li style="color: #1c1e1e;">Metal and Polycarbonate</li>
                                        <li style="color: #1c1e1e;">Micro</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h4>Display</h4>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <ul>
                                        <li>Screen Size </li>
                                        <li>Display Resolution </li>
                                        <li>Pixel Density</li>
                                        <li>Screen Protection </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <ul>
                                        <li style="color: #1c1e1e;">5 inch </li>
                                        <li style="color: #1c1e1e;">1280 X 720 Pixels</li>
                                        <li style="color: #1c1e1e;">294 PPI</li>
                                        <li style="color: #1c1e1e;">Gorilla Glass 4</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rating reviews  -->
        <div id="rating">
            <!-- customers review  -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="head-title">Customer Reviews</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <?php 
                                    if ($comment != ''){
                                        while ($cmt = $comment->fetch_assoc()) {
                                            if ($cmt['status'] == 1){
                                        # code...
                                ?>
                                <div class="customer-reviews">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-rating col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                            <p>By <span class="text-default"><?php echo $model->get_NameUser_id($cmt['user_id'])['name'];?></span> on <?php echo date('d/m/Y', strtotime($cmt['created'])) ?> </p>
                                        </div>
                                        
                                        <p><?php echo $cmt['content']?>.</p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="divider-line"></div>
                                    </div>
                                </div>
                            <?php }}}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customers review  -->
              <!-- reviews-form -->
<div id="review">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="head-title">Add A Reviews</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="review-form">
                          
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-rating">
                                     <h5>Your Rating : &nbsp;</h5>
                                        <div class="star-rate" id="rateYo"></div>
                                   
                                  
                                </div>
                            </div>
                            <form action="index.php?controller=product&action=comment&id=<?php echo $product['id'];?>" method="POST">
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only " for="textarea"></label>
                                        <textarea class="form-control" id="textarea" name="content" rows="4" placeholder="Enter your Reviews"></textarea>
                                    </div>
                                    <button id="submit" name="Comment" class="btn btn-primary">Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.reviews-form -->
</div>
    </div>
    <!-- /.product-description -->
<!-- /.product-single -->
</div>
<?php include 'footer.php';?>
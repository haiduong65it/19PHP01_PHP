<?php 
    $total = 0;
    if (isset($_SESSION['cart'])){
        foreach ($_SESSION['cart'] as $id => $value) {
            # code...
            $total += $_SESSION['cart'][$id]['price']*$_SESSION['cart'][$id]['quantity'];
        }
    }
?>
<?php include 'header.php';?>
<!-- page-header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li>Product List</li>
                            <li>Product Detail</li>
                            <li>Cart</li>
                        </ol>
                    </div>
              
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->
<!-- cart-section -->
<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="box">
                    <div class="box-head">
                        <h3 class="head-title">My Cart (<?php if (isset($_SESSION['cart_quantity'])) echo $_SESSION['cart_quantity'];
                            else echo 0?>)</h3>
                    </div>
                    <!-- cart-table-section -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <div class="cart">
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span>Product</span></th>
                                            <th>
                                                <span>Price</span></th>
                                            <th>
                                                <span>Quantity</span></th>
                                            <th>
                                                <span>Total</span></th>
                                            <th>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($_SESSION['cart'] as $id => $value) {
                                        ?>
                                            <tr>
                                                <td width="100px"><a href="#"><img src="./webroot/admin/uploads/products/<?php echo $model->get_Product($id)['image'];?>" alt="" ></a>
                                                    <span><a href="#"><?php echo $model->get_Product($id)['name'];?></a></span>
                                                </td>
                                                <td><?php echo $_SESSION['cart'][$id]['price'];?> VNĐ</td>
                                                <td>
                                                    <div class="product-quantity">
                                                        <div class="quantity">
                                                            <input type="number" class="input-text qty text" step="1" min="1" max="6" name="quantity" value="<?php echo $_SESSION['cart'][$id]['quantity'];?>" title="Qty" size="4" pattern="[0-9]*">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?php echo $_SESSION['cart'][$id]['price']*$_SESSION['cart'][$id]['quantity'];?></td>
                                                <th scope="row"><a href="index.php?controller=product&action=remove_cart&id=<?php echo $id?>" class="btn-close"><i class="fa fa-times-circle-o"></i></a></th>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.cart-table-section -->
                        </div>
                    </div>
                </div>
                <a href="index.php?controller=product&action=list_product" class="btn-link"><i class="fa fa-angle-left"></i> back to shopping</a>
            </div>
            <!-- cart-total -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box mb30">
                    <div class="box-head">
                        <h3 class="head-title">Price Details</h3>
                    </div>
                    <div class="box-body">
                        <div class=" table-responsive">
                            <div class="pay-amount ">
                                <table class="table mb20">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <span>Price (<?php if (isset($_SESSION['cart_quantity'])) echo $_SESSION['cart_quantity'];
                                                else echo 0?>  items)</span></th>
                                            <td><?php echo number_format($total)?> VNĐ</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <span>Delivery Charges</span></th>
                                            <td><strong class="text-green">Free</strong></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <span class="mb0" style="font-weight: 700;">Amount Payable</span></th>
                                            <td style="font-weight: 700; color: #1c1e1e; "><?php echo number_format($total)?> VNĐ</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="index.php?controller=product&action=order" class="btn btn-primary btn-block" onclick="alert('Bạn đã đặt hàng thành công')">Order</a>
                        </div>
                    </div>
                </div>
                <!-- coupon-section -->
                <div class="box mb30">
                    <div class="box-head">
                        <h3 class="head-title">Coupons &amp; Offers</h3>
                    </div>
                    <div class="box-body">
                        <form>
                            <div class="coupon-form">
                                <input type="text" name="coupon_code" class="form-control" id="coupon_code" value="" placeholder="Coupon code">
                                <input type="submit" class="btn btn-primary btn-block" name="apply_coupon" value="Apply coupon">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.coupon-section -->
            </div>
        </div>
        <!-- /.cart-total -->
    </div>
</div>
<!-- /.cart-section -->
<?php include 'footer.php';?>
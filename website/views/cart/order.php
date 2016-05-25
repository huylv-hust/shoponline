<?php require('website/views/shared/header.php'); ?>
<div class="product-model">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="home"><b>TRANG CHỦ</b></a></li>
            <li class="active"><a href="#" >Đơn hàng</a></li>
        </ol>
        <div class="col-md-9 product-model-sec">
            <?php require('website/views/cart/order_detail.php'); ?>
        </div>
        <?php require('website/views/shared/navbar.php'); ?>
</div>
</div>
<?php require('website/views/shared/footer.php'); ?>
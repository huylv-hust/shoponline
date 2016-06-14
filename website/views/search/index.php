<?php require('website/views/shared/header.php'); ?>

    <div class="product-model">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="home"><b>TRANG CHỦ</b></a></li>
                <li class="active"> Có <?php echo count($products) ?> kết quả phù hợp với từ
                    khóa <?php echo $_GET['id'] ?> </li>
            </ol>

            <div class="col-md-9 product-model-sec">
                <div class="feature-grids" style="background-color:#ffffff">

                    <?php if (!isset($products)) { ?>
                        <h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
                    <?php }else{ ?>
                    <?php foreach ($products as $product){ ?>
                        <div class="col-md-4 feature-grid jewel">
                            <a href="product/<?php echo $product['id']; ?>-<?php echo $product['alias']; ?>.html"
                               class="screenshot"
                               rel="<?php echo 'public/upload/product/' . $product['image1'] ?>"><?php echo '<image src="public/upload/product/' . $product['image1'] . '?time=' . time() . '"alt="' . $product['image1'] . '" />'; ?>
                            </a>

                            <div class="arrival-info">
                                <h4><?php echo $product['name'] ?></h4>
                                <?php if ($product["type"] == 3): ?>
                                    <span class="pric1"><del>Giá bán
                                            : <?php echo $product ? number_format($product['price'], 0, ',', '.') : 0; ?>
                                            VNĐ
                                        </del></span>
                                    <p>Giá khuyến mại
                                        : <?php echo $product ? number_format(($product['price']) - ($product['price']) * ($product['percent_off']) / 100, 0, ',', '.') : 0; ?>
                                        VNĐ</p>
                                <?php else: ?>
                                    <br>
                                    <p>Giá bán
                                        : <?php echo $product ? number_format($product['price'], 0, ',', '.') : 0; ?>
                                        VNĐ</p>
                                <?php endif ?>
                            </div>
                            <div class="viw">
                                <a href="product/<?php echo $product['id']; ?>-<?php echo $product['alias']; ?>.html"><span
                                        class="glyphicon glyphicon-eye-open"
                                        aria-hidden="true"></span>Quick
                                    View</a>
                            </div>
                            <?php if ($product["type"] == 3): ?>
                                <div class="shrt">
                                    <a href="product/<?php echo $product['id']; ?>-<?php echo $product['alias']; ?>.html"><span
                                            class="glyphicon glyphicon-star" aria-hidden="true"></span><b>Sale
                                            <?php echo $product['percent_off']; ?>%</b></a>
                                </div>
                            <?php endif ?>
                        </div>
                    <?php }} ?>
                </div>
            </div>
            <?php require('website/views/shared/navbar.php'); ?>
        </div>
    </div>
<?php require('website/views/shared/footer.php'); ?>
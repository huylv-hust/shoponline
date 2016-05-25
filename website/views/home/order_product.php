<div class="arrivals">
    <div class="container">
        <div class="block-title">
            <a class="view-all-product" href="type/1-san-pham-order.html">VIEW ALL<span> </span></a>  <h5
                class="block-title-name"><a style="color: #FFFFFF" href="type/1-san-pham-order.html">SẢN PHẨM NỔI BẬT</a></h5>
        </div>
        <div class="feature-grids" style="background-color:#ffffff">
            <?php if (empty($order_products)) : ?>
                <h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
            <?php endif; ?>
            <?php foreach ($order_products as $order_product): ?>
                <div class="col-md-3 feature-grid jewel">
                    <a href="product/<?php echo $order_product['Id']; ?>-<?php echo $order_product['alias']; ?>.html" class="screenshot"
                       rel="<?php echo 'public/upload/product/' . $order_product['Image1'] ?>"><?php echo '<image src="public/upload/product/' . $order_product['Image1'] . '?time=' . time() . '"alt="' . $order_product['Image1'] . '" />'; ?>
                    </a>

                    <div class="arrival-info">
                        <h4><?php echo $order_product['Name']?></h4>

                        <p>Giá bán : <?php echo $order_product ? number_format($order_product['Price'], 0, ',', '.') : 0; ?> vnđ</p>
                    </div>
                    <div class="viw">
                        <a href="product/view/<?php echo $order_product['Id']; ?>-<?php echo $order_product['alias']; ?>.html"><span
                                class="glyphicon glyphicon-eye-open"
                                aria-hidden="true"></span>Quick
                            View</a>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
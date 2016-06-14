<div class="featured">
    <div class="container">
        <div class="block-title">
            <a class="view-all-product" href="type/3-san-pham-khuyen-mai.html">VIEW ALL<span> </span></a>  <h5
                class="block-title-name"><a style="color: #FFFFFF" href="type/3-san-pham-khuyen-mai.html">SẢN PHẨM KHUYẾN MẠI</a></h5>
        </div>
        <div class="feature-grids" style="background-color:#ffffff">
            <?php if (empty($saleoff_products)) : ?>
                <h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
            <?php endif; ?>
            <?php foreach ($saleoff_products as $saleoff_product): ?>
                <div class="col-md-3 feature-grid jewel">
                    <a href="product/<?php echo $saleoff_product['id']; ?>-<?php echo $order_product['alias']; ?>.html" class="screenshot"
                       rel="<?php echo 'public/upload/product/' . $saleoff_product['image1'] ?>"><?php echo '<image src="public/upload/product/' . $saleoff_product['image1'] . '?time=' . time() . '"alt="' . $saleoff_product['image1'] . '" />'; ?>
                    </a>

                    <div class="arrival-info">
                        <h4><?php echo $saleoff_product['name'] ?></h4>
                    <span class="pric1"><del>Giá bán
                            : <?php echo $saleoff_product ? number_format($saleoff_product['price'], 0, ',', '.') : 0; ?> vnđ
                        </del></span>

                        <p>Giá khuyến mại : <?php echo $saleoff_product ? number_format(($saleoff_product['price']) - ($saleoff_product['price']) * ($saleoff_product['percent_off']) / 100, 0, ',', '.') : 0; ?>
                            vnđ</p>
                    </div>

                    <div class="viw">
                        <a href="product/<?php echo $saleoff_product['id']; ?>-<?php echo $saleoff_product['alias']; ?>.html"><span
                                class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick
                            View</a>
                    </div>
                    <?php if ($saleoff_product["type"] == 3): ?>
                        <div class="shrt">
                            <a href="product/<?php echo $saleoff_product['id']; ?>-<?php echo $saleoff_product['alias']; ?>.html"><span
                                    class="glyphicon glyphicon-star"
                                    aria-hidden="true"></span>Saleoff <?php echo $saleoff_product['percent_off']; ?>%</a>
                        </div>
                    <?php endif; ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
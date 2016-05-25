<div class="featured">
    <div class="container">
        <div class="block-title">
            <a class="view-all-product" href="type/2-san-pham-moi.html">VIEW ALL<span> </span></a>  <h5
                class="block-title-name"><a style="color: #FFFFFF" href="type/2-san-pham-moi.html">SẢN PHẨM MỚI</a></h5>
        </div>
        <div class="feature-grids" style="background-color:#ffffff">
            <?php if (empty($new_products)) : ?>
                <h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
            <?php endif; ?>
            <?php foreach ($new_products as $new_product): ?>

                <div class="col-md-3 feature-grid jewel">
                    <a href="product/<?php echo $new_product['Id']; ?>-<?php echo $new_product['alias']; ?>.html" class="screenshot"
                       rel="<?php echo 'public/upload/product/' . $new_product['Image1'] ?>"><?php echo '<image src="public/upload/product/' . $new_product['Image1'] . '?time=' . time() . '"alt="' . $new_product['Image1'] . '" />'; ?>
                    </a>

                    <div class="arrival-info">
                        <h4><?php echo $new_product['Name'] ?></h4>

                        <p>Giá bán : <?php echo $new_product ? number_format($new_product['Price'], 0, ',', '.') : 0; ?> vnđ</p>
                    </div>

                    <div class="viw">
                        <a href="product/<?php echo $new_product['Id']; ?>-<?php echo $new_product['alias']; ?>.html"><span
                                class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick
                            View</a>
                    </div>
                    <?php if ($new_product["TypeId"] == 3): ?>
                        <div class="shrt">
                            <a href="product/view/<?php echo $new_product['Id']; ?>-<?php echo $new_product['alias']; ?>.html"><span
                                    class="glyphicon glyphicon-star"
                                    aria-hidden="true"></span>Saleoff 10%</a>
                        </div>
                    <?php endif; ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
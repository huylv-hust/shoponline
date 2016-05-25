<link href="<?=PATH_URL?>/public/content/style.css" rel="stylesheet" type="text/css" media="all"/>
<?php require('website/views/shared/header.php'); ?>
<style>
    #search {
        margin-bottom: 0px !important;
    }
    .custom_price {
        color: #000;
        font-weight: 600;
        font-size: 1.3em;
    }
    .item_price {
        display: none;
    }
    .btn-primary {
        margin: 5px 0;;
    }

</style>
<div class="product-model">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="home"><b>TRANG CHỦ</b></a></li>
            <li class="active"><a
                    href="index.php?p=subcategory&idCate=<?php echo $product['CategoryId'] ?>&idSubCate=<?php echo $product['SubCategoryId'] ?>"><?php echo $breadCrumb ?></a>
            <li class="active"><?php echo $product['Name'] ?></li>
        </ol>
        <div class="col-md-9 product-model-sec">
            <div class=" single_top">
                <div class="single_grid">
                    <div class="product-info simpleCart_shelfItem">
                        <div class="product-info-cust">
                            <div class="grid images_3_of_2">
                                <div class="flexslider">
                                    <div class="display-non" style="display: none"><img
                                            src="<?php echo 'public/upload/product/' . $product['Image1'] ?>"
                                            class="item_image"></div>
                                    <script src="public/content/imagezoom.js"></script>
                                    <script defer src="public/content/jquery.flexslider.js"></script>
                                    <link rel="stylesheet" href="public/content/flexslider.css" type="text/css"
                                          media="screen"/>
                                    <script>
                                        $(window).load(function () {
                                            $('.flexslider').flexslider({
                                                animation: "slide",
                                                controlNav: "thumbnails"
                                            });
                                        });
                                    </script>
                                    <ul class="slides">
                                        <?php for ($i = 1; $i < 5; $i++): ?>
                                            <?php if (!empty($product['Image' . $i])) { ?>
                                                <li data-thumb="<?php echo 'public/upload/product/' . $product['Image' . $i] ?>">
                                                    <div class="thumb-image"><img
                                                            src="<?php echo 'public/upload/product/' . $product['Image' . $i] ?>"
                                                            data-imagezoom="true" class="img-responsive"></div>
                                                </li>
                                            <?php } else { ?>
                                                <img
                                                    src="<?php echo 'public/upload/product/' . $product['Image1'] ?>"
                                                    data-imagezoom="true" class="img-responsive">
                                            <?php } ?>
                                        <?php endfor; ?>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="desc1 span_3_of_2">
                                <h4 class="item_name"><?php echo $product['Name'] ?></h4>

                                <div class="cart-b">
                                    <div class="left-n ">
                                        <span>ID: <span class="item_number"><?php echo $product['Id'] ?></span></span>

                                        <form action="" class="sky-form">
                                            <fieldset>
                                                <section>
                                                    <div class="rating">
                                                        <input type="radio" name="stars-rating" id="stars-rating-5">
                                                        <label for="stars-rating-5"><i class="icon-star"></i></label>
                                                        <input type="radio" name="stars-rating" id="stars-rating-4">
                                                        <label for="stars-rating-4"><i class="icon-star"></i></label>
                                                        <input type="radio" name="stars-rating" id="stars-rating-3">
                                                        <label for="stars-rating-3"><i class="icon-star"></i></label>
                                                        <input type="radio" name="stars-rating" id="stars-rating-2">
                                                        <label for="stars-rating-2"><i class="icon-star"></i></label>
                                                        <input type="radio" name="stars-rating" id="stars-rating-1">
                                                        <label for="stars-rating-1"><i class="icon-star"></i></label>

                                                        <div class="clearfix"></div>
                                                    </div>
                                                </section>
                                            </fieldset>
                                        </form>
                                        <?php if ($product["TypeId"] == 3): ?>
                                            <span class="pric1"><del>Giá bán
                                                    : <?php echo $product ? number_format($product['Price'], 0, ',', '.') : 0; ?>
                                                    VNĐ
                                                </del></span><br>
                                            <span
                                                class="item_price"> <?php echo $product ? (($product['Price']) - ($product['Price']) * ($product['Percent_off']) / 100) : 0; ?></span>
                                            <span
                                                class="custom_price">Giá khuyến mại: <?php echo $product ? number_format(($product['Price']) - ($product['Price']) * ($product['Percent_off']) / 100, 0, ',', '.') : 0; ?>
                                                VNĐ</span><br>
                                        <?php else: ?>
                                            <span
                                                class="item_price"><?php echo $product ? ($product['Price']) : 0; ?></span>
                                            <span
                                                class="custom_price">Giá bán : <?php echo $product ? number_format($product['Price'], 0, ',', '.') : 0; ?>
                                                VNĐ</span>
                                            <br>
                                        <?php endif ?>

                                        <a href="cart/add/<?php echo $product['Id']; ?>"
                                           class="btn btn-primary" role="button">Đặt mua</a>

                                        <div class="item-list">
                                            <ul>
                                                <li>Chất liệu : <?php echo $product['Material'] ?></li>
                                                <li>Mầu sắc: <?php echo $product['Color'] ?></li>
                                                <li>Size: <?php echo $product['Size'] ?></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                                <h6>Mô tả chung</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                               </p>
                                <div class="share">
                                    <?php
                                    $title = urlencode('Title of Your iFrame Tab');
                                    $url = urlencode('http://www.facebook.com/yourfanpage');
                                    $summary = urlencode('Custom message that summarizes what your tab is about, or just a simple message to tell people to check out your tab.');
                                    $image = urlencode('http://www.yourdomain.com/facebookshare/images/customthumbnail.jpg');
                                    ?>
                                    <h5>Share Product :</h5>
                                    <ul class="share_nav">
                                        <li>
                                            <a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title; ?>&amp;p[summary]=<?php echo $summary; ?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image; ?>', 'sharer', 'toolbar=0,status=0,width=548,height=325');"
                                               target="_parent" href="javascript: void(0)"><img
                                                    src="public/content/facebook.png" title="facebook"></a></li>
                                        <li><a href="#"><img src="public/content/twitter.png" title="Twitter"></a></li>
                                        <li><a href="#"><img src="public/content/rss.png" title="Rss"></a></li>
                                        <li><a href="#"><img src="public/content/gpluse.png" title="Google+"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="toogle">
                    <div class="col-lg-12" style="padding: 0px;padding-right: 0px">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Comments
                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#home" data-toggle="tab">Bình luận</a></li>
                                    <li><a href="#profile" data-toggle="tab">Chi tiết</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home">
                                        <div class="fb-comments" data-href="http://shop90er.esy.es/" data-width="550" data-numposts="10"></div>
                                    </div>
                                    <div class="tab-pane fade" id="profile">
                                        <h4><br></h4>

                                        <?php echo $product ? ($product['Description']) : 0; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require('website/views/shared/navbar.php'); ?>
    </div>
</div>
<?php require('website/views/shared/footer.php'); ?>
<?php
$options_category = array(
    'order_by' => 'Id'
);
$categories = get_all('categories', $options_category);

$options_type = array(
    'order_by' => 'Id'
);
$types = get_all('type', $options_type);

$options_product_new = array(
    'where' => 'TypeId=3',
    'limit' => '2',
    'offset' => '0',
    'order_by' => 'RAND()'
);
$products_new = get_all('product', $options_product_new);
?>
<div class="rsidebar span_1_of_left">
    <section class="sky-form">
        <div class="product_right">
            <div class="sub-cate">
                <h3 class="cate">CATEGORIES</h3>
                <ul class="menu">
                    <?php if (empty($categories)) : ?>
                        <h3 class="col-sm-12">Không có danh mục nào.</h3>
                    <?php endif; ?>
                    <?php foreach ($categories as $cate): ?>
                        <?php if($cate['Id']!=3):?>
                        <li class="item1"><a
                                href="group/<?php echo $cate['Id'] ?>-<?php echo $cate['alias'] ?>.html"> <?php echo $cate['Name'] ?>
                                <img class="arrow-img"
                                     src="public/content/arrow1.png" alt=""/>
                            </a>

                            <ul class="cute">
                                <?php
                                $optionsCate = array(
                                    'where' => 'CategoryId=' . $cate['Id'] . ' ' . 'and pId = 0',
                                );
                                $subcategory = get_all('subcategory', $optionsCate)
                                ?>
                                <?php foreach ($subcategory as $subcate): ?>
                                    <li class="subitem1"><a
                                            href="category/<?php echo $subcate['Id'] ?>-<?php echo $subcate['alias'] ?>.html"><?php echo $subcate['Name'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                        </li>
                        <?php else:?>
                        <?php endif;?>
                    <?php endforeach; ?>
                        <ul class="kid-menu ">
                            <li>
                                <a href="group/<?php echo $cate['Id'] ?>-<?php echo $cate['alias'] ?>.html"><?php echo $cate['Name'] ?></a>
                            </li>
                        </ul>
                    <?php if (!empty($types)) : ?>
                        <ul class="kid-menu ">
                            <?php foreach ($types as $type): ?>
                                <li>
                                    <a href="type/<?php echo $type['Id'] ?>-<?php echo $type['alias'] ?>.html"><?php echo $type['Name'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </ul>
            </div>
            <!--initiate accordion-->
            <script type="text/javascript">
                $(function () {
                    var menu_ul = $('.menu > li > ul'),
                        menu_a = $('.menu > li > a');
                    menu_ul.hide();
                    menu_a.click(function (e) {
                        e.preventDefault();
                        if (!$(this).hasClass('active')) {
                            menu_a.removeClass('active');
                            menu_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true, true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true, true).slideUp('normal');
                        }
                    });

                });
            </script>
        </div>
    </section>
</div>
<?php if(isset($_GET['controller'])) $controller = $_GET['controller'];
    if($controller !== 'cart'){
?>
<style>
    .arrival-info p {
        margin: 5px 0 5px;
    }

    .arrival-info {
        margin-top: 0.1em;
        text-align: center;
    }

    .menu_2 {
        width: auto;
        height: auto;
        padding: 0;
        list-style: none;
        margin: 0;
        margin-bottom: 10px;
        /*background: #FBFBFC;*/
        background: #f5f5f5;
        border: 1px solid #ddd;
    }
</style>
<div class="rsidebar span_1_of_left" style="margin: 0.9em 0 0 0;">
    <section class="sky-form">
        <div class="product_right">
            <div class="sub-cate">
                <?php foreach ($products_new as $product_new): ?>
                    <h5 class="cate"><?php echo $product_new['Name'] ?></h5>
                    <ul class="menu_2">
                        <li>
                            <a href="product/<?php echo $product_new['Id']; ?>-<?php echo $product_new['alias']; ?>.html"
                               class="screenshot"
                               rel="<?php echo 'public/upload/product/' . $product_new['Image1'] ?>"><?php echo '<image class="img-responsive" src="public/upload/product/' . $product_new['Image1'] . '?time=' . time() . '"alt="' . $product_new['Image1'] . '" />'; ?>
                            </a>

                            <div class="arrival-info">
                                <?php if ($product_new["TypeId"] == 3): ?>
                                    <span class="pric1"><del>Giá bán
                                            : <?php echo $product_new ? number_format($product_new['Price'], 0, ',', '.') : 0; ?>
                                            VNĐ
                                        </del></span>
                                    <p>Giá khuyến mại
                                        : <?php echo $product_new ? number_format(($product_new['Price']) - ($product_new['Price']) * ($product_new['Percent_off']) / 100, 0, ',', '.') : 0; ?>
                                        VNĐ</p>
                                <?php else: ?>
                                    <br>
                                    <p>Giá bán
                                        : <?php echo $product_new ? number_format($product_new['Price'], 0, ',', '.') : 0; ?>
                                        VNĐ</p>
                                <?php endif ?>
                            </div>
                        </li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
<?php }?>

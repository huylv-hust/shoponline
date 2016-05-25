<?php
$options_parent_menu = array(
    'order_by' => 'Id'
);
$parent_menus = get_all('categories',$options_parent_menu);

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <base href="http://localhost/ShopOnline/"/>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'eCommerce - Fashion Shop'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Shop thời trang nam">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Shop thời trang nam"/>
    <link href="admin/themes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="public/content/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <link href="public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="public/css/header.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="public/css/livechat.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="public/css/memenu.css" rel="stylesheet" type="text/css" media="all"/>

</head>
<body>
<div class="top_bg" id="top1">
    <div class="container">
        <div class="header_top-sec">
            <div class="top_right">
                <ul>
                    <li><a href="intro">Hướng dẫn Order </a></li>
                    |
                    <li><a href="contact">Liên Hệ</a></li>
                </ul>
            </div>
            <div class="top_right" style="padding-left: 2em;">
            </div>
            <div class="top_left">
                <form style="margin-bottom:0em " action="http://localhost/ShopOnline/search/" method="get"
                      onsubmit="return false;">
                    <input type=search name='q' id='q' value="Nhập từ khóa..." onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Nhập từ khóa...';}">
                    <input type="submit" value="Tìm kiếm"
                           onclick="window.location.href=this.form.action + this.form.q.value;" class="input-search"/>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="header-top">
    <div class="header-bottom">
        <div class="container">
            <div class="logo">
                <a href="index.html"><h1>Fashion Store</h1></a>
            </div>
            <div class="top-nav">
                <ul class="memenu skyblue">
                    <li><a href="home">Trang chủ</a></li>
                    <?php foreach ($parent_menus as $parent_menu): $parentId = $parent_menu['Id']; ?>
                        <?php if ($parent_menu['Id'] != 3): ?>
                            <li class="grid"><a
                                    href="group/<?php echo $parent_menu['Id'] ?>-<?php echo $parent_menu['alias'] ?>.html"><?php echo $parent_menu['Name'] ?></a>

                                <div class="mepanel">
                                    <ul class="row">
                                        <?php
                                            $optionmenus = array(
                                                'where' => 'CategoryId=' . $parent_menu['Id'] . ' ' . 'and pId = 0',
                                            );
                                            $_rowmenus = get_all('subcategory', $optionmenus)
                                        ?>
                                        <?php foreach ($_rowmenus as $_rowmenu): ?>
                                            <li class="col1 me-one">
                                                <h4>
                                                    <a href="category/<?php echo $_rowmenu['Id'] ?>-<?php echo $_rowmenu['alias'] ?>.html"><?php echo $_rowmenu['Name'] ?></a>
                                                </h4>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                        <?php elseif ($parent_menu['Id'] == 3): ?>
                            <li class="grid"><a
                                    href="group/<?php echo $parent_menu['Id'] ?>-<?php echo $parent_menu['alias'] ?>.html"><?php echo $parent_menu['Name'] ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <li><a href="livesport">Live sport</a></li>
                </ul>
            </div>
            <div class="cart box_1">
                <a href="cart"><i class="glyphicon glyphicon-shopping-cart"></i> Giỏ hàng : <?php echo cart_number(); ?> sp</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

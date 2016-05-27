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

    <script src="public/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="public/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <script src="public/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="public/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
    <script src="public/javascript/common.js" type="text/javascript"></script>
    <link href="public/css/stylesheet.css" rel="stylesheet">

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
            <div class="top_left">
                <ul>
                    <li><a href="intro">Hướng dẫn Order </a></li>
                    |
                    <li><a href="contact">Liên Hệ</a></li>
                </ul>
            </div>
            <div class="top_left" style="padding-left: 2em;">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<nav id="top">
    <div class="container">
        <div id="top-links" class="nav pull-right">
            <ul class="list-inline">
                <li><a href="contact""><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">0984787652</span></li>
                <li class="dropdown"><a href="signin" title="Tài Khoản Của Bạn" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">Tài Khoản Của Bạn</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <?php if (isset($logged)) { ?>
                            <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
                            <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
                            <li><a href="<?php echo $transaction; ?>"><?php echo $text_transaction; ?></a></li>
                            <li><a href="<?php echo $download; ?>"><?php echo $text_download; ?></a></li>
                            <li><a href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a></li>
                        <?php } else { ?>
                            <li><a href="signup">Đăng Ký</a></li>
                            <li><a href="signin">Đăng Nhập</a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li><a href="wishlist" id="wishlist-total" title="Yêu Thích"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">Yêu Thích</span></a></li>
                <li><a href="cart" title="Giỏ Hàng"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Giỏ Hàng</span></a></li>
                <li><a href="checkout" title="Thanh Toán"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">Thanh Toán</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="header-top">
    <div class="header-bottom">
        <div class="container">
            <div class="col-sm-4" id="logo">
                <a href="home" style="">
                    <h1 style="margin: 0">Fashion Store</h1>
                </a>
            </div>
            <div class="col-sm-5">
                <div class="input-group" id="search">
                    <input type="text" class="form-control input-lg" placeholder="Search" value="" name="search">
                    <span class="input-group-btn">
                        <button class="btn btn-default btn-lg" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </div>
            <div class="cart box_1 col-sm-3">
                <a href="cart"><i class="glyphicon glyphicon-shopping-cart"></i> Giỏ hàng : <?php echo cart_number(); ?> sp</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="container">
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
        </div>
    </div>
</div>

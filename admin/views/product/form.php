<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Sản phẩm</div>
<div class="panel-body">
    <form id="product-form" class="form-horizontal" method="post" action="admin.php?controller=product&amp;action=edit"
          enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo isset($product['id']) ? $product['id'] : ''; ?>"/>
        <div class="form-group">
            <label for="type" class="col-sm-3 control-label">Nhóm Sản Phẩm</label>
            <div class="col-sm-9">
                <select name="type" class="form-control">
                    <option></option>
                    <option value="1" <?php echo isset($product['type']) && $product['type'] == 1 ? 'selected' : ''?>>Sản Phẩm mới</option>
                    <option value="2" <?php echo isset($product['type']) && $product['type'] == 2 ? 'selected' : ''?>>Sản Phẩm Nổi Bật</option>
                    <option value="3" <?php echo isset($product['type']) && $product['type'] == 3 ? 'selected' : ''?>>Sản Phẩm Khuyến Mại</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="category_id" class="col-sm-3 control-label">Danh mục</label>
            <div class="col-sm-9">
                <select name="category_id" class="form-control" id="category_id">
                    <?php foreach ($category as $v) {
                        $selected = '';
                        if (isset($product['category_id']) && ($product['category_id'] == $v['id'])) $selected = 'selected';
                        echo '<option value="'.$v['id'].'" '.$selected.'>'. $v['name'].'</option>';
                    } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="sub_category_id" class="col-sm-3 control-label">Danh mục con</label>
            <div class="col-sm-9">
                <select name="sub_category_id" class="form-control" id="subcategory_id">
                    <?php foreach ($sub_category as $sub) {
                        $selected = '';
                        if (isset($product['sub_categoryid']) && ($product['sub_categoryid'] == $sub['id'])) $selected = 'selected=""';
                        echo '<option value="'.$sub['id'].'" '.$selected.'>'.$sub['name'].'</option>';
                    } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Tên sản phẩm</label>
            <div class="col-sm-9">
                <input name="name" type="text" value="<?php echo isset($product['name']) ? $product['name'] : ''; ?>"
                       class="form-control" id="name" placeholder="Tên sản phẩm" required=""/>
            </div>
        </div>
        <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Giá sản phẩm</label>
            <div class="col-sm-9">
                <input name="price" type="text"
                       value="<?php echo isset($product['price']) ? number_format($product['price'], 0, ',', '.') : 0; ?>"
                       class="form-control" id="price" placeholder="0" pattern="[0-9\.]+" required=""/>
            </div>
        </div>
        <div class="form-group">
            <label for="color" class="col-sm-3 control-label">Mầu sắc</label>
            <div class="col-sm-9">
                <input name="color" type="text" value="<?php echo isset($product['color']) ? $product['color'] : ''; ?>"
                       class="form-control" id="color" placeholder="Mầu sắc" required=""/>
            </div>
        </div>
        <div class="form-group">
            <label for="material" class="col-sm-3 control-label">Chất liệu</label>
            <div class="col-sm-9">
                <input name="material" type="text" value="<?php echo isset($product['material']) ? $product['material'] : ''; ?>"
                       class="form-control" id="material" placeholder="Chất liệu" required=""/>
            </div>
        </div>
        <div class="form-group">
            <label for="size" class="col-sm-3 control-label">Size</label>
            <div class="col-sm-9">
                <input name="size" type="text" value="<?php echo isset($product['size']) ? $product['size'] : ''; ?>"
                       class="form-control" id="size" placeholder="Size"/>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Ngày tạo</label>
            <div class="col-sm-9">
                <input name="" readonly type="date" value="<?php echo isset($product['createdate']) ? $product['createdate'] : date('Y-m-d'); ?>"
                       class="form-control" id="createdate"  min="2000-01-02" max="2016-12-31"/>
            </div>
        </div>
        <div class="form-group">
            <label for="sale" class="col-sm-3 control-label">Sale off</label>
            <div class="col-sm-9">
                <input type="radio" name="sale"
                    <?php if (isset($product['sale']) && $product['sale'] == "1") echo "checked"; ?>
                       value="1">Bật
                <input type="radio" name="sale"
                    <?php if (isset($product['sale']) && $product['sale'] == "0") echo "checked"; ?>
                       value="0">Tắt
            </div>
        </div>
        <div class="form-group">
            <label for="percent_off" class="col-sm-3 control-label">Phần trăm giảm giá</label>
            <div class="col-sm-9">
                <input name="percent_off" type="text" value="<?php echo isset($product['percent_off']) ? $product['percent_off'] : ''; ?>"
                       class="form-control" id="percent_off" placeholder="Phần trăm giảm giá"/>
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-sm-3 control-label">Thông tin chi tiết</label>
            <div class="col-sm-9">
                <textarea name="description"  class="form-control" id="description"
                          placeholder="Thông tin sản phẩm"/><?php echo isset($product['description']) ? $product['description'] : ''; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="totalview" class="col-sm-3 control-label">Lượt View</label>
            <div class="col-sm-9">
                <input name="totalview" type="text" value="<?php echo isset($product['totalview']) ? $product['totalview'] : ''; ?>"
                       class="form-control" id="totalview" placeholder="Lượt view"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                <label for="image1" class="col-sm-9 control-label">Ảnh 1</label>
                <input name="image1" type="file" class="border" id="image1" accept="image/*"/>
                <?php if (isset($product['image1']) && is_file('public/upload/product/' . $product['image1'])) {
                    echo '<image src="public/upload/product/' . $product['image1'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>
            <div class="col-sm-3">
                <label for="image2" class="col-sm-9 control-label">Ảnh 2</label>
                <input name="image2" type="file" class="" id="image2" accept="image/*"/>
                <?php if (isset($product['image2']) && is_file('public/upload/product/' . $product['image2'])) {
                    echo '<image src="public/upload/product/' . $product['image2'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>
            <div class="col-sm-3">
                <label for="image3" class="col-sm-9 control-label">Ảnh 3</label>
                <input name="image3" type="file" class="" id="image3" accept="image/*"/>
                <?php if (isset($product['image3']) && is_file('public/upload/product/' . $product['image3'])) {
                    echo '<image src="public/upload/product/' . $product['image3'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>
            <div class="col-sm-3">
                <label for="image4" class="col-sm-9 control-label">Ảnh 4</label>
                <input name="image4" type="file" class="" id="image4" accept="image/*"/>
                <?php if (isset($product['image4']) && is_file('public/upload/product/' . $product['image4'])) {
                    echo '<image src="public/upload/product/' . $product['image4'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-9">
                <button type="submit" class="btn btn-primary"><?php echo isset($product) ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="btn btn-warning" href="admin.php?controller=product">Trở về</a>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function(){
        $("#category_id").change(function(){
            var cid = $(this).val();
            $.get("admin/views/product/getcategory.php",{cid:cid},function(data){
                $("#sub_category_id").html(data);
            });
        });
    });
</script>

<script src="admin/themes/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="admin/themes/ckfinder/ckfinder.js"></script>
<script type="text/javascript">CKEDITOR.replace('description',{height: '800px'});</script>

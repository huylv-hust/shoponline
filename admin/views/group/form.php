<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Danh mục nhóm sản phẩm</div>
<div class="panel-body">
    <form id="category-form" class="form-horizontal" method="post" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo isset($group['id']) ? $group['id'] : ''; ?>"/>

        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Tên nhóm danh mục</label>

            <div class="col-sm-9">
                <input name="name" type="text" value="<?php echo isset($group['name']) ? $group['name'] : ''; ?>"
                       class="form-control" id="name" placeholder="Tên danh mục" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="category_id" class="col-sm-3 control-label">Danh mục</label>

            <div class="col-sm-9">
                <select name="parent_id" class="form-control" id="category_id">
                    <option></option>
                    <?php foreach ($category as $cate) {
                        $selected = isset($group['parent_id']) && ($group['parent_id'] == $cate['id']) ? 'selected' : '';
                        echo '<option value="' . $cate['id'] . '" ' . $selected . '>' . $cate['name'] . '</option>';
                    } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="alias" class="col-sm-3 control-label">Đường dẫn</label>

            <div class="col-sm-9">
                <input name="alias" type="text" value="<?php echo isset($group['alias']) ? $group['alias'] : ''; ?>"
                       class="form-control" id="name" placeholder="Dường dẫn" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary"><?php echo isset($group) ? 'Cập nhật' : 'Thêm mới' ;?></button>
                <a class="btn btn-warning" href="admin.php?controller=group">Trở về</a>
            </div>
        </div>
    </form>
</div>

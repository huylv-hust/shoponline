<style>
    input[type=checkbox], input[type=radio] {
        margin: 10px 5px;
    }
</style>
<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Quyền truy cập website</div>
<div class="panel-body">
    <form id="product-form" class="form-horizontal" method="post"
          action="admin.php?controller=role&amp;action=edit" enctype="multipart/form-data" role="form">
        
        <div class="form-group">
            <label for="title" class="col-sm-3 control-label">Tên Đăng nhập</label>
            <div class="col-sm-9">
                <input name="username" type="email" value="<?php echo isset($role['username']) ? $role['username'] : ''; ?>"
                       class="form-control" placeholder="User Name" required="required"/>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-3 control-label">Quyền Truy Cập</label>
            <div class="col-sm-9">
                <select name="role" class="form-control" required>
                    <option></option>
                    <option value="1" <?php echo isset($role['role']) && $role['role'] == 1 ? 'selected' : ''?> >Quản Trị</option>
                    <option value="2" <?php echo isset($role['role']) && $role['role'] == 2 ? 'selected' : ''?> >Người Dùng</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-3 control-label">Tên Người Dùng</label>
            <div class="col-sm-9">
                <input name="name" type="text" value="<?php echo isset($role['name']) ? $role['name'] : ''; ?>"
                       class="form-control" placeholder="Name"/>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-3 control-label">Số Điện Thoại</label>
            <div class="col-sm-9">
                <input name="phone" type="text" value="<?php echo isset($role['phone']) ? $role['phone'] : ''; ?>"
                       class="form-control" placeholder="Phone">
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-3 control-label">Địa chỉ</label>
            <div class="col-sm-9">
                <input name="address" type="text" value="<?php echo isset($role['name']) ? $role['name'] : ''; ?>"
                       class="form-control" placeholder="Address">
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo isset($role['id']) ? $role['id'] : ''?>">
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit"
                        class="btn btn-primary"><?php echo isset($role) ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="btn btn-warning" href="admin.php?controller=role">Trở về</a>
            </div>
        </div>
    </form>
</div>


<?php require('admin/views/shared/header.php'); ?>
<div id="page-wrapper">
	<div class="panel panel-default">
		<div class="panel-heading">
			<?php echo $title ?>
		</div>
		<div class="panel-body">
			<div class="dataTable_wrapper">
				<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Thông Tin Tài Khoản</div>
				<div class="panel-body">
					<form id="product-form" class="form-horizontal" method="post"
					      action="admin.php?controller=role&amp;action=edit" enctype="multipart/form-data" role="form">

						<div class="form-group">
							<label for="title" class="col-sm-3 control-label">Tên Đăng nhập</label>
							<div class="col-sm-9">
								<input readonly name="username" type="email" value="<?php echo isset($role['username']) ? $role['username'] : ''; ?>"
								       class="form-control" placeholder="User Name" required="required"/>
							</div>
						</div>
						<div class="form-group">
							<label for="title" class="col-sm-3 control-label">Quyền Truy Cập</label>
							<div class="col-sm-9">
								<input readonly name="username" type="email" value="<?php echo isset($role['role']) && $role['role'] == 1 ? 'Quản trị' :'Người Dùng'; ?>"
								       class="form-control" placeholder="User Name" required="required"/>
							</div>
						</div>
						<div class="form-group">
							<label for="title" class="col-sm-3 control-label">Tên Người Dùng</label>
							<div class="col-sm-9">
								<input readonly name="name" type="text" value="<?php echo isset($role['name']) ? $role['name'] : ''; ?>"
								       class="form-control" placeholder="Name"/>
							</div>
						</div>
						<div class="form-group">
							<label for="title" class="col-sm-3 control-label">Số Điện Thoại</label>
							<div class="col-sm-9">
								<input readonly name="phone" type="text" value="<?php echo isset($role['phone']) ? $role['phone'] : ''; ?>"
								       class="form-control" placeholder="Phone">
							</div>
						</div>
						<div class="form-group">
							<label for="title" class="col-sm-3 control-label">Địa chỉ</label>
							<div class="col-sm-9">
								<input readonly name="address" type="text" value="<?php echo isset($role['address']) ? $role['address'] : ''; ?>"
								       class="form-control" placeholder="Address">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<a class="btn btn-warning" href="admin.php">Trở về</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>


<?php require('admin/views/shared/header.php');?>
    <div id="page-wrapper">
        <a href="admin.php?controller=role&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách quyền truy cập</b>
            </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-role">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên Đăng Nhập</th>
                                <th>Quyền Truy Cập</th>
                                <th>Tên Khách</th>
                                <th>Số Điện Thoại</th>
                                <th>Địa Chỉ</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($roles as $role){ ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $role['id'] ?></td>
                                    <td>
                                        <a href="admin.php?controller=role&amp;action=edit&amp;id=<?php echo $role['id']; ?>"><?php echo $role['username']; ?></a>
                                    </td>
                                    <td><?php echo $role['role'] == 1 ? 'Quản Trị' : 'Người Dùng' ?></td>
                                    <td><?php echo $role['name'] ?></td>
                                    <td><?php echo $role['phone'] ?></td>
                                    <td><?php echo $role['address'] ?></td>
                                    <td>
                                        <a href="admin.php?controller=role&amp;action=edit&amp;id=<?php echo $role['id']; ?>"
                                           class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="admin.php?controller=role&amp;action=delete&amp;id=<?php echo $role['id']; ?>"
                                           class="text-danger deleteitem"><i class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#dataTables-role').DataTable({
                     responsive: true,  "order":[[0, 'desc']]
                });
            });
        </script>
    </div>
<?php require('admin/views/shared/footer.php'); ?>
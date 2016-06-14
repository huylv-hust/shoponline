<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
            <a href="admin.php?controller=group&amp;action=edit" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus"></i> Thêm mới</a>

            <div class="panel panel-default">
                <div class="panel-heading text-center">
                   <b> Danh mục nhóm sản phẩm</b>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-group">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên nhóm</th>
                                <th>Tên danh mục</th>
                                <th>Dường dẫn</th>
                                <th>Tác vụ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($groups as $group): ?>
                                <tr class="odd gradeX">
                                    <td><h4 class="item_name"><?php echo $group['id'] ?></h4></td>
                                    <td>
                                        <a href="admin.php?controller=group&amp;action=edit&amp;id=<?php echo $group['id']; ?>"><?php echo $group['name']; ?></a>
                                    </td>
                                    <td>
                                        <?php echo $cate[$group['parent_id']]; ?>
                                    </td>
                                    <td><?php echo $group['alias'] ?></td>
                                    <td>
                                        <a href="admin.php?controller=group&amp;action=edit&amp;id=<?php echo $group['id']; ?>"
                                           class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="admin.php?controller=group&amp;action=delete&amp;id=<?php echo $group['id']; ?>"
                                           class="text-danger deleteitem"><i class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $('#dataTables-group').DataTable({
                        responsive: true,  "order":[[0, 'desc']]
                    });
                });
            </script>
      </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
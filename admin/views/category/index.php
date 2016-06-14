<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
    <a href="admin.php?controller=category&amp;action=edit" class="btn btn-primary pull-right"><i
            class="glyphicon glyphicon-plus"></i> Thêm mới</a>

        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh mục sản phẩm</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-cate">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên danh mục</th>
                            <th>Vị trí</th>
                            <th>Dường dẫn</th>
                            <th>Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($category as $cate): ?>
                            <tr class="odd gradeX">
                                <td><?php echo $cate['id'] ?></td>
                                <td>
                                    <a href="admin.php?controller=category&amp;action=edit&amp;id=<?php echo $cate['id']; ?>"><?php echo $cate['name']; ?></a>
                                <td><?php echo $cate['position'] ?></td>
                                <td><?php echo $cate['alias'] ?></td>
                                <td>
                                    <a href="admin.php?controller=category&amp;action=edit&amp;id=<?php echo $cate['id']; ?>"
                                       class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="admin.php?controller=category&amp;action=delete&amp;id=<?php echo $cate['id']; ?>"
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
                $('#dataTables-cate').DataTable({
                    responsive: true,  "order":[[0, 'desc']]
                });
            });
        </script>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
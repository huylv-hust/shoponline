<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=product&amp;action=edit" class="btn btn-primary pull-right"><i
                class="glyphicon glyphicon-plus"></i> Thêm mới</a>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Sản phẩm mới cập nhật</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-new">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên SP</th>
                            <th>Giá</th>
                            <th>Ngày tạo</th>
                            <th>Img</th>
                            <th>View</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($products as $product){ ?>
                            <tr class="odd gradeX">
                                <td><h4 class="item_name"><?php echo $product['id'] ?></h4></td>
                                <td>
                                    <a href="admin.php?controller=product&amp;action=edit&amp;id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a>
                                </td>
                                <td><?php echo $product ? number_format($product['price'],0,',','.') : 0; ?></td>
                                <td class="center" style="width: 15%"><?php echo $product['createdate'] ?></td>
                                <td class="center"><?php echo '<image src="public/upload/product/' . $product['image1'] . '?time=' . time() . '" style="max-width:50px;" />'; ?></a></td>
                                <td class="center"><?php echo $product['totalview'] ?></td>
                                <td>
                                    <a href="admin.php?controller=product&amp;action=edit&amp;id=<?php echo $product['id']; ?>"
                                       class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="admin.php?controller=product&amp;action=delete&amp;pid=<?php echo $product['id']; ?>"
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
                $('#dataTables-new').DataTable({
                    "order":[[3, 'desc']]
                });
            });
        </script>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
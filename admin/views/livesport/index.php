<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=livesport&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách phát</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-livesport">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tiêu đề</th>
                            <th>Nội dung</th>
                            <th>Youtube</th>
                             <th>Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($livesports as $livesport): ?>
                            <tr class="odd gradeX">
                                <td><h4 class="item_name"><?php echo $livesport['Id'] ?></h4></td>
                                <td>
                                    <a href="admin.php?controller=livesport&amp;action=edit&amp;id=<?php echo $livesport['Id']; ?>"><?php echo $livesport['Title']; ?></a>
                                </td>
                                <td><h4 class="item_name"><?php echo $livesport['Description'] ?></h4></td>
                                <td class="center"><a href="<?php echo $livesport['Link'] ?>"><?php echo $livesport['Link'] ?></a></td>
                                <td>
                                    <a href="admin.php?controller=livesport&amp;action=edit&amp;id=<?php echo $livesport['Id']; ?>"
                                       class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="admin.php?controller=livesport&amp;action=delete&amp;id=<?php echo $livesport['Id']; ?>"
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
                $('#dataTables-livesport').DataTable({
                     responsive: true,  "order":[[0, 'desc']]
                });
            });
        </script>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
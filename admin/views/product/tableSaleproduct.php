<div class="panel panel-default">
    <div class="panel-heading text-center">
        <b>Sản phẩm khuyến mại</b>
    </div>
    <div class="panel-body">
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-saleoff">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Tên SP</th>
                    <th>Giá bán</th>
                    <th>Giá KM</th>
                    <th>Ngày tạo</th>
                    <th>Img</th>
                    <th>View</th>
                    <th>Chức năng</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($product_sale as $product): ?>
                    <tr class="odd gradeX">
                        <td><h4 class="item_name"><?php echo $product['id'] ?></h4></td>
                        <td>
                            <a href="admin.php?controller=product&amp;action=edit&amp;id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a>
                        </td>
                        <td><?php echo $product ? number_format($product['price'],0,',','.') : 0; ?></td>
                        <td><?php echo number_format(($product['price']) - ($product['price']) * ($product['percent_off']) / 100, 0, ',', '.'); ?></td>
                        <td class="center"><?php echo $product['createdate'] ?></td>
                        <td class="center"><?php echo '<image src="public/upload/product/' . $product['image1'] . '?time=' . time() . '" style="max-width:50px;" />'; ?></a></td>
                        <td class="center"><?php echo $product['totalview'] ?></td>
                        <td>
                            <a href="admin.php?controller=product&amp;action=edit&amp;id=<?php echo $product['id']; ?>"
                               class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="admin.php?controller=product&amp;action=delete&amp;id=<?php echo $product['id']; ?>"
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
        $('#dataTables-saleoff').DataTable({
            responsive: true,  "order":[[0, 'desc']]
        });
    });
</script>
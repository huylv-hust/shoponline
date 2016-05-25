<?php
function order_detail($oid) {
    $sql = "SELECT product.Id, product.Name,product.Image1, product.Price,product.TypeId, product.Percent_off, order_detail.Quantity
			FROM order_detail
			INNER JOIN product ON product.Id=order_detail.ProductId
			WHERE order_detail.OrderId=$oid";
    $query = mysql_query($sql) or die(mysql_error());
    $data = array();
    if (mysql_num_rows($query) > 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysql_free_result($query);
    }
    return $data;
}
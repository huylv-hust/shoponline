<?php
function role_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM role WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}
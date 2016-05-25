<?php
function contactinfo_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM contactinfo WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}
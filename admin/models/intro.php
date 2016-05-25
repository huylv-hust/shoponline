<?php
function introduction_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM intro WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}
<?php
function livesport_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM livesport WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}
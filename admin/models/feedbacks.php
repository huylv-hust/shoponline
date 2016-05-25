<?php
function feedback_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM feedback WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}
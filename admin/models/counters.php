<?php
function counter_delete($couid) {
    $couid = intval($couid);
    $sql = "DELETE FROM user_online WHERE session=$couid";
    mysql_query($sql) or die(mysql_error());
}
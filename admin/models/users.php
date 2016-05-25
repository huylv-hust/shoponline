<?php
function user_login($email, $password) {
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 0,1";
    $query = mysql_query($sql) or die(mysql_error());
    if (mysql_num_rows($query)>0) {
        $_SESSION['user'] = mysql_fetch_assoc($query);
        return true;
    }
    return false;
}
function user_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM user WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}
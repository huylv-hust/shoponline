<?php
$session=session_id();
$time=time();
$time_check=$time-600; //Ấn định thời gian là 10 phút
$browser = $_SERVER['HTTP_USER_AGENT'];
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$date =  date("Y-m-d");
$sql="SELECT * FROM user_online WHERE session='$session'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count=="0"){
    insert_user_online($session,$time,$ip,$browser,$date);
    insert_visiter($session,$time,$ip,$browser,$date);
}
else {
    update_user_online($session,$time,$ip,$browser,$date);
}
$sql3="SELECT * FROM user_online";
$result3=mysql_query($sql3);
$count_user_online=mysql_num_rows($result3);
//echo "Số người đang online : $count_user_online ";
// Nếu quá 10 phút, xóa bỏ session
$sql4="DELETE FROM user_online WHERE time<$time_check";
$result4=mysql_query($sql4);
// Đóng kết nối
?>
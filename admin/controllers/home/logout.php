<?php
unset($_SESSION['user']);
unset($_SESSION['time']);
unset($_SESSION['info']);
header('location:admin.php');
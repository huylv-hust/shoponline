<?php
$options = array(
    'order_by' => 'Id DESC'
);
$livesports = get_all('livesport', $options);
$title = 'Thể theo trực tuyến';
require('website/views/livesport/index.php');
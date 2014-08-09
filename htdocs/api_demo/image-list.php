<?php
date_default_timezone_set('UTC');
$data = array();

$data['server_time'] = date('Y-m-d H:i:s');
echo json_encode($data);

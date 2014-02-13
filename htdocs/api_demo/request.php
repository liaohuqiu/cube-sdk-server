<?php
date_default_timezone_set('UTC');
$msg = $_REQUEST['msg'];

$data = array();
$data['ok'] = 1;
$data['server_time'] = date('Y-m-d H:i:s');

echo json_encode($data);

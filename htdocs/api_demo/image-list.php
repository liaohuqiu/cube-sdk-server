<?php
date_default_timezone_set('UTC');

$list = array();
$data = array();
$data['list'] = $list;

$data['server_time'] = date('Y-m-d H:i:s');
echo json_encode($data);

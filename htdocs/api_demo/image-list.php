<?php
date_default_timezone_set('UTC');
$msg = $_REQUEST['str'];

$data = array();

if (!$msg) {
    $data['ok'] = 0;
} else {
    $data['ok'] = 1;
}

$data['str'] = $msg;
$data['result'] = strrev($msg);
$data['server_time'] = date('Y-m-d H:i:s');
echo json_encode($data);

<?php
$msg = $_REQUEST['msg'];

$data = array();
$data['msg'] = $msg;
$data['ok'] = 1;
echo json_encode($data);

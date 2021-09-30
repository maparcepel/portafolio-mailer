<?php
include_once "cors.php";

$json = file_get_contents('php://input');
$data = json_decode($json);
echo json_encode($data);
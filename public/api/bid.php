<?php
error_reporting(0);
$bidamount = $_GET['bidamount'];
$userid = $_GET['userid'];
$productid = $_GET['productid'];
$link = mysqli_connect("localhost", "root", "", "carbazar");
$status = 'OK';

$query = "UPDATE `products` SET `maxbid`=$bidamount,`bidderid`=$userid WHERE `id`=$productid";
mysqli_query($link, $query);
$data = ["status" => $status];
header('Content-type: application/json');
echo json_encode($data);
?>
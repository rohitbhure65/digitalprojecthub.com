<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
include("include/post.php");
// SELECT code_file FROM project WHERE pid = 18;
$pid = $_REQUEST['pid'];
$query = mysqli_query($con, "SELECT code_file FROM project WHERE pid=$pid;");
$row = mysqli_fetch_assoc($query);
$code = $row["code_file"];
// $transactionId = $_GET['transactionId'];
// mysqli_query($con, "UPDATE transactions SET `file`=$code WHERE `transactionId`=$transactionId;");
header('Location: ' . $code);
exit;
// echo "<pre>";
// echo $code;
// echo $pid;
// echo "</pre>";

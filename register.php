<?php
include("class/user.php");
$sign = new users();
// $u = $_POST['name'];
// $p = $_POST['pass'];
// $e = $_POST['mail'];
// $r = $_POST['role'];
extract($_POST);
$sql = "insert into user values ('$user','$pass','$mail','$role')";
if ($sign->signup($sql) == true) {
    $sign->url("signup.php?run=success");
} else {
    $sign->url("signup.php?run=failed");
}

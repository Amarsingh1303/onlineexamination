<?php
include("class/user.php");
$log = new users();
extract($_POST);
if ($log->signin($user, $pass, $role)) {
    if ($role == "student")
        $log->url("homes.php");
    else
        $log->url("homet.php");
} else {
    $log->url("login.php?run=failed");
}

<?php
include("class/user.php");
$tid = new users();
extract($_POST);
//print_r($_POST);
$sql = "insert into test (test_id) values ('$cat')";
if ($tid->add_test_id($sql) == true) {
    //echo "succefull";
    $tid->url("homet.php?run=success");
} else {
    $tid->url("homet.php?run=failed");
}
// if ($tid->addtestid($sql) == true) {
//     
// } else {
//     $tid->url("homet.php?run=failed");
// }

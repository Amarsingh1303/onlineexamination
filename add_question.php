<?php
include("class/user.php");
$qid = new users();
extract($_POST);
//print_r($_POST);

$arr = array("$option1", "$option2", "$option3", "$option4");
//print_r($arr);
$result = array_search($answer, $arr);
//echo $result;
$sql = "insert into questions (question,ans1,ans2,ans3,ans4,answer,test_id) values ('$question','$option1','$option2','$option3','$option4','$result','$cat')";
if ($qid->add_question($sql) == true) {
    $qid->url("homet.php?qrun=qsuccess");
} else {
    $qid->url("homet.php?qrun=qsuccess");
}
// $qid->add_question($qid);

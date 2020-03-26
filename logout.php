<?php
include("class/user.php");
$close = new users();
if ($close->logout() == true) {
    $close->url("index.php");
} else {
    echo "erro while logout";
}

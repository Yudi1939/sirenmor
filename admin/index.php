<?php
include_once '../config/Config.php';
$con = new Config();
if ($con->auth()){
    switch (@$_GET['mod']) {
        case 'motor': 
            include_once 'controller/motor.php';
            break;
        default: 
            include_once 'controller/home.php';
            break;
    }
} else {
    include_once 'controller/login.php';
}
?>
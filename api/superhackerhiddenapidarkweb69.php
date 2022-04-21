<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php 
/* VERY BASIC API V1 .000010101010 PROBABL Y WILL NEVER GET TOUCHED AGAIN */
header("Content-type: application/json");
$response = (object) [
    "status" => 201,
];

$_user = $__user_h->fetch_uid($_GET['u']);
$response = (object) [
    "status" => 201,
    "hi_gamernox" => (object) [
        "username" => $_user['username'],
    ]
];

die(json_encode($response));
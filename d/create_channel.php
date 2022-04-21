<?php ob_start(); ?>
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
if(isset($_SESSION['transfer'])) {
$nuts['ch'] = $_SESSION['transfer'];

$deez = $__user_h->fetch_plus($_SESSION['plususer']);

if($_SESSION['plususer'] == $_SESSION['plususer']) {
    $b = json_decode($deez['channels']);
    array_push($b, $nuts['ch']);
    $b = json_encode($b);
    
    $stmt = $__db->prepare("UPDATE plus SET channels = :channels WHERE email = :email");
    $stmt->bindParam(":channels", $b);
    $stmt->bindParam(":email", $deez['email']);
    $stmt->execute(); ?> 1 <?php
}
}
header('Location: /channel_switcher');
?>
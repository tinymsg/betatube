<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_update.php"); ?>
<?php $video_h = new video_helper($db); ?>
<?php $db_h = new db_helper(); ?>
<?php $_video = $video_h->fetch_video_rid($_GET['video_id']); ?> 
<?php $initvid = new video_tools;
if($initvid->validate_video_id($_GET['video_id']) == 1) { 
$video_path = "/dynamic/videos/" . $_GET['video_id'] . ".mp4";
header('Accept-Ranges: bytes');
header('Content-Length:'.filesize($video_path));
readfile($video_path);
}
?>
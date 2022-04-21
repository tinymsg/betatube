
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_update.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_insert.php"); ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__user_i = new user_insert($__db); ?>
<?php $__user_u = new user_update($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php if(!$__video_h->video_exists($_GET['v'])) { header("Location: /?error=This video does not exist!"); } ?>
<?php $_video = $__video_h->fetch_video_rid($_GET['v']); ?>
<?php $_video['comments'] = $__video_h->get_comments_from_video($_video['rid']); ?>
<?php
	if($_video['visibility'] == "v" && @$_SESSION['siteusername'] != $_video['author']) {
		header("Location: /?error=This video is private!");
	}

	$__video_h->check_view($_GET['v'], @$_SERVER["HTTP_CF_CONNECTING_IP"]);

	$_SESSION['current_video'] = $_video['rid'];

	/* 
	PREPARE EMBEDS CLASS -- function(string $page_title, string $page_description...) 
	Returns a list of arrays for compatibility purposes & but downside is ugly for loop codes 
	Work on this tomorrow or some shit idk lol
	*/

	/* 
	USE THE GOD DAMN __CONFIG MORE -- idiot
	Work on this tomorrow or some shit
	*/
	
	$__server->page_embeds->page_title = htmlspecialchars($_video['title']);
	$__server->page_embeds->page_description = htmlspecialchars($_video['description']);
	$__server->page_embeds->page_image = "/dynamic/thumbs/" . $_video['thumbnail'];
	$__server->page_embeds->page_url = "http://betatube.net/watch?v=" . htmlspecialchars($_video['rid']);
?>
<?php if( isset($_SERVER['HTTP_SEC_FETCH_DEST']) && $_SERVER['HTTP_SEC_FETCH_DEST'] == 'iframe' ) {
	$image = '/dynamic/thumbs/' . $_video['thumbnail'];
	require_once($_SERVER['DOCUMENT_ROOT'] . "/player/embed.php");
} else{ ?>
<?php
if ($_SESSION["layout"] == "aug") {
	require_once($_SERVER['DOCUMENT_ROOT'] . "/watch2009.php");
}else {
	require_once($_SERVER['DOCUMENT_ROOT'] . "/watch2012.php");
}
?>
<?php } ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_update.php"); ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__user_u = new user_update($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php if(!isset($_SESSION['siteusername'])) { header("Location: /sign_in"); } ?>
<?php if(!$__user_h->if_admin($_SESSION['siteusername'])) { header("Location: /watch?v=rick"); } ?>
<?php
	$__server->page_embeds->page_title = "Admin";
	$__server->page_embeds->page_description = "you should not be here";
	$__server->page_embeds->page_url = "https://betatube.net/";

	function get_server_array_stats() {
		$stat1 = file('/proc/stat'); 
		sleep(1); 
		$stat2 = file('/proc/stat'); 
		$info1 = explode(" ", preg_replace("!cpu +!", "", $stat1[0])); 
		$info2 = explode(" ", preg_replace("!cpu +!", "", $stat2[0])); 
		$dif = array(); 
		$dif['user'] = $info2[0] - $info1[0]; 
		$dif['nice'] = $info2[1] - $info1[1]; 
		$dif['sys'] = $info2[2] - $info1[2]; 
		$dif['idle'] = $info2[3] - $info1[3]; 
		$total = array_sum($dif); 
		$cpu = array(); 
		foreach($dif as $x=>$y) $cpu[$x] = round($y / $total * 100, 1);

		return $cpu;
	}

	function adjustBrightness($hexCode, $adjustPercent) {
		$hexCode = ltrim($hexCode, '#');

		if (strlen($hexCode) == 3) {
			$hexCode = $hexCode[0] . $hexCode[0] . $hexCode[1] . $hexCode[1] . $hexCode[2] . $hexCode[2];
		}

		$hexCode = array_map('hexdec', str_split($hexCode, 2));

		foreach ($hexCode as & $color) {
			$adjustableLimit = $adjustPercent < 0 ? $color : 255 - $color;
			$adjustAmount = ceil($adjustableLimit * $adjustPercent);

			$color = str_pad(dechex($color + $adjustAmount), 2, '0', STR_PAD_LEFT);
		}

		return '#' . implode($hexCode);
	}

	function get_server_memory_usage() {
		$free = shell_exec('free');
		$free = (string)trim($free);
		$free_arr = explode("\n", $free);
		$mem = explode(" ", $free_arr[1]);
		$mem = array_filter($mem);
		$mem = array_merge($mem);
		$memory_usage = $mem[2]/$mem[1]*100;
	
		return $memory_usage;
	}

	function get_server_cpu_usage() {
		$load = sys_getloadavg();
		return $load[0];
	}	
?>
<?php
	if(!empty($_GET['title']) && !empty($_GET['user'])) {
	$stmt = $__db->prepare("UPDATE `users` SET `title` = :title WHERE `users`.`username` = :user");
	$stmt->bindParam(":title", $_GET['title']);
	$stmt->bindParam(":user", $_GET['user']);
	$stmt->execute();
	}
?>
<?php
	if(!empty($_GET['bio']) && !empty($_GET['user'])) {
	$stmt = $__db->prepare("UPDATE `users` SET `bio` = :title WHERE `users`.`username` = :user");
	$stmt->bindParam(":title", $_GET['bio']);
	$stmt->bindParam(":user", $_GET['user']);
	$stmt->execute();
	}
?>
<?php
	if(!empty($_GET['country']) && !empty($_GET['user'])) {
	$stmt = $__db->prepare("UPDATE `users` SET `country` = :title WHERE `users`.`username` = :user");
	$stmt->bindParam(":title", $_GET['country']);
	$stmt->bindParam(":user", $_GET['user']);
	$stmt->execute();
	}
?>
<?php
	if(!empty($_GET['featured_channels']) && !empty($_GET['user'])) {
	$stmt = $__db->prepare("UPDATE `users` SET `featured_channels` = :title WHERE `users`.`username` = :user");
	$stmt->bindParam(":title", $_GET['featured_channels']);
	$stmt->bindParam(":user", $_GET['user']);
	$stmt->execute();
	}
?>
<?php
	if(!empty($_GET['website']) && !empty($_GET['user'])) {
	$stmt = $__db->prepare("UPDATE `users` SET `website` = :title WHERE `users`.`username` = :user");
	$stmt->bindParam(":title", $_GET['website']);
	$stmt->bindParam(":user", $_GET['user']);
	$stmt->execute();
	}
?>
<?php
	if(!empty($_GET['channelversion']) && !empty($_GET['user'])) {
	$stmt = $__db->prepare("UPDATE `users` SET `channelversion` = :title WHERE `users`.`username` = :user");
	$stmt->bindParam(":title", $_GET['channelversion']);
	$stmt->bindParam(":user", $_GET['user']);
	$stmt->execute();
	}
?>
<?php
	if(!empty($_GET['m']) && !empty($_POST['user'])) {
	$stmt = $__db->prepare("UPDATE `users` SET `partner` = 'y' WHERE `users`.`username` = :user");
	$stmt->bindParam(":user", $_POST['user']);
	$stmt->execute();
	}
?>
<?php
if(empty($_GET['user'])) {
	$usernamea = $_POST['user'];
} else{
	$usernamea = $_GET['user'];
}
?>
<?php $ac = 'updated'; ?>
<?php
        $stmt = $__db->prepare("INSERT INTO adminlog (user, did, who) VALUES (:username, :did, :who)");
		$stmt->bindParam(":username", $_SESSION['siteusername']);
		$stmt->bindParam(":did", $ac);
		$stmt->bindParam(":who", $usernamea);
        $stmt->execute
?>
<?php header("Location: /admin/users"); ?>
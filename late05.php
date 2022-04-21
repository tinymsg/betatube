<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_update.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_insert.php"); ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__user_u = new user_update($__db); ?>
<?php $__user_i = new user_insert($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<!-- saved from url=(0066)https://web.archive.org/web/20051102094522/http://www.youtube.com/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="./late05_files/analytics.js.download" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app215.us.archive.org';v.server_ms=1418;archive_analytics.send_pageview({});});</script>
<script type="text/javascript" src="./late05_files/bundle-playback.js.download" charset="utf-8"></script>
<script type="text/javascript" src="./late05_files/wombat.js.download" charset="utf-8"></script>
<script type="text/javascript">
  __wm.init("https://web.archive.org/web");
  __wm.wombat("http://www.youtube.com:80/","20051102094522","https://web.archive.org/","web","/_static/",
	      "1130924722");
</script>
<link rel="stylesheet" type="text/css" href="./late05_files/banner-styles.css">
<link rel="stylesheet" type="text/css" href="./late05_files/iconochive.css">
	<title>Betatube</title>

	<link rel="stylesheet" href="./late05_files/styles.css" type="text/css">
	<link rel="alternate" type="application/rss+xml" title="YouTube - Recently Added Videos [RSS]" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/rss/global/recently_added.rss">

	<script language="javascript" type="text/javascript">
		onLoadFunctionList = new Array();
		function performOnLoadFunctions()
		{
			for (var i in onLoadFunctionList)
			{
				onLoadFunctionList[i]();
			}
		}
	</script>
	
	<meta name="description" content="Share your videos with friends and family">
	<meta name="keywords" content="video,sharing,camera phone,video phone">
	
</head>

<body onload="performOnLoadFunctions();">
<table width="800" cellpadding="0" cellspacing="0" border="0" align="center">
	<tbody><tr>
		<td bgcolor="#FFFFFF" style="padding-bottom: 25px;">
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tbody><tr valign="top">
		<td width="130" rowspan="2" style="padding: 0px 5px 5px 5px;"><a href="/"><img src="/BetaTube.png" width="120" height="48" alt="Betatube" border="0" style="vertical-align: middle; "></a></td>
		<td valign="top">
		
		<table width="670" cellpadding="0" cellspacing="0" border="0">
			<tbody><tr valign="top">
				<td style="padding: 0px 5px 0px 5px; font-style: italic;">Upload, tag and share your videos worldwide!</td>
				<td align="right">
				
				<table cellpadding="0" cellspacing="0" border="0">
					<tbody><tr>
						<td><a href="/sign_up"><strong>Sign Up</strong></a></td>
						<td style="padding: 0px 5px 0px 5px;">|</td>
						<td><a href="/sign_in">Log In</a></td>
						<td style="padding: 0px 5px 0px 5px;">|</td>
						<td style="padding-right: 5px;"><a href="/layouts">Layouts</a></td>
					</tr>
				</tbody></table>
				
				</td>
			</tr>
		</tbody></table>
		</td>
	</tr>
	<tr valign="bottom">
		<td>
		<!-- tab table -->
		<table cellpadding="0" cellspacing="0" border="0">
				<tbody><tr><td>
				<table style="background-color: #DDDDDD; margin: 5px 2px 1px 0px; border-bottom: 1px solid #DDDDDD;" cellpadding="0" cellspacing="0" border="0">
					<tbody><tr>
						<td><img src="./late05_files/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="./late05_files/pixel.gif" width="1" height="5"></td>
						<td><img src="./late05_files/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="/">Home</a></td>
						<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
					</tr>
				</tbody></table>
				</td>
				<td>
				<table style="background-color: #BECEEE; margin: 5px 2px 1px 0px;" cellpadding="0" cellspacing="0" border="0">
					<tbody><tr>
						<td><img src="./late05_files/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="./late05_files/pixel.gif" width="1" height="5"></td>
						<td><img src="./late05_files/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="/browse">Videos</a></td>
						<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
					</tr>
				</tbody></table>
				</td>
				<td>
				<table style="background-color: #BECEEE; margin: 5px 2px 1px 0px;" cellpadding="0" cellspacing="0" border="0">
					<tbody><tr>
						<td><img src="./late05_files/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="./late05_files/pixel.gif" width="1" height="5"></td>
						<td><img src="./late05_files/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="/channels">Channels</a></td>
						<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
					</tr>
				</tbody></table>
				</td>
				<td>
				<table style="background-color: #BECEEE; margin: 5px 2px 1px 0px;" cellpadding="0" cellspacing="0" border="0">
					<tbody><tr>
						<td><img src="./late05_files/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="./late05_files/pixel.gif" width="1" height="5"></td>
						<td><img src="./late05_files/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="/friends">Friends</a></td>
						<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
					</tr>
				</tbody></table>
				</td>
				<td>
				<table style="background-color: #BECEEE; margin: 5px 2px 1px 0px;" cellpadding="0" cellspacing="0" border="0">
					<tbody><tr>
						<td><img src="./late05_files/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="./late05_files/pixel.gif" width="1" height="5"></td>
						<td><img src="./late05_files/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="/new_upload">Upload</a></td>
						<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
					</tr>
				</tbody></table>
				</td>
			</tr>
		</tbody></table>
		</td>
	</tr>
	
</tbody></table>

<table align="center" width="800" bgcolor="#DDDDDD" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 10px;">
	<tbody><tr>
		<td><img src="./late05_files/box_login_tl.gif" width="5" height="5"></td>
		<td><img src="./late05_files/pixel.gif" width="1" height="5"></td>
		<td><img src="./late05_files/box_login_tr.gif" width="5" height="5"></td>
	</tr>
	<tr>
		<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
		<td width="790" align="center" style="padding: 2px;">

		<table cellpadding="0" cellspacing="0" border="0">
			<tbody><tr>
				<td style="font-size: 10px;">&nbsp;</td>
				<td><a href="/my_videos">My Videos</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="/favorite_videos">My Favorites</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="/inbox/">My Messages</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="/subscriptions">My Subscriptions</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/pl_manager">My Playlists</a></td>
					<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="/user/">My Profile</a></td>
				<td style="font-size: 10px;">&nbsp;</td>
			</tr>
		</tbody></table>
			
		</td>
		<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #FFFFFF"><img src="./late05_files/box_login_bl.gif" width="5" height="5"></td>
		<td style="border-bottom: 1px solid #BBBBBB"><img src="./late05_files/pixel.gif" width="1" height="5"></td>
		<td style="border-bottom: 1px solid #FFFFFF"><img src="./late05_files/box_login_br.gif" width="5" height="5"></td>
	</tr>
</tbody></table>


		
		



<table align="center" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 10px;">
	<tbody><tr>
		<form name="searchForm" id="searchForm" method="GET" action="/results"></form>
	 		<td style="padding-right: 5px;"><input tabindex="1" type="text" value="" name="search_query" maxlength="128" style="color:#ff3333; font-size: 12px; width: 300px;"></td>
			<td>
				<input type="submit" name="search_videos" value="Search Videos">
				<input type="submit" name="search_users" value="Search Users">
			</td>
		
	</tr>
</tbody></table>


<table width="790" align="center" cellpadding="0" cellspacing="0" border="0">
	<tbody><tr valign="top">
		<td style="padding-right: 15px;">
					<table class="roundedTable" width="595" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#e5ecf9">
			<tbody><tr>
				<td><img src="./late05_files/box_login_tl.gif" width="5" height="5"></td>
				<td width="100%"><img src="./late05_files/pixel.gif" width="1" height="5"></td>
				<td><img src="./late05_files/box_login_tr.gif" width="5" height="5"></td>
			</tr>
			<tr>
				<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
				<td width="585">
									<table width="100%" cellpadding="0" cellspacing="0" border="0">
					<tbody><tr valign="top">
					<td width="33%" style="border-right: 1px dashed #369; padding: 0px 10px 10px 10px; color: #444;">
					<div style="font-size: 16px; font-weight: bold; margin-bottom: 5px;"><a href="/browse">Watch</a></div>
					Instantly find and watch 100's of fast streaming videos.
					</td>
					<td width="33%" style="border-right: 1px dashed #369; padding: 0px 10px 10px 10px; color: #444;">
					<div style="font-size: 16px; font-weight: bold; margin-bottom: 5px;"><a href="/new_upload">Upload</a></div>
					Quickly upload and tag videos in almost any video format.
					</td>
					<td width="33%" style="padding: 0px 10px 10px 10px; color: #444;">
					<div style="font-size: 16px; font-weight: bold; margin-bottom: 5px;"><a href="https://discord.gg/uPy2QyuMg8">Discord</a></div>
					Easily talk with other Betatube users
					</td>
					</tr>
				</tbody></table>

				</td>
				<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
			</tr>
			<tr>
				<td><img src="./late05_files/box_login_bl.gif" width="5" height="5"></td>
				<td><img src="./late05_files/pixel.gif" width="1" height="5"></td>
				<td><img src="./late05_files/box_login_br.gif" width="5" height="5"></td>
			</tr>
		</tbody></table>


			<!-- begin recently viewed -->
					<table class="roundedTable" width="595" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#eeeedd">
			<tbody><tr>
				<td><img src="./late05_files/box_login_tl.gif" width="5" height="5"></td>
				<td width="100%"><img src="./late05_files/pixel.gif" width="1" height="5"></td>
				<td><img src="./late05_files/box_login_tr.gif" width="5" height="5"></td>
			</tr>
			<tr>
				<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
				<td width="585">
					<div class="sunkenTitleBar">
						<div class="sunkenTitle">
							<div style="float: right; padding: 1px 5px 0px 0px; font-size: 12px;"><a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/browse.php?s=mp">More Recently Viewed</a></div>
							<span style="color:#666633;">Recently Viewed...</span>
						</div>
					</div>
									<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
				<tbody><tr>
													<?php
														$stmt = $__db->prepare("SELECT * FROM views ORDER BY id DESC LIMIT 5");
														$stmt->execute();

														while($feat = $stmt->fetch(PDO::FETCH_ASSOC)) {	
													?><?php $video = $__video_h->fetch_video_rid($feat['videoid']); ?>
													<?php
															$video['age'] = $__time_h->time_elapsed_string($video['publish']);		
															$video['duration'] = $__time_h->timestamp($video['duration']);
															$video['views'] = $__video_h->fetch_video_views($video['rid']);
															$video['author'] = htmlspecialchars($video['author']);		
															$video['title'] = htmlspecialchars($video['title']);
															$video['description'] = $__video_h->shorten_description($video['description'], 50);
													?>
						<td width="20%" align="center">
							<a href="/watch?v=<?php echo $video['rid'] ?>"><img src="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" width="80" height="60" style="border: 5px solid #FFFFFF; margin-top: 10px;"></a>
							<div class="moduleFeaturedDetails" style="padding-top: 2px;"><?php echo $__time_h->time_elapsed_string($feat['viewed']) ?></div>
						</td><?php } ?>
				</tr>
				</tbody></table>

				</td>
				<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
			</tr>
			<tr>
				<td><img src="./late05_files/box_login_bl.gif" width="5" height="5"></td>
				<td><img src="./late05_files/pixel.gif" width="1" height="5"></td>
				<td><img src="./late05_files/box_login_br.gif" width="5" height="5"></td>
			</tr>
		</tbody></table>

			<!-- end recently viewed -->

			<!-- begin recently featured -->
					<table class="roundedTable" width="595" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#cccccc">
			<tbody><tr>
				<td><img src="./late05_files/box_login_tl.gif" width="5" height="5"></td>
				<td width="100%"><img src="./late05_files/pixel.gif" width="1" height="5"></td>
				<td><img src="./late05_files/box_login_tr.gif" width="5" height="5"></td>
			</tr>
			<tr>
				<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
				<td width="585">
					<div class="sunkenTitleBar">
						<div class="sunkenTitle">
							<div style="float: right; padding: 1px 5px 0px 0px; font-size: 12px;"><a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/browse.php">See More Videos</a></div>
							<span style="color:#444;">Today's Featured Videos...</span>
						</div>
					</div>
                                                    <?php
                                                        $stmt = $__db->prepare("SELECT * FROM videos WHERE featured = 'v' AND visibility = 'n' ORDER BY id DESC LIMIT 8");
                                                        $stmt->execute();
                                                        while($video = $stmt->fetch(PDO::FETCH_ASSOC)) {	
															$_user22 = $__user_h->fetch_user_username($video['author']);
                                                            $video['age'] = $__time_h->time_elapsed_string($video['publish']);		
                                                            $video['duration'] = $__time_h->timestamp($video['duration']);
                                                            $video['views'] = $__video_h->fetch_video_views($video['rid']);
                                                            $video['author'] = htmlspecialchars($video['author']);		
                                                            $video['title'] = htmlspecialchars($video['title']);
                                                            $video['description'] = $__video_h->shorten_description($video['description'], 50);
                                                    ?>
					<div class="moduleEntry">
						<table width="565" cellpadding="0" cellspacing="0" border="0">
							<tbody><tr valign="top">
								<td><a href="/watch?v=<?php echo $video['rid'];  ?>"><img src="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" class="moduleEntryThumb" width="120" height="90"></a>
								</td>
								<td width="100%">
									<div class="moduleEntryTitle">
										<a href="/watch?v=<?php echo $video['rid'];  ?>"><?php echo $video['title'] ?></a>
									</div>
									<div class="moduleEntryDescription">
										<?php echo $video['description'] ?>
									</div>
							
									<div class="moduleEntryDetails">
										Added: by <a href="<?php if($_user22['vanity'])	{	?>/<?php echo htmlspecialchars($_user22['vanity']); ?><?php } else{ ?>/user/<?php echo htmlspecialchars($video['author']); ?><?php } ?>"><?php if($_user22['title'])	{	?><?php echo htmlspecialchars($_user22['title']); ?><?php } else {	?><?php echo htmlspecialchars($video['author']); ?><?php	}	?></a>
									</div>
									<div class="moduleEntryDetails">
										Runtime: 01:20 | Views: 521 | Comments: 0
									</div>
								</td>
							</tr>
						</tbody></table>
					</div>
														<?php } ?>
					
					
					
					
					
					
					
					
					

				</td>
				<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
			</tr>
			<tr>
				<td><img src="./late05_files/box_login_bl.gif" width="5" height="5"></td>
				<td><img src="./late05_files/pixel.gif" width="1" height="5"></td>
				<td><img src="./late05_files/box_login_br.gif" width="5" height="5"></td>
			</tr>
		</tbody></table>

			<!-- end recently featured -->

		
		</td>
		<td width="180">
					<table class="roundedTable" width="180" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffeebb">
			<tbody><tr>
				<td><img src="./late05_files/box_login_tl.gif" width="5" height="5"></td>
				<td width="100%"><img src="./late05_files/pixel.gif" width="1" height="5"></td>
				<td><img src="./late05_files/box_login_tr.gif" width="5" height="5"></td>
			</tr>
			<tr>
				<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
				<td width="170">
									<div style="font-size: 16px; font-weight: bold; text-align: center; padding: 5px 5px 10px 5px;">
	<!--Begin if not logged in Section-->
					<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/signup.php">Sign up for your free account!</a>
					
					<div style="font-size: 11px; font-weight: 400; padding: 5px 5px 10px 5px; margin-top: 10px; background-color:#FFFFCC;"><a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/nano_contest.php"><strong>November Nano-a-day Giveaway</strong></a>

<div style="text-align: left;">
<br><br><img src="./late05_files/nano_sm.jpg" width="40" height="88" align="right" hspace="5">YouTube is giving away one brand new <b>4GB iPod Nano</b> every day for the entire month of November. 
Increase your chances of winning by:

<ul>
	<li><a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/signup.php">Signing Up</a></li>
	<li><a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/signup_login.php?next=my_friends_invite.php">Inviting Your friends</a></li>
	<li><a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/signup_login.php?next=my_videos_upload.php">Uploading Videos</a></li>
</ul>

<div style="text-align: center;">View full <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/nano_contest.php">contest details</a>.</div>

</div></div>

				</div>

				</td>
				<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
			</tr>
			<tr>
				<td><img src="./late05_files/box_login_bl.gif" width="5" height="5"></td>
				<td><img src="./late05_files/pixel.gif" width="1" height="5"></td>
				<td><img src="./late05_files/box_login_br.gif" width="5" height="5"></td>
			</tr>
		</tbody></table>

					<table class="roundedTable" width="180" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#001436">
			<tbody><tr>
				<td><img src="./late05_files/box_login_tl.gif" width="5" height="5"></td>
				<td width="100%"><img src="./late05_files/pixel.gif" width="1" height="5"></td>
				<td><img src="./late05_files/box_login_tr.gif" width="5" height="5"></td>
			</tr>
			<tr>
				<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
				<td width="170">
					<!--Begin SimplyFired Contest Information-->
<div style="font-size: 16px; font-weight: bold; text-align: center; padding: 5px 5px 10px 5px;">
<div style="color: #FFFFFF; font-size: 12px; font-weight: bold; text-align: center;">November Video Contest</div>
<div style="color: #FFFFFF; font-size: 11px; font-weight: normal; text-align: center; padding-bottom: 5px;">Get Fired, Get Filmed, Get Famous!</div>  
<div style="color:#FF0000; font-size: 11px; font-weight: normal; text-align: center;">Sponsored by:</div> 
<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=simplyfired"><img src="./late05_files/simplyfired_logo_small.gif" border="0" style="padding-bottom: 1px;"></a>
<div style="font-size: 11px; font-weight: normal; text-align: center; padding-bottom: 3px; text-decoraton: underline; padding-top: 3px; background: #FFFFFF"><a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/monthly_contest.php">Enter Now</a></div> 
</div>
<!--End SimplyFired Contest Information-->

				</td>
				<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
			</tr>
			<tr>
				<td><img src="./late05_files/box_login_bl.gif" width="5" height="5"></td>
				<td><img src="./late05_files/pixel.gif" width="1" height="5"></td>
				<td><img src="./late05_files/box_login_br.gif" width="5" height="5"></td>
			</tr>
		</tbody></table>

		
		
			<div style="margin: 10px 0px 5px 0px; font-size: 12px; font-weight: bold; color: #333;">Recent Tags:</div>
			<div style="font-size: 13px; color: #333333;">
		
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=lazy">lazy</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=northern">northern</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=jay">jay</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=police">police</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=malfoy">malfoy</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=science">science</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=sang">sang</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=on">on</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=hit">hit</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=trailer">trailer</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=jpop">jpop</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=bike">bike</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=and">and</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=ito">ito</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=xa">xa</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=video">video</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=cute">cute</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=movie">movie</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=swim">swim</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=making">making</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=mayday">mayday</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=scooter">scooter</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=samoan">samoan</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=music">music</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=drinking">drinking</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=borbon">borbon</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=song">song</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=fall">fall</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=task">task</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=jan">jan</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=affair">affair</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=kato">kato</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=ollie">ollie</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=baby">baby</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=enjoy">enjoy</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=diwali">diwali</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=kpop">kpop</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=shy">shy</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=alicia">alicia</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=funny">funny</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=dance">dance</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=snook">snook</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=northern">northern</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=keke">keke</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=tayo">tayo</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=break">break</a> :
				<a style="font-size:17px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=day">day</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=stormizer">stormizer</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=lambretta">lambretta</a> :
				<a style="font-size:12px;" href="https://web.archive.org/web/20051102094522/http://www.youtube.com/results.php?search=costume">costume</a> :
		
			<div style="font-size: 14px; font-weight: bold; margin-top: 10px;">
				<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/tags.php">See More Tags</a>
			</div>

			<div style="padding-top: 15px;">
						<table class="roundedTable" width="180" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#eeeedd">
			<tbody><tr>
				<td><img src="./late05_files/box_login_tl.gif" width="5" height="5"></td>
				<td width="100%"><img src="./late05_files/pixel.gif" width="1" height="5"></td>
				<td><img src="./late05_files/box_login_tr.gif" width="5" height="5"></td>
			</tr>
			<tr>
				<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
				<td width="170">
					<div style="font-size: 14px; font-weight: bold; margin-bottom: 8px; color:#666633;">
						Last 15 users online...
					</div>
										<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=samom19">samom19</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=samom19"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=samom19">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=samom19"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=samom19">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=samom19"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=samom19">0</a>)
					</div>
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=bobbydunston">bobbydunston</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=bobbydunston"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=bobbydunston">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=bobbydunston"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=bobbydunston">1</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=bobbydunston"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=bobbydunston">1</a>)
					</div>
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=laQuisha">laQuisha</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=laQuisha"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=laQuisha">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=laQuisha"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=laQuisha">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=laQuisha"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=laQuisha">0</a>)
					</div>
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=meetwickedfaith">meetwickedfaith</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=meetwickedfaith"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=meetwickedfaith">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=meetwickedfaith"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=meetwickedfaith">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=meetwickedfaith"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=meetwickedfaith">0</a>)
					</div>
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=emrah">emrah</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=emrah"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=emrah">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=emrah"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=emrah">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=emrah"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=emrah">0</a>)
					</div>
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=dobstacle">dobstacle</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=dobstacle"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=dobstacle">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=dobstacle"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=dobstacle">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=dobstacle"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=dobstacle">0</a>)
					</div>
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=heistforasoul">heistforasoul</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=heistforasoul"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=heistforasoul">1</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=heistforasoul"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=heistforasoul">10</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=heistforasoul"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=heistforasoul">0</a>)
					</div>
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=tetsu69cherie">tetsu69cherie</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=tetsu69cherie"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=tetsu69cherie">1</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=tetsu69cherie"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=tetsu69cherie">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=tetsu69cherie"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=tetsu69cherie">0</a>)
					</div>
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=peiling">peiling</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=peiling"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=peiling">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=peiling"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=peiling">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=peiling"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=peiling">0</a>)
					</div>
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=yzniper86">yzniper86</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=yzniper86"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=yzniper86">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=yzniper86"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=yzniper86">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=yzniper86"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=yzniper86">0</a>)
					</div>
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=aude">aude</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=aude"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=aude">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=aude"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=aude">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=aude"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=aude">0</a>)
					</div>
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=Mik2121">Mik2121</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=Mik2121"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=Mik2121">2</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=Mik2121"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=Mik2121">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=Mik2121"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=Mik2121">0</a>)
					</div>
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=darcon1998">darcon1998</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=darcon1998"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=darcon1998">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=darcon1998"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=darcon1998">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=darcon1998"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=darcon1998">0</a>)
					</div>
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=tuklas">tuklas</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=tuklas"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=tuklas">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=tuklas"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=tuklas">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=tuklas"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=tuklas">0</a>)
					</div>
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile.php?user=wantoy">wantoy</a>
					</div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;">
						<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=wantoy"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_videos.php?user=wantoy">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=wantoy"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_favorites.php?user=wantoy">0</a>)
						| <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=wantoy"><img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"></a> (<a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/profile_friends.php?user=wantoy">0</a>)
					</div>

				
				<div style="font-weight: bold; margin-bottom: 5px;">Icon Key:</div>
				<div style="margin-bottom: 4px;"><img src="./late05_files/icon_vid.gif" alt="Videos" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"> - Videos</div>
				<div style="margin-bottom: 4px;"><img src="./late05_files/icon_fav.gif" alt="Favorites" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"> - Favorites</div>
				<img src="./late05_files/icon_friends.gif" alt="Friends" width="14" height="14" border="0" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;"> - Friends
				

				</td>
				<td><img src="./late05_files/pixel.gif" width="5" height="1"></td>
			</tr>
			<tr>
				<td><img src="./late05_files/box_login_bl.gif" width="5" height="5"></td>
				<td><img src="./late05_files/pixel.gif" width="1" height="5"></td>
				<td><img src="./late05_files/box_login_br.gif" width="5" height="5"></td>
			</tr>
		</tbody></table>

			</div>
		</div></td>
	</tr>
</tbody></table>

		</td>
	</tr>
</tbody></table>

<table cellpadding="10" cellspacing="0" border="0" align="center">
	<tbody><tr>
		<td align="center" valign="center">
			<span class="footer"><a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/whats_new.php">What's New</a> <img src="./late05_files/new.gif"> | <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/about.php">About Us</a> | <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/help.php">Help</a> | <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/developers">Developers</a> | <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/terms.php">Terms of Use</a> | <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/privacy.php">Privacy Policy</a> 
			<br>
			<br>
			Copyright © 2005 YouTube, LLC™ | <a href="https://web.archive.org/web/20051102094522/http://www.youtube.com/rss/global/recently_added.rss"><img src="./late05_files/rss.gif" width="36" height="14" border="0" style="vertical-align: text-top;"></a></span></td>
	</tr>
</tbody></table>

<div id="sheet" style="position:fixed; top:0px; visibility:hidden; width:100%; text-align:center;">
	<table width="100%">
		<tbody><tr>
			<td align="center">
				<div id="sheetContent" style="filter:alpha(opacity=50); -moz-opacity:0.5; opacity:0.5; border: 1px solid black; background-color:#cccccc; width:40%; text-align:left;"></div>
			</td>
		</tr>
	</tbody></table>
</div>
<div id="tooltip"></div>




<!--
playback timings (ms):
  exclusion.robots: 163.451 (7)
  exclusion.robots.policy: 163.367 (7)
  xauthn.identify: 108.985
  xauthn.chkprivs: 52.975
  RedisCDXSource: 111.848 (7)
  esindex: 0.062 (7)
  LoadShardBlock: 984.748 (24)
  PetaboxLoader3.datanode: 1121.422 (25)
  CDXLines.iter: 490.237 (12)
  PetaboxLoader3.resolve: 91.636 (2)
  load_resource: 674.546
--></body></html>
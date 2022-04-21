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
<?php
	if(isset($_SESSION['siteusername']))
	    $_user_hp = $__user_h->fetch_user_username($_SESSION['siteusername']);

    if(!$__user_h->user_exists($_GET['n']))
        header("Location: /?error=This user does not exist!");

    $_user = $__user_h->fetch_user_username($_GET['n']);

    $stmt = $__db->prepare("SELECT * FROM bans WHERE username = :username ORDER BY id DESC");
	$stmt->bindParam(":username", $_user['username']);
	$stmt->execute();

	while($ban = $stmt->fetch(PDO::FETCH_ASSOC)) { 
		header("Location: /?error=This user has been terminated for violating BetaTube's Community Guidelines.");
	}

    function clean($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

	function addhttp($url) {
		if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
			$url = "http://" . $url;
		}
		return $url;
	}

    function check_valid_colorhex($colorCode) {
        // If user accidentally passed along the # sign, strip it off
        $colorCode = ltrim($colorCode, '#');
    
        if (
              ctype_xdigit($colorCode) &&
              (strlen($colorCode) == 6 || strlen($colorCode) == 3))
                   return true;
    
        else return false;
    }

    $_user['subscribers'] = $__user_h->fetch_subs_count($_user['username']);
    $_user['videos'] = $__user_h->fetch_user_videos($_user['username']);
    $_user['favorites'] = $__user_h->fetch_user_favorites($_user['username']);
    $_user['subscriptions'] = $__user_h->fetch_subscriptions($_user['username']);
    $_user['views'] = $__video_h->fetch_views_from_user($_user['username']);
    $_user['friends'] = $__user_h->fetch_friends_accepted($_user['username']);

    $_user['s_2009_user_left'] = $_user['2009_user_left'];
    $_user['s_2009_user_right'] = $_user['2009_user_right'];
    $_user['2009_user_left'] = explode(";", $_user['2009_user_left']);
    $_user['2009_user_right'] = explode(";", $_user['2009_user_right']);

    $_user['primary_color'] = substr($_user['primary_color'], 0, 7);
    $_user['secondary_color'] = substr($_user['secondary_color'], 0, 7);
    $_user['third_color'] = substr($_user['third_color'], 0, 7);
    $_user['text_color'] = substr($_user['text_color'], 0, 7);
    $_user['primary_color_text'] = substr($_user['primary_color_text'], 0, 7);
    $_user['2012_bgcolor'] = substr($_user['2012_bgcolor'], 0, 7);

    $_user['genre'] = strtolower($_user['genre']);
	$_user['subscribed'] = $__user_h->if_subscribed(@$_SESSION['siteusername'], $_user['username']);

    if(!check_valid_colorhex($_user['primary_color']) && strlen($_user['primary_color']) != 6) { $_user['primary_color'] = ""; }
    if(!check_valid_colorhex($_user['secondary_color']) && strlen($_user['secondary_color']) != 6) { $_user['secondary_color'] = ""; }
    if(!check_valid_colorhex($_user['third_color']) && strlen($_user['third_color']) != 6) { $_user['third_color'] = ""; }
    if(!check_valid_colorhex($_user['text_color']) && strlen($_user['text_color']) != 6) { $_user['text_color'] = ""; }
    if(!check_valid_colorhex($_user['primary_color_text']) && strlen($_user['primary_color_text']) != 6) { $_user['primary_color_text'] = ""; }
    if(!check_valid_colorhex($_user['2012_bgcolor']) && strlen($_user['2012_bgcolor']) != 6) { $_user['2012_bgcolor'] = ""; }

	if(isset($_SESSION['siteusername']))
    	$__user_i->check_view_channel($_user['username'], @$_SESSION['siteusername']);

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $error = array();

        if(!isset($_SESSION['siteusername'])){ $error['message'] = "you are not logged in"; $error['status'] = true; }
        if(!$_POST['comment']){ $error['message'] = "your comment cannot be blank"; $error['status'] = true; }
        if(strlen($_POST['comment']) > 1000){ $error['message'] = "your comment must be shorter than 1000 characters"; $error['status'] = true; }
        //if(!isset($_POST['g-recaptcha-response'])){ $error['message'] = "captcha validation failed"; $error['status'] = true; }
        //if(!$_user_insert_utils->validateCaptcha($config['recaptcha_secret'], $_POST['g-recaptcha-response'])) { $error['message'] = "captcha validation failed"; $error['status'] = true; }
        if($__user_h->if_cooldown($_SESSION['siteusername'])) { $error['message'] = "You are on a cooldown! Wait for a minute before posting another comment."; $error['status'] = true; }
        //if(ifBlocked(@$_SESSION['siteusername'], $user['username'], $__db)) { $error = "This user has blocked you!"; $error['status'] = true; } 

        if(!isset($error['message'])) {
			$text = $_POST['comment'];
            $stmt = $__db->prepare("INSERT INTO profile_comments (toid, author, comment) VALUES (:id, :username, :comment)");
			$stmt->bindParam(":id", $_user['username']);
			$stmt->bindParam(":username", $_SESSION['siteusername']);
			$stmt->bindParam(":comment", $text);
            $stmt->execute();

            $_user_update_utils->update_comment_cooldown_time($_SESSION['siteusername']);

            if(@$_SESSION['siteusername'] != $_user['username']) { 
                $_user_insert_utils->send_message($_user['username'], "New comment", 'I commented "' . $_POST['comment'] . '" on your profile!', $_SESSION['siteusername']);
            }
        }
    }
?>
<?php
	$__server->page_embeds->page_title = "Betatube - " . htmlspecialchars($_user['username']);
	$__server->page_embeds->page_description = htmlspecialchars($_user['bio']);
	$__server->page_embeds->page_image = "/dynamic/pfp/" . htmlspecialchars($_user['pfp']);
	$__server->page_embeds->page_url = "http://betatube.net";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Betatube</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/static/css/new/www-core.css">
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
        <script>function onLogin(token){ document.getElementById('submitform').submit(); }</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="/static/js/channel-customization.js"></script>
        <style>
            .channel-box-top {
                background: <?php echo htmlspecialchars($_user['primary_color']); ?>;
                color: <?php echo htmlspecialchars($_user['text_color']); ?>;
                padding: 5px;
            }

            .sub_button {
                position: relative;
                bottom: 2px;
            }

            .channel-box-description {
                background: <?php echo htmlspecialchars($_user['secondary_color']); ?>;
                border: 1px solid <?php echo htmlspecialchars($_user['primary_color']); ?>;
                color: <?php echo htmlspecialchars($_user['primary_color_text']); ?>;
                padding: 5px;
            }

            .channel-box-no-bg {
                border: 1px solid <?php echo htmlspecialchars($_user['primary_color']); ?>;
                color: <?php echo htmlspecialchars($_user['primary_color_text']); ?>;
                padding: 5px;
                background-color: <?php echo htmlspecialchars($_user['third_color']); ?>;
            }

            .channel-pfp {
                height: 88px;
                width: 88px;
                border-color: <?php echo htmlspecialchars($_user['primary_color']); ?>;
                border: 3px double <?php echo htmlspecialchars($_user['primary_color']); ?>;
            }

            .channel-stats {
                display: inline-block;
                vertical-align: top;
            }

            .channel-stats-minor {
                font-size: 11px;
            }
            
            .comment-pfp {
                width: 52px;
                height: 52px;
                border-color: <?php echo htmlspecialchars($_user['primary_color']); ?>;
                display: inline-block;
                border: 3px double <?php echo htmlspecialchars($_user['primary_color']); ?>;;
            }

            .featured-video-info {
                border: 1px solid <?php echo htmlspecialchars($_user['primary_color']); ?>;
                color: black;
                padding: 5px;
                background-color: <?php echo htmlspecialchars($_user['third_color']); ?>;
                font-size: 10px;
                margin-top: -3px;
                margin-bottom: 11px;
            }

            .www-channel-left a {
                color: <?php echo htmlspecialchars($_user['primary_color_text']); ?>;
            }

            .www-channel-right a {
                color: <?php echo htmlspecialchars($_user['primary_color_text']); ?>;
            }
        </style>
        <style>
            body {
                position: absolute;
                right: 0;
                top: 0px;
                left: 0px;
                z-index: -1;
                background-color: <?php echo htmlspecialchars($_user['2012_bgcolor']); ?>;
                background-image: url(/dynamic/banners/<?php echo $_user['2012_bg']; ?>);
                background-position: top;
                <?php
                    $bgoption = "";
                            /*
                                <select name="bgoption" id="cars">
                                    <option value="repeaty">Repeat - Y</option>
                                    <option value="repeatx">Repeat - X</option>
                                    <option value="repeatxy">Repeat - X and Y</option>
                                    <option value="stretch">Stretch</option>
                                    <option value="solid">Solid</option>
                                </select>
                            */

                    switch($_user['2012_bgoption']) {
                        case "stretch":
                        echo "background-size: cover;";
                        break;
                        case "solid":
                        echo "";
                        break;
                        case "norepeat":
                        echo "";
                        break;
                        case "repeatxy":
                        echo "background-repeat: repeat;";
                        break;
                        case "repeaty":
                        echo "background-repeat: repeat-y;";
                        break;
                        case "repeatx":
                        echo "background-repeat: repeat-x;";
                        break;
                    }
                ?>
            }
        </style>
    </head>
    <body>
        <div class="www-core-container">
            <?php require($_SERVER['DOCUMENT_ROOT'] . "/static/module/channel_header.php"); ?><br>
            <center>
                <a href="/user/<?php echo htmlspecialchars($_user['username']); ?>">Videos</a> | 
                <a href="/channel_favorites?n=<?php echo htmlspecialchars($_user['username']); ?>">Favorites</a> |
                <a href="/user/<?php echo htmlspecialchars($_user['username']); ?>/playlists">Playlists</a> |
                <a href="/user/<?php echo htmlspecialchars($_user['username']); ?>/groups">Groups</a> |
                <a href="/user/<?php echo htmlspecialchars($_user['username']); ?>/friends">Friends</a> |  
                <a href="/user/<?php echo htmlspecialchars($_user['username']); ?>/subscribers">Subscribers</a> |   
                <a href="/channel_subscriptions?n=<?php echo htmlspecialchars($_user['username']); ?>">Subscriptions</a>
            </center><br>
            <div class="www-channel-left">
                <div class="channel-box-profle">
                    <div class="channel-box-top">
                        <h3 style="display: inline-block;"><?php echo htmlspecialchars(substr($_user['username'], 0, 16)); ?>'s Channel</h3>

                        <?php if(@$_SESSION['siteusername'] != $_user['username']) { ?>
                        <a href="/get/<?php if($_user['subscribed'] == true) { ?>un<?php } ?>subscribe?n=<?php echo htmlspecialchars($_user['username']); ?>">
                            <button style="margin: 0px;" class="sub_button"><?php if($_user['subscribed'] == true) { ?>Unsubscribe<?php } else { ?>Subscribe<?php } ?></button>
                        </a>
                        <?php } else { ?>
                        <a href="/account">
                            <button style="margin: 0px;" class="sub_button" onclick="dropdownchannel()">Edit Channel</button>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="channel-box-description">
                        <img class="channel-pfp" src="/dynamic/pfp/<?php echo $_user['pfp']; ?>">
                        <span class="channel-stats">
                            <h3><?php echo htmlspecialchars($_user['username']); ?></h3>
                            <span class="channel-stats-minor">
                                Joined: <b><?php echo date("M d, Y", strtotime($_user['created'])); ?></b><br>
                                Last Sign In: <b><?php echo $__time_h->time_elapsed_string($_user['lastlogin']); ?></b><br>
                                Subscribers: <b><?php echo $_user['subscribers'] ?></b><br>
                                Video Views: <b><?php echo htmlspecialchars($_user['views']); ?></b><br>
                            </span>
                        </span><br>
                    </div>
                </div><br>
                <div class="channel-box-profle">
                    <div class="channel-box-top" style="height: 12px;">
                        <h3 style="display: inline-block;">Connect with <?php echo htmlspecialchars($_user['username']); ?></h3>
                    </div>
                    <div class="channel-box-no-bg">
                        <div style="display: inline-block;width:116px;height:95px;"><img src="/dynamic/pfp/<?php echo $_user['pfp']; ?>" width="100%" height="100%"></div>
                        <span style="display: inline-block;vertical-align: top;line-height: 30px;line-height: 21px;font-size: 11px;">
                            <img src="/static/img/message.png" style="vertical-align: middle;"> <a href="/inbox/send?to=<?php echo htmlspecialchars($_user['username']); ?>">Send Message</a><br>
                            <img src="/static/img/comment.png" style="vertical-align: middle;"> <a href="#">Add Contact</a><br>
                            <img src="/static/img/share.png" style="vertical-align: middle;"> <a href="/get/add_friend?sending=<?php echo htmlspecialchars($_user['username']); ?>">Add Friend</a>
                        </span><br>
                        <center><a href="/user/<?php echo htmlspecialchars($_user['username']); ?>">https://betatube.net/user/<?php echo htmlspecialchars($_user['username']); ?></a></center>

                    </div>
                </div><br>

                <div class="channel-box-profle">
                    <div class="channel-box-top" style="height: 12px;">
                        <h3 style="display: inline-block;">Recent Activity</h3>
                    </div>
                    <div class="channel-box-no-bg" style="color: #666;">
                        <?php
                            $stmt = $conn->prepare("SELECT rid, title, thumbnail, duration, title, author, publish, description FROM videos WHERE author = ? ORDER BY id DESC LIMIT 5");
                            $stmt->bind_param("s", $_user['username']);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while($video = $result->fetch_assoc()) {
                        ?>
                            <img style="vertical-align: middle;" src="/static/img/upload.png"> <b><?php echo htmlspecialchars($video['author']); ?> uploaded a video</b> (<?php echo $_video_fetch_utils->time_elapsed_string($video['publish']); ?>)
                            <div class="video-item-watch" style="margin-left: 20px;">
                                <div class="thumbnail" style="
                                    background-image: url(/dynamic/thumbs/<?php echo $video['thumbnail']; ?>), url('/dynamic/thumbs/default.png');"><span class="timestamp"><?php echo $_video_fetch_utils->timestamp($video['duration']); ?></span></div>
                                
                                <div class="video-info-watch" style="width: 170px;">
                                    <a href="/watch?v=<?php echo $video['rid']; ?>"><b><?php echo htmlspecialchars($video['title']);  ?></b></a><br>
                                    <span class="video-info-small-wide">
                                        <span class="video-views"><?php echo $_video_fetch_utils->fetch_video_views($video['rid']); ?> views</span><br>
                                        <a style="padding-left: 0px;" class="video-author-wide" href="/user/<?php echo htmlspecialchars($video['author']); ?>"><?php echo htmlspecialchars($video['author']); ?></a>
                                    </span>
                                </div>
                                
                            </div>
                            <hr class="thin-line">
                        <?php } if($result->num_rows == 0)  { echo "This user has not been doing anything recently."; } ?>
                    </div>
                </div><br>

                <?php if($_user['subscriptions'] != 0) { ?>
                <div class="channel-box-profle">
                    <div class="channel-box-top">
                        <h3 style="display: inline-block;">Subscriptions (<?php echo $_user['subscriptions']; ?>)</h3>
                    </div>
                    <div class="channel-box-no-bg">
                        <?php
                            $stmt = $conn->prepare("SELECT reciever FROM subscribers WHERE sender = ? ORDER BY id DESC LIMIT 9");
                            $stmt->bind_param("s", $_user['username']);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while($subscriber = $result->fetch_assoc()) {
                                if($_user_fetch_utils->user_exists($subscriber['reciever'])) {
                        ?>

                                <div class="grid-item" style="width: 90px;">
                                    <img class="channel-pfp" style="width: 58px; height: 58px;" src="/dynamic/pfp/<?php echo $_user_fetch_utils->fetch_user_pfp($subscriber['reciever']); ?>"><br>
                                    <a style="font-size: 10px;text-decoration: none;" href="/user/<?php echo htmlspecialchars($subscriber['reciever']); ?>"><?php echo htmlspecialchars($subscriber['reciever']); ?></a>
                                </div>
                        <?php } } ?>
                    </div>
                </div><br>
                <?php } ?>
            </div>
            <div class="www-channel-right">
                <?php if($_user['featured'] != "None" && $_video_fetch_utils->video_exists($_user['featured'])) { 
                    $video = $_video_fetch_utils->fetch_video_rid($_user['featured']); ?>
                    <center>
                        <iframe style="border: 0px; overflow: hidden;" src="/2009player/lolplayer?id=<?php echo $_user['featured']; ?>" height="365" width="646"></iframe>
                    </center>
                    <div class="featured-video-info">
                        <h3><a href="/watch?v=<?php echo htmlspecialchars($_user['featured']); ?>"><?php echo htmlspecialchars($video['title']);  ?></a></h3>
                        From: <a href="/user/<?php echo htmlspecialchars($_user['username']); ?>"><?php echo htmlspecialchars($_user['username']); ?></a><br>
                        Views: <?php echo $_video_fetch_utils->fetch_video_views($video['rid']); ?></a><br>
                    </div>
                <?php } ?>

                <?php if($_user['videos'] != 0) { ?>
                <div class="channel-box-profle">
                    <div class="channel-box-top" style="height: 12px;">
                        <h3 style="display: inline-block;">Videos (<?php echo $_user['videos']; ?>)</h3>
                    </div>
                    <div class="channel-box-no-bg">
                        <?php
                            $stmt = $conn->prepare("SELECT rid, title, thumbnail, duration, title, author, publish, description FROM videos WHERE author = ? ORDER BY id DESC LIMIT 8");
                            $stmt->bind_param("s", $_user['username']);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while($video = $result->fetch_assoc()) {
                        ?>

                                <div class="grid-item" style="">
                                    <img class="thumbnail" onerror="this.src='/dynamic/thumbs/default.png'" src="/dynamic/thumbs/<?php echo htmlspecialchars($video['thumbnail']); ?>">
                                    <div class="video-info-grid">
                                        <a href="/watch?v=<?php echo $video['rid']; ?>"><?php echo htmlspecialchars($video['title']);  ?></a><br>
                                        <span class="video-info-small">
                                            <span class="video-views"><?php echo $_video_fetch_utils->fetch_video_views($video['rid']); ?> views</span><br>
                                            <a href="/user/<?php echo htmlspecialchars($video['author']); ?>"><?php echo htmlspecialchars($video['author']); ?></a>
                                        </span>
                                    </div>
                                </div>
                        <?php } ?>
                    </div>
                </div><br>
                <?php } ?>

                <?php if($_user['favorites'] != 0) { ?>
                <div class="channel-box-profle">
                    <div class="channel-box-top" style="height: 12px;">
                        <h3 style="display: inline-block;">Favorites (<?php echo $_user['favorites']; ?>)</h3>
                    </div>
                    <div class="channel-box-no-bg">
                        <?php
                            $stmt = $conn->prepare("SELECT reciever FROM favorite_video WHERE sender = ? ORDER BY id DESC LIMIT 4");
                            $stmt->bind_param("s", $_user['username']);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while($video = $result->fetch_assoc()) {
                                $video = $_video_fetch_utils->fetch_video_rid($video['reciever']);
                                if($_video_fetch_utils->video_exists($video['rid'])) {
                        ?>

                                <div class="grid-item" style="">
                                    <img class="thumbnail" onerror="this.src='/dynamic/thumbs/default.png'" src="/dynamic/thumbs/<?php echo htmlspecialchars($video['thumbnail']); ?>">
                                    <div class="video-info-grid">
                                        <a href="/watch?v=<?php echo $video['rid']; ?>"><?php echo htmlspecialchars($video['title']);  ?></a><br>
                                        <span class="video-info-small">
                                            <span class="video-views"><?php echo $_video_fetch_utils->fetch_video_views($video['rid']); ?> views</span><br>
                                            <a href="/user/<?php echo htmlspecialchars($video['author']); ?>"><?php echo htmlspecialchars($video['author']); ?></a>
                                        </span>
                                    </div>
                                </div>
                        <?php } } ?>
                    </div>
                </div><br>
                <?php } ?>

                <?php if($_user['subscribers'] != 0) { ?>
                <div class="channel-box-profle">
                    <div class="channel-box-top" style="height: 12px;">
                        <h3 style="display: inline-block;">Subscribers (<?php echo $_user['subscribers']; ?>)</h3>
                    </div>
                    <div class="channel-box-no-bg">
                        <?php
                            $stmt = $conn->prepare("SELECT sender FROM subscribers WHERE reciever = ? ORDER BY id DESC LIMIT 8");
                            $stmt->bind_param("s", $_user['username']);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while($subscriber = $result->fetch_assoc()) {
                        ?>

                                <div class="grid-item" style="">
                                    <img class="channel-pfp" src="/dynamic/pfp/<?php echo $_user_fetch_utils->fetch_user_pfp($subscriber['sender']); ?>"><br>
                                    <a style="font-size: 10px;text-decoration: none;" href="/user/<?php echo htmlspecialchars($subscriber['sender']); ?>"><?php echo htmlspecialchars($subscriber['sender']); ?></a>
                                </div>
                        <?php } ?>
                    </div>
                </div><br>
                <?php } ?>

                <?php if($_user['friends'] != 0) { ?>
                <div class="channel-box-profle">
                    <div class="channel-box-top" style="height: 12px;">
                        <h3 style="display: inline-block;">Friends (<?php echo $_user['friends']; ?>)</h3>
                    </div>
                    <div class="channel-box-no-bg">
                        <?php
                            $stmt = $conn->prepare("SELECT * FROM friends WHERE reciever = ? AND status = 'a'");
                            $stmt->bind_param("s", $_user['username']);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while($friend = $result->fetch_assoc()) { 
                        ?>
                            <div class="grid-item" style="">
                                <img class="channel-pfp" src="/dynamic/pfp/<?php echo $_user_fetch_utils->fetch_user_pfp($friend['sender']); ?>"><br>
                                <a style="font-size: 10px;text-decoration: none;" href="/user/<?php echo htmlspecialchars($friend['sender']); ?>"><?php echo htmlspecialchars($friend['sender']); ?></a>
                            </div>
                        <?php } ?>

                        <?php
                            $stmt = $conn->prepare("SELECT * FROM friends WHERE sender = ? AND status = 'a'");
                            $stmt->bind_param("s", $_user['username']);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while($friend = $result->fetch_assoc()) { 
                        ?>
                            <div class="grid-item" style="">
                                <img class="channel-pfp" src="/dynamic/pfp/<?php echo $_user_fetch_utils->fetch_user_pfp($friend['reciever']); ?>"><br>
                                <a style="font-size: 10px;text-decoration: none;" href="/user/<?php echo htmlspecialchars($friend['reciever']); ?>"><?php echo htmlspecialchars($friend['reciever']); ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div><br>
                <?php } ?>

                <?php 
                    $stmt = $conn->prepare("SELECT * FROM profile_comments WHERE toid = ? ORDER BY id DESC");
                    $stmt->bind_param("s", $_user['username']);
                    $stmt->execute();
                    $result = $stmt->get_result();
                ?>
                <div class="channel-box-profle">
                    <div class="channel-box-top" style="height: 12px;">
                        <h3 style="display: inline-block;">Channel Comments (<?php echo $result->num_rows; ?>)</h3>
                    </div>
                    <div class="channel-box-no-bg">
                        <?php if(!isset($_SESSION['siteusername'])) { ?>
                            <div class="comment-alert">
                                <a href="/sign_in">Sign In</a> or <a href="/create_account">Sign Up</a> now to post a comment!
                            </div>
                        <?php } else if($_video['commenting'] == "d") { ?>
                            <div class="comment-alert">
                                This video has commenting disabled!
                            </div>
                        <?php } else { ?>
                            <form method="post" action="" id="submitform">
                                <?php echo $error . "<br>"; ?>
                                <small><small style="font-size: 11px; color: #555;">This site is protected by reCAPTCHA and the Google
                                    <a class="grey-link" href="https://policies.google.com/privacy">Privacy Policy</a> and
                                    <a class="grey-link" href="https://policies.google.com/terms">Terms of Service</a> apply.</small></small><br>
                            
                                    <textarea 
                                        onkeyup="textCounter(this,'counter',500);" 
                                        class="comment-textbox" cols="32" id="com" style="width: 98%;"
                                        placeholder="Leave a nice comment on this channel" name="comment"></textarea><br><br> 
                                    <input disabled class="characters-remaining" maxlength="3" size="3" value="500" id="counter"> <?php if(!isset($cLang)) { ?> characters remaining <?php } else { echo $cLang['charremaining']; } ?> 
                                    <input type="submit" value="Post" class="g-recaptcha" data-sitekey="<?php echo $config['recaptcha_sitekey']; ?>" data-callback="onLogin">
                                    <script>
                                    function textCounter(field,field2,maxlimit) {
                                        var countfield = document.getElementById(field2);
                                        if ( field.value.length > maxlimit ) {
                                            field.value = field.value.substring( 0, maxlimit );
                                            return false;
                                        } else {
                                            countfield.value = maxlimit - field.value.length;
                                        }
                                        }
                                    </script>
                            </form>
                        <?php } ?><br>
                        
                        <?php while($comment = $result->fetch_assoc()) {  ?>
                        <hr class="thin-line">
                        <div class="comment-watch">
                            <img class="comment-pfp" src="/dynamic/pfp/<?php echo $_user_fetch_utils->fetch_user_pfp($comment['author']); ?>">
                            <span  style="display: inline-block; vertical-align: top;width: 575px;">
                                <span class="comment-info" style="display: inline-block;">
                                    <b><a style="text-decoration: none;" href="/user/<?php echo htmlspecialchars($comment['author']); ?>">
                                        <?php echo htmlspecialchars($comment['author']); ?> 
                                    </a></b> 
                                    <span style="color: #666;">(<?php echo $_video_fetch_utils->time_elapsed_string($comment['date']); ?>)</span>
                                </span><br>
                                <span class="comment-text" style="display: inline-block;">
                                    <?php echo $_video_fetch_utils->parseTextDescription($comment['comment']); ?>
                                </span>
                            </span>

                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="channelbg">
            &nbsp;
        </div>
        <div class="www-core-container">
        <?php require($_SERVER['DOCUMENT_ROOT'] . "/static/module/footer.php"); ?>
        </div>

    </body>
</html>
<?php if(isset($_GET['about'])) { ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/2013_about.php"); ?>
<?php } elseif(isset($_GET['channels'])) {
require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/2013_channels.php"); ?>
<?php	} else{	?>
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
	$__server->page_embeds->page_title = "Betatube";
	$__server->page_embeds->page_description = "Share your videos with friends, family, and the world";
	$__server->page_embeds->page_url = "https://www.betatube.net/";
?>
<style>.ytp-scalable-icon-shrink {transform: scale(1) !important; -webkit-transform: scale(1) !important; -moz-transform: scale(1) !important; -o-transform: scale(1) !important; -ms-transform: scale(1) !important; }.ytp-scalable-icon-grow {transform: translate(-50%, -50%) scale(0.5) !important; -webkit-transform: translate(-50%, -50%) scale(0.5) !important; -moz-transform: translate(-50%, -50%) scale(0.5) !important; -o-transform: translate(-50%, -50%) scale(0.5) !important; -ms-transform: translate(-50%, -50%) scale(0.5) !important; }</style>
<html lang="en">
	<head>
<style>
.subscribe-label,.subscribed-label,.unsubscribe-label,.unavailable-label,.yt-uix-button-subscribed-branded.hover-enabled:hover .subscribed-label,.yt-uix-button-subscribed-unbranded.hover-enabled:hover .subscribed-label {
    display: block;
    line-height: 0;
    visibility: hidden;
    overflow: hidden;
    white-space: nowrap;
    word-wrap: normal;
    *zoom:1;-o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box
}
.yt-uix-button-subscribe-branded .subscribe-label,.yt-uix-button-subscribe-branded .unavailable-label,.yt-uix-button-subscribed-branded .subscribed-label,.yt-uix-button-subscribed-branded.hover-enabled:hover .unsubscribe-label {
    line-height: 22px;
    visibility: visible
}
.live-badge {
    border: 1px solid #b91f1f;
    padding: 0 4px;
    color: #b91f1f;
    font-size: 10px;
    background-color: #fff;
    line-height: 1.5em;
    display: inline-block;
    *display: inline;
    *zoom:1}

    .yt-subscription-button .subscribe-label,
    .yt-subscription-button .subscribed-label,
    .yt-subscription-button .unsubscribe-label {
    display:block
    }
    .yt-subscription-button .subscribed-label,
    .yt-subscription-button .unsubscribe-label,
    .yt-subscription-button.subscribed .subscribe-label,
    .yt-subscription-button.subscribed .unsubscribe-label,
    .yt-subscription-button.subscribed.hover-enabled:hover .subscribed-label,
    .yt-subscription-button.subscribed.hover-enabled[disabled]:hover .unsubscribe-label {
    line-height:0;
    visibility:hidden
    }
    .yt-subscription-button.subscribed .subscribed-label,
    .yt-subscription-button.subscribed.hover-enabled:hover .unsubscribe-label,
    .yt-subscription-button.subscribed.hover-enabled[disabled]:hover .subscribed-label {
    line-height:normal;
    visibility:visible
    }
    .yt-subscription-button-disabled-mask-container {
    position:relative;
    display:inline-block
    }
    .yt-subscription-button-disabled-mask {
    display:none;
    position:absolute;
    top:0;
    right:0;
    bottom:0;
    left:0
    }
    .yt-subscription-button-disabled-mask-container .yt-subscription-button-disabled-mask {
    display:block
    }
	body .yt-uix-button-icon-subscribe {
		margin-right: 0
	}
	@media screen and (-webkit-min-device-pixel-ratio: 0) {
		.yt-uix-button-subscribed-branded .yt-uix-button-icon-subscribe,.yt-uix-button-subscribed-unbranded .yt-uix-button-icon-subscribe,.yt-uix-button-subscribe-unbranded.ypc-enabled .yt-uix-button-icon-subscribe {
			margin-top:-2px
		}
	}
	.yt-uix-button-subscribe-branded.ypc-enabled .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -209px -212px;
		background-size: auto;
		width: 16px;
		height: 12px
	}
	.yt-uix-button-subscribe-branded.ypc-unavailable .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -126px -21px;
		background-size: auto;
		width: 16px;
		height: 12px
	}
	.yt-uix-button-subscribe-unbranded.ypc-enabled .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -53px -62px;
		background-size: auto;
		width: 13px;
		height: 13px
	}
	.yt-uix-button-subscribe-unbranded.ypc-enabled:hover .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -124px -83px;
		background-size: auto;
		width: 13px;
		height: 13px
	}
	.yt-uix-button-subscribe-unbranded.ypc-enabled:hover .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -124px -83px;
		background-size: auto;
		width: 13px;
		height: 13px
	}
	.yt-uix-button-subscribed-unbranded .yt-uix-button-icon-subscribe,.yt-uix-button-subscribed-branded .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -208px -132px;
		background-size: auto;
		width: 11px;
		height: 8px
	}
	.yt-uix-button-subscribed-branded.external .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -104px -62px;
		background-size: auto;
		width: 16px;
		height: 12px
	}
	.yt-uix-button-subscribed-branded.hover-enabled:hover .yt-uix-button-icon-subscribe,.yt-uix-button-subscribed-unbranded.hover-enabled:hover .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -173px -104px;
		background-size: auto;
		width: 11px;
		height: 10px
	}
	body .yt-uix-button-icon-subscribe {
		margin-right: 0
	}
	@media screen and (-webkit-min-device-pixel-ratio: 0) {
		.yt-uix-button-subscribed-branded .yt-uix-button-icon-subscribe,.yt-uix-button-subscribed-unbranded .yt-uix-button-icon-subscribe,.yt-uix-button-subscribe-unbranded.ypc-enabled .yt-uix-button-icon-subscribe {
			margin-top:-2px
		}
	}
	.yt-uix-button-subscribe-branded .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -295px -94px;
		background-size: auto;
		width: 16px;
		height: 12px
	}
	.yt-uix-button-subscribe-branded.ypc-enabled .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -209px -212px;
		background-size: auto;
		width: 16px;
		height: 12px
	}
	.yt-uix-button-subscribe-branded.ypc-unavailable .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -126px -21px;
		background-size: auto;
		width: 16px;
		height: 12px
	}
	.yt-uix-button-subscribe-unbranded.ypc-enabled .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -53px -62px;
		background-size: auto;
		width: 13px;
		height: 13px
	}
	.yt-uix-button-subscribe-unbranded.ypc-enabled:hover .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -124px -83px;
		background-size: auto;
		width: 13px;
		height: 13px
	}
	.yt-uix-button-subscribed-unbranded .yt-uix-button-icon-subscribe,.yt-uix-button-subscribed-branded .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -208px -132px;
		background-size: auto;
		width: 11px;
		height: 8px
	}
	.yt-uix-button-subscribed-branded.external .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -104px -62px;
		background-size: auto;
		width: 16px;
		height: 12px
	}
	.yt-uix-button-subscribed-branded.hover-enabled:hover .yt-uix-button-icon-subscribe,.yt-uix-button-subscribed-unbranded.hover-enabled:hover .yt-uix-button-icon-subscribe {
		background: no-repeat url(/yts/imgbin/www-hitchhiker-vflFMVkjB1.png) -173px -104px;
		background-size: auto;
		width: 11px;
		height: 10px
	}
</style>
		<script>
			var yt = yt || {};yt.timing = yt.timing || {};yt.timing.data_ = yt.timing.data_ || {};yt.timing.tick = function(label, opt_time) {var tick = yt.timing.data_['tick'] || {};tick[label] = opt_time || new Date().getTime();yt.timing.data_['tick'] = tick;};yt.timing.info = function(label, value) {var info = yt.timing.data_['info'] || {};info[label] = value;yt.timing.data_['info'] = info;};yt.timing.reset = function() {yt.timing.data_ = {};};if (document.webkitVisibilityState == 'prerender') {yt.timing.info('prerender', 1);document.addEventListener('webkitvisibilitychange', function() {yt.timing.tick('start');}, false);}yt.timing.tick('start');try {var externalPt = (window.gtbExternal && window.gtbExternal.pageT() ||window.external && window.external.pageT);if (externalPt) {yt.timing.info('pt', externalPt);}} catch(e) {}if (window.chrome && window.chrome.csi) {yt.timing.info('pt', Math.floor(window.chrome.csi().pageT));}    
		</script>
		<title>Betatube - <?php if($_user['title'])	{	?>
						<?php echo htmlspecialchars($_user['title']); ?>
						<?php } else {	?>
						<?php echo htmlspecialchars($_user['username']); ?>
						<?php	}	?></title>
		<link id="css-2955892050" rel="stylesheet" href="/yts/cssbin/www-core-vflEJosKh.css">
		<link id="css-151587203" rel="stylesheet" href="/yts/cssbin/www-home-vfl_Eri60.css">
		<script>
			if (window.yt.timing) {yt.timing.tick("ct");}    
		</script>
	</head>
	<body dir="ltr" class="  ltr      site-left-aligned  exp-new-site-width  exp-watch7-comment-ui  hitchhiker-enabled      guide-enabled    guide-expanded  ">
		<div id="body-container">
			<form name="logoutForm" method="POST" action="/logout"><input type="hidden" name="action_logout" value="1"></form>
			<?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/2013_header.php"); ?>
			<div id="alerts"></div>
			<div id="header">
				<div id="masthead_child_div"></div>
				<div id="ad_creative_expand_btn_1" class="masthead-ad-control masthead-ad-control-lohp open hid">
					<a onclick="masthead.expand_ad(); return false;">
					<span>Show ad</span>
					<img src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="">
					</a>
				</div>
			</div>
			<div id="page-container">
				<div id="page" class="  home     branded-page-v2-detached-top  clearfix">
					<div id="guide"><?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/2013_guide.php"); ?></div>
					<div id="content" class="">
<html dir="ltr" xmlns:og="http://opengraphprotocol.org/schema/" lang="en">
	<!-- machid: sNW5tN3Z2SWdXaDRqNGxuNEF5MFBxM1BxWXd0VGo0Rkg3UXNTTTNCUGRDWjR0WGpHR3R1YzFR -->
	<head>
	<script>
         var yt = yt || {};yt.timing = yt.timing || {};yt.timing.tick = function(label, opt_time) {var timer = yt.timing['timer'] || {};if(opt_time) {timer[label] = opt_time;}else {timer[label] = new Date().getTime();}yt.timing['timer'] = timer;};yt.timing.info = function(label, value) {var info_args = yt.timing['info_args'] || {};info_args[label] = value;yt.timing['info_args'] = info_args;};yt.timing.info('e', "907722,906062,910102,927104,922401,920704,912806,927201,913546,913556,925109,919003,920201,912706,900816");yt.timing.wff = true;yt.timing.info('an', "");if (document.webkitVisibilityState == 'prerender') {document.addEventListener('webkitvisibilitychange', function() {yt.timing.tick('start');}, false);}yt.timing.tick('start');yt.timing.info('li','0');try {yt.timing['srt'] = window.gtbExternal && window.gtbExternal.pageT() ||window.external && window.external.pageT;} catch(e) {}if (window.chrome && window.chrome.csi) {yt.timing['srt'] = Math.floor(window.chrome.csi().pageT);}if (window.msPerformance && window.msPerformance.timing) {yt.timing['srt'] = window.msPerformance.timing.responseStart - window.msPerformance.timing.navigationStart;}    
      </script>
      <script>var yt = yt || {};yt.preload = {};yt.preload.counter_ = 0;yt.preload.start = function(src) {var img = new Image();var counter = ++yt.preload.counter_;yt.preload[counter] = img;img.onload = img.onerror = function () {delete yt.preload[counter];};img.src = src;img = null;};yt.preload.start("\/\/o-o---preferred---sn-o097zne7---v18---lscache1.c.youtube.com\/crossdomain.xml");yt.preload.start("\/\/o-o---preferred---sn-o097zne7---v18---lscache1.c.youtube.com\/generate_204?ip=207.241.237.166\u0026upn=sWh0pzcodo0\u0026sparams=algorithm%2Cburst%2Ccp%2Cfactor%2Cgcr%2Cid%2Cip%2Cipbits%2Citag%2Csource%2Cupn%2Cexpire\u0026fexp=907722%2C906062%2C910102%2C927104%2C922401%2C920704%2C912806%2C927201%2C913546%2C913556%2C925109%2C919003%2C920201%2C912706%2C900816\u0026mt=1349916311\u0026key=yt1\u0026algorithm=throttle-factor\u0026burst=40\u0026ipbits=8\u0026itag=34\u0026sver=3\u0026signature=C397DCB00566E0FBB1551675B6108A4158C34557.CB3777882F05D65158C043C258FF8D4EBA90FA50\u0026mv=m\u0026source=youtube\u0026ms=au\u0026gcr=us\u0026expire=1349937946\u0026factor=1.25\u0026cp=U0hTTllOVV9JUENOM19RSFlKOmVLUWdkTXRmS0dX\u0026id=a078394896111c0d");</script>
        <title>Betatube - <?php if($_user['title'])	{	?>
						<?php echo htmlspecialchars($_user['title']); ?>
						<?php } else {	?>
						<?php echo htmlspecialchars($_user['username']); ?>
						<?php	}	?></title>
		<meta property="og:title" content="Betatube - <?php if($_user['title'])	{	?>
						<?php echo htmlspecialchars($_user['title']); ?>
						<?php } else {	?>
						<?php echo htmlspecialchars($_user['username']); ?>
						<?php	}	?>" />
		<meta property="og:url" content="<?php echo $__server->page_embeds->page_url; ?>" />
		<meta property="og:description" content="<?php echo $__server->page_embeds->page_description; ?>" />
		<meta property="og:image" content="<?php echo $__server->page_embeds->page_image; ?>" />
		<script>
			var yt = yt || {};yt.timing = yt.timing || {};yt.timing.tick = function(label, opt_time) {var timer = yt.timing['timer'] || {};if(opt_time) {timer[label] = opt_time;}else {timer[label] = new Date().getTime();}yt.timing['timer'] = timer;};yt.timing.info = function(label, value) {var info_args = yt.timing['info_args'] || {};info_args[label] = value;yt.timing['info_args'] = info_args;};yt.timing.info('e', "904821,919006,922401,920704,912806,913419,913546,913556,919349,919351,925109,919003,920201,912706");if (document.webkitVisibilityState == 'prerender') {document.addEventListener('webkitvisibilitychange', function() {yt.timing.tick('start');}, false);}yt.timing.tick('start');yt.timing.info('li','0');try {yt.timing['srt'] = window.gtbExternal && window.gtbExternal.pageT() ||window.external && window.external.pageT;} catch(e) {}if (window.chrome && window.chrome.csi) {yt.timing['srt'] = Math.floor(window.chrome.csi().pageT);}if (window.msPerformance && window.msPerformance.timing) {yt.timing['srt'] = window.msPerformance.timing.responseStart - window.msPerformance.timing.navigationStart;}    
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="/yt/jsbin/plupload.full.min.js"></script>
		<script id="scriptload-1728513939" src="//s.ytimg.com/yt/jsbin/html5player-vfl1S0-AB.js" data-loaded="true"></script>
		   <script>
         var gYouTubePlayerReady = false;
         if (!window['onYouTubePlayerReady']) {
           window['onYouTubePlayerReady'] = function() {
             gYouTubePlayerReady = true;
           };
         }
      </script>
      <script>
         if (window.yt.timing) {yt.timing.tick("ct");}    
      </script>
	</head>
	<body id="" class="date-20120614 en_US ltr   ytg-old-clearfix " dir="ltr">
		<form name="logoutForm" method="POST" action="/logout">
			<input type="hidden" name="action_logout" value="1">
		</form>
		<link id="css-3576209200" class="www-channels4" rel="stylesheet" href="/yts/cssbin/www-channels4-vflQKV14P1.css" data-loaded="true">
		<!-- begin page -->
<div id="content" class="">
            <div id="watch7-main-container">
              <div id="watch7-main" class="clearfix">
                <div id="watch7-content" class="watch-content">
                  <div class="yt-uix-button-panel">
                    <div id="watch7-headline" class="clearfix  yt-uix-expander yt-uix-expander-collapsed">
                      <h1 id="watch-headline-title" class="yt">






                        <span id="eow-title" class="watch-title long-title yt-uix-expander-head" dir="ltr" title="Ray William Johnson - Doin Your Mom">
                          Ray William Johnson - Doin Your Mom                        </span>

                      </h1>
                    </div>

                    <div id="watch7-user-header"><a href="/user/ass" class="yt-user-photo "> <span class="video-thumb  yt-thumb yt-thumb-48">
                          <span class="yt-thumb-square">
                            <span class="yt-thumb-clip">
                              <span class="yt-thumb-clip-inner">
                                <img alt="hwilliams8548" src="/dynamic/pfp/default.png" width="48">
                                <span class="vertical-align"></span>
                              </span>
                            </span>
                          </span>
                        </span>
                      </a><a href="/user/ass" class="yt-uix-sessionlink yt-user-name " data-sessionlink="feature=watch&amp;ei=OjjUUa_0DM3hggLZtoHADw" dir="ltr">hwilliams8548</a>  <span class="yt-user-separator">·</span><a class="yt-uix-sessionlink yt-user-videos" href="/user/ass/videos" data-sessionlink="feature=watch&amp;ei=OjjUUa_0DM3hggLZtoHADw">1 videos</a><br><span id="watch7-subscription-container"><span class=" yt-uix-button-subscription-container with-preferences">
                                                      <button onclick=";subscribe();return false;" title="" id="subscribe-button" type="button" class=" yt-subscription-button hover-enabled yt-uix-button yt-uix-button-subscribe-branded" role="button"> <span class="yt-uix-button-icon-wrapper">
                                <img class="yt-uix-button-icon yt-uix-button-icon-subscribe" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
                                <span class="yt-uix-button-valign"></span>
                              </span>
                              <span class="yt-uix-button-content">
                                <span class="subscribe-label" aria-label="Subscribe">Subscribe</span><span class="subscribed-label" aria-label="Unsubscribe">Subscribed</span><span class="unsubscribe-label" aria-label="Unsubscribe">Unsubscribe</span>
                              </span>
                            </button><button class="yt-uix-subscription-preferences-button yt-uix-button yt-uix-button-default yt-uix-button-empty" type="button" onclick=";return false;" data-channel-external-id="UCj5i58mCkAREDqFWlhaQbOw" role="button"> <span class="yt-uix-button-icon-wrapper">
                                <img class="yt-uix-button-icon yt-uix-button-icon-subscription-preferences" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
                                <span class="yt-uix-button-valign"></span>
                              </span>
                            </button>
                                                    <span class="yt-subscription-button-subscriber-count-branded-horizontal">0</span> <span class="yt-subscription-button-disabled-mask" title=""></span>

                          <div class="yt-uix-overlay " data-overlay-style="primary" data-overlay-shape="tiny">

                            <div class="yt-dialog hid">
                              <div class="yt-dialog-base">
                                <span class="yt-dialog-align"></span>
                                <div class="yt-dialog-fg">
                                  <div class="yt-dialog-fg-content">
                                    <div class="yt-dialog-header">
                                      <h2 class="yt-dialog-title">
                                        Subscription preferences


                                      </h2>
                                    </div>
                                    <div class="yt-dialog-loading">
                                      <div class="yt-dialog-waiting-content">
                                        <div class="yt-spinner-img"></div>
                                        <div class="yt-dialog-waiting-text">Loading...</div>
                                      </div>

                                    </div>
                                    <div class="yt-dialog-content">
                                      <div class="subscription-preferences-overlay-content-container">
                                        <div class="subscription-preferences-overlay-loading ">
                                          <p class="yt-spinner">
                                            <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

                                            <span class="yt-spinner-message">
                                              Loading...
                                            </span>
                                          </p>

                                        </div>
                                        <div class="subscription-preferences-overlay-content">
                                        </div>
                                      </div>

                                    </div>
                                    <div class="yt-dialog-working">
                                      <div id="yt-dialog-working-overlay">
                                      </div>
                                      <div id="yt-dialog-working-bubble">
                                        <div class="yt-dialog-waiting-content">
                                          <div class="yt-spinner-img"></div>
                                          <div class="yt-dialog-waiting-text">Working...</div>
                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>


                          </div>
 
                        </span></span>
                      <div id="watch7-views-info"> <span class="watch-view-count ">
                          13                        </span>

                        <div class="video-extras-sparkbars">
                          <div class="video-extras-sparkbar-likes" style="width: 0%"></div>
                          <div class="video-extras-sparkbar-dislikes" style="width: 0%"></div>
                        </div>
                        <span class="video-extras-likes-dislikes">
                          <img class="icon-watch-stats-like" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Like">
                          <span class="likes-count">0</span>
                          &nbsp;&nbsp;&nbsp; <img class="icon-watch-stats-dislike" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Dislike">
                          <span class="dislikes-count">0</span>

                        </span>

                      </div>
                    </div>
                    <div id="watch7-action-buttons" class="clearfix">
                      <div id="watch7-sentiment-actions">
                        <span id="watch-like-dislike-buttons" class="yt-uix-button-group " data-button-toggle-group="optional"><span class="yt-uix-clickcard">
                          <button id="watch-like" type="button" class="start yt-uix-clickcard-target yt-uix-button yt-uix-button-text yt-uix-tooltip" title="" data-unlike-tooltip="Unlike" data-position="bottomright" data-like-tooltip="I like this" data-button-toggle="true" data-orientation="vertical" data-force-position="true" role="button"> <span class="yt-uix-button-icon-wrapper">
                                <img class="yt-uix-button-icon yt-uix-button-icon-watch-like" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
                                <span class="yt-uix-button-valign"></span>
                              </span>
                              <span class="yt-uix-button-content">
                                Like
                              </span>
                            </button>
                                                        <div class="watch7-hovercard yt-uix-clickcard-content">
                              <h3 class="watch7-hovercard-header">Sign in to VapeTube</h3>
                              <div class="watch7-hovercard-message">
                                Sign in with your VapeTube Account to like <span class="yt-user-name " dir="ltr">hwilliams8548</span>'s video.

                              </div>
                              <!-- <ul class="watch7-hovercard-icon-strip clearfix">
                                <li class="watch7-hovercard-icon">
                                  <div class="watch7-hovercard-youtube-icon"></div>
                                </li>
                                <li class="watch7-hovercard-icon">
                                  <div class="watch7-hovercard-gplus-icon"></div>
                                </li>
                                <li class="watch7-hovercard-icon">
                                  <div class="watch7-hovercard-gmail-icon"></div>
                                </li>
                                <li class="watch7-hovercard-icon">
                                  <div class="watch7-hovercard-picasa-icon"></div>
                                </li>
                                <li class="watch7-hovercard-icon">
                                  <div class="watch7-hovercard-chrome-icon"></div>
                                </li> 
                              </ul> -->
                              <div class="watch7-hovercard-account-line">
                                <a href="/sign_in" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=OjjUUa_0DM3hggLZtoHADw"><span class="yt-uix-button-content">Sign in</span></a>
                              </div>
                            </div>
                                                      </span><span class="yt-uix-clickcard">
                            <button id="watch-dislike" type="button" class="end yt-uix-clickcard-target yt-uix-button yt-uix-button-text yt-uix-tooltip yt-uix-button-empty" title="I dislike this" data-button-toggle="true" data-position="bottomright" data-orientation="vertical" data-force-position="true" role="button"> <span class="yt-uix-button-icon-wrapper">
                                <img class="yt-uix-button-icon yt-uix-button-icon-watch-dislike" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="I dislike this" title="">
                                <span class="yt-uix-button-valign"></span>
                              </span>
                            </button>
                            <div class="watch7-hovercard yt-uix-clickcard-content">
                              <h3 class="watch7-hovercard-header">Sign in to VapeTube</h3>
                              <div class="watch7-hovercard-message">
                              Sign in with your VapeTube Account to to dislike <span class="yt-user-name " dir="ltr">hwilliams8548</span>'s video.

                              </div>
                              <!-- <ul class="watch7-hovercard-icon-strip clearfix">
                                <li class="watch7-hovercard-icon">
                                  <div class="watch7-hovercard-youtube-icon"></div>
                                </li>
                                <li class="watch7-hovercard-icon">
                                  <div class="watch7-hovercard-gplus-icon"></div>
                                </li>
                                <li class="watch7-hovercard-icon">
                                  <div class="watch7-hovercard-gmail-icon"></div>
                                </li>
                                <li class="watch7-hovercard-icon">
                                  <div class="watch7-hovercard-picasa-icon"></div>
                                </li>
                                <li class="watch7-hovercard-icon">
                                  <div class="watch7-hovercard-chrome-icon"></div>
                                </li> 
                              </ul> -->
                              <div class="watch7-hovercard-account-line">
                                <a href="/sign_in" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=OjjUUa_0DM3hggLZtoHADw"><span class="yt-uix-button-content">Sign in</span></a>
                              </div>
                            </div>
                          </span></span>
                      </div>
                      <div id="watch7-secondary-actions" class="yt-uix-button-group" data-button-toggle-group="required">
        <span>
    <button class="action-panel-trigger yt-uix-button yt-uix-button-text yt-uix-tooltip yt-uix-button-toggled" type="button" onclick=";return false;" title="" data-button-toggle="true" data-trigger-for="action-panel-details" role="button">    <span class="yt-uix-button-content">
About 
    </span>
</button>
  </span>

          <span>
    <button class="action-panel-trigger yt-uix-button yt-uix-button-text yt-uix-tooltip" type="button" onclick=";return false;" title="" data-button-toggle="true" data-trigger-for="action-panel-share" role="button">    <span class="yt-uix-button-content">
Share 
    </span>
</button>
  </span>

          <span class="yt-uix-clickcard">
            <!-- Gonna add these back once i redo the action panel shit -->
    <!-- <button class="action-panel-trigger   yt-uix-clickcard-target yt-uix-button yt-uix-button-text yt-uix-tooltip" type="button" onclick=";return false;" title="" data-button-toggle="true" data-position="bottomleft" data-trigger-for="action-panel-none" data-orientation="vertical" data-upsell="playlist" role="button">    <span class="yt-uix-button-content">
Add to 
    </span>
</button> 
        <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to VapeTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your VapeTube Account to add <span class="yt-user-name " dir="ltr">hwilliams8548</span>'s video to your playlist.

    </div>
     <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul> 
    <div class="watch7-hovercard-account-line">
      <a href="/sign_in" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=OjjUUa_0DM3hggLZtoHADw"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>

  </span>

          <span>
    <button class="action-panel-trigger   yt-uix-button yt-uix-button-text yt-uix-tooltip yt-uix-button-empty" type="button" onclick=";return false;" title="Transcript" data-button-toggle="true" data-trigger-for="action-panel-transcript" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-action-panel-transcript" src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Transcript" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>
  </span>

            
  <span>
    <button disabled="True" type="button" onclick=";return false;" class="action-panel-trigger   yt-uix-button yt-uix-button-text yt-uix-tooltip yt-uix-button-empty" title="Stats have been disabled for this video" data-button-toggle="true" data-trigger-for="action-panel-stats" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-action-panel-stats" src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Stats have been disabled for this video" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>
  </span> -->


        <span>
    <button class="action-panel-trigger yt-uix-button yt-uix-button-text yt-uix-tooltip yt-uix-button-empty" type="button" onclick=";window.location.href=this.getAttribute('href');return false;" href="/report?v=RuGAQobwlml" title="Report" data-button-toggle="true" data-trigger-for="action-panel-report" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-action-panel-report" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Report" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>
  </span>

    </span></div>
  </div>

                    <div id="watch7-action-panels" class="yt-uix-button-panel">
                      <div id="action-panel-details" class="action-panel-content" data-panel-loaded="true">
                        <div id="watch-description" class="yt-uix-expander yt-uix-expander-collapsed yt-uix-button-panel">
                          <div id="watch-description-content" class="click-to-buy">
                            <div id="watch-description-clip">
                              <p id="watch-uploader-info">
                                <strong>Published on <span id="eow-date" class="watch-video-date">Feb 21, 2022</span>
                                </strong>
                              </p>
                              <div id="watch-description-text">
                                <p id="eow-description">not my song</p>
                              </div>
                              <div id="watch-description-extras">
                                <ul class="watch-extras-section">
                                  <li>
                                    <h4 class="title">
                                      Category
                                    </h4>
                                    <div class="content">
                                      <p id="eow-category"><a href="/videos?c=Film &amp; Animation">Film &amp; Animation</a></p>

                                    </div>
                                  </li>


                                  <li>
                                    <h4 class="title">License</h4>
                                    <div class="content">
                                      <p id="eow-reuse">
                                        Standard VapeTube License
                                      </p>

                                    </div>
                                  </li>

                                </ul>
                              </div>

                            </div>
                            <!-- <ul id="watch-description-extra-info">
                              <li class=""><span class="metadata-info"><span class="metadata-info-title">Buy "Song For Jane" on<br></span></span>
                                <div class="offer-image-thumbnail"><a href="https://web.archive.org/web/20130703144227/http://www.youtube.com/cthru?c2b=googlemusic&amp;key=BckR-YPSyE_cETaVzaYgb0XByS88DxM9pr57xrFnZGZ8jcqjLvy42AyNe7XI7uV-IM2FCSAM8NihtsPP6_tRUjqU2ckPyKvn-o6_xLwIZ109N6SJ6sZaJCEI4vm43v4tUD8hhyU8pqtGbsnVLKEjaYwJt4rCegAen85Wz9odvG11S_nVwxUFbIGoeATrACPb9arOnKq-JQtAMVr10H7DjAzAqVnhoxwBf2MbNjTm5xut5JL_zdyTXwi-u1z7jmeMwmesNR-K0CVTv_1Ni2yblDLJijUaRDh7M95TEqOXtMo%3D&amp;v=t7UlrHOF3eg" onmousedown="yt.tracking.track('metadataBuyMusic');" rel="nofollow" target="_blank"><img data-thumb="https://web.archive.org/web/20130703144227/https://lh3.ggpht.com/Sa0w-riwvMRwR6E1ErTR76OncI2UYC5L1SWsfHbDs5S4Sb3mhAjVazNuY2GcRrlH_muamaua" src="https://web.archive.org/web/20130703144227/https://lh3.ggpht.com/Sa0w-riwvMRwR6E1ErTR76OncI2UYC5L1SWsfHbDs5S4Sb3mhAjVazNuY2GcRrlH_muamaua" alt="" data-group-key="thumb-group-0"></a></div><span class="link-list metadata-info offer-links-with-thumbnail"><a href="https://web.archive.org/web/20130703144227/http://www.youtube.com/cthru?c2b=googlemusic&amp;key=AonCt1l6Ud5sG4DfdJAvyTElFUs2PEmrt6yrFRSmTpejRkdaas4wwN24U-LVFWNw3rknAJYd-G1roJaqrsGr2tA3bUU9_t7koyXeL6l34xMKRYDm129jtDlOU0aTkdk69idSBtOG1b-8xyxDQYhilqqjkvz3stdNGPGDquIav4evb0uak5u6Z_sQSoF3qw9LWjhV2GA8uYzGdJ7KLmcAgEqyuzHDmLYbkxUC9pNCPUlBB0CjaJNjpj9jc3CpkZKPbd8vXk2kDnufPx9qV66XG_oyX4QK1BknhfXlFgYAzyY%3D&amp;v=t7UlrHOF3eg" class="nowrap" onmousedown="yt.tracking.track('metadataBuyMusic');" rel="nofollow" target="_blank">Google Play</a><a href="https://web.archive.org/web/20130703144227/http://www.youtube.com/cthru?c2b=itunes&amp;key=liPTnVBXsM7-_WEIBZ0K9U5kC6wMrK-wXUOmW96XKrfvdO9HbKWz8hDV-dpAuNEhRYHRK_tIHSkCTwVw8p6YS3CamUD2LRmN4QdZ_cmnUjzeHNlcQKLemy_RzHFkG_bCQyxv4g_Yf4VOJGZoFiV-18m5StznNg-zd0JfIIXgDz8grG9ZKnKBXx4cH802bJf-lPS499aveynyJ-_xBBhaiIuJdI8c9Oqo2slrCV8BnntiSVmE6SefSnnB0dbxHQexg4_5GoC1_6shqMdVnY2w3SWZ0dF32_j3qhmPcceaWXM566MmvG4-ZmMJmm-ouAWsDxfFWfEZM6wu9wOj_vLG9ZXl3hJDElkctM-u5a2UZ93CtiCfJrn2Wo5a0aaThChExFWmBGowGkE%3D&amp;v=t7UlrHOF3eg" class="nowrap" onmousedown="yt.tracking.track('metadataBuyMusic');" rel="nofollow" target="_blank">iTunes</a><a href="https://web.archive.org/web/20130703144227/http://www.youtube.com/cthru?c2b=amazonmp3&amp;key=ewF4Dq7QcLRJ12bsMZjunJFVMRBzXvzzDKUAuJNYLhVvx3Lik1D0_zxNnHS0OLhwlGmdls0XhgNiIdFOxhbyTvYAxg3FabH3gTum111ztpla9fd3-DQrabFbQSpIfcH0M3A6lKIHXm4%3D&amp;v=t7UlrHOF3eg" class="nowrap" onmousedown="yt.tracking.track('metadataBuyMusic');" rel="nofollow" target="_blank">AmazonMP3</a></span>
                              </li>
                              <li class="watch-extra-info-long"> <span class="metadata-info">
                                  <span class="metadata-info-title">
                                    Artist<br>
                                  </span>
                                  <span>PM Artist Sessions Project</span>
                                </span>
                              </li>
                            </ul> -->
                          </div> 

                          <div id="watch-description-toggle" class="yt-uix-expander-head yt-uix-button-panel">
                            <div id="watch-description-expand" class="expand">
                              <button class="metadata-inline yt-uix-button yt-uix-button-text" type="button" onclick=";return false;" role="button"> <span class="yt-uix-button-content">
                                  Show more
                                </span>
                              </button>
                            </div>
                            <div id="watch-description-collapse" class="collapse">
                              <button class="metadata-inline yt-uix-button yt-uix-button-text" type="button" onclick=";return false;" role="button"> <span class="yt-uix-button-content">
                                  Show less
                                </span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div id="action-panel-share" class="action-panel-content hid" data-panel-loaded="true">
                        <div id="watch-actions-share-loading">
                          <div class="action-panel-loading">
                            <p class="yt-spinner">
                              <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

                              <span class="yt-spinner-message">
                                Loading...
                              </span>
                            </p>

                          </div>
                        </div>
                        <div id="watch-actions-share-panel"></div>

                      </div>

                      <div id="action-panel-addto" class="action-panel-content hid" data-auth-required="true" data-panel-loaded="true">
                        <div class="action-panel-loading">
                          <p class="yt-spinner">
                            <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

                            <span class="yt-spinner-message">
                              Loading...
                            </span>
                          </p>

                        </div>
                      </div>

                      <div id="action-panel-transcript" class="action-panel-content hid">
                        <div id="watch-actions-transcript-loading">
                          <div class="action-panel-loading">
                            <p class="yt-spinner">
                              <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

                              <span class="yt-spinner-message">
                                Loading...
                              </span>
                            </p>

                          </div>
                        </div>
                        <div id="watch-actions-transcript" class="watch-actions-panel hid" data-panel-loaded="true">
                          <div id="caption-line-template" class="hid">
                            <!--
    <div class="caption-line-time">
      <div class="caption-line-start">__start__</div>
    </div>
    <div class="editable-line-text">
      <span class="editable-line-text-original">__original__</span>
      <label class="editable-line-text-current hid">__current__</label>
      <textarea class="editable-line-text-input hid">__input__</textarea>
    </div>
    -->
                          </div>



                          <div id="watch-transcript-container">
                            <div id="watch-transcript-not-found" class="hid">
                              The interactive transcript could not be loaded.
                            </div>


                          </div>
                        </div>

                      </div>

                      <div id="action-panel-stats" class="action-panel-content hid" data-panel-loaded="true">
                        <div class="action-panel-loading">
                          <p class="yt-spinner">
                            <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

                            <span class="yt-spinner-message">
                              Loading...
                            </span>
                          </p>

                        </div>
                      </div>

                      <div id="action-panel-report" class="action-panel-content hid" data-auth-required="true" data-panel-loaded="true">
                        <div class="action-panel-loading">
                          <p class="yt-spinner">
                            <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

                            <span class="yt-spinner-message">
                              Loading...
                            </span>
                          </p>

                        </div>
                      </div>

                      <div id="action-panel-login" class="action-panel-content hid">
                        <div class="action-panel-login">
                          <a href="/sign_in" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-default" data-sessionlink="ei=OjjUUa_0DM3hggLZtoHADw"><span class="yt-uix-button-content">Sign in</span></a>
                        </div>
                      </div>

                      <div id="action-panel-ratings-disabled" class="action-panel-content hid">
                        <div id="watch-actions-ratings-disabled" class="watch-actions-panel">
                          <em>Ratings have been disabled for this video.</em>
                        </div>

                      </div>

                      <div id="action-panel-rental-required" class="action-panel-content hid">
                        <div id="watch-actions-rental-required" class="watch-actions-panel">
                          <strong>Rating is available when the video has been rented.</strong>
                        </div>

                      </div>

                      <div id="action-panel-error" class="action-panel-content hid">
                        <div class="action-panel-error">
                          This feature is not available right now. Please try again later.
                        </div>
                      </div>

                      <div id="watch7-action-panel-footer">
                        <hr class="yt-horizontal-rule ">

                      </div>
                    </div>

                  </div>
                  <div id="watch-discussion">


                    <div id="comments-view" data-type="highlights" class="">

                      <div>
                        <h4>
                          <a href="/all_comments?v=RuGAQobwlml">
                            <strong>All Comments</strong> (0)

                          </a>
                        </h4>

                                                <div class="comments-post-alert comments-post">
                          <a href="/sign_in">Sign in</a> now to post a comment!

                        </div>
                        <br>
<script>

var el;                                                    

function countCharacters(e) {                                    
  var textEntered, countRemaining, counter;          
  textEntered = document.getElementById('comments-textarea').value;  
  counter = (500 - (textEntered.length));
  countRemaining = document.getElementById('comments-remaining-count'); 
  countRemaining.textContent = counter;       
}
el = document.getElementById('comments-textarea');                   
el.addEventListener('keyup', countCharacters, false);

</script>
                        <div id="live-comments-setting-scroll" class="live-comments-setting hid">
													<span id="live-comments-count"></span>
													<a onclick="yt.www.watch.livecomments.setScroll(true); return false;">Update automatically</a>
												</div>
												<div id="live-comments-setting-no-scroll" class="live-comments-setting hid">
													<a onclick="yt.www.watch.livecomments.setScroll(false); return false;">Disable automatic updates</a>
												</div>
                        <ul id="all-comments live_comments">

                        



                        </ul>

                      </div>




                      <ul>
                        <li class="hid" id="parent-comment-loading">Loading comment...</li>
                      </ul>
                    </div>
                    <div id="comments-loading" class="hid">Loading...</div>
                    <div class="comments-pagination" data-ajax-enabled="true">
                      <button class="yt-uix-pager-button yt-uix-pager-show-more yt-uix-button yt-uix-button-default hid" type="button" onclick=";return false;" role="button"> <span class="yt-uix-button-content">
                          Show more
                        </span>
                      </button>
                    </div>



                  </div>



                </div>
                <div id="watch7-sidebar" class="watch-sidebar ">

                  <div id="watch7-sidebar-discussion"></div>


                  <div id="watch-channel-brand-div" class="">
                    <div id="watch-channel-brand-div-text">
                      Advertisement
                    </div>
                    <div id="google_companion_ad_div">
                    </div>
                  </div>


                  <div class="watch-sidebar-section">

                    <div class="watch-sidebar-body">
                      <ul id="watch-related" class="video-list">
                                              
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  <li class="video-list-item related-list-item"><a href="/watch?v=0JarEPU4nCX" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="feature=related&amp;ei=OjjUUa_0DM3hggLZtoHADw&amp;ved=CAMQzRooAA"><span class="ux-thumb-wrap contains-addto "> <span class="video-thumb  yt-thumb yt-thumb-120">
                                <span class="yt-thumb-default">
                                  <span class="yt-thumb-clip">
                                    <span class="yt-thumb-clip-inner">
                                      <img alt="" src="/dynamic/thumbs/0JarEPU4nCX.png" data-thumb="/dynamic/thumbs/0JarEPU4nCX.png" onerror=";this.src='/dynamic/thumbs/default.jpg';" width="120" data-group-key="thumb-group-0">
                                      <span class="vertical-align"></span>
                                    </span>
                                  </span>
                                </span>
                              </span>
                              <span class="video-time">0:05</span>

                              <button type="button" onclick=";return false;" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="0xX9GC5DRKA" role="button"> <span class="yt-uix-button-content">
                                  <img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">

                                </span>
                                <img class="yt-uix-button-arrow" src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title=""></button>
                            </span><span dir="ltr" class="title" title="join my discord ">join my discord </span><span class="stat attribution">by <span class="yt-user-name " dir="ltr"></span></span> <span class="stat view-count">
                              25 views
                            </span>
                          </a></li>
                                                  </ul></div>
                        <button class=" yt-uix-button yt-uix-button-default hid" id="watch-more-related-button" type="button" onclick=";return false;" data-button-action="yt.www.watch.related.loadMore" role="button"> <span class="yt-uix-button-content">
                            Load more suggestions
                          </span>
                        </button>

                      
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div style="visibility: hidden; height: 0px; padding: 0px; overflow: hidden;">
            </div>

          </div>
		<!-- end page -->

<script id="www-core-js" src="/yt/jsbin/www-core-vfl1pq97W.js" data-loaded="true"></script>
		<script id="www-core-js" src="//s.ytimg.com/yt/jsbin/www-core-vfl-1JTp7.js" data-loaded="true"></script>
		<script>
			yt.setConfig({
			'XSRF_TOKEN': 'sWZ0733z73lb8fEYAYSd84MaNV98MTM0OTEzMDExNUAxMzQ5MDQzNzE1',
			'XSRF_FIELD_NAME': 'session_token'
			});
			yt.pubsub.subscribe('init', yt.www.xsrf.populateSessionToken);
			
			yt.setConfig('XSRF_REDIRECT_TOKEN', '08fYRr2a9pjbx2VYZhoZtyl-4lh8MTM0OTEzMDExNUAxMzQ5MDQzNzE1');
			
			yt.setConfig({
			'EVENT_ID': "CJuY27ur3rICFaL4OgodEHRznw==",
			'CURRENT_URL': "\/\/www.youtube.com\/watch?v=<?php echo htmlspecialchars($_video['rid']); ?>\u0026feature=g-logo-xit",
			'LOGGED_IN': false,
			'SESSION_INDEX': null,
			
			'WATCH_CONTEXT_CLIENTSIDE': false,
			
			'FEEDBACK_LOCALE_LANGUAGE': "en",
			'FEEDBACK_LOCALE_EXTRAS': {"logged_in": false, "experiments": "906717,901803,907354,904448,901424,922401,920704,912806,913419,913546,913556,919349,919351,925109,919003,912706,900816", "guide_subs": "NA", "accept_language": null}    });
		</script>
		<script>
			if (window.yt.timing) {yt.timing.tick("js_head");}    
		</script>
		<script>
			yt.setAjaxToken('subscription_ajax', "");
			yt.pubsub.subscribe('init', yt.www.subscriptions.SubscriptionButton.init);
			
		</script>
		<script>
			yt.setConfig({
			  'VIDEO_ID': "<?php echo htmlspecialchars($_video['rid']); ?>"    });
			yt.setAjaxToken('watch_actions_ajax', "");
			
			if (window['gYouTubePlayerReady']) {
			  yt.registerGlobal('gYouTubePlayerReady');
			}
		</script>
		<script>
        yt = yt || {};
      yt.playerConfig = {"assets": {"css_actions": "\/\/s.ytimg.com\/yt\/cssbin\/www-player-actions-vflWsl9n_.css", "html": "\/html5_player_template", "css": "\/\/s.ytimg.com\/yt\/cssbin\/www-player-vflE5bu0u.css", "js": "\/\/s.ytimg.com\/yt\/jsbin\/html5player-vfl1S0-AB.js"}, "url": "\/\/s.ytimg.com\/yt\/swfbin\/watch_as3-vfloWhEvq.swf", "min_version": "8.0.0", "args": {"fexp": "907722,906062,910102,927104,922401,920704,912806,927201,913546,913556,925109,919003,920201,912706,900816", "ptk": "youtube_multi", "enablecsi": "1", "allow_embed": 1, "rvs": "", "vq": "auto", "account_playback_token": "", "autohide": "2", "csi_page_type": "watch5", "keywords": "<?php echo htmlspecialchars($_video['tags']); ?>", "cr": "US", "iv3_module": "\/\/s.ytimg.com\/yt\/swfbin\/iv3_module-vflGCS_pr.swf", "fmt_list": "43\/320x240\/99\/0\/0,34\/320x240\/9\/0\/115,18\/320x240\/9\/0\/115,5\/320x240\/7\/0\/0,36\/320x240\/99\/0\/0,17\/176x144\/99\/0\/0", "title": "<?php echo htmlspecialchars($_video['title']); ?>", "length_seconds": <?php echo $_video['duration']; ?>, "enablejsapi": 1, "advideo": "1", "tk": "o3_r7m6s_HAaFxeywi14S3qFcY4uSrEiWfZ8KVUoyEB_gj1rlrELuQ==", "iv_load_policy": 1, "iv_module": "\/\/s.ytimg.com\/yt\/swfbin\/iv_module-vflBJ5PLc.swf", "sdetail": "p:bit.ly\/dwMq4b", "url_encoded_fmt_stream_map": "", "watermark": ",\/\/s.ytimg.com\/yt\/img\/watermark\/youtube_watermark-vflHX6b6E.png,\/\/s.ytimg.com\/yt\/img\/watermark\/youtube_hd_watermark-vflAzLcD6.png", "sourceid": "r", "timestamp": 1349916364, "storyboard_spec": "", "plid": "AATLveVba5g8mPZ8", "showpopout": 1, "hl": "en_US", "tmi": "1", "iv_logging_level": 4, "st_module": "\/\/s.ytimg.com\/yt\/swfbin\/st_module-vflCXoloO.swf", "no_get_video_log": "1", "iv_close_button": 0, "endscreen_module": "\/\/s.ytimg.com\/yt\/swfbin\/endscreen-vflK6XzTZ.swf", "iv_read_url": "\/\/www.youtube.com\/annotations_iv\/read2?sparams=expire%2Cvideo_id\u0026expire=1349959800\u0026key=a1\u0026signature=815C68436F1E8F95A9283A421D758B7A6452EFD9.5029A9CC9CFCF79F0B17A60238447CA0FE7CA991\u0026video_id=oHg5SJYRHA0\u0026feat=CS", "iv_queue_log_level": 0, "referrer": "\/\/bit.ly\/dwMq4b", "video_id": "<?php echo htmlspecialchars($_video['rid']); ?>", "sw": "1.0", "sk": "4md16KjsgYmUvVHOsiBQxSFIkPbju0d8C", "pltype": "contentugc", "t": "vjVQa1PpcFN8E8yJ1Q1BJFTy1GYmGAMgRZUyNC4FMBY=", "loudness": -23.6900005341}, "url_v9as2": "\/\/s.ytimg.com\/yt\/swfbin\/cps-vfl2Ur0rq.swf", "params": {"allowscriptaccess": "always", "allowfullscreen": "true", "bgcolor": "#000000"}, "attrs": {"id": "movie_player"}, "url_v8": "\/\/s.ytimg.com\/yt\/swfbin\/cps-vfl2Ur0rq.swf", "html5": false};
      yt.setConfig({
    'EMBED_HTML_TEMPLATE': "\u003ciframe width=\"__width__\" height=\"__height__\" src=\"__url__\" frameborder=\"0\" allowfullscreen\u003e\u003c\/iframe\u003e",
    'EMBED_HTML_URL': "\/\/www.youtube.com\/embed\/__videoid__"
  });
    yt.setMsg('FLASH_UPGRADE', "\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yt\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            You need to upgrade your Adobe Flash Player to watch this video. \u003cbr\u003e \u003ca href=\"\/\/get.adobe.com\/flashplayer\/\"\u003eDownload it from Adobe.\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e");
  yt.setMsg('PLAYER_FALLBACK', "\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yt\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            The Adobe Flash Player or an HTML5 supported browser is required for video playback. \u003cbr\u003e \u003ca href=\"\/\/get.adobe.com\/flashplayer\/\"\u003eGet the latest Flash Player\u003c\/a\u003e \u003cbr\u003e \u003ca href=\"\/html5\"\u003eLearn more about upgrading to an HTML5 browser\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e");
  yt.setMsg('QUICKTIME_FALLBACK', "\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yt\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            The Adobe Flash Player or QuickTime is required for video playback. \u003cbr\u003e \u003ca href=\"\/\/get.adobe.com\/flashplayer\/\"\u003eGet the latest Flash Player\u003c\/a\u003e \u003cbr\u003e \u003ca href=\"\/\/www.apple.com\/quicktime\/download\/\"\u003eGet the latest version of QuickTime\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e");


    (function() {
      var forceUpdate = yt.www.watch.player.updateConfig(yt.playerConfig);
      var youTubePlayer = yt.player.update('watch-player', yt.playerConfig,
          forceUpdate, gYouTubePlayerReady);
      yt.setConfig({'PLAYER_REFERENCE': youTubePlayer});
    })();
  </script>
		<script>
			yt.setConfig({
			  'SUBSCRIBE_AXC': "",
			
			  'IS_OWNER_VIEWING': null,
			  'IS_WIDESCREEN': false,
			  'PREFER_LOW_QUALITY': false,
			  'WIDE_PLAYER_STYLES': ["watch-wide-mode"],
			  'COMMENT_SHARE_URL': "\/\/www.youtube.com\/comment?lc=_COMMENT_ID_",
			  'ALLOW_EMBED': true,
			  'ALLOW_RATINGS': true,
			
			  'LIST_AUTO_PLAY_ON': false,
			  'LIST_AUTO_PLAY_VALUE': 1,
			  'SHUFFLE_VALUE': 0,
			  'SHUFFLE_ENABLED': false,
			  'YPC_CAN_RATE_VIDEO': true,
			  'YPC_SHOW_VPPA_CONFIRM_RATING': false,
			
			
			
			
			
			
			
			
			  'PLAYBACK_ID': "AATK8rd3IxlBnwIO",
			  'PLAY_ALL_MAX': 480    });
			
			yt.setMsg({
			  'LOADING': "Loading...",
			  'WATCH_ERROR_MESSAGE': "This feature is not available right now. Please try again later."    });
			
			
			
			  yt.setMsg({
			'UNBLOCK_USER': "Are you sure you want to unblock this user?",
			'BLOCK_USER': "Are you sure you want to block this user?"
			});
			yt.setConfig('BLOCK_USER_AJAX_XSRF', '');
			
			
			  yt.setConfig({
			'COMMENT_SHARE_URL': "\/\/www.youtube.com\/comment?lc=_COMMENT_ID_",
			'COMMENTS_SIGNIN_URL': "",
			'COMMENTS_THRESHHOLD': -5,
			'COMMENTS_PAGE_SIZE': 10,
			'COMMENTS_COUNT': 41353,
			'COMMENTS_YPC_CAN_POST_OR_REACT_TO_COMMENT': true,
			'COMMENT_VOTE_XSRF' : '',
			'COMMENT_ACTIONS_XSRF' : '',
			'COMMENT_SOURCE': "w",
			'ENABLE_LIVE_COMMENTS': true  });
			
			yt.setAjaxToken('link_ajax', "");
			yt.setAjaxToken('comment_servlet', "");
			yt.setAjaxToken('comment_voting', "");
			
			yt.setMsg({
			'COMMENT_OK': "OK",
			'COMMENT_BLOCKED': "You have been blocked by the owner of this video.",
			'COMMENT_CAPTCHAFAIL': "The response to the letters on the image was not correct, please try again.",
			'COMMENT_PENDING': "Comment Pending Approval!",
			'COMMENT_ERROR_EMAIL': "Error, account unverified (see email)",
			'COMMENT_ERROR': "Error, try again",
			'COMMENT_OWNER_LINKING': "Comments can't contain links, please put the link in your video description and refer to it in the comment."
			});
			
			yt.pubsub.subscribe('init', yt.www.comments.init);
			
			  yt.setConfig({
			'ENABLE_LIVE_COMMENTS': true,
			'COMMENTS_VIDEO_ID': "<?php echo htmlspecialchars($_video['rid']); ?>",
			'COMMENTS_LATEST_TIMESTAMP': 1349043702,
			'COMMENTS_POLLING_INTERVAL': 15000,
			'COMMENTS_FORCE_SCROLLING': false,
			'COMMENTS_PAGE_SIZE': 10  });
			
			yt.setMsg({
			'LC_COUNT_NEW_COMMENTS': "\u003ca href=\"#\" onclick=\"yt.www.watch.livecomments.showNewComments(); return false;\"\u003eShow $count new comments.\u003c\/a\u003e"
			});
			
			yt.pubsub.subscribe('init', function() {
			  yt.net.scriptloader.load("\/\/s.ytimg.com\/yt\/jsbin\/www-livecomments-vflCp_BeU.js", function() {
			    yt.www.watch.livecomments.init();
			  });
			});
			
			
			
			  yt.setConfig('ENABLE_AUTO_LARGE', true);
			  yt.www.watch.watch5.updatePlayerSize();
			  yt.pubsub.subscribe('init', function() {
			    yt.events.listen(window, 'resize',
			        yt.www.watch.watch5.handleResize);
			  });
			
			yt.pubsub.subscribe('init', yt.www.watch.activity.init);
			yt.pubsub.subscribe('init', yt.www.watch.player.init);
			yt.pubsub.subscribe('init', yt.www.watch.actions.init);
			yt.pubsub.subscribe('init', yt.www.watch.shortcuts.init);
			
			
			yt.pubsub.subscribe('init', function() {
			  var description = _gel('watch-description');
			  if (!_hasclass(description, 'yt-uix-expander-collapsed')) {
			    yt.www.watch.watch5.handleToggleDescription(description);
			  }
			});
			
			
			
			
			
			
			
			
			
			
		</script>
		<script>
			var subscribed = <?php echo($_user['subscribed'] ? 'true' : 'false') ?>;
			var loggedIn = <?php echo(isset($_SESSION['siteusername']) ? 'true' : 'false') ?>;
			var alerts = 0;
 
			function subscribe() {
				if(loggedIn == true) { 
					if(subscribed == false) { 
						$.ajax({
							url: "/get/subscribe?n=<?php echo htmlspecialchars($_user['username']); ?>",
							type: 'GET',
							success: function(res) {
								alerts++;
								$("#subscribe-button").addClass("subscribed");
								addAlert("editsuccess_" + alerts, "Successfully added <?php echo htmlspecialchars($_user['username']); ?> to your subscriptions!");
								showAlert("#editsuccess_" + alerts);
								console.log("DEBUG: " + res);
								subscribed = true;
							}
						});
					} else {
						$.ajax({
							url: "/get/unsubscribe?n=<?php echo htmlspecialchars($_user['username']); ?>",
							type: 'GET',
							success: function(res) {
								alerts++;
								$("#subscribe-button").removeClass("subscribed");
								addAlert("editsuccess_" + alerts, "Successfully removed <?php echo htmlspecialchars($_user['username']); ?> from your subscriptions!");
								showAlert("#editsuccess_" + alerts);
								console.log("DEBUG: " + res);
								subscribed = false;
							}
						});
					}
				} else {
					alerts++;
					addAlert("editsuccess_" + alerts, "You need to log in to add subscriptions!");
					showAlert("#editsuccess_" + alerts);
				}
			}
		</script>
		<script>
			yt.setConfig('PYV_REQUEST', true);
			yt.setConfig('PYV_AFS', false);
		</script>
		<script>
			yt.www.ads.pyv.loadPyvIframe("\n  \u003cscript\u003e\n    var google_max_num_ads = '1';\n    var google_ad_output = 'js';\n    var google_ad_type = 'text';\n    var google_only_pyv_ads = true;\n    var google_video_doc_id = \"yt_<?php echo htmlspecialchars($_video['rid']); ?>\";\n      var google_ad_request_done = parent.yt.www.ads.pyv.pyvWatchAfcWithPpvCallback;\n    var google_ad_client = 'ca-pub-6219811747049371';\n    var google_ad_block = '3';\n      var google_ad_host = \"ca-host-pub-6813290291914109\";\n      var google_ad_host_tier_id = \"464885\";\n      var google_page_url = \"\\\/\\\/www.youtube.com\\\/video\\\/<?php echo htmlspecialchars($_video['rid']); ?>\";\n      var google_ad_channel = \"PyvWatchInRelated+PyvYTWatch+PyvWatchNoAdX+pw+non_lpw+afv_user_funker530+afv_user_id_<?php echo htmlspecialchars($_video['author']); ?>+yt_mpvid_AATK8rd3hYr5XSL9+yt_cid_676+ytexp_906717.901803.907354.904448.901424.922401.920704.912806.913419.913546.913556.919349.919351.925109.919003.912706.900816\";\n      var google_language = \"en\";\n      var google_eids = ['56702372'];\n      var google_yt_pt = \"AD1B29l_Eb6GvswrtaJp3Xbg-8Cen9ZYRkIWEEZsAd6dGBgqPd1L2hDoHNZ3vsezXxxrRKglcrLrvmR_xDdeypbUNSFkZJs63DRNWYRvVQ\";\n  \u003c\/script\u003e\n\n  \u003cscript s\u0072c=\"\/\/pagead2.googlesyndication.com\/pagead\/show_ads.js\"\u003e\u003c\/script\u003e\n");
		</script>
		<script>
			window['google_language'] = "en";
			
			
			window['google_ad_type'] = 'image';
			window['google_ad_width'] = '300';
			window['google_ad_block'] = '2';
			window['google_ad_client'] = "ca-pub-6219811747049371";
			window['google_ad_host'] = "ca-host-pub-6813290291914109";
			window['google_ad_host_tier_id'] = "464885";
			window['google_ad_channel'] = "6031455484+6031455482+0854550288+afv_user_funker530+afv_user_id_<?php echo htmlspecialchars($_video['author']); ?>+yt_mpvid_AATK8rd3hYr5XSL9+yt_cid_676+ytexp_906717.901803.907354.904448.901424.922401.920704.912806.913419.913546.913556.919349.919351.925109.919003.912706.900816+Vertical_397+Vertical_881+ytps_default+ytel_detailpage";
			window['google_video_doc_id'] = "yt_<?php echo htmlspecialchars($_video['rid']); ?>";
			window['google_color_border'] = 'FFFFFF';
			window['google_color_bg'] = 'FFFFFF';
			window['google_color_link'] = '0033CC';
			window['google_color_text'] = '444444';
			window['google_color_url'] = '0033CC';
			window['google_language'] = "en";
			window['google_alternate_ad_url'] = "\/\/www.youtube.com\/ad_frame?id=watch-channel-brand-div";
			window['google_yt_pt'] = "AD1B29l_Eb6GvswrtaJp3Xbg-8Cen9ZYRkIWEEZsAd6dGBgqPd1L2hDoHNZ3vsezXxxrRKglcrLrvmR_xDdeypbUNSFkZJs63DRNWYRvVQ";
			window['google_eids'] = ['56702371'];
			window['google_page_url'] = "\/\/www.youtube.com\/video\/<?php echo htmlspecialchars($_video['rid']); ?>";
		</script>
		<script>
			yt.pubsub.subscribe('init', function() {
			  var scriptEl = document.createElement('script');
			  scriptEl.src = "\/\/pagead2.googlesyndication.com\/pagead\/show_companion_ad.js";
			  var headEl = document.getElementsByTagName('head')[0];
			  headEl.appendChild(scriptEl);
			});
		</script>
		<script>
			function afcAdCall() {
			  var channels = "6031455484+6031455482+0854550288+afv_user_funker530+afv_user_id_<?php echo htmlspecialchars($_video['author']); ?>+yt_mpvid_AATK8rd3hYr5XSL9+yt_cid_676+ytexp_906717.901803.907354.904448.901424.922401.920704.912806.913419.913546.913556.919349.919351.925109.919003.912706.900816+Vertical_397+Vertical_881+ytps_default+ytel_detailpage";
			  channels = channels.replace('0854550288', '0854550287');
			  channels = channels.replace('afv_brand_mpu', '0854550287');
			  channels = channels + '+afc_on_page';
			  window['google_ad_format'] = '300x250_as';
			  window['google_ad_height'] = '250';
			  window['google_page_url'] = "\/\/www.youtube.com\/video\/<?php echo htmlspecialchars($_video['rid']); ?>";
			    window['google_yt_pt'] = "AD1B29l_Eb6GvswrtaJp3Xbg-8Cen9ZYRkIWEEZsAd6dGBgqPd1L2hDoHNZ3vsezXxxrRKglcrLrvmR_xDdeypbUNSFkZJs63DRNWYRvVQ";
			
			
			  var afcOptions = {
			    'ad_type': 'image',
			    'format': '300x250_as',
			    'ad_block': '2',
			    'ad_client': "ca-pub-6219811747049371",
			    'ad_host': "ca-host-pub-6813290291914109",
			    'ad_host_tier_id': "464885",
			    'ad_channel': channels,
			    'video_doc_id': "yt_<?php echo htmlspecialchars($_video['rid']); ?>",
			    'color_border': 'FFFFFF',
			    'color_bg': 'FFFFFF',
			    'color_link': '0033CC',
			    'color_text': '444444',
			    'color_url': '0033CC',
			    'language': "en",
			    'alternate_ad_url': "\/\/www.youtube.com\/ad_frame?id=watch-channel-brand-div"
			  };
			  var afcCallback = function() {
			    if (window.google && google.ads && google.ads.Ad) {
			      yt.www.watch.ads.handleShowAfvCompanionAdDiv(false);
			      var ad = new google.ads.Ad("ca-pub-6219811747049371", 'google_companion_ad_div', afcOptions);
			    } else {
			      yt.setTimeout(afcCallback, 200);
			    }
			  };
			  afcCallback();
			}
		</script>
		<script>
			yt.pubsub.subscribe('init', function() {
			  var scriptEl = document.createElement('script');
			  scriptEl.src = "\/\/www.google.com\/jsapi?autoload=%7B%22modules%22%3A%5B%7B%22name%22%3A%22ads%22%2C%22version%22%3A%221%22%2C%22callback%22%3A%22(function()%7B%7D)%22%2C%22packages%22%3A%5B%22content%22%5D%7D%5D%7D";
			  var headEl = document.getElementsByTagName('head')[0];
			  headEl.appendChild(scriptEl);
			});
		</script>
		<script src="//www.googletagservices.com/tag/js/gpt.js"></script>
		<script>
			yt.www.watch.ads.createGutSlot("\/4061\/ytpwatch\/main_676");
		</script>
		<script>
			if (window.yt.timing) {yt.timing.tick("js_page");}    
		</script>
		<script>
			yt.setConfig('TIMING_ACTION', "watch5ad");    
		</script>
		<script>yt.pubsub.subscribe('init', function() {yt.www.thumbnaildelayload.init(0);});</script>
		<script>
			yt.setMsg({
			  'LIST_CLEARED': "List cleared",
			  'PLAYLIST_VIDEO_DELETED': "Video deleted.",
			  'ERROR_OCCURRED': "Sorry, an error occurred.",
			  'NEXT_VIDEO_TOOLTIP': "Next video:\u003cbr\u003e \u0026#8220;${next_video_title}\u0026#8221;",
			  'NEXT_VIDEO_NOTHUMB_TOOLTIP': "Next video",
			  'SHOW_PLAYLIST_TOOLTIP': "Show playlist",
			  'HIDE_PLAYLIST_TOOLTIP': "Hide playlist",
			  'AUTOPLAY_ON_TOOLTIP': "Turn autoplay off",
			  'AUTOPLAY_OFF_TOOLTIP': "Turn autoplay on",
			  'SHUFFLE_ON_TOOLTIP': "Turn shuffle off",
			  'SHUFFLE_OFF_TOOLTIP': "Turn shuffle on",
			  'PLAYLIST_BAR_PLAYLIST_SAVED': "Playlist saved!",
			  'PLAYLIST_BAR_ADDED_TO_FAVORITES': "Added to favorites",
			  'PLAYLIST_BAR_ADDED_TO_PLAYLIST': "Added to playlist",
			  'PLAYLIST_BAR_ADDED_TO_QUEUE': "Added to queue",
			  'AUTOPLAY_WARNING1': "Next video starts in 1 second...",
			  'AUTOPLAY_WARNING2': "Next video starts in 2 seconds...",
			  'AUTOPLAY_WARNING3': "Next video starts in 3 seconds...",
			  'AUTOPLAY_WARNING4': "Next video starts in 4 seconds...",
			  'AUTOPLAY_WARNING5': "Next video starts in 5 seconds...",
			  'UNDO_LINK': "Undo"  });
			
			
			yt.setConfig({
			  'DRAGDROP_BINARY_URL': "\/\/s.ytimg.com\/yt\/jsbin\/www-dragdrop-vflWKaUyg.js",
			  'PLAYLIST_BAR_PLAYING_INDEX': -1  });
			
			  yt.setAjaxToken('addto_ajax_logged_out', "KTlts1bRmBPkwoVCGIRuG79_hSF8MTM0OTEzMDExNUAxMzQ5MDQzNzE1");
			
			  yt.www.lists.init();
			
			
			
			
			
			
			
			
			
			  yt.setConfig({'SBOX_JS_URL': "\/\/s.ytimg.com\/yt\/jsbin\/www-searchbox-vflsHyn9f.js",'SBOX_SETTINGS': {"CLOSE_ICON_URL": "\/\/s.ytimg.com\/yt\/img\/icons\/close-vflrEJzIW.png", "SHOW_CHIP": false, "PSUGGEST_TOKEN": null, "REQUEST_DOMAIN": "us", "EXPERIMENT_ID": -1, "SESSION_INDEX": null, "HAS_ON_SCREEN_KEYBOARD": false, "CHIP_PARAMETERS": {}, "REQUEST_LANGUAGE": "en"},'SBOX_LABELS': {"SUGGESTION_DISMISS_LABEL": "Dismiss", "SUGGESTION_DISMISSED_LABEL": "Suggestion dismissed"}});
			
			
			
			
			
		</script>
		<script>
			yt.setMsg({
			  'ADDTO_WATCH_LATER_ADDED': "Added",
			  'ADDTO_WATCH_LATER_ERROR': "Error"
			});
		</script>
		<script>
			if (window.yt.timing) {yt.timing.tick("js_foot");}    
		</script></div>
				</div>
				</div>

				</div>
				</div>
			</div>
		</div>
		<div id="footer-container"><?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/2013_footer.php"); ?></div>
		<div class="yt-dialog hid" id="feed-privacy-lb">
			<div class="yt-dialog-base">
				<span class="yt-dialog-align"></span>
				<div class="yt-dialog-fg">
					<div class="yt-dialog-fg-content">
						<div class="yt-dialog-loading">
							<div class="yt-dialog-waiting-content">
								<div class="yt-spinner-img"></div>
								<div class="yt-dialog-waiting-text">Loading...</div>
							</div>
						</div>
						<div class="yt-dialog-content">
							<div id="feed-privacy-dialog">
							</div>
						</div>
						<div class="yt-dialog-working">
							<div id="yt-dialog-working-overlay">
							</div>
							<div id="yt-dialog-working-bubble">
								<div class="yt-dialog-waiting-content">
									<div class="yt-spinner-img"></div>
									<div class="yt-dialog-waiting-text">Working...</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="shared-addto-watch-later-login" class="hid">
			Watch later on BetaTube? Are you crazy? I am too lazy to add that.
		</div>
		<div id="shared-addto-menu" style="display: none;" class="hid sign-in">
			<div class="addto-menu">
				<div id="addto-list-panel" class="menu-panel active-panel">
					<span class="yt-uix-button-menu-item yt-uix-tooltip sign-in" data-possible-tooltip="" data-tooltip-show-delay="750"><a href="https://accounts.google.com/ServiceLogin?passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dplaylist%26hl%3Den_US%26next%3D%252F%26nomobiletemp%3D1&amp;uilel=3&amp;hl=en_US&amp;service=youtube" class="sign-in-link">Sign in</a> to add this to a playlist
					</span>
				</div>
				<div id="addto-list-saved-panel" class="menu-panel">
					<div class="panel-content">
						<div class="yt-alert yt-alert-naked yt-alert-success  ">
							<div class="yt-alert-icon">
								<img src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
							</div>
							<div class="yt-alert-content" role="alert">
								<span class="yt-alert-vertical-trick"></span>
								<div class="yt-alert-message">
									<span class="message">Added to <span class="addto-title yt-uix-tooltip yt-uix-tooltip-reverse" title="More information about this playlist" data-tooltip-show-delay="750"></span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="addto-list-error-panel" class="menu-panel">
					<div class="panel-content">
						<img src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
						<span class="error-details"></span>
						<a class="show-menu-link">Back to list</a>
					</div>
				</div>
				<div id="addto-note-input-panel" class="menu-panel">
					<div class="panel-content">
						<div class="yt-alert yt-alert-naked yt-alert-success  ">
							<div class="yt-alert-icon">
								<img src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
							</div>
							<div class="yt-alert-content" role="alert">
								<span class="yt-alert-vertical-trick"></span>
								<div class="yt-alert-message">
									<span class="message">Added to playlist:</span>
									<span class="addto-title yt-uix-tooltip" title="More information about this playlist" data-tooltip-show-delay="750"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="yt-uix-char-counter" data-char-limit="150">
						<div class="addto-note-box addto-text-box"><textarea id="addto-note" class="addto-note yt-uix-char-counter-input" maxlength="150"></textarea><label for="addto-note" class="addto-note-label">Add an optional note</label></div>
						<span class="yt-uix-char-counter-remaining">150</span>
					</div>
					<button disabled="disabled" type="button" class="playlist-save-note yt-uix-button yt-uix-button-default" onclick=";return false;" role="button"><span class="yt-uix-button-content">Add note </span></button>
				</div>
				<div id="addto-note-saving-panel" class="menu-panel">
					<div class="panel-content loading-content">
						<img src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
						<span>Saving note...</span>
					</div>
				</div>
				<div id="addto-note-saved-panel" class="menu-panel">
					<div class="panel-content">
						<img src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
						<span class="message">Note added to:</span>
					</div>
				</div>
				<div id="addto-note-error-panel" class="menu-panel">
					<div class="panel-content">
						<img src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
						<span class="message">Error adding note:</span>
						<ul class="error-details"></ul>
						<a class="add-note-link">Click to add a new note</a>
					</div>
				</div>
				<div class="close-note hid">
					<img src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="close-button">
				</div>
			</div>
		</div>
		
		<script>
			if (window.yt.timing) {yt.timing.tick("js_head");}    
		</script>
		<script id="js-3960859142" src="//s.ytimg.com/yts/jsbin/www-core-vflKz5-wF.js" data-loaded="true"></script>
		<script>
			var searchBox = document.getElementById('masthead-search-term');
			if (searchBox) {
			  searchBox.focus();
			}
			  yt.setConfig('FEED_DEBUG', true);
			
		</script>
		<script>
			// yt.setMsg('FLASH_UPGRADE', "\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            You need to upgrade your Adobe Flash Player to watch this video. \u003cbr\u003e \u003ca href=\"http:\/\/get.adobe.com\/flashplayer\/\"\u003eDownload it from Adobe.\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e");
			yt.setConfig({
			'PLAYER_CONFIG': {"url": "\/\/s.ytimg.com\/yts\/swf\/masthead_child-vflRMMO6_.swf", "url_v9as2": "", "url_v8": "", "params": {"bgcolor": "#FFFFFF", "allowfullscreen": "false", "allowscriptaccess": "always"}, "attrs": {"width": "1", "id": "masthead_child", "height": "1"}, "min_version": "8.0.0", "args": {"enablejsapi": 1}, "html5": false}
			});
			
			// yt.flash.embed("masthead_child_div", yt.getConfig('PLAYER_CONFIG'));
		</script>
		<script id="js-90506381" src="//s.ytimg.com/yts/jsbin/www-home-vflk-sIPg.js" data-loaded="true"></script>
		<script>
			yt.setConfig({
			  'GUIDE_SELECTED_ITEM': "youtube"
			});
		</script>
		<script>yt.setConfig({'EVENT_ID': "7pFAUZzAG52shAGGr4DACw",'LOGGED_IN': false,'SESSION_INDEX': null,'CURRENT_URL': "http:\/\/www.youtube.com\/",'SAFETY_MODE_PENDING': false,'WATCH_CONTEXT_CLIENTSIDE': true,'FEEDBACK_BUCKET_ID': "Home",'FEEDBACK_LOCALE_LANGUAGE': "en",'FEEDBACK_LOCALE_EXTRAS': {"logged_in": false, "guide_subs": 8, "accept_language": null, "experiments": "906378,925005,919359,910207,914061,916611,920704,912806,902000,919512,929901,913605,925006,906938,931202,931401,908529,930803,920201,930101,930603,906834,926403", "is_branded": "", "is_partner": ""}});yt.setMsg({'ADDTO_WATCH_LATER_ADDED': "Added",'ADDTO_WATCH_LATER_ERROR': "Error"});yt.setAjaxToken('addto_ajax_logged_out', "H6seGTii3HNcaaSYiOcuR3-DGLF8MTM2MzI3MjU1OEAxMzYzMTg2MTU4");yt.setAjaxToken('channel_details_ajax', "TwF1IzDuM74TMIFat4yLZSiVCVB8MTM2MzI3MjU1OEAxMzYzMTg2MTU4");  yt.setConfig('FEED_PRIVACY_CSS_URL', "\/\/s.ytimg.com\/yts\/cssbin\/www-feedprivacydialog-vflQ4FT2R.css");
			yt.setAjaxToken('feed_privacy_ajax', "");
			  yt.pubsub.subscribe('init', yt.www.account.FeedPrivacyDialog.init);
			yt.setConfig({'SBOX_JS_URL': "\/\/s.ytimg.com\/yts\/jsbin\/www-searchbox-vflzZmr_k.js",'SBOX_SETTINGS': {"SESSION_INDEX": null, "SHOW_CHIP": false, "USE_HTTPS": false, "PSUGGEST_TOKEN": null, "HAS_ON_SCREEN_KEYBOARD": false, "REQUEST_LANGUAGE": "en", "IS_HH": true, "EXPERIMENT_ID": -1, "REQUEST_DOMAIN": "us", "CHIP_PARAMETERS": {}, "CLOSE_ICON_URL": "\/\/s.ytimg.com\/yts\/img\/icons\/close-vflrEJzIW.png"},'SBOX_LABELS': {"SUGGESTION_DISMISS_LABEL": "Dismiss", "SUGGESTION_DISMISSED_LABEL": "Suggestion dismissed"}});
		</script>    <script>
			yt.setConfig({'TIMING_ACTION': "glo",'TIMING_INFO': {"mod_li": 0, "mod_spf": 0, "e": "906378,925005,919359,910207,914061,916611,920704,912806,902000,919512,929901,913605,925006,906938,931202,931401,908529,930803,920201,930101,930603,906834,926403", "mod_lt": "cold"}});    
		</script>
		<script>yt.setConfig({'XSRF_TOKEN': "S0uwk0EgvxoAOX_v0c0U9_twFVh8MTM2MzI3MjU1OEAxMzYzMTg2MTU4",'XSRF_REDIRECT_TOKEN': "5MaT5zwJCAslCgglIiPwGx8NqXZ8MTM2MzIwMDU1OEAxMzYzMTg2MTU4",'XSRF_FIELD_NAME': "session_token"});</script><script>yt.setConfig('THUMB_DELAY_LOAD_BUFFER', 300);</script>    <script>
			if (window.yt.timing) {yt.timing.tick("js_foot");}    
		</script>
		<div id="debug"></div>
	</body>
</html>
<?php	}	?>
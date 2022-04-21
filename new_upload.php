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
	$__server->page_embeds->page_image = "/yt/imgbin/full-size-logo.png";
	$__server->page_embeds->page_url = "https://www.betatube.net/";
?>
<html lang="en">
	<head>
		<script>
			var yt = yt || {};yt.timing = yt.timing || {};yt.timing.data_ = yt.timing.data_ || {};yt.timing.tick = function(label, opt_time) {var tick = yt.timing.data_['tick'] || {};tick[label] = opt_time || new Date().getTime();yt.timing.data_['tick'] = tick;};yt.timing.info = function(label, value) {var info = yt.timing.data_['info'] || {};info[label] = value;yt.timing.data_['info'] = info;};yt.timing.reset = function() {yt.timing.data_ = {};};if (document.webkitVisibilityState == 'prerender') {yt.timing.info('prerender', 1);document.addEventListener('webkitvisibilitychange', function() {yt.timing.tick('start');}, false);}yt.timing.tick('start');try {var externalPt = (window.gtbExternal && window.gtbExternal.pageT() ||window.external && window.external.pageT);if (externalPt) {yt.timing.info('pt', externalPt);}} catch(e) {}if (window.chrome && window.chrome.csi) {yt.timing.info('pt', Math.floor(window.chrome.csi().pageT));}    
		</script>
		<title><?php echo $__server->page_embeds->page_title; ?></title>
		<link rel="search" type="application/opensearchdescription+xml" href="http://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search">
		<link rel="shortcut icon" href="/yts/img/favicon-vfldLzJxy.ico" type="image/x-icon">
		<link rel="icon" href="//s.ytimg.com/yts/img/favicon_32-vflWoMFGx.png" sizes="32x32">
		<link rel="alternate" media="handheld" href="http://m.youtube.com/index?&amp;desktop_uri=%2F">
		<link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.youtube.com/index?&amp;desktop_uri=%2F">
		<meta name="description" content="<?php echo $__server->page_embeds->page_description; ?>">
		<meta property="og:image" content="/yts/imgbin/www-embed.png">
		<link id="css-2955892050" rel="stylesheet" href="/yts/cssbin/www-core-vflEJosKh.css">
		<link id="css-151587203" rel="stylesheet" href="/yts/cssbin/www-home-vfl_Eri60.css">
        <link rel="stylesheet" href="/yt/cssbin/www-extra.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
										<div id="content">
					<?php if($__user_h->if_upload_cooldown($_SESSION['siteusername'])) { ?>
						<div id="masthead_child_div"><div class="yt-alert yt-alert-default yt-alert-error ">  <div class="yt-alert-icon">
							<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
						</div>
						<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
							<div class="yt-alert-message">
								You are under an upload cooldown
							</div>
						</div></div></div>
					<?php } ?>

                    <div class="upload-div-top">
                        Upload video file
                    </div>
                    <div class="upload-div-base">
                        <div class="progressbar">
                            Your video is being uploaded... <span class="timeRemaining"></span><br>
                            <div class="barbg">
                                <div class="bar"></div>
                            </div>
                        </div>
                        <div class="www-upload-left">
                            <center id="initial-upload">
                                <img src="/yt/imgbin/upload_button.png" onclick="$('#video-file').click();" style="width: 139px;cursor:pointer;"><br><br>
                                <button class="yt-uix-button yt-uix-button-default" onclick="$('#video-file').click();">
                                    Select files from your computer
                                </button>
                            </center>
                            <form enctype="multipart/form-data" id="upload_form" action="/d/upload_video" method="post">
                            <div class="upload-stage-2" style="display: none;">
                                <b>Title</b> <br><input id="video-title" placeholder="Video Title" class="yt-uix-form-input-text" style="width: 550px;margin-top: 3px;" type="text" name="title"><br><br>
                                <b>Description</b> <br>
                                <textarea name="description" class="yt-uix-form-input-text" style="width: 550px;margin-top: 3px;" placeholder="Video Description"></textarea><br><br>
                                <b>Tags</b> <br><input placeholder="Seperate with commas" class="yt-uix-form-input-text" style="width: 550px;margin-top: 3px;" type="text" name="tags"><br><br>
                                <b>Video thumbnails</b><br><br>
                                Thumbnail selections will appear when the video has finished processing.<br><br>
                                <input type="submit" value="Upload Video" class="yt-uix-button yt-uix-button-default">
                            </div>
                        </div>
                        <div class="www-upload-right">
                            <div class="upload-initial-right">
                                <h1>More ways to upload and create</h1><br> 
                                <img src="/s/img/upload_multiple.png" style="vertical-align: top;">
                                <span style="display: inline-block;">
                                    <h4>Uploading high quality videos</h4>
                                    <span class="small-text">
                                        Betatube suports up to 48k linus tech tips res.<br>
                                        You can upload like 20 minute vids idk
                                    </span>
                                </span><br><br>
                                <img src="/s/img/record_from_webcam.png" style="vertical-align: top;">
                                <span style="display: inline-block;">
                                    <h4>Recording from webcam</h4>
                                    <span class="small-text">
                                        This site will <b>never</b> support recording from webcam.<br>
                                        Dont ask for it to be added...
                                    </span>
                                </span><br><br>
                            </div>
                            <div class="upload-stage-2-right" style="display: none;">
                                <b>Category</b> <br>
                                <select style="margin-top:5px;" name="category" class="yt-uix-button yt-uix-button-default">
                                    <?php $categories = ["None", "Film & Animation", "Autos & Vehicles", "Music", "Pets & Animals", "Sports", "Travel & Events", "Gaming", "People & Blogs", "Comedy", "Entertainment", "News & Politics", "Howto & Style", "Education", "Science & Technology", "Nonprofits & Activism"]; ?>
                                    <?php foreach($categories as $categoryTag) { ?>
                                        <option value="<?php echo $categoryTag; ?>"><?php echo $categoryTag; ?></option>
                                    <?php } ?>
                                </select><br><br>
                                <b>Privacy</b> <span style="font-size:10px;">Change this option in the video manager.</span> <br><br>
                                <input class="yt-uix-form-input-radio" disabled type="radio" style="vertical-align: top;"> 
                                <span style="display: inline-block;">
                                    <b>Public</b><br>
                                    <span class="small-text">
                                        anyone can search for and view - <br>
                                        recommended
                                    </span>
                                </span><br><br>
                                <input class="yt-uix-form-input-radio" disabled type="radio" style="vertical-align: top;"> 
                                <span style="display: inline-block;">
                                    <b>Unlisted</b><br>
                                    <span class="small-text">
                                        anyone with the link can view
                                    </span>
                                </span><br><br>
                                <input class="yt-uix-form-input-radio" disabled type="radio" style="vertical-align: top;"> 
                                <span style="display: inline-block;">
                                    <b>Private</b><br>
                                    <span class="small-text">
                                        only people you choose can view
                                    </span>
                                </span><br><br>
                                <b>License</b><br><br>
                                <input class="yt-uix-form-input-radio" type="radio" style="vertical-align: top;"> 
                                <span style="display: inline-block;">
                                    <b>Literally nothing</b><br>
                                    <span class="small-text">
                                        licenses don't exist on here
                                    </span>
                                </span><br>

                                <input name="privacy" type="text" style="visibility: hidden;">
                                <input id="video-file" type="file" name="video_file" style="visibility: hidden;">
                            </div>
                        </div>
                        </form>
                        <script>
                            $("#video-file").click(function(){
                                $(this).val("");
                            });

                            $("#video-file").change(function(){
                                $("#video-title").val($(this).val().replace(/^.*\\/, ""));
                                $("#initial-upload").fadeOut(20);
                                $(".upload-initial-right").fadeOut(20);
                                $(".upload-stage-2-right").fadeIn(300);
                                $(".upload-stage-2").fadeIn(300);
                            });

                            $(()=>{ // defer
                                var uploadform = $("#upload_form");
                                var progressbar = $(".progressbar");
                                var bar = $(".bar");
                                var postto = "/d/upload";

                                progressbar.hide(); 

                                // when you press submit
                                uploadform.on('submit', (e) => {

                                    // i have to both of these for it to not redirect (i want it to redirect if JS is off)
                                    e.stopImmediatePropagation();
                                    e.preventDefault();
                                    
                                    // good luck understanding this shit. it's mostly copy pasted.
                                    $.ajax({
                                        xhr: () => {
                                            var xhr = new window.XMLHttpRequest();
                                            xhr.upload.addEventListener("progress", (evt) => {
                                                if (evt.lengthComputable) {
                                                    var percentComplete = Math.floor((evt.loaded / evt.total) * 100);
                                                    bar.width(percentComplete + '%');
                                                    bar.text(percentComplete + '%');

                                                    var seconds_elapsed =   ( new Date().getTime() - started_at.getTime() )/1000;
                                                    var bytes_per_second =  seconds_elapsed ? loaded / seconds_elapsed : 0 ;
                                                    var Kbytes_per_second = bytes_per_second / 1000 ;
                                                    var remaining_bytes =   total - loaded;
                                                    var seconds_remaining = seconds_elapsed ? remaining_bytes / bytes_per_second : 'calculating' ;
                                                    jQuery( '.timeRemaining' ).html( '' );
                                                    jQuery( '.timeRemaining' ).append( seconds_remaining );
                                                }
                                            }, false);
                                            return xhr;
                                        },
                                        // if you can't understand this part you shouldn't be reading this
                                        type: 'POST',
                                        url: postto,
                                        // afaik this only works for POST. don't care enough to check.
                                        data: new FormData(uploadform[0]),
                                        // no idea why this shit is 'false'.
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                        // right before data starts to be sent
                                        beforeSend: () => {
                                            uploadform.hide();
                                            progressbar.show();
                                            $(".upload-stage-2-right").hide();
                                            $(".upload-div-base").css("height", "32px");
                                            bar.width('0%');
                                        },
                                        // when the form gets a non-200 code probably
                                        error: () => {
                                            
                                        },
                                        // when the form succeeds. resp is a string of what the server sent back 
                                        success: (resp) => {
											console.log(resp);
                                            window.location = "/watch?v=" + resp;
                                        }
                                    });
                                });
                            }); // defer
                        </script>
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

<html lang="en" dir="ltr"><!-- machid: sWkFSZzctYUFHdmlXZnNlSVNYTXpGT1huTEpYS3hDeFlnWlVyVG5MNlkxQ0MtdHJQQ2VSZWdB --><head><script src="//archive.org/includes/analytics.js?v=cf34f82" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app222.us.archive.org';v.server_ms=703;archive_analytics.send_pageview({});});</script>
<script type="text/javascript" src="/_static/js/bundle-playback.js?v=poeZ53Bz" charset="utf-8"></script>
<script type="text/javascript" src="/_static/js/wombat.js?v=UHAOicsW" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=fantwOh2">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
        <script>
var yt = yt || {};yt.timing = yt.timing || {};yt.timing.tick = function(label, opt_time) {var timer = yt.timing['timer'] || {};if(opt_time) {timer[label] = opt_time;}else {timer[label] = new Date().getTime();}yt.timing['timer'] = timer;};yt.timing.info = function(label, value) {var info_args = yt.timing['info_args'] || {};info_args[label] = value;yt.timing['info_args'] = info_args;};yt.timing.info('e', '903945,904719,910209');yt.timing.tick('start');yt.timing.info('li','0');try {yt.timing['srt'] = window.gtbExternal && window.gtbExternal.pageT() ||window.external && window.external.pageT;} catch(e) {}if (window.chrome && window.chrome.csi) {yt.timing['srt'] = Math.floor(window.chrome.csi().pageT);}if (window.msPerformance && window.msPerformance.timing) {yt.timing['srt'] = window.msPerformance.timing.responseStart - window.msPerformance.timing.navigationStart;}    </script>


    <title>
      BetaTube - <?php if($_user['title'])	{	?> <?php echo htmlspecialchars($_user['title']); ?> <?php } else {	?> <?php echo htmlspecialchars($_user['username']); ?> <?php	}	?> 
  </title>  
    <meta name="description" content="BetaTube is a place to discover, watch, upload and share videos.">
    <meta name="keywords" content="video, free, simple, search, find, discover, watch, engage, share, sharing, upload, entertainment">

        <script>
      if (window.yt.timing) {
        yt.timing.tick('hpcss');
      }
    </script>

  <meta property="fb:app_id" content="87741124305">


    <link id="www-core-css" rel="stylesheet" href="/s/css/www-core-vfl5llGvX2011.css">
	<link rel="stylesheet" href="/www-the-rest-vflZri8xy.css">
	<link rel="stylesheet" href="/www-channel_new-vflT8NIcn.css">
  

      <style>

    </style>


      
    <script id="www-core-js" src="/s/js/www-core-vfllZKJd-.js"></script>



  <script>
        yt.setConfig({
      'XSRF_TOKEN': 'e-TYRlMVyrKvXPQ1sbCne4N3Rnd8MTMxMjE1NzM2NEAxMzEyMDcwOTY0',
      'XSRF_FIELD_NAME': 'session_token'
    });
    yt.pubsub.subscribe('init', yt.www.xsrf.populateSessionToken);

    yt.setConfig('XSRF_REDIRECT_TOKEN', 'zcbvEeoztZCMJeZqniu3C80Qnil8MTMxMjE1NzM2NEAxMzEyMDcwOTY0');

    yt.setConfig('LOGGED_IN', false);
    yt.setConfig('ENABLE_WATCH6', false);

    yt.setConfig('FEEDBACK_LOCALE_LANGUAGE', "en");
    yt.setConfig('FEEDBACK_LOCALE_EXTRAS', {"experiments": "903945,904719,910209", "accept_language": null});
  </script>

          <script>
      if (window.yt.timing) {
        yt.timing.tick('hpjs');
      }
    </script>


    <script>
      var masthead = new yt.www.home.ads.mastheadAd('1', false, '2', 'kTZ5yc6IX04', true, true, false)
      yt.pubsub.subscribe('init', function() {
        _showdiv('masthead-utility-menulink-short');
        _hidediv('masthead-utility-menulink-long');
      });
    </script>



    <script>
    yt.net.ajax.setToken('subscription_ajax', "");
    yt.pubsub.subscribe('init', yt.www.subscriptions.SubscriptionButton.init);
  </script>


    <script>
    yt.net.ajax.setToken('channel_recommendations_token', '');
  </script>


  <script>
    yt.setConfig('USERNAME', "");
    yt.setConfig('SUBS_XSRF', "");


    var moduleHelper = new yt.www.home.ModuleHelper('',
        false, true);


    yt.pubsub.subscribe('init', function() {
        (function() {
      var sessionToken = '';
      var rootUrl = 'https://web.archive.org/web/20110731000924/http://www.youtube.com/';
      var locale = 'en_US';
      var serviceInfo = null;
      var isGaiaUser = false;
      var facebookAppKey = '7ff82e59b6b2fbd316cca35309e95df3';
      var tpDomain = 's.youtube-3rd-party.com';

      var autoshare = new yt.sharing.AutoShare(sessionToken, rootUrl, locale, serviceInfo,
          isGaiaUser, facebookAppKey, tpDomain);

      // Register Facebook connect button.
      if (_gel('fb-login-btn')) {
        autoshare.registerConnectDialogLauncher(_gel('fb-login-btn'), 'facebook', true);
      }

      var gaiaChangedCallback = function(autoshare) {
        var isGaiaUser = autoshare.isGaiaUser();
        yt.style.setDisplayed('fb-promo-google-nag', !isGaiaUser);
        yt.style.setDisplayed('fb-promo-google-linked', isGaiaUser);

        if (isGaiaUser) {
          var link = _gel('fb-promo-google-linked-continue-to-fb');
          var fn = function() {
            autoshare.handleConnectService({currentTarget: _gel('fb-login-btn')});
          }
          link.onclick = fn;
        }
      }
      autoshare.addGaiaChangedCallback(gaiaChangedCallback);

      var canConnectCallback = function(autoshare) {
        var isGaiaUser = autoshare.isGaiaUser();
        yt.style.setDisplayed('fb-promo-google-nag', !isGaiaUser);
        yt.style.setDisplayed('fb-promo-google-linked', false);
        yt.style.setDisplayed('fb-promo-fb-linked', false);
        return isGaiaUser;
      }
      autoshare.addCanConnectCallback(canConnectCallback);

      var serviceChangedCallback = function(autoshare) {
        var serviceInfo = autoshare.getServiceInfo();
        for (var service in serviceInfo) {
          var info = serviceInfo[service];
          if (service == 'facebook' && info['is_connected']) {
            yt.style.setDisplayed('fb-promo-fb-linked', true);
            hideFbPromoAlert();
          }
          if (service == 'es' && info['is_connected']) {
            yt.style.setDisplayed('es-optin-success', true);
            hideEsOptinAlert();
          }
        }
      };
      autoshare.addServiceChangedCallback(serviceChangedCallback);

      window['autoshare'] = autoshare;

      var prefs = yt.UserPrefs;
      var optOut = prefs.getFlag3(prefs.Flags.FLAG3_FBPROMO_OPT_OUT);
      if (!optOut) {
        _showdiv('fb-promo1');
      }

      // The user has "dismissed" the promo, i.e., clicked on the [x].
      // This is distinct from simply hiding the promo as a side effect.
      window.dismissFbPromoAlert = function() {
        prefs.setFlag3(prefs.Flags.FLAG3_FBPROMO_OPT_OUT, true);
        prefs.save();
        hideFbPromoAlert();
      };

      function hideFbPromoAlert() {
        _hidediv('fb-promo1');
      }

})();

    });


  </script>


  <script>
    // Initialize the subscriptions helper object that supports both the inline
    // "edit subscription" link featurette in the Recent Activity module and
    // the subscribe-from-masthead facility.
    var gaiaHost = 'https://web.archive.org/web/20110731000924/https://www.google.com';
    var gaiaLocale = 'en-US';
    window['subui_'] = new yt.www.home.Subscriptions(gaiaHost, gaiaLocale);
    yt.pubsub.subscribe('init', function() {
      window['subui_'].setCurrentLink(_gel('_firsteditsublink'));
    });
  </script>



        <script>
      if (window.yt.timing) {
        yt.timing.tick('ct');
      }
    </script>

<style type="text/css" id="channel-theme-css" name="channel-theme-css">
    #channel-body, .channel-bg-color  { background-color: #CCCCCC }
#channel-body { background-repeat: no-repeat }
.playnav-item .selector, .outer-box-bg-color, .outer-box { background-color: #999999 }.panel-tab-indicator-arrow, .outer-box-bg-as-border, .overlay-box { border-color: #999999; }#playnav-chevron { border-left-color: #999999 }
.outer-box-color, .outer-box-bg-color, .outer-box {color: #000000;}.panel-tab-selected a { color: #000000 !important; }.outer-box-color-as-border-color { border-color: #000000; }.playnav-item .yt-uix-button {color: #000000;}.playnav-item .yt-uix-button:hover, .playnav-item .yt-uix-button:focus, .yt-uix-button-menu, .yt-uix-button-menu-item { border-color: #000000 !important; }.yt-uix-button-menu {background-color: #000000 !important;}
.outer-box-link-color, .outer-box-bg-color a, .outer-box a {color: #0000CC;}.outer-box-link-as-border-color { border-color: #0000CC }
#channel-body { font-family: arial }
.title-text, .title-text-color, a.title-text-color, .title-text-color a { color: #000000 !important; }
a.view-button-selected, a.view-button:hover, #playnav-navbar a.navbar-tab-selected, #playnav-navbar a.navbar-tab:hover { background-color: #000000; }title-text-as-border-color { border-color: #000000; }a.view-button-selected .tri, a.view-button:hover .tri { border-left-color: #000000; }.playnav-item .yt-uix-button:hover, .playnav-item .yt-uix-button:focus, ul.yt-uix-button-menu li span.yt-uix-button-menu-item { background: #000000; }ul.yt-uix-button-menu li span.yt-uix-button-menu-item:hover { color: #000000; }
.transparent-bg-color { background-color: rgba(238,238,255,0.6) !important; }
.outer-box .inner-box a, .outer-box .inner-box-colors a, .outer-box .inner-box-bg-color a, .outer-box .inner-box-link-color  { color: #0000CC }.channel-cmd { border-bottom-color: #0000CC }.link-as-border-color, #channel-body .video-thumb { border-color: #0000CC }.view-button .tri { border-top-color: #0000CC; border-bottom-color: #0000CC; }.view-button .a, .view-button .tri { background-color: #0000CC; }.inner-box-colors button.close { background-color: #0000CC; }.overlay-box button.close { background-color: #0000CC !important; }
.transparent-bg-color { filter: progid:DXImageTransform.Microsoft.Gradient(startColorstr=#99eeeeff, endColorstr=#99eeeeff); -ms-filter: "progid:DXImageTransform.Microsoft.Gradient(startColorstr=#99eeeeff, endColorstr=#99eeeeff)" !important; }
a.inner-box-color-as-link, .inner-box-colors .playnav-show .show-facets .show-mini-description, .inner-box-color, .inner-box { color: #333333; }.box-outline-color { border-color: #333333; }
a.view-button-selected .a, .view-button:hover .a, .inner-box-bg-color, .inner-box-colors, .inner-box, .overlay-box { background-color: #EEEEFF }.inner-box-bg-as-border-color, .inner-box-bg-color-as-border-color { border-color: #EEEEFF }.panel-tab-selected .panel-tab-indicator-arrow { border-bottom-color: #EEEEFF !important }.view-button .tri { border-left-color: #EEEEFF }a.view-button-selected .tri, .view-button:hover .tri { border-top-color: #EEEEFF; border-bottom-color: #EEEEFF; background-color: #EEEEFF }#playnav-navbar a.navbar-tab-selected, #playnav-navbar a.navbar-tab:hover { color: #EEEEFF !important; }.playnav-item .yt-uix-button:hover, .playnav-item .yt-uix-button:focus, ul.yt-uix-button-menu li span.yt-uix-button-menu-item { color: #EEEEFF; }ul.yt-uix-button-menu li span.yt-uix-button-menu-item:hover { background-color: #EEEEFF; }
.transparent-link-as-bg-color { background-color: rgba(0,0,204,0.25) }
.transparent-link-as-bg-color { filter: progid:DXImageTransform.Microsoft.Gradient(startColorstr=#400000cc, endColorstr=#400000cc); -ms-filter: "progid:DXImageTransform.Microsoft.Gradient(startColorstr=#400000cc, endColorstr=#400000cc)"; }

#outage-box {
        display: none;
      }

#page {
      border-bottom: 3px solid #999999;
    }
#page #masthead-container {
      border-bottom: none;
      margin-bottom: 0;
    }

#promos, #footer, #copyright {
      display: none;
    }
  </style>
</head>
<body id="" class="date-20110730 en_US ltr" dir="ltr">
  <form name="logoutForm" method="POST" action="/logout">
    <input type="hidden" name="action_logout" value="1">
  <input name="session_token" type="hidden" value="e-TYRlMVyrKvXPQ1sbCne4N3Rnd8MTMxMjE1NzM2NEAxMzEyMDcwOTY0"></form>
  <!-- begin page -->
  <div id="page" class="  home ">
      <!-- begin pagetop -->
<?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/2011_header.php"); ?>
  <!-- end pagetop -->
  <!-- begin pagemiddle -->
<div id="content-container">
    <div id="baseDiv" class="date-20110514 video-info ">
      <div id="alerts"></div>
      </div>
<?php if($_user['username'] == $_SESSION['siteusername']) { ?>
<div id="edit_controls" class="edit_controls_outer" style="background-color: rgb(239, 239, 239);">
		<div class="edit_controls_top_border">&nbsp;</div>
		<div class="channel_tabs">
			<div id="edit-save-messages" style="display:none">&nbsp;</div>
			<div class="channel_tabs_inner" dir="ltr">
					<div class="channel_settings_tab_spacer" style="width:2px">&nbsp;</div>
					<div class="channel_settings_tab_spacer">&nbsp;</div>
<?php if(!isset($_GET['etab'])) { ?>
	<a href="/user/<?php echo htmlspecialchars($_user['username']); ?>">
	<div id="channel_tab_info" class="channel_settings_tab channel_settings_tab_active" dir="ltr">
		Settings
	</div>
	</a>
<?php } else{ ?>
	<a href="/user/<?php echo htmlspecialchars($_user['username']); ?>">
	<div id="channel_tab_info" class="channel_settings_tab" dir="ltr">
		Settings
	</div>
	</a>
<?php } ?>
<?php if($_GET['etab'] == 'theme') { ?>
	<a href="/user/<?php echo htmlspecialchars($_user['username']); ?>&etab=theme">
	<div id="channel_tab_colors" class="channel_settings_tab channel_settings_tab_active" dir="ltr">
		Themes and Colors
	</div>
	</a>
<?php } else{ ?>
	<a href="/user/<?php echo htmlspecialchars($_user['username']); ?>&etab=theme">
	<div id="channel_tab_colors" class="channel_settings_tab" onclick="/user/<?php echo htmlspecialchars($_user['username']); ?>&etab=theme" dir="ltr">
		Themes and Colors
	</div>
	</a>
<?php } ?>
<?php if($_GET['etab'] == 'layout') { ?>
	<a href="/user/<?php echo htmlspecialchars($_user['username']); ?>&etab=layout">
	<div id="channel_tab_layout" class="channel_settings_tab channel_settings_tab_active" onclick="channel_edit_tab('layout')" dir="ltr">
		Modules
	</div>
	</a>
<?php } else{ ?>
	<a href="/user/<?php echo htmlspecialchars($_user['username']); ?>&etab=layout">
	<div id="channel_tab_layout" class="channel_settings_tab" onclick="channel_edit_tab('layout')" dir="ltr">
		Modules
	</div>
	</a>
<?php } ?>
					<div id="channel_tab_playnav" class="channel_settings_tab" onclick="channel_edit_tab('playnav')" dir="ltr">
		Videos and Playlists
	</div>

			</div>
			<div class="hLink floatR" onclick="channel_edit_tab('close')" id="channel_edit_close" style="padding-top: 0.75em; font-size: 11px;">Close</div>
			<div class="spacer">&nbsp;</div>
						<div id="tab_contents_bulletin" style="" class="channel_tab_content">
		<div id="bulletin-messages" style="display:none"></div>


		</div>


		<script type="text/javascript">
			yt.pubsub.subscribe('init', function() { channel_edit_tab('bulletin'); });
		</script>
	<form method="GET" action="/update_channel20">
					<div id="tab_contents_info" style="<?php if(isset($_GET['etab'])) { ?>display:none;<?php } ?>" class="channel_tab_content">
		<div id="info-messages" style="display:none"></div>
	<table width="100%"><tbody><tr>
		<td width="50%" style="padding: 10px 10px 7px 10px;border-right:1px dotted #bbb" valign="top">
		<h1>This is not finished and does not work yet!</h1>
			<div class="settings_label">URL:</div>
			<div class="settings_control"><a href="/user/<?php echo htmlspecialchars($_user['username']); ?>">https://www.betatube.net/user/<?php echo htmlspecialchars($_user['username']); ?></a></div>
			<div class="settings_separator">&nbsp;</div>
			<div class="settings_label">Channel Message:</div>
			<div class="settings_control"><input name="title" id="channel_title_input" value="<?php echo htmlspecialchars($_user['msg']); ?>" style="width:200px" onkeypress="settings_tab_keypress();return length_check(event, this, 30)" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)"></div>
			<div class="settings_separator">&nbsp;</div>
			<div class="settings_label">Channel Type:</div>
			<div class="settings_control">	<span>
		<select id="channel_type" name="channel_type" onchange="">
			<option value="Default">Default</option>
			<option <?php    if($_user['channel_type'] !== 'Director') { ?>selected=""<?php } ?> value="Director">Director</option>
			<option <?php    if($_user['channel_type'] !== 'Musician') { ?>selected=""<?php } ?> value="Musician">Musician</option>
			<option <?php    if($_user['channel_type'] !== 'Comedian') { ?>selected=""<?php } ?> value="Comedian">Comedian</option>
			<option <?php    if($_user['channel_type'] !== 'Guru') { ?>selected=""<?php } ?> value="Guru">Guru</option>
			<option <?php    if($_user['channel_type'] !== 'Reporter') { ?>selected=""<?php } ?> value="Reporter">Reporter</option>
		</select>
	</span>
</div>
			<div class="settings_separator">&nbsp;</div>
			<div class="settings_label">Make Channel Visible:</div>
			<div class="settings_control">
				<input name="channel_hidden" id="channel_hidden_n" type="radio" <?php    if($_user['hidden'] !== 'yes') { ?>checked=""<?php } ?> value="no"><label for="channel_hidden_n">Yes</label>
				<input name="channel_hidden" id="channel_hidden_y" type="radio" <?php    if($_user['hidden'] == 'yes') { ?>checked=""<?php } ?> value="yes"><label for="channel_hidden_y">No</label>
			</div>
		</td>
		<td width="50%" style="padding: 10px 10px 7px 10px" valign="top">
			<div class="settings_label">Channel Tags:
				<div style="font-size:80%;color:#666">(comma separated)</div>
			</div>
			<div class="settings_control"><textarea name="tags" rows="4" cols="250" style="width:350px" onkeypress="settings_tab_keypress();return length_check(event, this, 100)" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)"><?php echo htmlspecialchars($_user['tags']) ?></textarea><br>
				<span style="font-size:90%;color:#333">Tags are keywords used to help people find your channel.</span>
			</div>
		</td>
	</tr></tbody></table>
	<div class="settings_separator_save">&nbsp;</div>
	<div class="channel_settings_save">
				<button type="submit" class=" yt-uix-button yt-uix-button-primary" type="submit"><span class="yt-uix-button-content">Save Changes</span></button>
		<div class="save_overlay">
</div>


	</div>
	<div class="cb">&nbsp;</div>
		</div>


					<div id="tab_contents_colors" style="<?php if($_GET['etab'] !== 'theme') { ?>display:none;<?php } ?>" class="channel_tab_content">
		<div id="colors-messages" style="display:none"></div>
	<div class="cb">&nbsp;</div>
	<div>
	<table id="theme_advanced_editor" style=""><tbody><tr>
	<h1>This is not finished!</h1>
	<td width="460" align="left" valign="top" style="border-right:1px dotted #ddd;">
		<div style="padding: 0.5em 2em">
			<div style="font-size:130%">General</div>
				<div id="font_option" style="padding:2px;">
		<div style="float:left;padding:4px;">Font</div>
		<select name="font" id="font" style="float:right" onchange="edit_main_theme('font', this.value);">
				<option value="Times New Roman">Times New Roman</option>
				<option value="Arial">Arial</option>
				<option value="Verdana">Verdana</option>
				<option value="Georgia">Georgia</option>
				<option value="Courier New">Courier New</option>
		</select>
		<div class="settings_separator_light">&nbsp;</div>
	</div>

				<div id="background_color_option" style="padding:2px;">
		<div style="float:left;padding:4px;">Background color</div>
		<input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="background_color" name="background_color" value="#CCCCCC" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
		<div class="color_selector" onclick="popup_color_grid('background_color')">
			<div id="background_color-preview" style="width:13px;height:13px;background-color:#CCCCCC">&nbsp;</div>
		</div>
		<div class="settings_separator_light">&nbsp;</div>
	</div>

				<div id="wrapper_color_option" style="padding:2px;">
		<div style="float:left;padding:4px;">Wrapper color</div>
		<input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="wrapper_color" name="wrapper_color" value="#999999" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
		<div class="color_selector" onclick="popup_color_grid('wrapper_color')">
			<div id="wrapper_color-preview" style="width:13px;height:13px;background-color:#999999">&nbsp;</div>
		</div>
		<div class="settings_separator_light">&nbsp;</div>
	</div>

				<div id="wrapper_text_color_option" style="padding:2px;">
		<div style="float:left;padding:4px;">Wrapper text color</div>
		<input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="wrapper_text_color" name="wrapper_text_color" value="#000000" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
		<div class="color_selector" onclick="popup_color_grid('wrapper_text_color')">
			<div id="wrapper_text_color-preview" style="width:13px;height:13px;background-color:#000000">&nbsp;</div>
		</div>
		<div class="settings_separator_light">&nbsp;</div>
	</div>

				<div id="wrapper_link_color_option" style="padding:2px;">
		<div style="float:left;padding:4px;">Wrapper link color</div>
		<input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="wrapper_link_color" name="wrapper_link_color" value="#0000cc" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
		<div class="color_selector" onclick="popup_color_grid('wrapper_link_color')">
			<div id="wrapper_link_color-preview" style="width:13px;height:13px;background-color:#0000cc">&nbsp;</div>
		</div>
		<div class="settings_separator_light">&nbsp;</div>
	</div>

				<div id="wrapper_opacity_option" style="padding:2px;">
		<div style="float:left;padding:4px;">Wrapper transparency</div>
		<select name="wrapper_opacity" id="wrapper_opacity" style="float:right" onchange="edit_main_theme('wrapper_opacity', this.value);">
			<option value="255">None</option>
				<option value="229">10%</option>
				<option value="204">20%</option>
				<option value="178">30%</option>
				<option value="153">40%</option>
				<option value="127">50%</option>
				<option value="102">60%</option>
				<option value="76">70%</option>
				<option value="51">80%</option>
				<option value="25">90%</option>
				<option value="0">100%</option>
		</select>
		<div class="settings_separator_light">&nbsp;</div>
	</div>

				<script>
		window.background_image_counter = 1;
	</script>
		</div>
	</td>
	<td width="460" valign="top" id="css_options_parent" style="padding:0.5em 0 0.1em 2em">
		<div style="font-size:130%">Color Palettes</div>
		<select onchange="set_palette(this.value)" style="display:none">
			<option value="default" selected="">Default</option>
		</select>
		<div id="palette_colors" style="padding-left: 1em;">
				<div id="box_background_color_option" style="padding:2px;">
		<div style="float:left;padding:4px;">Background color</div>
		<input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="box_background_color" name="box_background_color" value="#eeeeff" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
		<div class="color_selector" onclick="popup_color_grid('box_background_color')">
			<div id="box_background_color-preview" style="width:13px;height:13px;background-color:#eeeeff">&nbsp;</div>
		</div>
		<div class="settings_separator_light">&nbsp;</div>
	</div>

				<div id="title_text_color_option" style="padding:2px;">
		<div style="float:left;padding:4px;">Title text color</div>
		<input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="title_text_color" name="title_text_color" value="#000000" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
		<div class="color_selector" onclick="popup_color_grid('title_text_color')">
			<div id="title_text_color-preview" style="width:13px;height:13px;background-color:#000000">&nbsp;</div>
		</div>
		<div class="settings_separator_light">&nbsp;</div>
	</div>

				<div id="link_color_option" style="padding:2px;">
		<div style="float:left;padding:4px;">Link color</div>
		<input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="link_color" name="link_color" value="#0000cc" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
		<div class="color_selector" onclick="popup_color_grid('link_color')">
			<div id="link_color-preview" style="width:13px;height:13px;background-color:#0000cc">&nbsp;</div>
		</div>
		<div class="settings_separator_light">&nbsp;</div>
	</div>

				<div id="body_text_color_option" style="padding:2px;">
		<div style="float:left;padding:4px;">Body text color</div>
		<input type="text" style="float:right;width:50px;font-size:10px;margin-left:2px" id="body_text_color" name="body_text_color" value="#333333" onfocus="this.__old_value = this.value;" onblur="blur_color_picker(this);" onkeypress="return color_picker_keypress(this, event);">
		<div class="color_selector" onclick="popup_color_grid('body_text_color')">
			<div id="body_text_color-preview" style="width:13px;height:13px;background-color:#333333">&nbsp;</div>
		</div>
		<div class="settings_separator_light">&nbsp;</div>
	</div>

				<div id="box_opacity_option" style="padding:2px;">
		<div style="float:left;padding:4px;">Transparency</div>
		<select name="box_opacity" id="box_opacity" style="float:right" onchange="edit_main_theme('box_opacity', this.value);">
			<option value="255">None</option>
				<option value="229">10%</option>
				<option value="204">20%</option>
				<option value="178">30%</option>
				<option value="153">40%</option>
				<option value="127">50%</option>
				<option value="102">60%</option>
				<option value="76">70%</option>
				<option value="51">80%</option>
				<option value="25">90%</option>
				<option value="0">100%</option>
		</select>
		<div class="settings_separator_light">&nbsp;</div>
	</div>
	<button type="submit" class=" yt-uix-button yt-uix-button-primary">Save Changes</button>

		</div>
	</td>
		</form>
	</tr></tbody></table></div>
		<div id="popup_color_grid" style="display:none">
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#000000;cursor:pointer" onclick="select_popup_color('#000000');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#444444;cursor:pointer" onclick="select_popup_color('#444444');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#666666;cursor:pointer" onclick="select_popup_color('#666666');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#999999;cursor:pointer" onclick="select_popup_color('#999999');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#CCCCCC;cursor:pointer" onclick="select_popup_color('#CCCCCC');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#EEEEEE;cursor:pointer" onclick="select_popup_color('#EEEEEE');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#F3F3F3;cursor:pointer" onclick="select_popup_color('#F3F3F3');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#FFFFFF;cursor:pointer" onclick="select_popup_color('#FFFFFF');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#FF0000;cursor:pointer" onclick="select_popup_color('#FF0000');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#FF9900;cursor:pointer" onclick="select_popup_color('#FF9900');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#FFFF00;cursor:pointer" onclick="select_popup_color('#FFFF00');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#00FF00;cursor:pointer" onclick="select_popup_color('#00FF00');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#00FFFF;cursor:pointer" onclick="select_popup_color('#00FFFF');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#0000FF;cursor:pointer" onclick="select_popup_color('#0000FF');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#9900FF;cursor:pointer" onclick="select_popup_color('#9900FF');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#FF00FF;cursor:pointer" onclick="select_popup_color('#FF00FF');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#FFCCCC;cursor:pointer" onclick="select_popup_color('#FFCCCC');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#FCE5CD;cursor:pointer" onclick="select_popup_color('#FCE5CD');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#FFF2CC;cursor:pointer" onclick="select_popup_color('#FFF2CC');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#D9EAD3;cursor:pointer" onclick="select_popup_color('#D9EAD3');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#D0E0E3;cursor:pointer" onclick="select_popup_color('#D0E0E3');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#CFE2F3;cursor:pointer" onclick="select_popup_color('#CFE2F3');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#D9D2E9;cursor:pointer" onclick="select_popup_color('#D9D2E9');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#EAD1DC;cursor:pointer" onclick="select_popup_color('#EAD1DC');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#EA9999;cursor:pointer" onclick="select_popup_color('#EA9999');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#F9CB9C;cursor:pointer" onclick="select_popup_color('#F9CB9C');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#FFE599;cursor:pointer" onclick="select_popup_color('#FFE599');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#B6D7A8;cursor:pointer" onclick="select_popup_color('#B6D7A8');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#A2C4C9;cursor:pointer" onclick="select_popup_color('#A2C4C9');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#9FC5E8;cursor:pointer" onclick="select_popup_color('#9FC5E8');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#B4A7D6;cursor:pointer" onclick="select_popup_color('#B4A7D6');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#D5A6BD;cursor:pointer" onclick="select_popup_color('#D5A6BD');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#E06666;cursor:pointer" onclick="select_popup_color('#E06666');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#F6B26B;cursor:pointer" onclick="select_popup_color('#F6B26B');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#FFD966;cursor:pointer" onclick="select_popup_color('#FFD966');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#93C47D;cursor:pointer" onclick="select_popup_color('#93C47D');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#76A5AF;cursor:pointer" onclick="select_popup_color('#76A5AF');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#6FA8DC;cursor:pointer" onclick="select_popup_color('#6FA8DC');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#8E7CC3;cursor:pointer" onclick="select_popup_color('#8E7CC3');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#C27BA0;cursor:pointer" onclick="select_popup_color('#C27BA0');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#CC0000;cursor:pointer" onclick="select_popup_color('#CC0000');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#E69138;cursor:pointer" onclick="select_popup_color('#E69138');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#F1C232;cursor:pointer" onclick="select_popup_color('#F1C232');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#6AA84F;cursor:pointer" onclick="select_popup_color('#6AA84F');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#45818E;cursor:pointer" onclick="select_popup_color('#45818E');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#3D85C6;cursor:pointer" onclick="select_popup_color('#3D85C6');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#674EA7;cursor:pointer" onclick="select_popup_color('#674EA7');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#A64D79;cursor:pointer" onclick="select_popup_color('#A64D79');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#990000;cursor:pointer" onclick="select_popup_color('#990000');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#B45F06;cursor:pointer" onclick="select_popup_color('#B45F06');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#BF9000;cursor:pointer" onclick="select_popup_color('#BF9000');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#38761D;cursor:pointer" onclick="select_popup_color('#38761D');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#134F5C;cursor:pointer" onclick="select_popup_color('#134F5C');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#0B5394;cursor:pointer" onclick="select_popup_color('#0B5394');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#351C75;cursor:pointer" onclick="select_popup_color('#351C75');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#741B47;cursor:pointer" onclick="select_popup_color('#741B47');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#660000;cursor:pointer" onclick="select_popup_color('#660000');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#783F04;cursor:pointer" onclick="select_popup_color('#783F04');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#7F6000;cursor:pointer" onclick="select_popup_color('#7F6000');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#274E13;cursor:pointer" onclick="select_popup_color('#274E13');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#0C343D;cursor:pointer" onclick="select_popup_color('#0C343D');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#073763;cursor:pointer" onclick="select_popup_color('#073763');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#20124D;cursor:pointer" onclick="select_popup_color('#20124D');">&nbsp;</div>
			<div style="float:left;margin:2px;width:12px;height:12px;background-color:#4C1130;cursor:pointer" onclick="select_popup_color('#4C1130');">&nbsp;</div>
		<div class="cb">&nbsp;</div>
	</div>

		</div>


					<div id="tab_contents_layout" style="<?php if($_GET['etab'] !== 'layout') { ?>display:none;<?php } ?>" class="channel_tab_content">
		<div id="layout-messages" style="display:none"></div>

	<form action="/s/channel20update" name="channel_layout" id="channel_layout">
	<h1>This is not finished!</h1>
			<div style="font-size:110%;padding: 5px;float:left;width:300px">
				<label>
				<input name="comments" value="on" type="checkbox" checked="" onclick="add_or_remove_box(this)">
				Comments &nbsp;&nbsp;
				</label>
			</div>
			<div style="font-size:110%;padding: 5px;float:left;width:300px">
				<label>
				<input name="friends" value="on" type="checkbox" checked="" onclick="add_or_remove_box(this)">
				Friends &nbsp;&nbsp;
				</label>
			</div>
			<div style="font-size:110%;padding: 5px;float:left;width:300px">
				<label>
				<input name="channels" value="on" type="checkbox" onclick="add_or_remove_box(this)">
				Other Channels &nbsp;&nbsp;
				</label>
			</div>
			<div style="font-size:110%;padding: 5px;float:left;width:300px">
				<label>
				<input name="recenta" value="on" type="checkbox" checked="" onclick="add_or_remove_box(this)">
				Recent Activity &nbsp;&nbsp;
				</label>
			</div>
			<div style="font-size:110%;padding: 5px;float:left;width:300px">
				<label>
				<input name="subs" value="on" type="checkbox" checked="" onclick="add_or_remove_box(this)">
				Subscribers &nbsp;&nbsp;
				</label>
			</div>
			<div style="font-size:110%;padding: 5px;float:left;width:300px">
				<label>
				<input name="subs2" value="on" type="checkbox" checked="" onclick="add_or_remove_box(this)">
				Subscriptions &nbsp;&nbsp;
				</label>
			</div>
			<div style="font-size:110%;padding: 5px;float:left;width:300px">
				<label>
				<input name="custom_box_partner" value="on" type="checkbox" checked="" onclick="add_or_remove_box(this)">
				Custom Box &nbsp;&nbsp;
				</label>
			</div>
		<div class="cb"></div>
		<div class="cb">&nbsp;</div>
		<div class="settings_separator_save">&nbsp;</div>
		<div class="channel_settings_save">
					<button type="submit" class=" yt-uix-button yt-uix-button-primary" onclick="save_boxes();return false;"><span class="yt-uix-button-content">Save Changes</span></button>
		</div>
		<div class="cb">&nbsp;</div>
	</form>
		</div>


					<div id="tab_contents_playnav" style="display:none;" class="channel_tab_content">
		<div id="playnav-messages" style="display:none"></div>


	<form name="edit_form_user_playlist_navigator" id="edit_form_user_playlist_navigator">
	<h1>This is not finished!</h1>
	<div id="playnav_settings">
		<div id="display_settings">
			<div>Which content would you like to display?</div>
			<div style="width:92%;padding:0.5em;border:1px solid #ccc;overflow:auto;background-color:#fff">
				<label>
					<input id="display_uploads" type="checkbox" onclick="update_featured(this);" name="display_lists" value="uploads" checked="">My Uploaded Videos				</label><br>
				<label>
					<input id="display_favorites" type="checkbox" onclick="update_featured(this);" name="display_lists" value="favorites" checked="">My Favorites				</label><br>
				<label>
					<input id="display_playlists" type="checkbox" onclick="update_featured(this);" name="display_lists" value="playlists">Playlists				</label>
			</div>
			<div style="padding:0.25em" id="display_all_container">
				<label>
					<input id="display_all" type="checkbox" onclick="update_featured(this);" name="display_lists" value="all" checked="">Also show "All" view				</label>
			</div>
		</div>

		<div id="featured_content">
			<div>
				Featured layout<br>
				<select name="default_view" class="playnav-edit-field">
					<option value="play" id="view_play" selected="">Player View</option>
					<option value="grid" id="view_grid">Grid View</option>
				</select>
			</div>
			<div style="padding-top: 1em">
Featured content set<br>
				<select name="default_set" class="playnav-edit-field">
					<option value="all" id="feature_all" selected="">All my stuff</option>
					<option value="uploads" id="feature_uploads">My Uploaded Videos</option>
					<option value="favorites" id="feature_favorites">My Favorites</option>
					<option value="shows" id="feature_shows" style="display:none">My Shows</option>
					<optgroup label="Playlists" id="feature_playlists" style="display:none">
						<option value="playlists" style="display:none" disabled="">All Playlists/option&gt;
					</option></optgroup>
				</select>
			</div>
			<div style="padding-top: 1em">
Featured video<br>
				<div id="featured_vid_select_box">
					<select name="featured_video_id" style="width:200px" onchange="if (this.value=='OTHER111111') {_showdiv('featured_video_url')} else {_hidediv('featured_video_url')}">
						<option value="00000000000" selected="">Use the most recent video from my featured set</option>
						<option value="OTHER111111">Other</option>
					</select>
				</div>
				<input type="text" id="featured_video_url" name="featured_video_url" value="Copy and paste a video URL here" style="color:#999;margin-top:6px" onfocus="playnav.clearFirstTime(this)" class="playnav-edit-field hid">
			</div>
				<div style="padding-top:0.6em">
					<label><input type="checkbox" name="autoplay" value="True">Autoplay featured video
					</label>
				</div>
		</div>

		<div id="arrange_playlists" style="display:none">
			<div>Which of your playlists would you like to display?</div>
			<div style="width:90%;height:80px;padding:0.5em;border:1px solid #ccc;overflow:auto;background-color:#fff">
			</div>
		</div>
		<div class="cb">&nbsp;</div>
		<div class="settings_separator_save">&nbsp;</div>
		<div class="channel_settings_save">
					<button type="button" class=" yt-uix-button yt-uix-button-primary" onclick="save_playnav_settings();return false;"><span class="yt-uix-button-content">Save Changes</span></button>
or
				<a href="#" onclick="channel_edit_tab('close', true);return false">cancel</a>
		<div class="save_overlay">
<center><img src="/web/20100812015838im_/http://s.ytimg.com/yt/img/icn_loading_animated-vfl24663.gif"></center>
</div>


		</div>
		<div class="cb">&nbsp;</div>
	</div>
	</form>

		</div>


		</div>
		<div class="edit_controls_bottom_border">&nbsp;</div>
	</div>
<?php } ?>

<div id="channel-body" class="jsloaded">
  <div id="channel-base-div">

    <div class="inner-box hid" id="global-messages">
    </div>

          <div id="user_playlist_navigator" class="outer-box yt-rounded">
      <div id="playnav-channel-header" class="inner-box-bg-color">
      <div id="playnav-navbar-toggle">


    <a title="Switch to Player View" href="javascript:;" onclick="playnav.selectView('play');" id="playview-icon" class="view-button view-button-selected">
    <div class="contents">
      <div class="a box"></div>
      <div class="a tri"></div>
      <div class="a yt"></div>
      <div class="a yc"></div>
      <div class="a yb"></div>
    </div>
  </a>


      </div>

    <div id="playnav-title-bar">
      <div id="playnav-channel-name" class="outer-box-bg-color">
        <div class="channel-thumb-holder outer-box-color-as-border-color">
            <div class="user-thumb-semismall"><div>

    <img id="" src="/dynamic/pfp/<?php echo htmlspecialchars($_user['pfp']); ?>" alt="">

  </div></div>

        </div>

        <div class="channel-title-container">
            <div class="channel-title outer-box-color" style="display:none" id="channel_title"></div>
            <div class="channel-title outer-box-color" style="padding:9px 0 0 0" id="channel_base_title"><?php if($_user['title'])	{	?> <?php echo htmlspecialchars($_user['title']); ?> <?php } else {	?> <?php echo htmlspecialchars($_user['username']); ?> <?php	}	?>'s Channel</div>
        </div>

        <div id="subscribe-buttons">
              
  
    
  
  
  
  

    

    

  <span data-subscription-type="user" data-subscription-xsrf="" data-subscription-expandable-id="subscription-button-module-menu" data-subscription-username="kiwi112392" data-subscription-channels-container="subscription-recommended-channels" data-subscription-menu-type="expander" class="subscription-container" data-subscription-feature="channel">
     

    
    

  
  
<form action="/get/subscribe?n=<?php echo $_GET['n'] ?>">
  <button name="n" value="<?php echo $_GET['n'] ?>" type="submit" class="subscribe-button yt-uix-button yt-uix-button-urgent yt-uix-tooltip" title="Click to be notified of new videos from this channel" data-loaded="true" ><span class="yt-uix-button-content">Subscribe</span></button>
</form>
      <span class="subscription-subscribed-container hid"><span class="subscription-options-button subscription-expander yt-uix-expander yt-uix-expander-collapsed" data-expander-action="yt.www.subscriptions.button.toggleMenu"><span class="yt-uix-expander-head yt-rounded"><button class="yt-uix-expander-arrow master-sprite" onclick="return false;"></button><span class="yt-alert yt-alert-success yt-alert-small yt-alert-naked yt-rounded"><img src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"><span class="yt-alert-content">Subscribed</span></span></span></span></span>
  </span>

        </div>
      </div>
      <div id="playnav-chevron">&nbsp;</div>
    </div>


      <div id="playnav-navbar"><table><tbody><tr>
              <td>
  <a class="navbar-tab inner-box-link-color navbar-tab-selected" id="playnav-navbar-tab-all" href="javascript:;" onclick="playnav.selectTab('all');yt.analytics.trackEvent('menu', 'all');">All</a>
  </td>

      </tr></tbody></table></div>

    <div class="cb"></div>
  </div>

  <div id="subscribeMessage" class="hid">&nbsp;</div>
      <div id="subscription-button-module-menu" class="hid subscription-menu-expandable subscription-menu">
      <div class="subscription-menu-not-logged-in">
          <strong><a href="https://web.archive.org/web/20110514165523/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252Fprofile%253Fuser%253Dkiwi112392&amp;hl=en_US<mpl=sso">Sign In</a> or <a href="/web/20110514165523/http://youtube.com/signup?next=%2Fprofile%3Fuser%3Dkiwi112392">Sign Up</a> now!
</strong>

      </div>
  </div>


    <div id="user_playlist_navigator-messages" class="hid"></div>
        <script>
    yt.setConfig({
      'SWF_AD_EURL': "https:\/\/web.archive.org\/web\/20110514165523\/http:\/\/www.youtube.com\/user\/kiwi112392"
    });

    playnav.setVideoId("XU7CSvd59wo");
      window.defaultPlaylistName = "all";
  </script>

      <div id="playnav-body">
													<?php
														$stmt = $__db->prepare("SELECT * FROM videos WHERE author = :username ORDER BY id DESC LIMIT 1");
														$stmt->bindParam(":username", $_user['username']);
														$stmt->execute();
														if($stmt->rowCount() == 0) { echo ''; }

														while($video = $stmt->fetch(PDO::FETCH_ASSOC)) {	
															$video['age'] = $__time_h->time_elapsed_string($video['publish']);		
															$video['duration'] = $__time_h->timestamp($video['duration']);
															$video['views'] = $__video_h->fetch_video_views($video['rid']);
															$video['author'] = htmlspecialchars($video['author']);		
															$video['title'] = htmlspecialchars($video['title']);
															$video['description'] = $__video_h->shorten_description($video['description'], 300);
													?>
					<div id="playnav-player" class="playnav-player-container" style="visibility: visible; left: 0px;"><iframe src="/player/player?v=<?php echo $video['rid'] ?>" width="640" height="390"></iframe></div><?php } ?>

    <script>
    var featuredVideoMetadata = {"swfcfg": {"url": "https:\/\/web.archive.org\/web\/20110514165523\/http:\/\/s.ytimg.com\/yt\/swfbin\/watch_as3-vflRkb4Mi.swf", "min_version": "8.0.0", "args": {"el": "profilepage", "showinfo": 0, "allow_embed": 1, "keywords": "snow,funny", "fexp": "904411,907509,901601", "allow_ratings": 1, "lpbf": "https:\/\/web.archive.org\/web\/20110514165523\/http:\/\/s.ytimg.com\/yt\/swf\/lpbf-vfl1cnurf.swf", "lpbb": "https:\/\/web.archive.org\/web\/20110514165523\/http:\/\/s.ytimg.com\/yt\/swf\/lpbb-vflyZAWjT.swf", "ps": "default", "fmt_list": "18\/640x360\/9\/0\/115,5\/320x240\/7\/0\/0", "author": "kiwi112392", "muted": "0", "track_embed": 0, "length_seconds": 145, "enablejsapi": 1, "rel": 0, "has_cc": false, "tmi": "1", "ftoken": "", "status": "ok", "fs": "1", "watermark": "https:\/\/web.archive.org\/web\/20110514165523\/http:\/\/s.ytimg.com\/yt\/swf\/logo-vfl_bP6ud.swf,http:\/\/s.ytimg.com\/yt\/swf\/hdlogo-vfloR6wva.swf", "timestamp": 1305392123, "plid": "AASjP0nRUX9WmyV6", "view_count": 4638, "fmt_url_map": "18|http:\/\/v17.lscache1.c.youtube.com\/videoplayback?sparams=id%2Cexpire%2Cip%2Cipbits%2Citag%2Cratebypass\u0026fexp=904411%2C907509%2C901601\u0026itag=18\u0026ipbits=8\u0026signature=15D90312C680BA3F1AC86124A9482A637E32406E.11D33D1C70B2A716B11794E21981E33CABADFADF\u0026sver=3\u0026ratebypass=yes\u0026expire=1305414000\u0026key=yt1\u0026ip=207.0.0.0\u0026id=5d4ec24af779f70a,5|http:\/\/v9.lscache8.c.youtube.com\/videoplayback?sparams=id%2Cexpire%2Cip%2Cipbits%2Citag%2Cratebypass\u0026fexp=904411%2C907509%2C901601\u0026itag=5\u0026ipbits=8\u0026signature=92FC80E0D8B2B5258FF125F4A9C191F363FEA51B.4E2F42912A7E63C43D7E57424B6788592B7D4A6E\u0026sver=3\u0026ratebypass=yes\u0026expire=1305414000\u0026key=yt1\u0026ip=207.0.0.0\u0026id=5d4ec24af779f70a", "fmt_map": "18\/640x360\/9\/0\/115,5\/320x240\/7\/0\/0", "hl": "en_US", "eurl": "https:\/\/web.archive.org\/web\/20110514165523\/http:\/\/www.youtube.com\/user\/kiwi112392", "iurl": "https:\/\/web.archive.org\/web\/20110514165523\/http:\/\/i1.ytimg.com\/vi\/XU7CSvd59wo\/hqdefault.jpg", "endscreen_module": "https:\/\/web.archive.org\/web\/20110514165523\/http:\/\/s.ytimg.com\/yt\/swfbin\/endscreen-vflq4r1-P.swf", "fmt_stream_map": "18|http:\/\/v17.lscache1.c.youtube.com\/videoplayback?sparams=id%2Cexpire%2Cip%2Cipbits%2Citag%2Cratebypass\u0026fexp=904411%2C907509%2C901601\u0026itag=18\u0026ipbits=8\u0026signature=15D90312C680BA3F1AC86124A9482A637E32406E.11D33D1C70B2A716B11794E21981E33CABADFADF\u0026sver=3\u0026ratebypass=yes\u0026expire=1305414000\u0026key=yt1\u0026ip=207.0.0.0\u0026id=5d4ec24af779f70a||tc.v17.cache1.c.youtube.com,5|http:\/\/v9.lscache8.c.youtube.com\/videoplayback?sparams=id%2Cexpire%2Cip%2Cipbits%2Citag%2Cratebypass\u0026fexp=904411%2C907509%2C901601\u0026itag=5\u0026ipbits=8\u0026signature=92FC80E0D8B2B5258FF125F4A9C191F363FEA51B.4E2F42912A7E63C43D7E57424B6788592B7D4A6E\u0026sver=3\u0026ratebypass=yes\u0026expire=1305414000\u0026key=yt1\u0026ip=207.0.0.0\u0026id=5d4ec24af779f70a||tc.v9.cache8.c.youtube.com", "ss": "1", "referrer": null, "avg_rating": 2.02127659574, "leanback_module": "https:\/\/web.archive.org\/web\/20110514165523\/http:\/\/s.ytimg.com\/yt\/swfbin\/leanback_module-vflYVCWFa.swf", "sk": "uWxiyehK3L4UX1-WsOvibCpKkJQqoxOWC", "token": "vjVQa1PpcFOQLIfHelz9IySKJz0GMljTmsCvngGPRrw=", "thumbnail_url": "https:\/\/web.archive.org\/web\/20110514165523\/http:\/\/i1.ytimg.com\/vi\/XU7CSvd59wo\/default.jpg", "video_id": "XU7CSvd59wo", "vq": "auto", "showsearch": 0, "autoplay": "0"}, "url_v9as2": "", "params": {"allowscriptaccess": "always", "allowfullscreen": "true", "bgcolor": "#000000"}, "attrs": {"width": "640", "id": "movie_player", "height": "390"}, "url_v8": ""}, "info_panel_html": "    \u003cdiv id=\"channel-like-action\"\u003e\n      \u003cdiv id=\"channel-like-buttons\"\u003e\n        \u003cbutton class=\" yt-uix-button yt-uix-tooltip\" type=\"button\" id=\"watch-like\" onclick=\";return false;\" title=\"I like this\" data-button-action=\"playnav.like\" role=\"button\" aria-pressed=\"false\"\u003e\u003cimg class=\"yt-uix-button-icon yt-uix-button-icon-watch-like\" s\u0072c=\"\/\/s.ytimg.com\/yt\/img\/pixel-vfl3z5WfW.gif\" alt=\"\"\u003e\u003cspan class=\"yt-uix-button-content\"\u003eLike\u003c\/span\u003e\u003c\/button\u003e\n        \u0026nbsp;\n        \u003cbutton class=\" yt-uix-button yt-uix-tooltip yt-uix-button-empty\" type=\"button\" id=\"watch-unlike\" onclick=\";return false;\" title=\"I dislike this\" data-button-action=\"playnav.unlike\" role=\"button\" aria-pressed=\"false\"\u003e\u003cimg class=\"yt-uix-button-icon yt-uix-button-icon-watch-unlike\" s\u0072c=\"\/\/s.ytimg.com\/yt\/img\/pixel-vfl3z5WfW.gif\" alt=\"\"\u003e\u003c\/button\u003e\n      \u003c\/div\u003e\n      \u003cform method=\"post\" action=\"\/watch_actions_ajax\" name=\"likeForm\" class=\"hid\"\u003e\n        \n        \u003cinput type=\"hidden\" name=\"action_like_video\" value=\"1\"\u003e\n        \u003cinput type=\"hidden\" name=\"video_id\" value=\"XU7CSvd59wo\"\u003e\n      \u003c\/form\u003e\n      \u003cform method=\"post\" action=\"\/watch_actions_ajax\" name=\"unlikeForm\" class=\"hid\"\u003e\n        \n        \u003cinput type=\"hidden\" name=\"action_dislike_video\" value=\"1\"\u003e\n        \u003cinput type=\"hidden\" name=\"video_id\" value=\"XU7CSvd59wo\"\u003e\n      \u003c\/form\u003e\n        \u003cdiv id=\"channel-like-logged-out\" class=\"hid\"\u003e\n            \u003cstrong\u003e\u003ca href=\"https:\/\/www.google.com\/accounts\/ServiceLogin?uilel=3\u0026service=youtube\u0026passive=true\u0026continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252Fuser%252Fkiwi112392\u0026hl=en_US\u0026ltmpl=sso\"\u003eSign In\u003c\/a\u003e or \u003ca href=\"\/signup?next=%2Fuser%2Fkiwi112392\"\u003eSign Up\u003c\/a\u003e now!\n\u003c\/strong\u003e\n\n        \u003c\/div\u003e\n      \u003cdiv id=\"channel-like-close\" class=\"hid\"\u003e\n        \u003cdiv class=\"close\"\u003e\u003cimg s\u0072c=\"\/\/s.ytimg.com\/yt\/img\/pixel-vfl3z5WfW.gif\" class=\"close-button\" onclick=\"playnav.hideLike();\"\u003e\u003c\/div\u003e\n      \u003c\/div\u003e\n    \u003c\/div\u003e\n\n  \u003cdiv id=\"playnav-curvideo-title\" class=\"inner-box-link-color\" dir=\"ltr\"\u003e\n    \u003ca href=\"\/watch?v=XU7CSvd59wo\u0026feature=channel_video_title\"\u003emee\u003c\/a\u003e\n  \u003c\/div\u003e\n\n  \u003cdiv id=\"playnav-curvideo-info-line\"\u003e\nFrom:\n    \u003cspan id=\"playnav-curvideo-channel-name\"\u003e\n      \u003ca href=\"\/user\/kiwi112392\"\u003ekiwi112392\u003c\/a\u003e\n    \u003c\/span\u003e\u0026nbsp;|\n    \u003cspan dir=\"ltr\"\u003eFeb 15, 2007\u003c\/span\u003e\n      \u0026nbsp;|\n      \u003cspan id=\"playnav-curvideo-view-count\"\u003e\n4,638 views\n      \u003c\/span\u003e\n  \u003c\/div\u003e\n\n  \u003cdiv class=\"cb\"\u003e\u003c\/div\u003e\n\n    \u003cdiv id=\"channel-like-result\" class=\"hid\"\u003e\n      \u003cdiv id=\"watch-actions-area\" class=\"yt-rounded\"\u003e\u0026nbsp;\u003c\/div\u003e\n    \u003c\/div\u003e\n    \u003cdiv id=\"channel-like-loading\" class=\"hid\"\u003eLoading...\u003c\/div\u003e\n    \u003cdiv class=\"cb\"\u003e\u003c\/div\u003e\n\n  \u003cdiv id=\"playnav-curvideo-description-container\"\u003e\n    \u003cdiv id=\"playnav-curvideo-description\" dir=\"ltr\"\u003eblajd\n      \u003cdiv id=\"playnav-curvideo-description-more-holder\"\u003e\n        \u003cdiv id=\"playnav-curvideo-description-more\" class=\"inner-box-bg-color\"\u003e\n          ...\u0026nbsp;\u003ca class=\"channel-cmd\" href=\"javascript:;\" onclick=\"playnav.toggleFullVideoDescription(true)\"\u003e(more info)\u003c\/a\u003e\u0026nbsp;\u0026nbsp;\n        \u003c\/div\u003e\n        \u003cdiv class=\"cb\"\u003e\u003c\/div\u003e\n      \u003c\/div\u003e\n      \u003cspan id=\"playnav-curvideo-description-less\"\u003e\n        \u003ca href=\"javascript:;\" class=\"channel-cmd\" onclick=\"playnav.toggleFullVideoDescription(false)\"\u003e(less info)\u003c\/a\u003e\n      \u003c\/span\u003e\n    \u003c\/div\u003e\n  \u003c\/div\u003e\n\n  \u003ca href=\"\/watch?v=XU7CSvd59wo\" id=\"playnav-watch-link\" onclick=\"playnav.goToWatchPage()\"\u003eView comments, related videos, and more\u003c\/a\u003e\n\n  \u003cdiv id=\"playnav-curvideo-controls\"\u003e\u003c\/div\u003e\n\n  \u003cdiv class=\"cb\"\u003e\u003c\/div\u003e\n\n  \u003cscript\u003e\n    if (_gel('playnav-curvideo-description').offsetHeight \u003e 28) {\n      _gel('playnav-curvideo-description-more-holder').style.display = 'block';\n    }\n  \u003c\/script\u003e\n", "is_as3_player": true};
    playnav.setInitialView("play");
    playnav.setInitialTab("all");
    playnav.handleVideoMetadata('', featuredVideoMetadata, true);
  </script>


        <div id="playnav-playview" class="" style="display: block;">
          
  <div id="playnav-player-restricted" class="inner-box-colors" style="display: none;">
    <div id="playnav-inner-restricted">
      <div id="playnav-restricted-title-div"><h3 id="playnav-restricted-title"></h3></div>

      <div id="playnav-login-required" class="playnav-restricted-msg">
        <p>
You must be <a class="playnav-restricted-link" href="">logged in</a> to view this video.
        </p>
      </div>
      <div id="playnav-controversy" class="playnav-restricted-msg">
        <p>
The following content has been identified by the YouTube community as being potentially offensive or inappropriate. Viewer discretion is advised.
Please <a class="playnav-restricted-link" href="">confirm</a> that you wish to view this video.
        </p>
      </div>
      <div id="playnav-verify-age-for-age-gated" class="playnav-restricted-msg">
        <p>
This video or group may contain content that is inappropriate for some users, <a href="https://web.archive.org/web/20110514165523/http://www.google.com/support/youtube/bin/answer.py?answer=186529" target="_blank">as determined by the video uploader.</a>
To view this video or group, please <a class="playnav-restricted-link" href="">click here</a> to sign in or sign up and verify that you are of the appropriate age.
        </p>
      </div>
      <div id="playnav-verify-age" class="playnav-restricted-msg">
        <p>
This video or group may contain content that is inappropriate for some users, as flagged by YouTube's user community.
Please <a class="playnav-restricted-link" href="">confirm</a> that you wish to view this video.
        </p>
      </div>
      <div id="playnav-unavailable" class="playnav-restricted-msg">
        <p>
This video is unavailable.
        </p>
      </div>
      <div id="playnav-custom-error-message" class="playnav-restricted-msg">
      </div>
    </div>
  </div>

          <div id="playnav-left-panel" style="display: block;">
            <div class="playnav-player-container"></div>
            <div id="playnav-video-details">
                <div id="playnav-bottom-links">
    <div id="playnav-bottom-links-clip" class="playnav-bottom-links-clip">
      <table><tbody><tr>
          <td id="playnav-panel-tab-info" class="panel-tab-selected">


    <table class="panel-tabs">
      <tbody><tr>
        <td class="panel-tab-title-cell">
          <div class="playnav-panel-tab-icon" id="panel-icon-info" onmouseover="_addclass(_gel('playnav-panel-tab-info'), 'panel-tab-hovered')" onmouseout="_removeclass(_gel('playnav-panel-tab-info'), 'panel-tab-hovered')" onclick="playnav.selectPanel('info')"></div>
          <div class="playnav-bottom-link" id="info-bottom-link">
            <a href="javascript:;" onmouseover="_addclass(_gel('playnav-panel-tab-info'), 'panel-tab-hovered')" onmouseout="_removeclass(_gel('playnav-panel-tab-info'), 'panel-tab-hovered')" onclick="playnav.selectPanel('info')">Info</a>
          </div>
          <div class="spacer">&nbsp;</div>
        </td>
      </tr>
      <tr>
        <td class="panel-tab-indicator-cell inner-box-opacity">
          <div class="panel-tab-indicator-arrow"></div>
        </td>
      </tr>
    </tbody></table>
  </td>

          <td id="playnav-panel-tab-favorite">


    <table class="panel-tabs">
      <tbody><tr>
        <td class="panel-tab-title-cell">
          <div class="playnav-panel-tab-icon" id="panel-icon-favorite" onmouseover="_addclass(_gel('playnav-panel-tab-favorite'), 'panel-tab-hovered')" onmouseout="_removeclass(_gel('playnav-panel-tab-favorite'), 'panel-tab-hovered')" onclick="playnav.selectPanel('favorite')"></div>
          <div class="playnav-bottom-link" id="favorite-bottom-link">
            <a href="javascript:;" onmouseover="_addclass(_gel('playnav-panel-tab-favorite'), 'panel-tab-hovered')" onmouseout="_removeclass(_gel('playnav-panel-tab-favorite'), 'panel-tab-hovered')" onclick="playnav.selectPanel('favorite')">Favorite</a>
          </div>
          <div class="spacer">&nbsp;</div>
        </td>
      </tr>
      <tr>
        <td class="panel-tab-indicator-cell inner-box-opacity">
          <div class="panel-tab-indicator-arrow"></div>
        </td>
      </tr>
    </tbody></table>
  </td>

          <td id="playnav-panel-tab-share">


    <table class="panel-tabs">
      <tbody><tr>
        <td class="panel-tab-title-cell">
          <div class="playnav-panel-tab-icon" id="panel-icon-share" onmouseover="_addclass(_gel('playnav-panel-tab-share'), 'panel-tab-hovered')" onmouseout="_removeclass(_gel('playnav-panel-tab-share'), 'panel-tab-hovered')" onclick="playnav.selectPanel('share')"></div>
          <div class="playnav-bottom-link" id="share-bottom-link">
            <a href="javascript:;" onmouseover="_addclass(_gel('playnav-panel-tab-share'), 'panel-tab-hovered')" onmouseout="_removeclass(_gel('playnav-panel-tab-share'), 'panel-tab-hovered')" onclick="playnav.selectPanel('share')">Share</a>
          </div>
          <div class="spacer">&nbsp;</div>
        </td>
      </tr>
      <tr>
        <td class="panel-tab-indicator-cell inner-box-opacity">
          <div class="panel-tab-indicator-arrow"></div>
        </td>
      </tr>
    </tbody></table>
  </td>

          <td id="playnav-panel-tab-playlists">


    <table class="panel-tabs">
      <tbody><tr>
        <td class="panel-tab-title-cell">
          <div class="playnav-panel-tab-icon" id="panel-icon-playlists" onmouseover="_addclass(_gel('playnav-panel-tab-playlists'), 'panel-tab-hovered')" onmouseout="_removeclass(_gel('playnav-panel-tab-playlists'), 'panel-tab-hovered')" onclick="playnav.selectPanel('playlists')"></div>
          <div class="playnav-bottom-link" id="playlists-bottom-link">
            <a href="javascript:;" onmouseover="_addclass(_gel('playnav-panel-tab-playlists'), 'panel-tab-hovered')" onmouseout="_removeclass(_gel('playnav-panel-tab-playlists'), 'panel-tab-hovered')" onclick="playnav.selectPanel('playlists')">Playlists</a>
          </div>
          <div class="spacer">&nbsp;</div>
        </td>
      </tr>
      <tr>
        <td class="panel-tab-indicator-cell inner-box-opacity">
          <div class="panel-tab-indicator-arrow"></div>
        </td>
      </tr>
    </tbody></table>
  </td>

          <td id="playnav-panel-tab-flag">


    <table class="panel-tabs">
      <tbody><tr>
        <td class="panel-tab-title-cell">
          <div class="playnav-panel-tab-icon" id="panel-icon-flag" onmouseover="_addclass(_gel('playnav-panel-tab-flag'), 'panel-tab-hovered')" onmouseout="_removeclass(_gel('playnav-panel-tab-flag'), 'panel-tab-hovered')" onclick="playnav.selectPanel('flag')"></div>
          <div class="playnav-bottom-link" id="flag-bottom-link">
            <a href="javascript:;" onmouseover="_addclass(_gel('playnav-panel-tab-flag'), 'panel-tab-hovered')" onmouseout="_removeclass(_gel('playnav-panel-tab-flag'), 'panel-tab-hovered')" onclick="playnav.selectPanel('flag')">Flag</a>
          </div>
          <div class="spacer">&nbsp;</div>
        </td>
      </tr>
      <tr>
        <td class="panel-tab-indicator-cell inner-box-opacity">
          <div class="panel-tab-indicator-arrow"></div>
        </td>
      </tr>
    </tbody></table>
  </td>

      </tr></tbody></table>
    </div>

    <div class="cb"></div>
													<?php
														$stmt = $__db->prepare("SELECT * FROM videos WHERE author = :username ORDER BY id DESC LIMIT 1");
														$stmt->bindParam(":username", $_user['username']);
														$stmt->execute();
														if($stmt->rowCount() == 0) { echo ''; }

														while($video = $stmt->fetch(PDO::FETCH_ASSOC)) {	
															$video['age'] = $__time_h->time_elapsed_string($video['publish']);		
															$video['duration'] = $__time_h->timestamp($video['duration']);
															$video['views'] = $__video_h->fetch_video_views($video['rid']);
															$video['author'] = htmlspecialchars($video['author']);		
															$video['title'] = htmlspecialchars($video['title']);
															$video['description'] = $__video_h->shorten_description($video['description'], 300);
													?>
    <div class="playnav-video-panel inner-box-colors border-box-sizing">
      <div id="playnav-video-panel-inner" class="playnav-video-panel-inner border-box-sizing" style="overflow: auto;">
        <div id="playnav-panel-info" class="scrollable" style="display: block;">    <div id="channel-like-action">
      <div id="channel-like-buttons">
        <button class=" yt-uix-button yt-uix-tooltip" type="button" id="watch-like" onclick=";return false;" title="I like this" data-button-action="playnav.like" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-watch-like" src="https://web.archive.org/web/20110514165523im_///s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content">Like</span></button>
        &nbsp;
        <button class=" yt-uix-button yt-uix-tooltip yt-uix-button-empty" type="button" id="watch-unlike" onclick=";return false;" title="I dislike this" data-button-action="playnav.unlike" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-watch-unlike" src="https://web.archive.org/web/20110514165523im_///s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
      </div>
      <form method="post" action="/web/20110514165523mp_/http://www.youtube.com/watch_actions_ajax" name="likeForm" class="hid">
        
        <input type="hidden" name="action_like_video" value="1">
        <input type="hidden" name="video_id" value="XU7CSvd59wo">
      <input name="session_token" type="hidden" value="a3ZOFRc_k5nfaINfaGa9XtSm6lN8MTMwNTQ3ODUyM0AxMzA1MzkyMTIz"></form>
      <form method="post" action="/web/20110514165523mp_/http://www.youtube.com/watch_actions_ajax" name="unlikeForm" class="hid">
        
        <input type="hidden" name="action_dislike_video" value="1">
        <input type="hidden" name="video_id" value="XU7CSvd59wo">
      <input name="session_token" type="hidden" value="a3ZOFRc_k5nfaINfaGa9XtSm6lN8MTMwNTQ3ODUyM0AxMzA1MzkyMTIz"></form>
        <div id="channel-like-logged-out" class="hid">
            <strong><a href="https://web.archive.org/web/20110514165523mp_/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252Fuser%252Fkiwi112392&amp;hl=en_US&amp;ltmpl=sso">Sign In</a> or <a href="/web/20110514165523mp_/http://www.youtube.com/signup?next=%2Fuser%2Fkiwi112392">Sign Up</a> now!
</strong>

        </div>

      <div id="channel-like-close" class="hid">
        <div class="close"><img src="https://web.archive.org/web/20110514165523im_///s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="close-button" onclick="playnav.hideLike();"></div>
      </div>
    </div>

  <div id="playnav-curvideo-title" class="inner-box-link-color" dir="ltr">
    <a href="/watch?v=<?php echo htmlspecialchars($video['rid']); ?>"><?php echo htmlspecialchars($video['title']); ?></a>
  </div>

  <div id="playnav-curvideo-info-line">
From:
    <span id="playnav-curvideo-channel-name">
      <a href="/user/<?php echo htmlspecialchars($_user['username']); ?>"><?php if($_user['title'])	{	?> <?php echo htmlspecialchars($_user['title']); ?> <?php } else {	?> <?php echo htmlspecialchars($_user['username']); ?> <?php	}	?> </a>
    </span>&nbsp;|
    <span dir="ltr"><?php echo $__time_h->time_elapsed_string($video['publish']); ?></span>
      &nbsp;|
      <span id="playnav-curvideo-view-count">
<?php echo $__video_h->fetch_video_views($video['rid']); ?> views
      </span>
  </div>

  <div class="cb"></div>

    <div id="channel-like-result" class="hid">
      <div id="watch-actions-area" class="yt-rounded">&nbsp;</div>
    </div>
    <div id="channel-like-loading" class="hid">Loading...</div>
    <div class="cb"></div>

  <div id="playnav-curvideo-description-container">
    <div id="playnav-curvideo-description" dir="ltr"><?php echo htmlspecialchars($video['description']); ?>
      <div id="playnav-curvideo-description-more-holder">
        <div id="playnav-curvideo-description-more" class="inner-box-bg-color">
          ...&nbsp;<a class="channel-cmd" href="javascript:;" onclick="playnav.toggleFullVideoDescription(true)">(more info)</a>&nbsp;&nbsp;
        </div>
        <div class="cb"></div>
      </div>
      <span id="playnav-curvideo-description-less">
        <a href="javascript:;" class="channel-cmd" onclick="playnav.toggleFullVideoDescription(false)">(less info)</a>
      </span>
    </div>
  </div>

  <a href="/watch?v=<?php echo htmlspecialchars($video['rid']); ?>" id="playnav-watch-link" onclick="playnav.goToWatchPage()">View comments, related videos, and more</a>

  <div id="playnav-curvideo-controls"></div>

  <div class="cb"></div>

  <script>
    if (_gel('playnav-curvideo-description').offsetHeight > 28) {
      _gel('playnav-curvideo-description-more-holder').style.display = 'block';
    }
  </script>
</div>
        <div id="playnav-panel-comments" class="hid"></div>
        <div id="playnav-panel-favorite" class="hid"></div>
        <div id="playnav-panel-share" class="hid scrollable"></div>
        <div id="playnav-panel-playlists" class="hid"></div>
        <div id="playnav-panel-flag" class="hid scrollable"></div>
      </div>
    </div>
	<?php } ?>
  </div>

            </div>
          </div>
            <div id="playnav-play-panel">
    <div id="watch-longform-ad" style="display:none;">
      <div id="watch-longform-text">
Advertisement
      </div>

      <div id="watch-longform-ad-placeholder"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" height="60" width="300"></div>
      <div id="instream_google_companion_ad_div"></div>
    </div>

    <div id="watch-channel-brand-div" style="display:none">
      <div id="ad300x250" class="alignC"></div>
      <div id="google_companion_ad_div" class="alignC"></div>
      <div class="alignC grayText inner-box-colors" style="font-size: 10px; padding-top: 3px;">
Advertisement
      </div>
    </div>
    <div id="playnav-play-content" style="height: 601px;">
        <div class="playnav-playlist-holder" id="playnav-play-playlist-all-holder">
                    <div id="playnav-play-all-scrollbox" class="scrollbox-wrapper inner-box-colors">
    <div class="scrollbox-content playnav-playlist-all">
      
      <div class="scrollbox-body" style="height: 585px; zoom: 1;">
        <div class="outer-scrollbox">
          <div id="playnav-play-all-items" class="inner-scrollbox">
              
    <input type="hidden" id="playnav-playlist-uploads-count" value="2">
      <div class="playnav-playlist-header">
      <a href="javascript:;" style="text-decoration:none" class="title title-text-color">
      <span id="playnav-playlist-uploads-all-title" class="title">Uploads</span>
        <span dir="ltr">(<?php echo $__user_h->fetch_user_videos($_user['username']); ?>)</span>
      </a>

    
  </div>

    
      


													<?php
														$stmt = $__db->prepare("SELECT * FROM videos WHERE author = :username ORDER BY id DESC");
														$stmt->bindParam(":username", $_user['username']);
														$stmt->execute();
														if($stmt->rowCount() == 0) { echo '<span style="font-size:11px;color:grey;">This user has no videos uploaded.</span>'; }

														while($video = $stmt->fetch(PDO::FETCH_ASSOC)) {	
															$video['age'] = $__time_h->time_elapsed_string($video['publish']);		
															$video['duration'] = $__time_h->timestamp($video['duration']);
															$video['views'] = $__video_h->fetch_video_views($video['rid']);
															$video['author'] = htmlspecialchars($video['author']);		
															$video['title'] = htmlspecialchars($video['title']);
															$video['description'] = $__video_h->shorten_description($video['description'], 50);
													?>
  <div id="playnav-video-play-uploads-all-0-XU7CSvd59wo" class="playnav-item playnav-video">
    <div style="display:none" class="encryptedVideoId"></div>

    <div id="playnav-video-play-uploads-all-0-XU7CSvd59wo-selector" class="selector"></div>
    <div class="content">
      <div class="playnav-video-thumb">
          






    

<a href="/watch?v=<?php echo htmlspecialchars($video['rid']); ?>" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" alt="Thumbnail" class="" onclick="playnav.playVideo('uploads-all','0','XU7CSvd59wo');return false;" title="mee"></span></span><span class="video-time"><?php echo $video['duration']; ?></span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="XU7CSvd59wo" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" data-button-action="" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" data-button-action="" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>
      </div>
      <div class="playnav-video-info">
        <a href="/watch?v=<?php echo htmlspecialchars($video['rid']); ?>" class="playnav-item-title ellipsis" onclick="playnav.playVideo('uploads-all','0','XU7CSvd59wo');return false;" id="playnav-video-title-play-uploads-all-0-XU7CSvd59wo"><span dir="ltr"><?php echo htmlspecialchars($video['title']); ?></span></a>

        <div class="metadata">






              <span dir="ltr"><?php echo $__video_h->fetch_video_views($video['rid']); ?> views  -  <?php echo $__time_h->time_elapsed_string($video['publish']); ?></span>



        </div>

        <div style="display:none" id="playnav-video-play-uploads-all-0"></div>
      </div>
    </div>
  </div>
														<?php } ?>
  <div id="uploads-all-cb" class="cb"></div>
    <div class="spacer">&nbsp;</div>

      <div class="scrollbox-separator">
    <div class="outer-box-bg-as-border"></div>
  </div>


    <input type="hidden" id="playnav-playlist-favorites-count" value="0">
      <div class="playnav-playlist-header">
      <a href="javascript:;" style="text-decoration:none" onclick="playnav.selectTab('favorites')" class="title title-text-color">
      <span id="playnav-playlist-favorites-all-title" class="title">Favorites</span>
        <span dir="ltr">(0)</span>
      </a>

    
  </div>

    
  <div id="favorites-all-cb" class="cb"></div>
    <div class="playnav-play-column-all">
        <div class="playnav-more"><a class="channel-cmd" href="javascript:;" onclick="playnav.selectTab('favorites');">see all</a></div>

      
    </div>
    <div class="spacer">&nbsp;</div>

      <div class="scrollbox-separator">
    <div class="outer-box-bg-as-border"></div>
  </div>



          </div>
        </div>
      </div>
    </div>
  </div>



        </div>
    </div>
  </div>
  <div id="playnav-play-loading" class="loading">
      <div class="cover outer-box-bg-color"></div>
  <div class="image-holder">
    <div class="image-holder-middle">
      <div class="image-holder-inner">
        <img src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/icn_loading_animated-vflff1Mjj.gif" alt="Loading...">
      </div>
    </div>
  </div>

  </div>

      <script src="https://web.archive.org/web/20110514165523js_/http://www.googletagservices.com/tag/static/google_services.js"></script>
    <script>
      (function() {
        if (!window.googletag) {
          return;
        }
        var gutSlot = googletag.defineSlot("/4061/com.youtube/default", [[300, 250], [300, 60]], 'yt-gut-content');
        gutSlot.set('ad_type', 'flash');
        gutSlot.addService(googletag.companionAds());
        googletag.enableServices();

        yt.setConfig('gut_slot', gutSlot);
        yt.setConfig('yt_gut_invideo_size', gutSlot.getSizes()[0]);
        yt.setConfig('yt_gut_instream_size', gutSlot.getSizes()[1]);
      })();
    </script><script type="text/javascript" src="https://web.archive.org/web/20110514165523js_/http://pagead2.googlesyndication.com/pagead/show_companion_ad.js"></script>



        </div>
        <div id="playnav-gridview" class="" style="display: none;">
            <div id="playnav-grid-panel">
    <div id="playnav-grid-content">
    </div>
  </div>
  <div id="playnav-grid-loading" class="loading">
      <div class="cover outer-box-bg-color"></div>
  <div class="image-holder">
    <div class="image-holder-middle">
      <div class="image-holder-inner">
        <img src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/icn_loading_animated-vflff1Mjj.gif" alt="Loading...">
      </div>
    </div>
  </div>

  </div>

        </div>
      </div>
  </div>
  <div style="display: none">
      <div id="playnav-spinny-graphic">
    <img src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/icn_loading_animated-vflff1Mjj.gif" alt="Loading..." style="padding:30px 280px">
  </div>
  <div id="playnav-centered-spinny-graphic">
    <table><tbody><tr><td style="vertical-align:top; text-align: center">
      <img src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/icn_loading_animated-vflff1Mjj.gif" alt="Loading..." style="padding:30px 300px">
    </td></tr></tbody></table>
  </div>

  </div>
  <div style="display: none" id="playnav-debug-log">---</div>



      <div class="outer-box" id="main-channel-content" style="z-index: 0">
      <div class="left-column" id="main-channel-left">
                <div class="inner-box">
    <div style="float:left;padding:0 4px 4px 0" class="link-as-border-color">
        <div class="user-thumb-xlarge link-as-border-color"><div>
<a href="/user/<?php echo htmlspecialchars($_user['username']); ?>">
    <img id="" src="/dynamic/pfp/<?php echo htmlspecialchars($_user['pfp']); ?>" alt="Channel picture">
</a>
  </div></div>

    </div>
    <div style="float:left;width:170px">
      <div class="box-title title-text-color" title="<?php echo htmlspecialchars($_user['username']); ?>" style="float:none;padding-left:4px;margin-top:-2px;width:170px;overflow:hidden;font-size:135%">
        <?php if($_user['title'])	{	?> <?php echo htmlspecialchars($_user['title']); ?> <?php } else {	?><?php echo htmlspecialchars($_user['username']); ?> <?php	}	?><?php if($__user_h->if_partner($_user['username'])) { ?><img style="width: 29px;vertical-align: middle;" title="This user is a partner!" src="/yt/imgbin/RenderedImage.png"><?php } ?><?php if($_user['username'] == "neontflame") { ?><img style="width: 29px;vertical-align: middle;" title="This user is very cool" src="/awesom_face.png"><?php } ?>
      </div>
          <div style="whitespace:no-wrap;position:relative;width:170px;">
    <div>
        
  
    
  
  
  
  



  <span data-subscription-type="user" data-subscription-xsrf="" data-subscription-username="<?php echo htmlspecialchars($_user['username']); ?>" data-subscription-menu-type="button" class="subscription-container" data-subscription-feature="channel">
     

    

  
  
<form action="/get/subscribe?n=<?php echo $_GET['n'] ?>">
  <button name="n" value="<?php echo $_GET['n'] ?>" type="submit" class="subscribe-button yt-uix-button yt-uix-button-urgent yt-uix-tooltip"title="Click to be notified of new videos from this channel" ><span class="yt-uix-button-content">Subscribe</span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
</form>

      <span class="subscription-subscribed-container hid"><span class="yt-alert yt-alert-success yt-alert-small yt-alert-naked yt-rounded"><img src="/dynamic/pfp/<?php echo htmlspecialchars($_user['pfp']); ?>" class="icon master-sprite" alt="Alert icon"><span class="yt-alert-content">Subscribed</span></span>
  
  
  

  

  <button type="button" class="subscription-options-button yt-uix-button yt-uix-button-empty" onclick=";return false;" data-button-menu-id="edit-subscription-menu-7431994" data-button-action="yt.www.subscriptions.button.toggleMenu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
    <div id="edit-subscription-menu-7431994" class="subscription-menu subscription-menu-button hid">
    <span class="subscription-menu-loader">Loading...</span>
  </div>

</span>
  </span>

      <div class="cb"></div>
    </div>
    <div style="padding:4px">
        <span id="aProfileAddFriend" class="nowrap"><a href="#" onclick="alert("Friends are not finished yet");">Add as Friend</a>
        &nbsp;|&nbsp;</span>
      <span class="nowrap">
          <a id="aProfileBlockUser" href="#" onclick="alert("soon");">Block User</a>
      &nbsp;|&nbsp;</span>
      <span class="nowrap">
        <a id="aProfileSendMsg" href="https://betatube.net/inbox/compose?to=<?php echo htmlspecialchars($_user['username']); ?>">Send Message</a>
      </span>
    </div>
  </div>

    </div>
    <div id="position-edit-subscription-in-channel">
    </div>
    <div class="cb"></div>
  </div>

  <div class="inner-box" id="user_profile">
    
    <div class="box-title title-text-color">
Profile
    </div>

    <div class="box-editor">
    </div>
    <div class="cb"></div>

  <div id="user_profile-body">

    <div id="user_profile-messages" class="hid"></div>

      <div class="edit_info spacer">&nbsp;</div>
  <div class="profile_info vcard">

   <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Name:</div>
      <div class="profile-info-value" id="profile_show_name"><?php echo htmlspecialchars($_user['username']); ?></div>
    <div class="cb"></div>
  </div>
  <?php if(!empty($_user['website'])) { ?>
    <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Website:</div>
      <div class="profile-info-value" id="profile_show_website"><a href="<?php echo addhttp(htmlspecialchars($_user['website'])); ?>"><?php echo htmlspecialchars($_user['website']); ?></a></div>
    <div class="cb"></div>
  </div>
 <?php } ?>

        <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Total Upload Views:</div>
      <div class="profile-info-value" id="profile_show_total_video_views"><?php echo $_user['views']; ?></div>
    <div class="cb"></div>
  </div>

    <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Joined:</div>
      <div class="profile-info-value" id="profile_show_member_since"><?php echo date("M d, Y", strtotime($_user['created'])); ?></div>
    <div class="cb"></div>
  </div>

        <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Last Visit Date:</div>
      <div class="profile-info-value" id="profile_show_last_login"><?php echo $__time_h->time_elapsed_string($_user['lastlogin']); ?></div>
    <div class="cb"></div>
  </div>


        <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Subscribers:</div>
      <div class="profile-info-value" id="profile_show_subscriber_count"><?php echo $_user['subscribers']; ?></div>
    <div class="cb"></div>
  </div>


  
  
        <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Country:</div>
      <div class="profile-info-value" id="profile_show_country"><?php echo htmlspecialchars($_user['country']); ?></div>
    <div class="cb"></div>
  </div>


  
  
  
  
  
  
  
  

  </div>


  

  </div>

  

  <div class="cb"></div>

  </div>


                    <?php 
                            require($_SERVER['DOCUMENT_ROOT'] . "/c20/" . clean($_user['20lefttop']) . ".php");
                    ?>


      </div>
      <div class="right-column" id="main-channel-right">
                    <?php 
                            require($_SERVER['DOCUMENT_ROOT'] . "/c20/" . clean($_user['20righttop']) . "_right.php");
                    ?>
                    <?php 
                            require($_SERVER['DOCUMENT_ROOT'] . "/c20/" . clean($_user['20rightlow']) . "_right.php");
                    ?>



      </div>
      <div class="cb"></div>
      </div>




  </div>
</div>





<script type="text/javascript">
window.boxes = {"user_playlist_navigator" : {'name' : "user_playlist_navigator",'x_position' : 1,'y_position' : -2,'palette' : "default"},"user_profile" : {'name' : "user_profile",'x_position' : 0,'y_position' : 0,'palette' : "default"},"user_recent_activity" : {'name' : "user_recent_activity",'x_position' : 0,'y_position' : 16,'palette' : "default"},"user_subscriptions" : {'name' : "user_subscriptions",'x_position' : 0,'y_position' : 36,'palette' : "default"},"user_subscribers" : {'name' : "user_subscribers",'x_position' : 1,'y_position' : 39,'palette' : "default"},"user_friends" : {'name' : "user_friends",'x_position' : 1,'y_position' : 42,'palette' : "default"},"user_comments" : {'name' : "user_comments",'x_position' : 1,'y_position' : 48,'palette' : "default"}};  function fix_background_height() {
    var body = _gel('channel-body');
    var browser_height = window.innerHeight || document.documentElement.clientHeight;
    if (body.offsetHeight < browser_height) {
      body.style.height = (browser_height - _gel('masthead').offsetHeight) + 'px';
    }
  }
  yt.pubsub.subscribe('init', fix_background_height);
  window.onresize = fix_background_height;
  function maybe_revert() {
    if (confirm("Are you sure you wish to continue?")) {
      _gel('revert_migration').submit();
    }
  }

  yt.pubsub.subscribe(yt.history.NotificationType.NAVIGATE,
    playnav.handleLocationHashUpdate);
  yt.history.enable();

  playnav.initDom();
</script>

  <div class="hid">
    <div id="success-template" class="yt-alert yt-alert-success yt-rounded "><img src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"><div class="yt-alert-content"></div><button type="button" onclick="_hidediv(this.parentNode);" class="close master-sprite">close</button></div>
    <div id="error-template" class="yt-alert yt-alert-error yt-rounded "><img src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"><div class="yt-alert-content"></div><button type="button" onclick="_hidediv(this.parentNode);" class="close master-sprite">close</button></div>
    <div id="warn-template" class="yt-alert yt-alert-warn yt-rounded "><img src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"><div class="yt-alert-content"></div><button type="button" onclick="_hidediv(this.parentNode);" class="close master-sprite">close</button></div>
    <div id="info-template" class="yt-alert yt-alert-info yt-rounded "><img src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"><div class="yt-alert-content"></div><button type="button" onclick="_hidediv(this.parentNode);" class="close master-sprite">close</button></div>
    <div id="status-template" class="yt-alert yt-alert-status yt-rounded "><img src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"><div class="yt-alert-content"></div><button type="button" onclick="_hidediv(this.parentNode);" class="close master-sprite">close</button></div>
  </div>


<div class="cb">

      
    </div>
  </div>
  <!-- end pagemiddle -->
  <!-- begin pagebottom -->
<?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/2011_footer.php"); ?>
    



  <div id="playlist-bar" class="hid passive editable empty" data-video-url="/watch?v=&amp;feature=BFql&amp;playnext=1&amp;list=QL" data-list-id="" data-list-type="QL"><iframe id="playlist-bar-mask" frameborder="0" src="javascript:&quot;&quot;" allow="autoplay 'self'; fullscreen 'self'"></iframe>
    <div id="playlist-bar-bar-container">
      <div id="playlist-bar-bar">
        <div id="playlist-bar-notifications" style="display: none;" class="yt-alert yt-alert-success yt-alert-small yt-alert-naked yt-rounded "><img src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"><div class="yt-alert-content"></div></div>
<span id="playlist-bar-info"><span class="playlist-bar-active yt-uix-button-group"><button onclick=";return false;" title="Previous video" type="button" id="playlist-bar-prev-button" class="yt-uix-tooltip yt-uix-tooltip-masked start start-edge yt-uix-button yt-uix-tooltip yt-uix-button-empty" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-prev" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked end yt-uix-button yt-uix-button-empty" onclick=";return false;" id="playlist-bar-next-button" role="button" aria-pressed="false" data-tooltip="Next video"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-next" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="playlist-bar-passive"><button onclick=";return false;" title="Play videos" type="button" id="playlist-bar-play-button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-tooltip yt-uix-button-empty" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-play" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span id="playlist-bar-title">    <span>
Unsaved Playlist (<span class="item-count">0</span>)
    </span>
</span><button type="button" class="yt-uix-button-masked yt-uix-button-reverse yt-uix-button" onclick=";return false;" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-content">Options</span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><div class="yt-uix-button-menu" style="display: none;">  <div id="playlist-bar-options-menu" class="passive">

    <div id="playlist-bar-extras-menu">
        <ul>
      <li><span class="yt-uix-button-menu-item" data-action="clear">
Clear all videos from this list
      </span></li>
  </ul>

    </div>

    <ul>
      <li><span class="yt-uix-button-menu-item" onclick="window.location.href='https://web.archive.org/web/20110731000924/http://www.google.com/support/youtube/bin/answer.py?answer=146749'">Learn more</span></li>
    </ul>
  </div>
</div></button></span>
        <a id="playlist-bar-lists-back" href="#">
Return to active list
        </a>

<span id="playlist-bar-controls" class="yt-uix-button-group"><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked start playlist-bar-active yt-uix-button yt-uix-button-toggle yt-uix-button-empty" onclick=";return false;" id="playlist-bar-autoplay-button" role="button" aria-pressed="false" data-tooltip="Turn autoplay on"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-autoplay" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked start playlist-bar-active yt-uix-button yt-uix-button-toggle yt-uix-button-empty" onclick=";return false;" id="playlist-bar-shuffle-button" role="button" aria-pressed="false" data-tooltip="Turn shuffle on"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-shuffle" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked end end-edge yt-uix-button yt-uix-button-empty" onclick=";return false;" id="playlist-bar-toggle-button" role="button" aria-pressed="false" data-tooltip="Hide playlist"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-toggle" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span>      </div>
    </div>

<div id="playlist-bar-tray-container"><div id="playlist-bar-tray" class="yt-uix-slider yt-uix-slider-fluid"><button class="yt-uix-button playlist-bar-tray-button yt-uix-slider-prev" onclick="return false;"><img class="yt-uix-slider-prev-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Previous"></button><button class="yt-uix-button playlist-bar-tray-button yt-uix-slider-next" onclick="return false;"><img class="yt-uix-slider-next-arrow" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Next"></button><div class="yt-uix-slider-body"><div id="playlist-bar-tray-content" class="yt-uix-slider-slide"><ol class="video-list"></ol><ol id="playlist-bar-help"><li class="empty playlist-bar-help-message">Your queue is empty. Add videos to your queue using this button: <img src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="addto-button-help"><br> or <a href="https://web.archive.org/web/20110731000924/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;hl=en_US&amp;ltmpl=sso">sign in</a> to load a different list.</li></ol></div><div class="yt-uix-slider-shade-left"></div><div class="yt-uix-slider-shade-right"></div></div></div><div id="playlist-bar-save"></div><div id="playlist-bar-lists" class="dark-lolz"></div><div id="playlist-bar-loading"><img src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Loading..."><span id="playlist-bar-loading-message">Loading...</span><span id="playlist-bar-saving-message" class="hid">Saving...</span></div><div id="playlist-bar-template" style="display: none;" data-video-thumb-url="//i4.ytimg.com/vi/__video_encrypted_id__/default.jpg"><!--<li class="playlist-bar-item yt-uix-slider-slide-unit __classes__" data-video-id="__video_encrypted_id__"><a href="__video_url__" title="__video_title__"><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="__video_title__" data-thumb-manual="true" data-thumb="__video_thumb_url__" ></span></span><span class="screen"></span><span class="count"><strong>__list_position__</strong></span><span class="play"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif"></span><span class="yt-uix-button delete"><img class="yt-uix-button-icon-playlist-bar-delete" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Delete"></span></a><span dir="ltr" class="title yt-uix-slider-title"><span>__video_title__<span class="uploader">by __video_username__</span></span></span></li>--></div><div id="playlist-bar-next-up-template" style="display: none;"><!--<div class="playlist-bar-next-thumb"><span class="video-thumb ux-thumb-64 "><span class="clip"><img src="//i4.ytimg.com/vi/__video_encrypted_id__/default.jpg" alt="Thumbnail" ></span></span></div>--></div></div>  </div>


    <div id="shared-addto-menu" style="display: none;">
      <form method="post" action="/web/20110731000924/http://www.youtube.com/addto_ajax">
    <ul class="addto-menu">
      



    

    <li>
      <span class="yt-uix-button-menu-item " onclick="">
          <a href="#" onclick="yt.www.addtomenu.signInWithAddto(this);return false">Sign in</a> to add this to a playlist

      </span>
    </li>

      <li class="yt-uix-button-menu-item addto-item addto-create-container" style="display: none;">
        <input type="text" class="addto-create-name" value="" size="25">
      </li>
      
    </ul>
  <input name="session_token" type="hidden" value="e-TYRlMVyrKvXPQ1sbCne4N3Rnd8MTMxMjE1NzM2NEAxMzEyMDcwOTY0"></form>

  </div>



  <!-- end pagebottom -->

  </div>
  <!-- end page -->
      
      <script>
      yt.setConfig('TIMING_ACTION', 'index');
    </script>



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
    'DRAGDROP_BINARY_URL': "\/\/web.archive.org\/web\/20110731000924\/http:\/\/s.ytimg.com\/yt\/jsbin\/www-dragdrop-vfltWcOgk.js",
    'PLAYLIST_BAR_PLAYING_INDEX': -1,
    'LOAD_WATCH_LATER_LIST': null  });

    yt.net.ajax.setToken("addto_ajax_logged_out", "_8KVkr2lDFVHsG4Sm41coNP0Q8p8MEAxMzEyMDcwOTY0");

    yt.pubsub.subscribe('init', yt.www.lists.init);





        yt.www.thumbnaildelayload.init();



      yt.events.listen(_gel('masthead-search-term'), 'focus', yt.www.home.ads.workaroundReset);


      if (_gel('masthead-search')) {
          yt.setTimeout(function() {
            window.yt.www.suggest.install(_gel('masthead-search'),
                _gel('masthead-search')['search_query'],
                'en',
                'close',
                '',
                'Web search',
                -1,
                null);
          }, 100);
      }

  </script>

  


  


<!--
playback timings (ms):
  exclusion.robots: 168.409 (7)
  exclusion.robots.policy: 168.308 (7)
  xauthn.identify: 100.204
  xauthn.chkprivs: 66.528
  RedisCDXSource: 177.304 (7)
  esindex: 0.07 (7)
  LoadShardBlock: 962.204 (24)
  PetaboxLoader3.datanode: 804.363 (25)
  CDXLines.iter: 474.185 (12)
  load_resource: 148.501
  PetaboxLoader3.resolve: 81.023
--><table id="completeTable" cellpadding="0" cellspacing="0" class="yt-suggest-table" style="visibility: hidden; left: 479px; top: 71px; width: 425px;"></table><iframe id="yt-suggest-iframe" allow="autoplay 'self'; fullscreen 'self'" style="left: 479px; top: 71px; width: 425px; height: 0px; visibility: hidden;"></iframe></body></html>
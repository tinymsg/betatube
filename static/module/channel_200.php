<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/page_builder.php"); ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__page_b = new page_builder("templates/m"); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php ob_start(); ?>
<?php
	$__server->page_embeds->page_title = "Betatube";
	$__server->page_embeds->page_description = "Betatube is a website that exists";
	$__server->page_embeds->page_image = "/yt/imgbin/full-size-logo.png";
	$__server->page_embeds->page_url = "http://betatube.net/";
?>
<html lang="en" dir="ltr"><!-- machid: sWkFSZzctYUFHdmlXZnNlSVNYTXpGT1huTEpYS3hDeFlnWlVyVG5MNlkxQ0MtdHJQQ2VSZWdB --><head><script src="//archive.org/includes/analytics.js?v=cf34f82" type="text/javascript"></script>
<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app222.us.archive.org';v.server_ms=703;archive_analytics.send_pageview({});});</script>
<script type="text/javascript" src="/_static/js/bundle-playback.js?v=poeZ53Bz" charset="utf-8"></script>
<script type="text/javascript" src="/_static/js/wombat.js?v=UHAOicsW" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=fantwOh2">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
        <script>
var yt = yt || {};yt.timing = yt.timing || {};yt.timing.tick = function(label, opt_time) {var timer = yt.timing['timer'] || {};if(opt_time) {timer[label] = opt_time;}else {timer[label] = new Date().getTime();}yt.timing['timer'] = timer;};yt.timing.info = function(label, value) {var info_args = yt.timing['info_args'] || {};info_args[label] = value;yt.timing['info_args'] = info_args;};yt.timing.info('e', '903945,904719,910209');yt.timing.tick('start');yt.timing.info('li','0');try {yt.timing['srt'] = window.gtbExternal && window.gtbExternal.pageT() ||window.external && window.external.pageT;} catch(e) {}if (window.chrome && window.chrome.csi) {yt.timing['srt'] = Math.floor(window.chrome.csi().pageT);}if (window.msPerformance && window.msPerformance.timing) {yt.timing['srt'] = window.msPerformance.timing.responseStart - window.msPerformance.timing.navigationStart;}    </script>


    <title>
      BetaTube
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


</head>
<body id="" class="date-20110730 en_US ltr" dir="ltr">
  <form name="logoutForm" method="POST" action="/logout">
    <input type="hidden" name="action_logout" value="1">
  <input name="session_token" type="hidden" value="e-TYRlMVyrKvXPQ1sbCne4N3Rnd8MTMxMjE1NzM2NEAxMzEyMDcwOTY0"></form>
      <div id="ticker" class="ytg-base marketing">
    <div class="ytg-wide">
      <button onclick="yt.net.cookies.set('HideTicker', 1, 604800); _hidediv('ticker')">
Close
        <img alt="Close" onclick="yt.net.cookies.set('HideTicker', 1, 604800); _hidediv('ticker')" src="//web.archive.org/web/20110731000924im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
      </button>

                  <strong>WARNING: 2011 is in beta and is not finished.</strong> 
    </div>
  </div>

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

<div id="channel-body" class="jsloaded">
  <div id="channel-base-div">

    <div class="inner-box hid" id="global-messages">
    </div>

          <div id="user_playlist_navigator" class="outer-box yt-rounded">
      <div id="playnav-channel-header" class="inner-box-bg-color">
      <div id="playnav-navbar-toggle">
              <a title="Switch to Grid View" href="javascript:;" onclick="playnav.selectView('grid');" id="gridview-icon" class="view-button">
    <div class="contents">
      <div class="a yt xl"></div>
      <div class="a yt xc"></div>
      <div class="a yt xr"></div>
      <div class="a yc xl"></div>
      <div class="a yc xc"></div>
      <div class="a yc xr"></div>
      <div class="a yb xl"></div>
      <div class="a yb xc"></div>
      <div class="a yb xr"></div>
    </div>
  </a>

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

    <img id="" src="https://web.archive.org/web/20110514165523im_/http://i1.ytimg.com/vi/XU7CSvd59wo/default.jpg" alt="">

  </div></div>

        </div>

        <div class="channel-title-container">
            <div class="channel-title outer-box-color" style="display:none" id="channel_title"></div>
            <div class="channel-title outer-box-color" style="padding:9px 0 0 0" id="channel_base_title">kiwi112392's Channel</div>
        </div>

        <div id="subscribe-buttons">
              
  
    
  
  
  
  

    

    

  <span data-subscription-type="user" data-subscription-xsrf="" data-subscription-expandable-id="subscription-button-module-menu" data-subscription-username="kiwi112392" data-subscription-channels-container="subscription-recommended-channels" data-subscription-menu-type="expander" class="subscription-container" data-subscription-feature="channel">
     

    
    

  
  

  <button type="button" class="subscribe-button yt-uix-button yt-uix-button-urgent yt-uix-tooltip" onclick=";return false;" title="Click to be notified of new videos from this channel" data-loaded="true" data-button-action="yt.www.subscriptions.button.toggleMenu" role="button" aria-pressed="false"><span class="yt-uix-button-content">Subscribe</span></button>

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

              <td>
  <a class="navbar-tab inner-box-link-color" id="playnav-navbar-tab-uploads" href="javascript:;" onclick="playnav.selectTab('uploads');yt.analytics.trackEvent('menu', 'uploads');">Uploads</a>
  </td>

              <td>
  <a class="navbar-tab inner-box-link-color" id="playnav-navbar-tab-favorites" href="javascript:;" onclick="playnav.selectTab('favorites');yt.analytics.trackEvent('menu', 'favorites');">Favorites</a>
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
          <div id="playnav-player" class="playnav-player-container" style="visibility: visible; left: 0px;"><embed width="640" id="movie_player" height="390" type="application/x-shockwave-flash" src="https://web.archive.org/web/20110514165523/http://s.ytimg.com/yt/swfbin/watch_as3-vflRkb4Mi.swf" allowscriptaccess="always" allowfullscreen="true" bgcolor="#000000" flashvars="el=profilepage&amp;showinfo=0&amp;allow_embed=1&amp;keywords=snow%2Cfunny&amp;fexp=904411%2C907509%2C901601&amp;allow_ratings=1&amp;lpbf=https%3A%2F%2Fweb.archive.org%2Fweb%2F20110514165523%2Fhttp%3A%2F%2Fs.ytimg.com%2Fyt%2Fswf%2Flpbf-vfl1cnurf.swf&amp;lpbb=https%3A%2F%2Fweb.archive.org%2Fweb%2F20110514165523%2Fhttp%3A%2F%2Fs.ytimg.com%2Fyt%2Fswf%2Flpbb-vflyZAWjT.swf&amp;ps=default&amp;fmt_list=18%2F640x360%2F9%2F0%2F115%2C5%2F320x240%2F7%2F0%2F0&amp;author=kiwi112392&amp;muted=0&amp;track_embed=0&amp;length_seconds=145&amp;enablejsapi=1&amp;rel=0&amp;has_cc=false&amp;tmi=1&amp;ftoken&amp;status=ok&amp;fs=1&amp;watermark=https%3A%2F%2Fweb.archive.org%2Fweb%2F20110514165523%2Fhttp%3A%2F%2Fs.ytimg.com%2Fyt%2Fswf%2Flogo-vfl_bP6ud.swf%2Chttp%3A%2F%2Fs.ytimg.com%2Fyt%2Fswf%2Fhdlogo-vfloR6wva.swf&amp;timestamp=1305392123&amp;plid=AASjP0nRUX9WmyV6&amp;view_count=4638&amp;fmt_url_map=18%7Chttp%3A%2F%2Fv17.lscache1.c.youtube.com%2Fvideoplayback%3Fsparams%3Did%252Cexpire%252Cip%252Cipbits%252Citag%252Cratebypass%26fexp%3D904411%252C907509%252C901601%26itag%3D18%26ipbits%3D8%26signature%3D15D90312C680BA3F1AC86124A9482A637E32406E.11D33D1C70B2A716B11794E21981E33CABADFADF%26sver%3D3%26ratebypass%3Dyes%26expire%3D1305414000%26key%3Dyt1%26ip%3D207.0.0.0%26id%3D5d4ec24af779f70a%2C5%7Chttp%3A%2F%2Fv9.lscache8.c.youtube.com%2Fvideoplayback%3Fsparams%3Did%252Cexpire%252Cip%252Cipbits%252Citag%252Cratebypass%26fexp%3D904411%252C907509%252C901601%26itag%3D5%26ipbits%3D8%26signature%3D92FC80E0D8B2B5258FF125F4A9C191F363FEA51B.4E2F42912A7E63C43D7E57424B6788592B7D4A6E%26sver%3D3%26ratebypass%3Dyes%26expire%3D1305414000%26key%3Dyt1%26ip%3D207.0.0.0%26id%3D5d4ec24af779f70a&amp;fmt_map=18%2F640x360%2F9%2F0%2F115%2C5%2F320x240%2F7%2F0%2F0&amp;hl=en_US&amp;eurl=https%3A%2F%2Fweb.archive.org%2Fweb%2F20110514165523%2Fhttp%3A%2F%2Fwww.youtube.com%2Fuser%2Fkiwi112392&amp;iurl=https%3A%2F%2Fweb.archive.org%2Fweb%2F20110514165523%2Fhttp%3A%2F%2Fi1.ytimg.com%2Fvi%2FXU7CSvd59wo%2Fhqdefault.jpg&amp;endscreen_module=https%3A%2F%2Fweb.archive.org%2Fweb%2F20110514165523%2Fhttp%3A%2F%2Fs.ytimg.com%2Fyt%2Fswfbin%2Fendscreen-vflq4r1-P.swf&amp;fmt_stream_map=18%7Chttp%3A%2F%2Fv17.lscache1.c.youtube.com%2Fvideoplayback%3Fsparams%3Did%252Cexpire%252Cip%252Cipbits%252Citag%252Cratebypass%26fexp%3D904411%252C907509%252C901601%26itag%3D18%26ipbits%3D8%26signature%3D15D90312C680BA3F1AC86124A9482A637E32406E.11D33D1C70B2A716B11794E21981E33CABADFADF%26sver%3D3%26ratebypass%3Dyes%26expire%3D1305414000%26key%3Dyt1%26ip%3D207.0.0.0%26id%3D5d4ec24af779f70a%7C%7Ctc.v17.cache1.c.youtube.com%2C5%7Chttp%3A%2F%2Fv9.lscache8.c.youtube.com%2Fvideoplayback%3Fsparams%3Did%252Cexpire%252Cip%252Cipbits%252Citag%252Cratebypass%26fexp%3D904411%252C907509%252C901601%26itag%3D5%26ipbits%3D8%26signature%3D92FC80E0D8B2B5258FF125F4A9C191F363FEA51B.4E2F42912A7E63C43D7E57424B6788592B7D4A6E%26sver%3D3%26ratebypass%3Dyes%26expire%3D1305414000%26key%3Dyt1%26ip%3D207.0.0.0%26id%3D5d4ec24af779f70a%7C%7Ctc.v9.cache8.c.youtube.com&amp;ss=1&amp;avg_rating=2.02127659574&amp;leanback_module=https%3A%2F%2Fweb.archive.org%2Fweb%2F20110514165523%2Fhttp%3A%2F%2Fs.ytimg.com%2Fyt%2Fswfbin%2Fleanback_module-vflYVCWFa.swf&amp;sk=uWxiyehK3L4UX1-WsOvibCpKkJQqoxOWC&amp;token=vjVQa1PpcFOQLIfHelz9IySKJz0GMljTmsCvngGPRrw%3D&amp;thumbnail_url=https%3A%2F%2Fweb.archive.org%2Fweb%2F20110514165523%2Fhttp%3A%2F%2Fi1.ytimg.com%2Fvi%2FXU7CSvd59wo%2Fdefault.jpg&amp;video_id=XU7CSvd59wo&amp;vq=auto&amp;showsearch=0&amp;autoplay=0&amp;jsapicallback=onChannelPlayerReady"></div>

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
    <a href="/web/20110514165523mp_/http://www.youtube.com/watch?v=XU7CSvd59wo&amp;feature=channel_video_title">mee</a>
  </div>

  <div id="playnav-curvideo-info-line">
From:
    <span id="playnav-curvideo-channel-name">
      <a href="/web/20110514165523mp_/http://www.youtube.com/user/kiwi112392">kiwi112392</a>
    </span>&nbsp;|
    <span dir="ltr">Feb 15, 2007</span>
      &nbsp;|
      <span id="playnav-curvideo-view-count">
4,638 views
      </span>
  </div>

  <div class="cb"></div>

    <div id="channel-like-result" class="hid">
      <div id="watch-actions-area" class="yt-rounded">&nbsp;</div>
    </div>
    <div id="channel-like-loading" class="hid">Loading...</div>
    <div class="cb"></div>

  <div id="playnav-curvideo-description-container">
    <div id="playnav-curvideo-description" dir="ltr">blajd
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

  <a href="/web/20110514165523mp_/http://www.youtube.com/watch?v=XU7CSvd59wo" id="playnav-watch-link" onclick="playnav.goToWatchPage()">View comments, related videos, and more</a>

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
  </div>

            </div>
          </div>
            <div id="playnav-play-panel">
    <div id="watch-longform-ad" style="display:none;">
      <div id="watch-longform-text">
Advertisement
      </div>

      <div id="watch-longform-ad-placeholder"><img src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" height="60" width="300"></div>
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
      <a href="javascript:;" style="text-decoration:none" onclick="playnav.selectTab('uploads')" class="title title-text-color">
      <span id="playnav-playlist-uploads-all-title" class="title">Uploads</span>
        <span dir="ltr">(2)</span>
      </a>

    
  </div>

    
      



  <div id="playnav-video-play-uploads-all-0-XU7CSvd59wo" class="playnav-item playnav-video">
    <div style="display:none" class="encryptedVideoId">XU7CSvd59wo</div>

    <div id="playnav-video-play-uploads-all-0-XU7CSvd59wo-selector" class="selector"></div>
    <div class="content">
      <div class="playnav-video-thumb">
          






    

<a href="/web/20110514165523/http://youtube.com/watch?v=XU7CSvd59wo" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110514165523im_/http://i1.ytimg.com/vi/XU7CSvd59wo/default.jpg" alt="Thumbnail" class="" onclick="playnav.playVideo('uploads-all','0','XU7CSvd59wo');return false;" title="mee"></span></span><span class="video-time">2:25</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="XU7CSvd59wo" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" data-button-action="" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" data-button-action="" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>
      </div>
      <div class="playnav-video-info">
        <a href="/web/20110514165523/http://youtube.com/watch?v=XU7CSvd59wo" class="playnav-item-title ellipsis" onclick="playnav.playVideo('uploads-all','0','XU7CSvd59wo');return false;" id="playnav-video-title-play-uploads-all-0-XU7CSvd59wo"><span dir="ltr">mee</span></a>

        <div class="metadata">






              <span dir="ltr">4,638 views  -  4 years ago</span>



        </div>

        <div style="display:none" id="playnav-video-play-uploads-all-0">XU7CSvd59wo</div>
      </div>
    </div>
  </div>

      



  <div id="playnav-video-play-uploads-all-1-KCxz3xEIio4" class="playnav-item playnav-video">
    <div style="display:none" class="encryptedVideoId">KCxz3xEIio4</div>

    <div id="playnav-video-play-uploads-all-1-KCxz3xEIio4-selector" class="selector"></div>
    <div class="content">
      <div class="playnav-video-thumb">
          






    

<a href="/web/20110514165523/http://youtube.com/watch?v=KCxz3xEIio4" class="ux-thumb-wrap contains-addto"><span class="video-thumb ux-thumb-96 "><span class="clip"><img src="//web.archive.org/web/20110514165523im_/http://i4.ytimg.com/vi/KCxz3xEIio4/default.jpg" alt="Thumbnail" class="" onclick="playnav.playVideo('uploads-all','1','KCxz3xEIio4');return false;" title="burt"></span></span><span class="video-time">1:14</span><span dir="ltr" class="yt-uix-button-group addto-container short video-actions" data-video-ids="KCxz3xEIio4" data-feature="thumbnail"><button type="button" class="start  addto-button-plus-hide-arrow yt-uix-button yt-uix-button-short yt-uix-tooltip" onclick=";return false;" title="Add to Watch Later
" data-button-menu-id="shared-addto-menu" data-button-action="" role="button" aria-pressed="false"><img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-content"><span class="addto-label">Add to</span></span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button><button type="button" class="end  yt-uix-button yt-uix-button-short yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-button-menu-id="shared-addto-menu" data-button-action="" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span><span class="video-in-quicklist">Added to queue    </span></a>
      </div>
      <div class="playnav-video-info">
        <a href="/web/20110514165523/http://youtube.com/watch?v=KCxz3xEIio4" class="playnav-item-title ellipsis" onclick="playnav.playVideo('uploads-all','1','KCxz3xEIio4');return false;" id="playnav-video-title-play-uploads-all-1-KCxz3xEIio4"><span dir="ltr">burt</span></a>

        <div class="metadata">






              <span dir="ltr">991,931 views  -  4 years ago</span>



        </div>

        <div style="display:none" id="playnav-video-play-uploads-all-1">KCxz3xEIio4</div>
      </div>
    </div>
  </div>

  <div id="uploads-all-cb" class="cb"></div>
    <div class="playnav-play-column-all">
        <div class="playnav-more"><a class="channel-cmd" href="javascript:;" onclick="playnav.selectTab('uploads');">see all</a></div>

      
    </div>
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
<a href="/web/20110514165523/http://youtube.com/user/kiwi112392">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://i1.ytimg.com/vi/XU7CSvd59wo/default.jpg" alt="kiwi112392">
</a>
  </div></div>

    </div>
    <div style="float:left;width:170px">
      <div class="box-title title-text-color" title="kiwi112392" style="float:none;padding-left:4px;margin-top:-2px;width:170px;overflow:hidden;font-size:135%">
        kiwi112392
      </div>
          <div style="whitespace:no-wrap;position:relative;width:170px;">
    <div>
        
  
    
  
  
  
  



  <span data-subscription-type="user" data-subscription-xsrf="" data-subscription-username="kiwi112392" data-subscription-menu-type="button" class="subscription-container" data-subscription-feature="channel">
     

    

  
  

  <button type="button" class="subscribe-button yt-uix-button yt-uix-button-urgent yt-uix-tooltip" onclick=";return false;" title="Click to be notified of new videos from this channel" data-button-menu-id="subscription-menu-not-logged-in-505915" role="button" aria-pressed="false"><span class="yt-uix-button-content">Subscribe</span><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
    <div id="subscription-menu-not-logged-in-505915" class="subscription-menu-not-logged-in" style="display:none;">
        <strong><a href="https://web.archive.org/web/20110514165523/https://www.google.com/accounts/ServiceLogin?uilel=3&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252Fprofile%253Fuser%253Dkiwi112392&amp;hl=en_US<mpl=sso">Sign In</a> or <a href="/web/20110514165523/http://youtube.com/signup?next=%2Fprofile%3Fuser%3Dkiwi112392">Sign Up</a> now!
</strong>

    </div>

      <span class="subscription-subscribed-container hid"><span class="yt-alert yt-alert-success yt-alert-small yt-alert-naked yt-rounded"><img src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"><span class="yt-alert-content">Subscribed</span></span>
  
  
  

  

  <button type="button" class="subscription-options-button yt-uix-button yt-uix-button-empty" onclick=";return false;" data-button-menu-id="edit-subscription-menu-7431994" data-button-action="yt.www.subscriptions.button.toggleMenu" role="button" aria-pressed="false"><img class="yt-uix-button-arrow" src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
    <div id="edit-subscription-menu-7431994" class="subscription-menu subscription-menu-button hid">
    <span class="subscription-menu-loader">Loading...</span>
  </div>

</span>
  </span>

      <div class="cb"></div>
    </div>
    <div style="padding:4px">
        <span id="aProfileAddFriend" class="nowrap"><a href="#" onclick="add_friend('kiwi112392'); return false;">Add as Friend</a>
        &nbsp;|&nbsp;</span>
      <span class="nowrap">
          <a id="aProfileBlockUser" href="#" onclick="yt.www.watch.user.blockUserLink('1z4PNIVwfWo', '/user/kiwi112392');return false;">Block User</a>
      &nbsp;|&nbsp;</span>
      <span class="nowrap">
        <a id="aProfileSendMsg" href="/web/20110514165523/http://youtube.com/inbox?to_users=kiwi112392&amp;action_compose=1">Send Message</a>
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
    <div class="profile-info-label">Channel Views:</div>
      <div class="profile-info-value" id="profile_show_viewed_count">1,667,004</div>
    <div class="cb"></div>
  </div>


        <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Total Upload Views:</div>
      <div class="profile-info-value" id="profile_show_total_video_views">1,047,340</div>
    <div class="cb"></div>
  </div>




          <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Age:</div>
      <div class="profile-info-value" id="profile_show_age">25</div>
    <div class="cb"></div>
  </div>


    <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Joined:</div>
      <div class="profile-info-value" id="profile_show_member_since">Jan 13, 2007</div>
    <div class="cb"></div>
  </div>

        <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Last Visit Date:</div>
      <div class="profile-info-value" id="profile_show_last_login">1 year ago</div>
    <div class="cb"></div>
  </div>


        <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Subscribers:</div>
      <div class="profile-info-value" id="profile_show_subscriber_count">5,007</div>
    <div class="cb"></div>
  </div>


  
  
        <div class="show_info outer-box-bg-as-border">
    <div class="profile-info-label">Country:</div>
      <div class="profile-info-value" id="profile_show_country">United States</div>
    <div class="cb"></div>
  </div>


  
  
  
  
  
  
  
  

  </div>


  

  </div>

  

  <div class="cb"></div>

  </div>


            <div class="inner-box" id="user_recent_activity">

    <div style="zoom:1">
  <div class="box-title title-text-color">
      Recent Activity &nbsp;

  </div>
  <div class="box-editor">
    <div style="float:right">
    
    </div>
  </div>
  <div class="cb"></div>
  </div>



  <div id="user_recent_activity-messages" class="hid"></div>

  <div id="user_recent_activity-body">
      <div id="feed_success" style="display: none;">
Successfully removed.
  </div>

  <div id="feed_success_custom" style="display: none;">
  </div>

  <div id="feed_error" style="display: none;">
Sorry, an error occurred.
  </div>

  <div id="feed_error_custom" style="display: none;">
  </div>

  <div id="feed_loading" style="display: none; text-align: center;">
    <img src="//web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/icn_loading_animated-vflff1Mjj.gif">
  </div>

  <div id="feed_table">


        <div class="alignC" style="margin: 20px;">
There hasn't been any recent activity.
        </div>
  </div>


  </div>
  <div class="clear"></div>
  
</div>


      </div>
      <div class="right-column" id="main-channel-right">
            <div class="inner-box" id="user_subscribers">

    <div style="zoom:1">
  <div class="box-title title-text-color">
    Subscribers

        (<a href="/web/20110514165523/http://youtube.com/profile?user=kiwi112392&amp;view=subscribers" class="headersSmall" name="channel-box-item-count">5007</a>)
  </div>
  <div class="box-editor">
    <div style="float:right">
    
    </div>
  </div>
  <div class="cb"></div>
  </div>



  <div id="user_subscribers-messages" class="hid"></div>

  <div id="user_subscribers-body">
    

  <div style="zoom:1;margin: 0 -12px">
      <div class="user-peep" style="width:14.2%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="/web/20110514165523/http://youtube.com/user/timm795" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_image_link', 'kiwi112392 - timm795')" rel="followed-by">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="timm795">
</a>
  </div></div>

        <a href="/web/20110514165523/http://youtube.com/user/timm795" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_text_link', 'kiwi112392 - timm795')" title="timm795" rel="followed-by">timm795</a>

      </center></div>
      <div class="user-peep" style="width:14.2%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="/web/20110514165523/http://youtube.com/user/loreenaspigtails" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_image_link', 'kiwi112392 - loreenaspigtails')" rel="followed-by">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="loreenaspigtails">
</a>
  </div></div>

        <a href="/web/20110514165523/http://youtube.com/user/loreenaspigtails" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_text_link', 'kiwi112392 - loreenaspigtails')" title="loreenaspigtails" rel="followed-by">loreenasp...</a>

      </center></div>
      <div class="user-peep" style="width:14.2%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="/web/20110514165523/http://youtube.com/user/orhann051" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_image_link', 'kiwi112392 - orhann051')" rel="followed-by">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="orhann051">
</a>
  </div></div>

        <a href="/web/20110514165523/http://youtube.com/user/orhann051" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_text_link', 'kiwi112392 - orhann051')" title="orhann051" rel="followed-by">orhann051</a>

      </center></div>
      <div class="user-peep" style="width:14.2%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="/web/20110514165523/http://youtube.com/user/saasveldshorty" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_image_link', 'kiwi112392 - saasveldshorty')" rel="followed-by">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="saasveldshorty">
</a>
  </div></div>

        <a href="/web/20110514165523/http://youtube.com/user/saasveldshorty" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_text_link', 'kiwi112392 - saasveldshorty')" title="saasveldshorty" rel="followed-by">saasvelds...</a>

      </center></div>
      <div class="user-peep" style="width:14.2%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="/web/20110514165523/http://youtube.com/user/prasadkpl" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_image_link', 'kiwi112392 - prasadkpl')" rel="followed-by">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="prasadkpl">
</a>
  </div></div>

        <a href="/web/20110514165523/http://youtube.com/user/prasadkpl" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_text_link', 'kiwi112392 - prasadkpl')" title="prasadkpl" rel="followed-by">prasadkpl</a>

      </center></div>
      <div class="user-peep" style="width:14.2%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="/web/20110514165523/http://youtube.com/user/freddy9988" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_image_link', 'kiwi112392 - freddy9988')" rel="followed-by">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://i3.ytimg.com/vi/bOwoOozgFug/default.jpg" alt="freddy9988">
</a>
  </div></div>

        <a href="/web/20110514165523/http://youtube.com/user/freddy9988" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_text_link', 'kiwi112392 - freddy9988')" title="freddy9988" rel="followed-by">freddy9988</a>

      </center></div>
      <div class="user-peep" style="width:14.2%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="/web/20110514165523/http://youtube.com/user/mazzya" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_image_link', 'kiwi112392 - mazzya')" rel="followed-by">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="mazzya">
</a>
  </div></div>

        <a href="/web/20110514165523/http://youtube.com/user/mazzya" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_text_link', 'kiwi112392 - mazzya')" title="mazzya" rel="followed-by">mazzya</a>

      </center></div>
      <div class="user-peep" style="width:14.2%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="/web/20110514165523/http://youtube.com/user/kazukazu1961" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_image_link', 'kiwi112392 - kazukazu1961')" rel="followed-by">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="kazukazu1961">
</a>
  </div></div>

        <a href="/web/20110514165523/http://youtube.com/user/kazukazu1961" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_text_link', 'kiwi112392 - kazukazu1961')" title="kazukazu1961" rel="followed-by">kazukazu1961</a>

      </center></div>
      <div class="user-peep" style="width:14.2%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="/web/20110514165523/http://youtube.com/user/fantomas666" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_image_link', 'kiwi112392 - fantomas666')" rel="followed-by">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="fantomas666">
</a>
  </div></div>

        <a href="/web/20110514165523/http://youtube.com/user/fantomas666" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_text_link', 'kiwi112392 - fantomas666')" title="fantomas666" rel="followed-by">fantomas666</a>

      </center></div>
      <div class="user-peep" style="width:14.2%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="/web/20110514165523/http://youtube.com/user/cocoabeachbum" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_image_link', 'kiwi112392 - cocoabeachbum')" rel="followed-by">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="cocoabeachbum">
</a>
  </div></div>

        <a href="/web/20110514165523/http://youtube.com/user/cocoabeachbum" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_text_link', 'kiwi112392 - cocoabeachbum')" title="cocoabeachbum" rel="followed-by">cocoabeac...</a>

      </center></div>
      <div class="user-peep" style="width:14.2%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="/web/20110514165523/http://youtube.com/user/dablazeup" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_image_link', 'kiwi112392 - dablazeup')" rel="followed-by">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="dablazeup">
</a>
  </div></div>

        <a href="/web/20110514165523/http://youtube.com/user/dablazeup" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_text_link', 'kiwi112392 - dablazeup')" title="dablazeup" rel="followed-by">dablazeup</a>

      </center></div>
      <div class="user-peep" style="width:14.2%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="/web/20110514165523/http://youtube.com/user/stew6084" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_image_link', 'kiwi112392 - stew6084')" rel="followed-by">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="stew6084">
</a>
  </div></div>

        <a href="/web/20110514165523/http://youtube.com/user/stew6084" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_text_link', 'kiwi112392 - stew6084')" title="stew6084" rel="followed-by">stew6084</a>

      </center></div>
      <div class="user-peep" style="width:14.2%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="/web/20110514165523/http://youtube.com/user/1sweety4fun" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_image_link', 'kiwi112392 - 1sweety4fun')" rel="followed-by">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="1sweety4fun">
</a>
  </div></div>

        <a href="/web/20110514165523/http://youtube.com/user/1sweety4fun" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_text_link', 'kiwi112392 - 1sweety4fun')" title="1sweety4fun" rel="followed-by">1sweety4fun</a>

      </center></div>
      <div class="user-peep" style="width:14.2%;"><center>
          <div class="user-thumb-large link-as-border-color"><div>
<a href="/web/20110514165523/http://youtube.com/user/bipin007" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_image_link', 'kiwi112392 - bipin007')" rel="followed-by">
    <img id="" src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="bipin007">
</a>
  </div></div>

        <a href="/web/20110514165523/http://youtube.com/user/bipin007" onmousedown="yt.analytics.trackEvent('ChannelPage', 'subscriptions_text_link', 'kiwi112392 - bipin007')" title="bipin007" rel="followed-by">bipin007</a>

      </center></div>
  
    <div style="clear:both;font-height:1px"></div>
  </div>
  <div>
        <div style="font-size: 12px; text-align: right; margin-top: 7px;">
    <b><a name="channel-box-see-all" href="/web/20110514165523/http://youtube.com/profile?user=kiwi112392&amp;view=subscribers">
see all
    </a></b>
  </div>

  </div>

  </div>
  <div class="clear"></div>
  
</div>


            <div class="inner-box" id="user_comments">

    <div style="zoom:1">
  <div class="box-title title-text-color">
    Channel Comments

        (<span name="channel-box-item-count">1113</span>)
  </div>
  <div class="box-editor">
    <div style="float:right">
        <a href="#" onclick="javascript:get_page('user_comments', 0, 10, 'False');return false;">
Refresh
    </a>

    </div>
  </div>
  <div class="cb"></div>
  </div>



  <div id="user_comments-messages" class="hid"></div>

  <div id="user_comments-body">
      <div class="commentsTableFull text-field outer-box-bg-as-border" style="_width:610px">
  <table border="0" cellspacing="0" cellpadding="0" id="profile_comments_table">
    <tbody><tr class="commentsTableFull ">
          <td valign="top" width="60" style="padding-bottom: 15px;">
      <div id="profile-comment-icon-7CD1569813461D80">
          <div class="user-thumb-medium">
    <div>
<a href="/web/20110514165523/http://youtube.com/user/joshinvents">
        <img src="https://web.archive.org/web/20110514165523im_/http://i1.ytimg.com/i/LBfCeuLejtK7xMK8hHs34Q/1.jpg?v=8e49d5" alt="joshinvents" title="joshinvents">
</a>
    </div>
  </div>

      </div>
    </td>
    <td valign="top" style="padding-bottom: 15px;">
      <div class="floatL" style="margin-bottom: 5px;">
        <a name="profile-comment-username" href="/web/20110514165523/http://youtube.com/user/joshinvents" style="font-size: 12px;"><b>joshinvents</b></a>
        <span class="profile-comment-time-created">(2 years ago)</span>
      </div>
        <div class="floatR" style="margin-bottom: 5px">
          
        </div>
      <div class="profile-comment-body" dir="ltr" style="clear:both;" id="profile-comment-7CD1569813461D80">
        Subscribers: 5,075<br>Channel﻿ Views: 1,663,383 <br>Last Sign In: 1 year ago<br>WTF?
      </div>
    </td>

    </tr>
    <tr class="commentsTableFull ">
          <td valign="top" width="60" style="padding-bottom: 15px;">
      <div id="profile-comment-icon-1DA3138E17678BB7">
          <div class="user-thumb-medium">
    <div>
<a href="/web/20110514165523/http://youtube.com/user/kkurt212">
        <img src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="kkurt212" title="kkurt212">
</a>
    </div>
  </div>

      </div>
    </td>
    <td valign="top" style="padding-bottom: 15px;">
      <div class="floatL" style="margin-bottom: 5px;">
        <a name="profile-comment-username" href="/web/20110514165523/http://youtube.com/user/kkurt212" style="font-size: 12px;"><b>kkurt212</b></a>
        <span class="profile-comment-time-created">(3 years ago)</span>
      </div>
        <div class="floatR" style="margin-bottom: 5px">
          
        </div>
      <div class="profile-comment-body" dir="ltr" style="clear:both;" id="profile-comment-1DA3138E17678BB7">
        your HOT﻿
      </div>
    </td>

    </tr>
    <tr class="commentsTableFull ">
          <td valign="top" width="60" style="padding-bottom: 15px;">
      <div id="profile-comment-icon-F2322E1D0B02FADC">
          <div class="user-thumb-medium">
    <div>
<a href="/web/20110514165523/http://youtube.com/user/rasogogo">
        <img src="https://web.archive.org/web/20110514165523im_/http://i4.ytimg.com/i/WLXn9R8v2zavClujh8HUaA/1.jpg" alt="rasogogo" title="rasogogo">
</a>
    </div>
  </div>

      </div>
    </td>
    <td valign="top" style="padding-bottom: 15px;">
      <div class="floatL" style="margin-bottom: 5px;">
        <a name="profile-comment-username" href="/web/20110514165523/http://youtube.com/user/rasogogo" style="font-size: 12px;"><b>rasogogo</b></a>
        <span class="profile-comment-time-created">(3 years ago)</span>
      </div>
        <div class="floatR" style="margin-bottom: 5px">
          
        </div>
      <div class="profile-comment-body" dir="ltr" style="clear:both;" id="profile-comment-F2322E1D0B02FADC">
        gokhanrasmussen@hotmail.com <br><br>cameon baby﻿   =))
      </div>
    </td>

    </tr>
    <tr class="commentsTableFull ">
          <td valign="top" width="60" style="padding-bottom: 15px;">
      <div id="profile-comment-icon-5EFC0401E7DB68ED">
          <div class="user-thumb-medium">
    <div>
<a href="/web/20110514165523/http://youtube.com/user/almostgifted">
        <img src="https://web.archive.org/web/20110514165523im_/http://i1.ytimg.com/i/xzLIgq4Dni4FJAIxu2__2w/1.jpg" alt="almostgifted" title="almostgifted">
</a>
    </div>
  </div>

      </div>
    </td>
    <td valign="top" style="padding-bottom: 15px;">
      <div class="floatL" style="margin-bottom: 5px;">
        <a name="profile-comment-username" href="/web/20110514165523/http://youtube.com/user/almostgifted" style="font-size: 12px;"><b>almostgifted</b></a>
        <span class="profile-comment-time-created">(3 years ago)</span>
      </div>
        <div class="floatR" style="margin-bottom: 5px">
          
        </div>
      <div class="profile-comment-body" dir="ltr" style="clear:both;" id="profile-comment-5EFC0401E7DB68ED">
        How﻿ the fuck has this channel had so many views?!
      </div>
    </td>

    </tr>
    <tr class="commentsTableFull ">
          <td valign="top" width="60" style="padding-bottom: 15px;">
      <div id="profile-comment-icon-7650C871F1C65B63">
          <div class="user-thumb-medium">
    <div>
<a href="/web/20110514165523/http://youtube.com/user/ladyredscheer06">
        <img src="https://web.archive.org/web/20110514165523im_/http://i3.ytimg.com/vi/FixKpn82HE8/default.jpg" alt="ladyredscheer06" title="ladyredscheer06">
</a>
    </div>
  </div>

      </div>
    </td>
    <td valign="top" style="padding-bottom: 15px;">
      <div class="floatL" style="margin-bottom: 5px;">
        <a name="profile-comment-username" href="/web/20110514165523/http://youtube.com/user/ladyredscheer06" style="font-size: 12px;"><b>ladyredscheer06</b></a>
        <span class="profile-comment-time-created">(4 years ago)</span>
      </div>
        <div class="floatR" style="margin-bottom: 5px">
          
        </div>
      <div class="profile-comment-body" dir="ltr" style="clear:both;" id="profile-comment-7650C871F1C65B63">
        hey add me plz﻿
      </div>
    </td>

    </tr>
    <tr class="commentsTableFull ">
          <td valign="top" width="60" style="padding-bottom: 15px;">
      <div id="profile-comment-icon-99B4475A5C3EB0DF">
          <div class="user-thumb-medium">
    <div>
<a href="/web/20110514165523/http://youtube.com/user/guignol19">
        <img src="https://web.archive.org/web/20110514165523im_/http://i1.ytimg.com/vi/D7heydIAPSs/default.jpg" alt="guignol19" title="guignol19">
</a>
    </div>
  </div>

      </div>
    </td>
    <td valign="top" style="padding-bottom: 15px;">
      <div class="floatL" style="margin-bottom: 5px;">
        <a name="profile-comment-username" href="/web/20110514165523/http://youtube.com/user/guignol19" style="font-size: 12px;"><b>guignol19</b></a>
        <span class="profile-comment-time-created">(4 years ago)</span>
      </div>
        <div class="floatR" style="margin-bottom: 5px">
          
        </div>
      <div class="profile-comment-body" dir="ltr" style="clear:both;" id="profile-comment-99B4475A5C3EB0DF">
        coment dire, Hummmm!!!!!!!!!!!!!!﻿
      </div>
    </td>

    </tr>
    <tr class="commentsTableFull ">
          <td valign="top" width="60" style="padding-bottom: 15px;">
      <div id="profile-comment-icon-879A387AB67C620F">
          <div class="user-thumb-medium">
    <div>
<a href="/web/20110514165523/http://youtube.com/user/yokoinjapan">
        <img src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="yokoinjapan" title="yokoinjapan">
</a>
    </div>
  </div>

      </div>
    </td>
    <td valign="top" style="padding-bottom: 15px;">
      <div class="floatL" style="margin-bottom: 5px;">
        <a name="profile-comment-username" href="/web/20110514165523/http://youtube.com/user/yokoinjapan" style="font-size: 12px;"><b>yokoinjapan</b></a>
        <span class="profile-comment-time-created">(4 years ago)</span>
      </div>
        <div class="floatR" style="margin-bottom: 5px">
          
        </div>
      <div class="profile-comment-body" dir="ltr" style="clear:both;" id="profile-comment-879A387AB67C620F">
        Hello!﻿
      </div>
    </td>

    </tr>
    <tr class="commentsTableFull ">
          <td valign="top" width="60" style="padding-bottom: 15px;">
      <div id="profile-comment-icon-B87E555D818AD0A4">
          <div class="user-thumb-medium">
    <div>
<a href="/web/20110514165523/http://youtube.com/user/slavikgirls">
        <img src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="slavikgirls" title="slavikgirls">
</a>
    </div>
  </div>

      </div>
    </td>
    <td valign="top" style="padding-bottom: 15px;">
      <div class="floatL" style="margin-bottom: 5px;">
        <a name="profile-comment-username" href="/web/20110514165523/http://youtube.com/user/slavikgirls" style="font-size: 12px;"><b>slavikgirls</b></a>
        <span class="profile-comment-time-created">(4 years ago)</span>
      </div>
        <div class="floatR" style="margin-bottom: 5px">
          
        </div>
      <div class="profile-comment-body" dir="ltr" style="clear:both;" id="profile-comment-B87E555D818AD0A4">
        FANTASTIC !!<br><br>cheers<br><br>kisses﻿ from<br>Eastern Europe
      </div>
    </td>

    </tr>
    <tr class="commentsTableFull ">
          <td valign="top" width="60" style="padding-bottom: 15px;">
      <div id="profile-comment-icon-87B848C17552834E">
          <div class="user-thumb-medium">
    <div>
<a href="/web/20110514165523/http://youtube.com/user/slavikgirls">
        <img src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="slavikgirls" title="slavikgirls">
</a>
    </div>
  </div>

      </div>
    </td>
    <td valign="top" style="padding-bottom: 15px;">
      <div class="floatL" style="margin-bottom: 5px;">
        <a name="profile-comment-username" href="/web/20110514165523/http://youtube.com/user/slavikgirls" style="font-size: 12px;"><b>slavikgirls</b></a>
        <span class="profile-comment-time-created">(4 years ago)</span>
      </div>
        <div class="floatR" style="margin-bottom: 5px">
          
        </div>
      <div class="profile-comment-body" dir="ltr" style="clear:both;" id="profile-comment-87B848C17552834E">
        FANTASTIC !!<br><br>cheers<br><br>kisses from<br>Eastern Europe﻿
      </div>
    </td>

    </tr>
    <tr class="commentsTableFull ">
          <td valign="top" width="60" style="padding-bottom: 15px;">
      <div id="profile-comment-icon-06025F2B66CBC384">
          <div class="user-thumb-medium">
    <div>
<a href="/web/20110514165523/http://youtube.com/user/slavikgirls">
        <img src="https://web.archive.org/web/20110514165523im_/http://s.ytimg.com/yt/img/no_videos_140-vfl1fDI7-.png" alt="slavikgirls" title="slavikgirls">
</a>
    </div>
  </div>

      </div>
    </td>
    <td valign="top" style="padding-bottom: 15px;">
      <div class="floatL" style="margin-bottom: 5px;">
        <a name="profile-comment-username" href="/web/20110514165523/http://youtube.com/user/slavikgirls" style="font-size: 12px;"><b>slavikgirls</b></a>
        <span class="profile-comment-time-created">(4 years ago)</span>
      </div>
        <div class="floatR" style="margin-bottom: 5px">
          
        </div>
      <div class="profile-comment-body" dir="ltr" style="clear:both;" id="profile-comment-06025F2B66CBC384">
        FANTASTIC﻿ !!<br><br>cheers<br><br>kisses from<br>Eastern Europe
      </div>
    </td>

    </tr>
  </tbody></table>
  </div>
    <div id="user-comments-login-add-comment" style="font-size: 12px; margin-top: 10px" class="alignC">
      <a href="/web/20110514165523/http://youtube.com/login?next=/user/kiwi112392">
Add Comment
      </a>
    </div>
    <div style="font-size: 12px; text-align: right; margin-top: 7px;font-weight:bold">
    &nbsp;
        1
      &nbsp;
        <a href="&amp;start=10" onclick="  get_page('user_comments', 10, 10, 'False'); return false">2</a>
      &nbsp;
        <a href="&amp;start=20" onclick="  get_page('user_comments', 20, 10, 'False'); return false">3</a>
      &nbsp;
        <a href="&amp;start=30" onclick="  get_page('user_comments', 30, 10, 'False'); return false">4</a>
      &nbsp;
        <a href="&amp;start=40" onclick="  get_page('user_comments', 40, 10, 'False'); return false">5</a>
      &nbsp;
      &nbsp;<a href="&amp;start=10" onclick="  get_page('user_comments', 10, 10, 'False'); return false">Next</a>
  </div>


  </div>
  <div class="clear"></div>
  
</div>


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
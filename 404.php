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
<?php $__user_h = new user_helper($__db); ?>
<?php $useruse = str_replace('/','',$_SERVER['REQUEST_URI']); ?>
<?php if(!$__user_h->vanity_exists($useruse)) { ?>
<?php if(!$__user_h->user_exists($useruse)) { ?>
<html>
  <head>
    <title>404 Not Found</title>
      <base target="_top" />
      <link  rel="stylesheet" href="/yt/cssbin/www-core-vfluMRDnk.css">

  </head>
  <body>
    <div id="error-page">
      <div id="error-page-content">
        <img id="error-page-illustration" src="/yt/imgbin/image-404-vfl1vwmey.png" alt="">
        <p>
          We&#39;re sorry, the page you requested cannot be found. Try searching for something else.
        </p>
        <div id="masthead">
                <a id="logo-container" href="/" title="Betatube home">
    <img id="logo" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="YouTube home">
  </a>
<div id="masthead-search-bar">
            <form id="masthead-search" class="search-form consolidated-form" action="/results" onsubmit="if (_gel('masthead-search-term').value == '') return false;">
                <button class="search-btn-compontent search-button yt-uix-button yt-uix-button-default" onclick="if (_gel('masthead-search-term').value == '') return false; _gel('masthead-search').submit(); return false;;return true;" type="submit" id="search-btn" dir="ltr" tabindex="2" role="button"><span class="yt-uix-button-content">Search </span></button>
                <div id="masthead-search-terms" class="masthead-search-terms-border " dir="ltr"><label><input id="masthead-search-term" autocomplete="off" class="search-term" name="search_query" value="" type="text" tabindex="1" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)" title="Search" dir="ltr" spellcheck="false" style="outline: currentcolor none medium;"></label></div>
            <input type="hidden" name="oq"><input type="hidden" name="gs_l"></form>
        </div>
        
        </div>
      </div>
      <span id="error-page-vertical-align"></span>
    </div>
  </body>
</html>
<?php } else{ ?>
<?php $userusevanity = 'n'; ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/channel.php"); ?>
<?php } ?>
<?php } else{ ?>
<?php $vanityurl = $__user_h->fetch_user_vanity($useruse); ?>
<?php $useruse = $vanityurl['username']; ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/channel.php"); ?>
<?php } ?>
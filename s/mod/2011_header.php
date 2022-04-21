  <div id="masthead-container">
      
  <div id="masthead" class="" dir="ltr">
          <a id="logo-container" href="/" title="Betatube home">
    <img id="logo" src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Betatube home">
  </a>

	<?php if(!isset($_SESSION['siteusername'])) { ?>
    <div id="masthead-utility">
      <a href="/videos?feature=mhee">Browse    </a>    <a href="/new_upload" class="split ">Upload</a>  

          <a class="start" href="/sign_up">Create Account</a>  <a class="end" href="/sign_in">Sign In</a>
    </div>
	<?php } else{ ?>
    <div id="masthead-utility">
      <a href="/videos?feature=mhee">Browse    </a>    <a href="/new_upload" class="split ">Upload</a>  

          <a class="start" href="/user/<?php echo htmlspecialchars($_SESSION['siteusername']) ?>"><?php echo htmlspecialchars($_SESSION['siteusername']) ?></a>  <a class="end" href="/logout">Logout</a>
    </div>
	<?php } ?>
    
  <form id="masthead-search" class="search-form" autocomplete="off" action="/results" onsubmit="if (_gel('masthead-search-term').value == '') return false;">
<button type="submit" class="search-button yt-uix-button" onclick="if (_gel('masthead-search-term').value == '') return false; _gel('masthead-search').submit(); return false;;return false;" type="button" id="search-btn" dir="ltr" tabindex="2" role="button" aria-pressed="false"><span class="yt-uix-button-content">Search</span></button><div id="search-input-container"><input id="masthead-search-term" onfocus="" class="search-term " name="search_query" value="" type="text" tabindex="1" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)" title="Search" autocomplete="off"></div><script>document.getElementById('masthead-search-term').focus();</script>  <input type="hidden" name="aq" value="f"><input type="hidden" name="aql" value="" disabled=""><input type="hidden" name="oq" value="" disabled=""></form>


  </div>
  

  </div>
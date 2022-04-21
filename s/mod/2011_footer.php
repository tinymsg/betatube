  <div id="footer-container">
      <div id="footer">
    <ul class="footer-links">
      <li><a onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Help');">Help</a>
</li>
      <li><a onmousedown="yt.analytics.trackEvent('Footer', 'link', 'About');">About</a></li>
      <li><a onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Press');">Press &amp; Blogs</a></li>
      <li><a onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Copyright');">Copyright</a></li>
      <li><a href="/partner" onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Creators');">Partnership</a></li>
      <li><a href="/layouts/" onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Advertising');">Layouts</a></li>
      <li><a href="/dev">Developers</a></li>
      <li><a onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Safety');">Safety</a></li>
      <li><a onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Privacy');">Privacy</a></li>
      <li><a onmousedown="yt.analytics.trackEvent('Footer', 'link', 'Terms');">Terms</a></li>
    </ul>

    <div class="footer-info">
        <span dir="ltr">Betatube</span>

      <ul class="pickers">
        <li><a href="http://www.google.com/tools/feedback/intl/en/error.html" onclick="return yt.www.feedback.start(yt.getConfig('FEEDBACK_LOCALE_LANGUAGE'), yt.getConfig('FEEDBACK_LOCALE_EXTRAS'));" id="reportbug">Report a bug</a></li>


          <li><a href="/testtube">Try something new!</a></li>
      </ul>
    </div>
      <ul class="pickers">
      <li>Language:
  <a onclick="yt.www.masthead.loadPicker('language-picker', ''); return false;">English</a>
</li>
      <li>Location:
  <a onclick="yt.www.masthead.loadPicker('region-picker', ''); return false;">Worldwide</a>
</li>
      <li>Safety mode:
  <a onclick="yt.www.masthead.loadPicker('safetymode-picker', ''); return false;">

Off

  </a>
</li>
  </ul>
    <div id="picker-container"></div>
  <div id="picker-loading" style="display: none">Loading...</div>


  </div>

  </div>
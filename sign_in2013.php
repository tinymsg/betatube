
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <title>Login to Betatube</title>
<style type="text/css">
  html, body, div, h1, h2, h3, h4, h5, h6, p, img, dl,
  dt, dd, ol, ul, li, table, tr, td, form, object, embed,
  article, aside, canvas, command, details, fieldset,
  figcaption, figure, footer, group, header, hgroup, legend,
  mark, menu, meter, nav, output, progress, section, summary,
  time, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  }
  article, aside, details, figcaption, figure, footer,
  header, hgroup, menu, nav, section {
  display: block;
  }
  html {
  font: 81.25% arial, helvetica, sans-serif;
  background: #fff;
  color: #333;
  line-height: 1;
  direction: ltr;
  }
  a {
  color: #15c;
  text-decoration: none;
  }
  a:active {
  color: #d14836;
  }
  a:hover {
  text-decoration: underline;
  }
  h1, h2, h3, h4, h5, h6 {
  color: #222;
  font-size: 1.54em;
  font-weight: normal;
  line-height: 24px;
  margin: 0 0 .46em;
  }
  p {
  line-height: 17px;
  margin: 0 0 1em;
  }
  ol, ul {
  list-style: none;
  line-height: 17px;
  margin: 0 0 1em;
  }
  li {
  margin: 0 0 .5em;
  }
  table {
  border-collapse: collapse;
  border-spacing: 0;
  }
  strong {
  color: #222;
  }
</style>
<style type="text/css">
  html, body {
  position: absolute;
  height: 100%;
  min-width: 100%;
  }
  .wrapper {
  position: relative;
  min-height: 100%;
  }
  .wrapper + style + iframe {
  display: none;
  }
  .content {
  padding: 0 44px;
  }
  .google-header-bar {
  height: 71px;
  background: #f1f1f1;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .header .logo {
  margin: 17px 0 0;
  float: left;
  }
  .header .signin,
  .header .signup {
  margin: 28px 0 0;
  float: right;
  font-weight: bold;
  }
  .header .signin-button,
  .header .signup-button {
  margin: 22px 0 0;
  float: right;
  }
  .header .signin-button a {
  font-size: 13px;
  font-weight: normal;
  }
  .header .signup-button a {
  position: relative;
  top: -1px;
  margin: 0 0 0 1em;
  }
  .main {
  margin: 0 auto;
  width: 650px;
  padding-top: 23px;
  padding-bottom: 100px;
  }
  .main h1:first-child {
  margin: 0 0 .92em;
  }
  .google-footer-bar {
  position: absolute;
  bottom: 0;
  height: 35px;
  width: 100%;
  border-top: 1px solid #ebebeb;
  overflow: hidden;
  }
  .footer {
  padding-top: 9px;
  font-size: .85em;
  white-space: nowrap;
  line-height: 0;
  }
  .footer ul {
  color: #999;
  float: left;
  max-width: 80%;
  }
  .footer ul li {
  display: inline;
  padding: 0 1.5em 0 0;
  }
  .footer a {
  color: #333;
  }
  .footer form {
  text-align: right;
  }
  .footer form .lang-chooser {
  max-width: 20%;
  }
  .redtext {
  color: #dd4b39;
  }
  .greytext {
  color: #555;
  }
  .secondary {
  font-size: 11px;
  color: #666;
  }
  .source {
  color: #093;
  }
  .hidden {
  display: none;
  }
  .announce-bar {
  position: absolute;
  bottom: 35px;
  height: 33px;
  z-index: 2;
  width: 100%;
  background: #f9edbe;
  border-top: 1px solid #efe1ac;
  border-bottom: 1px solid #efe1ac;
  overflow: hidden;
  }
  .announce-bar .message {
  font-size: .85em;
  line-height: 33px;
  margin: 0;
  }
  .announce-bar .message .separated {
  margin-left: 1.5em;
  }
  .announce-bar-ac {
  background: #eee;
  border-top: 1px solid #e5e5e5;
  border-bottom: 1px solid #e5e5e5;
  }
  .clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: '.';
  clear: both;
  height: 0;
  }
  * html .clearfix {
  zoom: 1;
  }
  *:first-child+html .clearfix {
  zoom: 1;
  }
</style>
<style type="text/css">
  button, input, select, textarea {
  font-family: inherit;
  font-size: inherit;
  }
  button::-moz-focus-inner,
  input::-moz-focus-inner {
  border: 0;
  }
  input[type=email],
  input[type=number],
  input[type=password],
  input[type=tel],
  input[type=text],
  input[type=url] {
  display: inline-block;
  height: 29px;
  margin: 0;
  padding: 0 8px;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  }
  input[type=email]:hover,
  input[type=number]:hover,
  input[type=password]:hover,
  input[type=tel]:hover,
  input[type=text]:hover,
  input[type=url]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=email]:focus,
  input[type=number]:focus,
  input[type=password]:focus,
  input[type=tel]:focus,
  input[type=text]:focus,
  input[type=url]:focus {
  outline: none;
  border: 1px solid #4d90fe;
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  input[type=email][disabled=disabled],
  input[type=number][disabled=disabled],
  input[type=password][disabled=disabled],
  input[type=tel][disabled=disabled],
  input[type=text][disabled=disabled],
  input[type=url][disabled=disabled] {
  border: 1px solid #e5e5e5;
  background: #f1f1f1;
  }
  input[type=email][disabled=disabled]:hover,
  input[type=number][disabled=disabled]:hover,
  input[type=password][disabled=disabled]:hover,
  input[type=tel][disabled=disabled]:hover,
  input[type=text][disabled=disabled]:hover,
  input[type=url][disabled=disabled]:hover {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  }
  input[type=email][readonly=readonly],
  input[type=number][readonly=readonly],
  input[type=password][readonly=readonly],
  input[type=text][readonly=readonly],
  input[type=url][readonly=readonly] {
  border: 1px solid #d9d9d9;
  }
  input[type=email][readonly=readonly]:hover,
  input[type=number][readonly=readonly]:hover,
  input[type=password][readonly=readonly]:hover,
  input[type=text][readonly=readonly]:hover,
  input[type=url][readonly=readonly]:hover,
  input[type=email][readonly=readonly]:focus,
  input[type=number][readonly=readonly]:focus,
  input[type=password][readonly=readonly]:focus,
  input[type=text][readonly=readonly]:focus,
  input[type=url][readonly=readonly]:focus {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  }
  input[type=checkbox].form-error,
  input[type=email].form-error,
  input[type=number].form-error,
  input[type=password].form-error,
  input[type=text].form-error,
  input[type=url].form-error {
  border: 1px solid #dd4b39;
  }
  input[type=checkbox],
  input[type=radio] {
  -webkit-appearance: none;
  appearance: none;
  width: 13px;
  height: 13px;
  margin: 0;
  cursor: pointer;
  vertical-align: bottom;
  background: #fff;
  border: 1px solid #dcdcdc;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  position: relative;
  }
  input[type=checkbox]:active,
  input[type=radio]:active {
  border-color: #c6c6c6;
  background: #ebebeb;
  }
  input[type=checkbox]:hover {
  border-color: #c6c6c6;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 1px rgba(0,0,0,0.1);
  }
  input[type=radio] {
  -webkit-border-radius: 1em;
  -moz-border-radius: 1em;
  border-radius: 1em;
  width: 15px;
  height: 15px;
  }
  input[type=checkbox]:checked,
  input[type=radio]:checked {
  background: #fff;
  }
  input[type=radio]:checked::after {
  content: '';
  display: block;
  position: relative;
  top: 3px;
  left: 3px;
  width: 7px;
  height: 7px;
  background: #666;
  -webkit-border-radius: 1em;
  -moz-border-radius: 1em;
  border-radius: 1em;
  }
  input[type=checkbox]:checked::after {
  content: url(//ssl.gstatic.com/ui/v1/menu/checkmark.png);
  display: block;
  position: absolute;
  top: -6px;
  left: -5px;
  }
  input[type=checkbox]:focus {
  outline: none;
  border-color:#4d90fe;
  }
  .g-button {
  display: inline-block;
  min-width: 46px;
  text-align: center;
  color: #444;
  font-size: 11px;
  font-weight: bold;
  height: 27px;
  padding: 0 8px;
  line-height: 27px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  -webkit-transition: all 0.218s;
  -moz-transition: all 0.218s;
  -ms-transition: all 0.218s;
  -o-transition: all 0.218s;
  transition: all 0.218s;
  border: 1px solid #dcdcdc;
  background-color: #f5f5f5;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#f1f1f1));
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -o-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  cursor: default;
  }
  *+html .g-button {
  min-width: 70px;
  }
  button.g-button,
  input[type=submit].g-button {
  height: 29px;
  line-height: 29px;
  vertical-align: bottom;
  margin: 0;
  }
  *+html button.g-button,
  *+html input[type=submit].g-button {
  overflow: visible;
  }
  .g-button:hover {
  border: 1px solid #c6c6c6;
  color: #333;
  text-decoration: none;
  -webkit-transition: all 0.0s;
  -moz-transition: all 0.0s;
  -ms-transition: all 0.0s;
  -o-transition: all 0.0s;
  transition: all 0.0s;
  background-color: #f8f8f8;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#f8f8f8),to(#f1f1f1));
  background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -o-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: linear-gradient(top,#f8f8f8,#f1f1f1);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }
  .g-button:active {
  background-color: #f6f6f6;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#f6f6f6),to(#f1f1f1));
  background-image: -webkit-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -o-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: linear-gradient(top,#f6f6f6,#f1f1f1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  .g-button:visited {
  color: #666;
  }
  .g-button-submit {
  border: 1px solid #3079ed;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #4d90fe;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#4d90fe),to(#4787ed));
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -ms-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
  background-image: linear-gradient(top,#4d90fe,#4787ed);
  }
  .g-button-submit:hover {
  border: 1px solid #2f5bb7;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#4d90fe),to(#357ae8));
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  }
  .g-button-submit:active {
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .g-button-share {
  border: 1px solid #29691d;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #3d9400;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#3d9400),to(#398a00));
  background-image: -webkit-linear-gradient(top,#3d9400,#398a00);
  background-image: -moz-linear-gradient(top,#3d9400,#398a00);
  background-image: -ms-linear-gradient(top,#3d9400,#398a00);
  background-image: -o-linear-gradient(top,#3d9400,#398a00);
  background-image: linear-gradient(top,#3d9400,#398a00);
  }
  .g-button-share:hover {
  border: 1px solid #2d6200;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #368200;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#3d9400),to(#368200));
  background-image: -webkit-linear-gradient(top,#3d9400,#368200);
  background-image: -moz-linear-gradient(top,#3d9400,#368200);
  background-image: -ms-linear-gradient(top,#3d9400,#368200);
  background-image: -o-linear-gradient(top,#3d9400,#368200);
  background-image: linear-gradient(top,#3d9400,#368200);
  }
  .g-button-share:active {
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .g-button-red {
  border: 1px solid transparent;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  text-transform: uppercase;
  background-color: #d14836;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#dd4b39),to(#d14836));
  background-image: -webkit-linear-gradient(top,#dd4b39,#d14836);
  background-image: -moz-linear-gradient(top,#dd4b39,#d14836);
  background-image: -ms-linear-gradient(top,#dd4b39,#d14836);
  background-image: -o-linear-gradient(top,#dd4b39,#d14836);
  background-image: linear-gradient(top,#dd4b39,#d14836);
  }
  .g-button-red:hover {
  border: 1px solid #b0281a;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #c53727;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#dd4b39),to(#c53727));
  background-image: -webkit-linear-gradient(top,#dd4b39,#c53727);
  background-image: -moz-linear-gradient(top,#dd4b39,#c53727);
  background-image: -ms-linear-gradient(top,#dd4b39,#c53727);
  background-image: -o-linear-gradient(top,#dd4b39,#c53727);
  background-image: linear-gradient(top,#dd4b39,#c53727);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  -ms-box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  -o-box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  box-shadow: 0 1px 1px rgba(0,0,0,0.2);
  }
  .g-button-red:active {
  border: 1px solid #992a1b;
  background-color: #b0281a;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#dd4b39),to(#b0281a));
  background-image: -webkit-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -moz-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -ms-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -o-linear-gradient(top,#dd4b39,#b0281a);
  background-image: linear-gradient(top,#dd4b39,#b0281a);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .g-button-white {
  border: 1px solid #dcdcdc;
  color: #666;
  background: #fff;
  }
  .g-button-white:hover {
  border: 1px solid #c6c6c6;
  color: #333;
  background: #fff;
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }
  .g-button-white:active {
  background: #fff;
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  .g-button-red:visited,
  .g-button-share:visited,
  .g-button-submit:visited {
  color: #fff;
  }
  .g-button-submit:focus,
  .g-button-share:focus,
  .g-button-red:focus {
  -webkit-box-shadow: inset 0 0 0 1px #fff;
  -moz-box-shadow: inset 0 0 0 1px #fff;
  box-shadow: inset 0 0 0 1px #fff;
  }
  .g-button-share:focus {
  border-color: #29691d;
  }
  .g-button-red:focus {
  border-color: #d14836;
  }
  .g-button-submit:focus:hover,
  .g-button-share:focus:hover,
  .g-button-red:focus:hover {
  -webkit-box-shadow: inset 0 0 0 1px #fff, 0 1px 1px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 0 0 1px #fff, 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: inset 0 0 0 1px #fff, 0 1px 1px rgba(0,0,0,0.1);
  }
  .g-button.selected {
  background-color: #eee;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#eee),to(#e0e0e0));
  background-image: -webkit-linear-gradient(top,#eee,#e0e0e0);
  background-image: -moz-linear-gradient(top,#eee,#e0e0e0);
  background-image: -ms-linear-gradient(top,#eee,#e0e0e0);
  background-image: -o-linear-gradient(top,#eee,#e0e0e0);
  background-image: linear-gradient(top,#eee,#e0e0e0);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  border: 1px solid #ccc;
  color: #333;
  }
  .g-button img {
  display: inline-block;
  margin: -3px 0 0;
  opacity: .55;
  filter: alpha(opacity=55);
  vertical-align: middle;
  pointer-events: none;
  }
  *+html .g-button img {
  margin: 4px 0 0;
  }
  .g-button:hover img {
  opacity: .72;
  filter: alpha(opacity=72);
  }
  .g-button:active img {
  opacity: 1;
  filter: alpha(opacity=100);
  }
  .g-button.disabled img {
  opacity: .5;
  filter: alpha(opacity=50);
  }
  .g-button.disabled,
  .g-button.disabled:hover,
  .g-button.disabled:active,
  .g-button-submit.disabled,
  .g-button-submit.disabled:hover,
  .g-button-submit.disabled:active,
  .g-button-share.disabled,
  .g-button-share.disabled:hover,
  .g-button-share.disabled:active,
  .g-button-red.disabled,
  .g-button-red.disabled:hover,
  .g-button-red.disabled:active,
  input[type=submit][disabled].g-button {
  background-color: none;
  opacity: .5;
  filter: alpha(opacity=50);
  cursor: default;
  pointer-events: none;
  }
  .goog-menu {
  -webkit-box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  -moz-box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  -webkit-transition: opacity 0.218s;
  -moz-transition: opacity 0.218s;
  -ms-transition: opacity 0.218s;
  -o-transition: opacity 0.218s;
  transition: opacity 0.218s;
  background: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0,0,0,.2);
  cursor: default;
  font-size: 13px;
  margin: 0;
  outline: none;
  padding: 0 0 6px;
  position: absolute;
  z-index: 2;
  overflow: auto;
  }
  .goog-menuitem,
  .goog-tristatemenuitem,
  .goog-filterobsmenuitem {
  position: relative;
  color: #333;
  cursor: pointer;
  list-style: none;
  margin: 0;
  padding: 6px 7em 6px 30px;
  white-space: nowrap;
  }
  .goog-menuitem-highlight,
  .goog-menuitem-hover {
  background-color: #eee;
  border-color: #eee;
  border-style: dotted;
  border-width: 1px 0;
  padding-top: 5px;
  padding-bottom: 5px;
  }
  .goog-menuitem-highlight .goog-menuitem-content,
  .goog-menuitem-hover .goog-menuitem-content {
  color: #333;
  }
  .goog-menuseparator {
  border-top: 1px solid #ebebeb;
  margin-top: 9px;
  margin-bottom: 10px;
  }
  .goog-inline-block {
  position: relative;
  display: -moz-inline-box;
  display: inline-block;
  }
  * html .goog-inline-block {
  display: inline;
  }
  *:first-child+html .goog-inline-block {
  display: inline;
  }
  .dropdown-block {
  display: block;
  }
  .goog-flat-menu-button {
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  background-color: #f5f5f5;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#f1f1f1));
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -o-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
  border: 1px solid #dcdcdc;
  color: #444;
  font-size: 11px;
  font-weight: bold;
  line-height: 27px;
  list-style: none;
  margin: 0 2px;
  min-width: 46px;
  outline: none;
  padding: 0 18px 0 6px;
  text-decoration: none;
  vertical-align: middle;
  }
  .goog-flat-menu-button-disabled {
  background-color: #fff;
  border-color: #f3f3f3;
  color: #b8b8b8;
  cursor: default;
  }
  .goog-flat-menu-button.goog-flat-menu-button-hover {
  background-color: #f8f8f8;
  background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -o-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: linear-gradient(top,#f8f8f8,#f1f1f1);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,.1);
  box-shadow: 0 1px 1px rgba(0,0,0,.1);
  border-color: #c6c6c6;
  color: #333;
  }
  .goog-flat-menu-button.goog-flat-menu-button-focused {
  border-color: #4d90fe;
  }
  .form-error .goog-flat-menu-button {
  border: 1px solid #dd4b39;
  }
  .form-error .goog-flat-menu-button-focused {
  border-color: #4d90fe;
  }
  .goog-flat-menu-button.goog-flat-menu-button-open,
  .goog-flat-menu-button.goog-flat-menu-button-active {
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
  background-color: #eee;
  background-image: -webkit-linear-gradient(top,#eee,#e0e0e0);
  background-image: -moz-linear-gradient(top,#eee,#e0e0e0);
  background-image: -ms-linear-gradient(top,#eee,#e0e0e0);
  background-image: -o-linear-gradient(top,#eee,#e0e0e0);
  background-image: linear-gradient(top,#eee,#e0e0e0);
  border: 1px solid #ccc;
  color: #333;
  z-index: 2;
  }
  .goog-flat-menu-button-caption {
  vertical-align: top;
  white-space: nowrap;
  }
  .goog-flat-menu-button-dropdown {
  border-color: #777 transparent;
  border-style: solid;
  border-width: 4px 4px 0;
  height: 0;
  width: 0;
  position: absolute;
  right: 5px;
  top: 12px;
  }
  .jfk-select .goog-flat-menu-button-dropdown {
  background: url(//ssl.gstatic.com/ui/v1/disclosure/grey-disclosure-arrow-up-down.png) center no-repeat;
  border: none;
  height: 11px;
  margin-top: -4px;
  width: 7px;
  }
  .goog-menu-nocheckbox .goog-menuitem,
  .goog-menu-noicon .goog-menuitem {
  padding-left: 16px;
  vertical-align: middle;
  }
  body ::-webkit-scrollbar {
  height: 16px;
  width: 16px;
  overflow: visible;
  }
  body ::-webkit-scrollbar-button {
  height: 0;
  width: 0;
  }
  body ::-webkit-scrollbar-track {
  background-clip: padding-box;
  border: solid transparent;
  border-width: 0 0 0 7px;
  }
  body ::-webkit-scrollbar-track:horizontal {
  border-width: 7px 0 0;
  }
  body ::-webkit-scrollbar-track:hover {
  background-color: rgba(0,0,0,.05);
  -webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.1);
  box-shadow: inset 1px 0 0 rgba(0,0,0,.1);
  }
  body ::-webkit-scrollbar-track:horizontal:hover {
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.1);
  box-shadow: inset 0 1px 0 rgba(0,0,0,.1);
  }
  body ::-webkit-scrollbar-track:active {
  background-color: rgba(0,0,0,.05);
  -webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  }
  body ::-webkit-scrollbar-track:horizontal:active {
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-track:hover {
  background-color: rgba(255,255,255,.1);
  -webkit-box-shadow: inset 1px 0 0 rgba(255,255,255,.2);
  box-shadow: inset 1px 0 0 rgba(255,255,255,.2);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-track:horizontal:hover {
  -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.2);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.2);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-track:active {
  background-color: rgba(255,255,255,.1);
  -webkit-box-shadow: inset 1px 0 0 rgba(255,255,255,.25),inset -1px 0 0 rgba(255,255,255,.15);
  box-shadow: inset 1px 0 0 rgba(255,255,255,.25),inset -1px 0 0 rgba(255,255,255,.15);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-track:horizontal:active {
  -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.25),inset 0 -1px 0 rgba(255,255,255,.15);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.25),inset 0 -1px 0 rgba(255,255,255,.15);
  }
  body ::-webkit-scrollbar-thumb {
  background-color: rgba(0,0,0,.2);
  background-clip: padding-box;
  border: solid transparent;
  border-width: 0 0 0 7px;
  min-height: 28px;
  padding: 100px 0 0;
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);
  }
  body ::-webkit-scrollbar-thumb:horizontal {
  border-width: 7px 0 0;
  padding: 0 0 0 100px;
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset -1px 0 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset -1px 0 0 rgba(0,0,0,.07);
  }
  body ::-webkit-scrollbar-thumb:hover {
  background-color: rgba(0,0,0,.4);
  -webkit-box-shadow: inset 1px 1px 1px rgba(0,0,0,.25);
  box-shadow: inset 1px 1px 1px rgba(0,0,0,.25);
  }
  body ::-webkit-scrollbar-thumb:active {
  background-color: rgba(0,0,0,.5);
  -webkit-box-shadow: inset 1px 1px 3px rgba(0,0,0,.35);
  box-shadow: inset 1px 1px 3px rgba(0,0,0,.35);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-thumb {
  background-color: rgba(255,255,255,.3);
  -webkit-box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset 0 -1px 0 rgba(255,255,255,.1);
  box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset 0 -1px 0 rgba(255,255,255,.1);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-thumb:horizontal {
  -webkit-box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset -1px 0 0 rgba(255,255,255,.1);
  box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset -1px 0 0 rgba(255,255,255,.1);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-thumb:hover {
  background-color: rgba(255,255,255,.6);
  -webkit-box-shadow: inset 1px 1px 1px rgba(255,255,255,.37);
  box-shadow: inset 1px 1px 1px rgba(255,255,255,.37);
  }
  .jfk-scrollbar-dark::-webkit-scrollbar-thumb:active {
  background-color: rgba(255,255,255,.75);
  -webkit-box-shadow: inset 1px 1px 3px rgba(255,255,255,.5);
  box-shadow: inset 1px 1px 3px rgba(255,255,255,.5);
  }
  .jfk-scrollbar-borderless::-webkit-scrollbar-track {
  border-width: 0 1px 0 6px
  }
  .jfk-scrollbar-borderless::-webkit-scrollbar-track:horizontal {
  border-width: 6px 0 1px
  }
  .jfk-scrollbar-borderless::-webkit-scrollbar-track:hover {
  background-color: rgba(0,0,0,.035);
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.14),inset -1px -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.14),inset -1px -1px 0 rgba(0,0,0,.07);
  }
  .jfk-scrollbar-borderless.jfk-scrollbar-dark::-webkit-scrollbar-track:hover {
  background-color: rgba(255,255,255,.07);
  -webkit-box-shadow: inset 1px 1px 0 rgba(255,255,255,.25),inset -1px -1px 0 rgba(255,255,255,.15);
  box-shadow: inset 1px 1px 0 rgba(255,255,255,.25),inset -1px -1px 0 rgba(255,255,255,.15);
  }
  .jfk-scrollbar-borderless::-webkit-scrollbar-thumb {
  border-width: 0 1px 0 6px;
  }
  .jfk-scrollbar-borderless::-webkit-scrollbar-thumb:horizontal {
  border-width: 6px 0 1px;
  }
  body ::-webkit-scrollbar-corner {
  background: transparent;
  }
  body::-webkit-scrollbar-track-piece {
  background-clip: padding-box;
  background-color: #f1f1f1;
  border: solid #fff;
  border-width: 0 0 0 3px;
  -webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  }
  body::-webkit-scrollbar-track-piece:horizontal {
  border-width: 3px 0 0;
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  }
  body::-webkit-scrollbar-thumb {
  border-width: 1px 1px 1px 5px;
  }
  body::-webkit-scrollbar-thumb:horizontal {
  border-width: 5px 1px 1px;
  }
  body::-webkit-scrollbar-corner {
  background-clip: padding-box;
  background-color: #f1f1f1;
  border: solid #fff;
  border-width: 3px 0 0 3px;
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.14);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.14);
  }
  .jfk-scrollbar::-webkit-scrollbar {
  height: 16px;
  overflow: visible;
  width: 16px;
  }
  .jfk-scrollbar::-webkit-scrollbar-button {
  height: 0;
  width: 0;
  }
  .jfk-scrollbar::-webkit-scrollbar-track {
  background-clip: padding-box;
  border: solid transparent;
  border-width: 0 0 0 7px;
  }
  .jfk-scrollbar::-webkit-scrollbar-track:horizontal {
  border-width: 7px 0 0;
  }
  .jfk-scrollbar::-webkit-scrollbar-track:hover {
  background-color: rgba(0,0,0,.05);
  -webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.1);
  box-shadow: inset 1px 0 0 rgba(0,0,0,.1);
  }
  .jfk-scrollbar::-webkit-scrollbar-track:horizontal:hover {
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.1);
  box-shadow: inset 0 1px 0 rgba(0,0,0,.1);
  }
  .jfk-scrollbar::-webkit-scrollbar-track:active {
  background-color: rgba(0,0,0,.05);
  -webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  }
  .jfk-scrollbar::-webkit-scrollbar-track:horizontal:active {
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-track:hover {
  background-color: rgba(255,255,255,.1);
  -webkit-box-shadow: inset 1px 0 0 rgba(255,255,255,.2);
  box-shadow: inset 1px 0 0 rgba(255,255,255,.2);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-track:horizontal:hover {
  -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.2);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.2);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-track:active {
  background-color: rgba(255,255,255,.1);
  -webkit-box-shadow: inset 1px 0 0 rgba(255,255,255,.25),inset -1px 0 0 rgba(255,255,255,.15);
  box-shadow: inset 1px 0 0 rgba(255,255,255,.25),inset -1px 0 0 rgba(255,255,255,.15);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-track:horizontal:active {
  -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.25),inset 0 -1px 0 rgba(255,255,255,.15);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.25),inset 0 -1px 0 rgba(255,255,255,.15);
  }
  .jfk-scrollbar::-webkit-scrollbar-thumb {
  background-color: rgba(0,0,0,.2);
  background-clip: padding-box;
  border: solid transparent;
  border-width: 0 0 0 7px;
  min-height: 28px;
  padding: 100px 0 0;
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);
  }
  .jfk-scrollbar::-webkit-scrollbar-thumb:horizontal {
  border-width: 7px 0 0;
  padding: 0 0 0 100px;
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset -1px 0 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset -1px 0 0 rgba(0,0,0,.07);
  }
  .jfk-scrollbar::-webkit-scrollbar-thumb:hover {
  background-color: rgba(0,0,0,.4);
  -webkit-box-shadow: inset 1px 1px 1px rgba(0,0,0,.25);
  box-shadow: inset 1px 1px 1px rgba(0,0,0,.25);
  }
  .jfk-scrollbar::-webkit-scrollbar-thumb:active {
  background-color: rgba(0,0,0,0.5);
  -webkit-box-shadow: inset 1px 1px 3px rgba(0,0,0,0.35);
  box-shadow: inset 1px 1px 3px rgba(0,0,0,0.35);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-thumb {
  background-color: rgba(255,255,255,.3);
  -webkit-box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset 0 -1px 0 rgba(255,255,255,.1);
  box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset 0 -1px 0 rgba(255,255,255,.1);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-thumb:horizontal {
  -webkit-box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset -1px 0 0 rgba(255,255,255,.1);
  box-shadow: inset 1px 1px 0 rgba(255,255,255,.15),inset -1px 0 0 rgba(255,255,255,.1);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-thumb:hover {
  background-color: rgba(255,255,255,.6);
  -webkit-box-shadow: inset 1px 1px 1px rgba(255,255,255,.37);
  box-shadow: inset 1px 1px 1px rgba(255,255,255,.37);
  }
  .jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-thumb:active {
  background-color: rgba(255,255,255,.75);
  -webkit-box-shadow: inset 1px 1px 3px rgba(255,255,255,.5);
  box-shadow: inset 1px 1px 3px rgba(255,255,255,.5);
  }
  .jfk-scrollbar-borderless.jfk-scrollbar::-webkit-scrollbar-track {
  border-width: 0 1px 0 6px;
  }
  .jfk-scrollbar-borderless.jfk-scrollbar::-webkit-scrollbar-track:horizontal {
  border-width: 6px 0 1px;
  }
  .jfk-scrollbar-borderless.jfk-scrollbar::-webkit-scrollbar-track:hover {
  background-color: rgba(0,0,0,.035);
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.14),inset -1px -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.14),inset -1px -1px 0 rgba(0,0,0,.07);
  }
  .jfk-scrollbar-borderless.jfk-scrollbar-dark.jfk-scrollbar::-webkit-scrollbar-track:hover {
  background-color: rgba(255,255,255,.07);
  -webkit-box-shadow: inset 1px 1px 0 rgba(255,255,255,.25),inset -1px -1px 0 rgba(255,255,255,.15);
  box-shadow: inset 1px 1px 0 rgba(255,255,255,.25),inset -1px -1px 0 rgba(255,255,255,.15);
  }
  .jfk-scrollbar-borderless.jfk-scrollbar::-webkit-scrollbar-thumb {
  border-width: 0 1px 0 6px;
  }
  .jfk-scrollbar-borderless.jfk-scrollbar::-webkit-scrollbar-thumb:horizontal {
  border-width: 6px 0 1px;
  }
  .jfk-scrollbar::-webkit-scrollbar-corner {
  background: transparent;
  }
  body.jfk-scrollbar::-webkit-scrollbar-track-piece {
  background-clip: padding-box;
  background-color: #f1f1f1;
  border: solid #fff;
  border-width: 0 0 0 3px;
  -webkit-box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);
  }
  body.jfk-scrollbar::-webkit-scrollbar-track-piece:horizontal {
  border-width: 3px 0 0;
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);
  }
  body.jfk-scrollbar::-webkit-scrollbar-thumb {
  border-width: 1px 1px 1px 5px;
  }
  body.jfk-scrollbar::-webkit-scrollbar-thumb:horizontal {
  border-width: 5px 1px 1px;
  }
  body.jfk-scrollbar::-webkit-scrollbar-corner {
  background-clip: padding-box;
  background-color: #f1f1f1;
  border: solid #fff;
  border-width: 3px 0 0 3px;
  -webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.14);
  box-shadow: inset 1px 1px 0 rgba(0,0,0,.14);
  }
  .errormsg {
  margin: .5em 0 0;
  display: block;
  color: #dd4b39;
  line-height: 17px;
  }
  .help-link {
  background: #dd4b39;
  padding: 0 5px;
  color: #fff;
  font-weight: bold;
  display: inline-block;
  -webkit-border-radius: 1em;
  -moz-border-radius: 1em;
  border-radius: 1em;
  text-decoration: none;
  position: relative;
  top: 0px;
  }
  .help-link:visited {
  color: #fff;
  }
  .help-link:hover {
  color: #fff;
  background: #c03523;
  text-decoration: none;
  }
  .help-link:active {
  opacity: 1;
  background: #ae2817;
  }
</style>
<style type="text/css">
  .main {
  width: auto;
  max-width: 1000px;
  min-width: 780px;
  }
  .product-info {
  margin: 0 385px 0 0;
  }
  .product-info h3 {
  font-size: 1.23em;
  font-weight: normal;
  }
  .product-info a:visited {
  color: #61c;
  }
  .product-info .g-button:visited {
  color: #666;
  }
  .sign-in {
  width: 335px;
  float: right;
  }
  .signin-box,
  .accountchooser-box {
  margin: 12px 0 0;
  padding: 20px 25px 15px;
  background: #f1f1f1;
  border: 1px solid #e5e5e5;
  }
  .product-headers {
  margin: 0 0 1.5em;
  }
  .product-headers h1 {
  font-size: 25px;
  margin: 0 !important;
  }
  .product-headers h2 {
  font-size: 16px;
  margin: .4em 0 0;
  }
  .features {
  overflow: hidden;
  margin: 2em 0 0;
  }
  .features li {
  margin: 3px 0 2em;
  }
  .features img {
  float: left;
  margin: -3px 0 0;
  }
  .features p {
  margin: 0 0 0 68px;
  }
  .features .title {
  font-size: 16px;
  margin-bottom: .3em;
  }
  .features.no-icon p {
  margin: 0;
  }
  .features .small-title {
  font-size: 1em;
  font-weight: bold;
  }
  .notification-bar {
  background: #f9edbe;
  padding: 8px;
  }
</style>
<style type="text/css">
  .signin-box h2 {
  font-size: 16px;
  line-height: 17px;
  height: 16px;
  margin: 0 0 1.2em;
  position: relative;
  }
  .signin-box h2 strong {
  display: inline-block;
  position: absolute;
  right: 0;
  top: 1px;
  height: 19px;
  width: 52px;
  background: transparent url(//ssl.gstatic.com/accounts/ui/google-signin-flat.png) no-repeat;
  }
  @media only screen and (-webkit-device-pixel-ratio: 2){
  .signin-box h2 strong {
  background: transparent url(//ssl.gstatic.com/accounts/ui/google-signin-flat_2x.png) no-repeat;
  background-size: 52px 19px;
  }
  }
  .signin-box div {
  margin: 0 0 1.5em;
  }
  .signin-box label {
  display: block;
  }
  .signin-box input[type=text],
  .signin-box input[type=password] {
  width: 100%;
  height: 32px;
  font-size: 15px;
  direction: ltr;
  }
  .signin-box .email-label,
  .signin-box .passwd-label {
  font-weight: bold;
  margin: 0 0 .5em;
  display: block;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  }
  .signin-box .reauth {
  display: inline-block;
  font-size: 15px;
  height: 29px;
  line-height: 29px;
  margin: 0;
  }
  .signin-box label.remember {
  display: inline-block;
  vertical-align: top;
  margin: 9px 0 0;
  }
  .signin-box .remember-label {
  font-weight: normal;
  color: #666;
  line-height: 0;
  padding: 0 0 0 .4em;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  }
  .signin-box input[type=submit] {
  margin: 0 1.5em 1.2em 0;
  height: 32px;
  font-size: 13px;
  }
  .signin-box ul {
  margin: 0;
  }
  .signin-box .training-msg {
  padding: .5em 8px;
  background: #f9edbe;
  }
  .signin-box .training-msg p {
  margin: 0 0 .5em;
  }
</style>
  <style type="text/css">
.youtube .product-headers h1 {
  text-indent: -9999em;
  width: 110px;
  height: 44px;
}
.email-label span {
  color: #666;
  font-weight: normal;
}
.youtube .product-headers h2 {
  display: none;
}
.youtube h2 {
  color: #666;
}
.youtube ul {
  margin-left: 1em;
}
</style>
  </head>
  <body>
  <div class="wrapper">
  <div class="google-header-bar">
  <div class="header content clearfix">
  <img height="41" width="116" class="logo" src="/BetaTube.png" alt="betatube+">
  <span class="signup-button">
  New to Betatube?
  <a id="link-signup" class="g-button g-button-red" href="/sign_up" >
  Create an account
  </a>
  </span>
  </div>
  </div>
  <div class="main content clearfix">
  <div class="sign-in">
<div class="signin-box">
  <h2>Sign in</h2>
  <form id="gaia_loginform" action="/d/login" method="post">
  <input type="hidden" 
  
    
  name="continue" id="continue" value="/"

  
 >
  <input type="hidden" 
  
    
  name="service" id="service" value="youtube"

  
 >
  <input type="hidden" 
  
    
  name="uilel" id="uilel" value="3"

  
 >
  <input type="hidden" 
  
    
  name="dsh" id="dsh" value="8819644149199763331"

  
 >
  <input type="hidden" 
  
    
  name="ltmpl" id="ltmpl" value="sso"

  
 >
  <input type="hidden" 
  
    
  name="hl" id="hl" value="en_US"

  
 >
  <input type="hidden"
         name="GALX"
         value="w2waOR0cIXE">
<input type="hidden" name="timeStmp" id="timeStmp"
       value=''/>
<input type="hidden" name="secTok" id="secTok"
       value=''/>
<div class="email-div">
  <label for="username"><strong class="email-label">Betatube+ Email <span>or Betatube username</span></strong></label>
  <input type="text" spellcheck="false"  
  
    
  name="username" id="Email" value=""

  

      
    >
</div>
<div class="passwd-div">
  <label for="password"><strong class="passwd-label">Password</strong></label>
  <input type="password" name="password" id="Passwd"
    
    
    
  >
</div>
  <input type="submit" class="g-button g-button-submit" name="signIn" id="signIn"
      value="Sign in">
  <input type="hidden" name="rmShown" value="1">
  </form>
  <ul>
  <li>
  <a id="link-forgot-passwd"
          href="https://discord.gg/uPy2QyuMg8"
          target="_top">
  Can&#39;t access your account?
  </a>
  </li>
  </ul>
</div>
  </div>
  <div class="product-info youtube">
<div class="product-headers">
  <h1 class="redtext">Betatube</h1>
  <h2>Sign in to Betatube with your Betatube username <b>OR</b> Betatube+ Account</h2>
</div>
  <h2>Sign in to Betatube!</h2>
<p><strong>Join the least gay video community!</strong></p>
<p>Get full access to Betatube with your account:</p>
<ul>
  <li>Upload and share your own videos with the world</li>
  <li>Comment on, rate, and make video responses to your favorite videos</li>
  <li>Build playlists of favorites to watch later</li>
</ul>
  </div>
  </div>
<div class="google-footer-bar">
  <div class="footer content clearfix">
  <ul>
  <li>2022 Betatube</li>
  <li><a href="/tos" target="_blank">Terms of Service</a></li>
  <li><a href="https://discord.gg/uPy2QyuMg8" target="_blank">Discord</a></li>
  <li><a href="https://discord.gg/uPy2QyuMg8" target="_blank">Help</a></li>
  </ul>
  <form>
  <select id="lang-chooser" class="lang-chooser" style="display: none;">
  <option value="2012"
         >
  Cosmic Panda
  </option>
  <option value="2013"
        selected="selected" >
  Hitchhiker
  </option>
  </select>
  </form>
  </div>
</div>
  <script type="text/javascript">
  function gaia_parseFragment() {
  var hash = location.hash;
  var params = {};
  if (!hash) {
  return params;
  }
  var paramStrs = decodeURIComponent(hash.substring(1)).split('&');
  for (var i = 0; i < paramStrs.length; i++) {
      var param = paramStrs[i].split('=');
      params[param[0]] = param[1];
    }
    return params;
  }

  function gaia_prefillEmail() {
    var f = null;
    if (document.getElementById) {
      f = document.getElementById('gaia_loginform');
    }

    if (f && f.Email && (f.Email.value == null || f.Email.value == '')
        && (f.Email.type != 'hidden')) {
      hashParams = gaia_parseFragment();
      if (hashParams['Email'] && hashParams['Email'] != '') {
        f.Email.value = hashParams['Email'];
      }
    }
  }

  
  try {
    gaia_prefillEmail();
  } catch (e) {
  }


  
  function gaia_setFocus() {
    var f = null;
    if (document.getElementById) {
      f = document.getElementById('gaia_loginform');
    }
    if (f) {
      if (f.Email && (f.Email.value == null || f.Email.value == '')
          && (f.Email.type != 'hidden') && f.Email.focus) {
        f.Email.focus();
      } else if (f.Passwd) {
        f.Passwd.focus();
      }
    }
  }
  window.onload = gaia_setFocus;

  function gaia_onLoginSubmit() {
    
    
    if (window.gaiacb_onLoginSubmit) {
      return gaiacb_onLoginSubmit();
    } else {
      return true;
    }
  }
  document.getElementById('gaia_loginform').onsubmit = gaia_onLoginSubmit;

  
  

  

  

  

</script>
<script type="text/javascript">
  gaia_appendParam = function(url, name, value) {
  var param = encodeURIComponent(name) + '=' + encodeURIComponent(value);
  if (url.indexOf('?') >= 0) {
  return url + '&' + param;
  } else {
  return url + '?' + param;
  }
  };
  var langChooser = document.getElementById('lang-chooser');
  if (langChooser) {
  var langChooserParam = 'hl';
  var langChooserUrl = '\x2Flayouts/2012';
  langChooser.style.display = '';
  langChooser.onchange = function() {
  window.location.href =
  gaia_appendParam(langChooserUrl, langChooserParam, this.value);
  };
  }
</script>
  </div>
  </body>
</html>

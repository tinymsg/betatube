<html>
<head>
<script type="text/javascript" src="/april/player1.js"></script>
<link rel="stylesheet" type="text/css" href="/april/player1.css">
</head>
<body>
<div id="wrapper">
 <div id='player_wrapper'>
  <video id='video_player'>
   <source src='/dynamic/videos/<?php echo $_GET['v'] ?>' type='video/mp4'>
  </video>
  <div id='player_controls'>
   <input type="image" src="/april/imfg/player/play.png" onclick="play_vid()" id="play_button">
   <input type="image" src="/april/imfg/player/pause.png" onclick="pause_vid()" id="pause_button">
   <input type="image" src="/april/imfg/player/stop.png" onclick="stop_vid()" id="stop_button">
   <img src="/april/imfg/player/volume.png" id="vol_img">
   <input type="range" id="change_vol" onchange="change_vol()" step="0.05" min="0" max="1" value="1">
  </div>
 </div>
</div>
</body>
</html>
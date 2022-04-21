<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_update.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_insert.php"); ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__user_i = new user_insert($__db); ?>
<?php $__user_u = new user_update($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php if(!$__video_h->video_exists($_GET['v'])) { header("Location: /?error=This video does not exist!"); } ?>
<?php $_video = $__video_h->fetch_video_rid($_GET['v']); ?>
<?php $_video['comments'] = $__video_h->get_comments_from_video($_video['rid']); ?>
<?php
	if($_video['visibility'] == "v" && @$_SESSION['siteusername'] != $_video['author'])
		header("Location: /");

	$__video_h->check_view($_GET['v'], @$_SERVER["HTTP_CF_CONNECTING_IP"]);

	$_SESSION['current_video'] = $_video['rid'];

	/* 
	PREPARE EMBEDS CLASS -- function(string $page_title, string $page_description...) 
	Returns a list of arrays for compatibility purposes & but downside is ugly for loop codes 
	Work on this tomorrow or some shit idk lol
	*/

	/* 
	USE THE GOD DAMN __CONFIG MORE -- idiot
	Work on this tomorrow or some shit
	*/
	
	$__server->page_embeds->page_title = htmlspecialchars($_video['title']);
	$__server->page_embeds->page_description = htmlspecialchars($_video['description']);
	$__server->page_embeds->page_image = "/dynamic/thumbs/" . $_video['thumbnail'];
	$__server->page_embeds->page_url = "http://betatube.net/watch?v=" . htmlspecialchars($_video['rid']);
?>
		<link id="css-2955892050" rel="stylesheet" href="/yts/cssbin/www-core-vflEJosKh.css">
		<link id="css-151587203" rel="stylesheet" href="/yts/cssbin/www-home-vfl_Eri60.css">
			<script id="js-3960859142" src="//s.ytimg.com/yts/jsbin/www-core-vflKz5-wF.js" data-loaded="true"></script>
			<script id="www-core-js" src="//s.ytimg.com/yt/jsbin/www-core-vfl-1JTp7.js" data-loaded="true"></script>
			<script id="www-core-js" src="/yt/jsbin/www-core-vfl1pq97W.js" data-loaded="true"></script>
<link id="css-3576209200" class="www-channels4" rel="stylesheet" href="/yts/cssbin/www-channels4-vflQKV14P1.css" data-loaded="true">
<script id="js-2897565593" class="www_watch_mod" src="/yts/jsbin/www_watch_mod-vflaF-vtA.js" data-loaded="true"></script>
<script id="js-2430431732" class="www_common_mod" src="/yts/jsbin/www_common_mod-vflFz4kv3.js" data-loaded="true"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="/yt/jsbin/plupload.full.min.js"></script>

<body dir="ltr" class="  ltr        site-left-aligned  exp-new-site-width  exp-watch7-comment-ui  hitchhiker-enabled      guide-enabled    guide-collapsed  page-loaded">


  <div id="body-container">
    <form name="logoutForm" method="POST" action="/logout"><input type="hidden" name="action_logout" value="1"></form>

    <?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/2013_header.php"); ?>

    <div id="page-container">
      <div id="page" class="  watch  clearfix">


        <?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/2013_guide.php"); ?>
<div id="content">  <div id="watch7-container" class="transition-content" itemscope="" itemid="" itemtype="http://schema.org/VideoObject">
        <link itemprop="url" href="http://www.youtube.com/watch?v=qKoSWMcHoos">
    <meta itemprop="name" content="Meteor Explodes Over Russia, Nearly 1,000 Hurt">
    <meta itemprop="description" content="A meteor streaked across the sky and exploded over Russia's Ural Mountains with the power of an atomic bomb Friday, its sonic blasts shattering countless win...">
    <meta itemprop="duration" content="PT1M14S">
    <meta itemprop="unlisted" content="False">
    <meta itemprop="paid" content="False">
      <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
        <link itemprop="url" href="http://www.youtube.com/user/AssociatedPress">
      </span>
    <link itemprop="thumbnailUrl" href="https://i2.ytimg.com/vi/qKoSWMcHoos/hqdefault.jpg">
    <span itemprop="thumbnail" itemscope="" itemtype="http://schema.org/ImageObject">
      <link itemprop="url" href="https://i2.ytimg.com/vi/qKoSWMcHoos/mqdefault.jpg">
      <meta itemprop="width" content="320">
      <meta itemprop="height" content="180">
    </span>
      <link itemprop="embedURL" href="http://www.youtube.com/v/qKoSWMcHoos?version=3&amp;autohide=1">
      <meta itemprop="playerType" content="Flash">
      <meta itemprop="width" content="853">
      <meta itemprop="height" content="480">
      <meta itemprop="isFamilyFriendly" content="True">
      <meta itemprop="regionsAllowed" content="AD,AE,AF,AG,AI,AL,AM,AO,AQ,AR,AS,AT,AU,AW,AX,AZ,BA,BB,BD,BE,BF,BG,BH,BI,BJ,BL,BM,BN,BO,BQ,BR,BS,BT,BV,BW,BY,BZ,CA,CC,CD,CF,CG,CH,CI,CK,CL,CM,CN,CO,CR,CU,CV,CW,CX,CY,CZ,DE,DJ,DK,DM,DO,DZ,EC,EE,EG,EH,ER,ES,ET,FI,FJ,FK,FM,FO,FR,GA,GB,GD,GE,GF,GG,GH,GI,GL,GM,GN,GP,GQ,GR,GS,GT,GU,GW,GY,HK,HM,HN,HR,HT,HU,ID,IE,IL,IM,IN,IO,IQ,IR,IS,IT,JE,JM,JO,JP,KE,KG,KH,KI,KM,KN,KP,KR,KW,KY,KZ,LA,LB,LC,LI,LK,LR,LS,LT,LU,LV,LY,MA,MC,MD,ME,MF,MG,MH,MK,ML,MM,MN,MO,MP,MQ,MR,MS,MT,MU,MV,MW,MX,MY,MZ,NA,NC,NE,NF,NG,NI,NL,NO,NP,NR,NU,NZ,OM,PA,PE,PF,PG,PH,PK,PL,PM,PN,PR,PS,PT,PW,PY,QA,RE,RO,RS,RU,RW,SA,SB,SC,SD,SE,SG,SH,SI,SJ,SK,SL,SM,SN,SO,SR,SS,ST,SV,SX,SY,SZ,TC,TD,TF,TG,TH,TJ,TK,TL,TM,TN,TO,TR,TT,TV,TW,TZ,UA,UG,UM,US,UY,UZ,VA,VC,VE,VG,VI,VN,VU,WF,WS,YE,YT,ZA,ZM,ZW">




    <div id="watch7-video-container">
      <div id="watch7-video">
            <script>
if (window.yt.timing) {yt.timing.tick("bf");}    </script>

            <script>
      yt.playerConfig = {"url_v8": "https:\/\/web.archive.org\/web\/20130216025900\/https:\/\/s.ytimg.com\/yts\/swfbin\/cps-vflhcK6A1.swf", "html5": true, "params": {"allowfullscreen": "true", "bgcolor": "#000000", "allowscriptaccess": "always"}, "url_v9as2": "https:\/\/web.archive.org\/web\/20130216025900\/https:\/\/s.ytimg.com\/yts\/swfbin\/cps-vflhcK6A1.swf", "attrs": {"id": "movie_player"}, "url": "https:\/\/web.archive.org\/web\/20130216025900\/https:\/\/s.ytimg.com\/yts\/swfbin\/watch_as3-vfllpXa0y.swf", "sts": 136089118952, "args": {"force_one_text_ad": true, "mpvid": "AATVzqx7aHdd4IKR", "c": "WEB", "prefetch_ad_live_stream": true, "as_launched_in_country": "1", "playlist_module": "https:\/\/web.archive.org\/web\/20130216025900\/https:\/\/s.ytimg.com\/yts\/swfbin\/playlist_module-vflkSbdxx.swf", "ptchn": "AssociatedPress", "ad_host_tier": "496601", "afv": true, "hl": "en_US", "abd": "1", "tmi": "1", "url_encoded_fmt_stream_map": "fallback_host=tc.v23.cache2.c.youtube.com\u0026sig=5CE61677EB75798637B3F7F87F8EAAC2D2770872.5EB810F1FC6BDE821D66FC08D8DB7ADC0926AE85\u0026type=video%2Fwebm%3B+codecs%3D%22vp8.0%2C+vorbis%22\u0026url=http%3A%2F%2Fr7---sn-nx57yn7z.c.youtube.com%2Fvideoplayback%3Fid%3Da8aa1258c707a28b%26cp%3DU0hVRlBLUl9HS0NONV9IRVZGOmdHWEprUGlVb1FY%26fexp%3D920704%252C912806%252C902000%252C922403%252C922405%252C929901%252C913605%252C925006%252C931202%252C908529%252C920201%252C930101%252C911116%252C910221%252C901451%252C919114%26ms%3Dau%26source%3Dyoutube%26upn%3DeFfexTWLsUo%26expire%3D1361004521%26ipbits%3D8%26itag%3D44%26key%3Dyt1%26ip%3D207.241.226.160%26newshard%3Dyes%26mt%3D1360983492%26ratebypass%3Dyes%26sparams%3Dcp%252Cid%252Cip%252Cipbits%252Citag%252Cratebypass%252Csource%252Cupn%252Cexpire%26mv%3Dm%26sver%3D3\u0026itag=44\u0026quality=large,fallback_host=tc.v5.cache6.c.youtube.com\u0026sig=D20EF32DD3EA5E1FBE9B394170DFFF8F5ED856F9.CFC7E66700673A860040EACBAB4CDB1B704FF2DF\u0026type=video%2Fx-flv\u0026url=http%3A%2F%2Fr7---sn-nx57yn7z.c.youtube.com%2Fvideoplayback%3Fid%3Da8aa1258c707a28b%26cp%3DU0hVRlBLUl9HS0NONV9IRVZGOmdHWEprUGlVb1FY%26algorithm%3Dthrottle-factor%26fexp%3D920704%252C912806%252C902000%252C922403%252C922405%252C929901%252C913605%252C925006%252C931202%252C908529%252C920201%252C930101%252C911116%252C910221%252C901451%252C919114%26ms%3Dau%26source%3Dyoutube%26upn%3DeFfexTWLsUo%26expire%3D1361004521%26ipbits%3D8%26itag%3D35%26key%3Dyt1%26ip%3D207.241.226.160%26newshard%3Dyes%26factor%3D1.25%26sparams%3Dalgorithm%252Cburst%252Ccp%252Cfactor%252Cid%252Cip%252Cipbits%252Citag%252Csource%252Cupn%252Cexpire%26mv%3Dm%26mt%3D1360983492%26burst%3D40%26sver%3D3\u0026itag=35\u0026quality=large,fallback_host=tc.v10.cache3.c.youtube.com\u0026sig=BF1C430E4A579EC94A241B02A3CD0F03CC95121F.C51B26C0AF36B7163B370AD97BE705A124DDE651\u0026type=video%2Fwebm%3B+codecs%3D%22vp8.0%2C+vorbis%22\u0026url=http%3A%2F%2Fr7---sn-nx57yn7z.c.youtube.com%2Fvideoplayback%3Fid%3Da8aa1258c707a28b%26cp%3DU0hVRlBLUl9HS0NONV9IRVZGOmdHWEprUGlVb1FY%26fexp%3D920704%252C912806%252C902000%252C922403%252C922405%252C929901%252C913605%252C925006%252C931202%252C908529%252C920201%252C930101%252C911116%252C910221%252C901451%252C919114%26ms%3Dau%26source%3Dyoutube%26upn%3DeFfexTWLsUo%26expire%3D1361004521%26ipbits%3D8%26itag%3D43%26key%3Dyt1%26ip%3D207.241.226.160%26newshard%3Dyes%26mt%3D1360983492%26ratebypass%3Dyes%26sparams%3Dcp%252Cid%252Cip%252Cipbits%252Citag%252Cratebypass%252Csource%252Cupn%252Cexpire%26mv%3Dm%26sver%3D3\u0026itag=43\u0026quality=medium,fallback_host=tc.v12.cache5.c.youtube.com\u0026sig=76FFB1FDC759D3F8F6BDB6443DC12474A9DF0DD1.7EA4D746A5437D1C24D9FBD99E8CDE6C58D78F94\u0026type=video%2Fx-flv\u0026url=http%3A%2F%2Fr7---sn-nx57yn7z.c.youtube.com%2Fvideoplayback%3Fid%3Da8aa1258c707a28b%26cp%3DU0hVRlBLUl9HS0NONV9IRVZGOmdHWEprUGlVb1FY%26algorithm%3Dthrottle-factor%26fexp%3D920704%252C912806%252C902000%252C922403%252C922405%252C929901%252C913605%252C925006%252C931202%252C908529%252C920201%252C930101%252C911116%252C910221%252C901451%252C919114%26ms%3Dau%26source%3Dyoutube%26upn%3DeFfexTWLsUo%26expire%3D1361004521%26ipbits%3D8%26itag%3D34%26key%3Dyt1%26ip%3D207.241.226.160%26newshard%3Dyes%26factor%3D1.25%26sparams%3Dalgorithm%252Cburst%252Ccp%252Cfactor%252Cid%252Cip%252Cipbits%252Citag%252Csource%252Cupn%252Cexpire%26mv%3Dm%26mt%3D1360983492%26burst%3D40%26sver%3D3\u0026itag=34\u0026quality=medium,fallback_host=tc.v24.cache8.c.youtube.com\u0026sig=A73616F5A1E32CE99F0F2EE45BACE997E4744881.16BB8B2C844A208A80CA05851734B0D31F5080B7\u0026type=video%2Fmp4%3B+codecs%3D%22avc1.42001E%2C+mp4a.40.2%22\u0026url=http%3A%2F%2Fr7---sn-nx57yn7z.c.youtube.com%2Fvideoplayback%3Fid%3Da8aa1258c707a28b%26cp%3DU0hVRlBLUl9HS0NONV9IRVZGOmdHWEprUGlVb1FY%26fexp%3D920704%252C912806%252C902000%252C922403%252C922405%252C929901%252C913605%252C925006%252C931202%252C908529%252C920201%252C930101%252C911116%252C910221%252C901451%252C919114%26ms%3Dau%26source%3Dyoutube%26upn%3DeFfexTWLsUo%26expire%3D1361004521%26ipbits%3D8%26itag%3D18%26key%3Dyt1%26ip%3D207.241.226.160%26newshard%3Dyes%26mt%3D1360983492%26ratebypass%3Dyes%26sparams%3Dcp%252Cid%252Cip%252Cipbits%252Citag%252Cratebypass%252Csource%252Cupn%252Cexpire%26mv%3Dm%26sver%3D3\u0026itag=18\u0026quality=medium,fallback_host=tc.v15.cache3.c.youtube.com\u0026sig=C80951CF12771474759A767FC7A8D06B71557394.305C59E316C557DDFF8F351459A0DA8ADED239FD\u0026type=video%2Fx-flv\u0026url=http%3A%2F%2Fr7---sn-nx57yn7z.c.youtube.com%2Fvideoplayback%3Fid%3Da8aa1258c707a28b%26cp%3DU0hVRlBLUl9HS0NONV9IRVZGOmdHWEprUGlVb1FY%26algorithm%3Dthrottle-factor%26fexp%3D920704%252C912806%252C902000%252C922403%252C922405%252C929901%252C913605%252C925006%252C931202%252C908529%252C920201%252C930101%252C911116%252C910221%252C901451%252C919114%26ms%3Dau%26source%3Dyoutube%26upn%3DeFfexTWLsUo%26expire%3D1361004521%26ipbits%3D8%26itag%3D5%26key%3Dyt1%26ip%3D207.241.226.160%26newshard%3Dyes%26factor%3D1.25%26sparams%3Dalgorithm%252Cburst%252Ccp%252Cfactor%252Cid%252Cip%252Cipbits%252Citag%252Csource%252Cupn%252Cexpire%26mv%3Dm%26mt%3D1360983492%26burst%3D40%26sver%3D3\u0026itag=5\u0026quality=small,fallback_host=tc.v11.cache4.c.youtube.com\u0026sig=7A0CA182DD6FB28B1690E11700E220D2B8BE5065.1963BE70215D2A8AF055DB0E9BBA956A9D6C1368\u0026type=video%2F3gpp%3B+codecs%3D%22mp4v.20.3%2C+mp4a.40.2%22\u0026url=http%3A%2F%2Fr7---sn-nx57yn7z.c.youtube.com%2Fvideoplayback%3Fid%3Da8aa1258c707a28b%26cp%3DU0hVRlBLUl9HS0NONV9IRVZGOmdHWEprUGlVb1FY%26algorithm%3Dthrottle-factor%26fexp%3D920704%252C912806%252C902000%252C922403%252C922405%252C929901%252C913605%252C925006%252C931202%252C908529%252C920201%252C930101%252C911116%252C910221%252C901451%252C919114%26ms%3Dau%26source%3Dyoutube%26upn%3DeFfexTWLsUo%26expire%3D1361004521%26ipbits%3D8%26itag%3D36%26key%3Dyt1%26ip%3D207.241.226.160%26newshard%3Dyes%26factor%3D1.25%26sparams%3Dalgorithm%252Cburst%252Ccp%252Cfactor%252Cid%252Cip%252Cipbits%252Citag%252Csource%252Cupn%252Cexpire%26mv%3Dm%26mt%3D1360983492%26burst%3D40%26sver%3D3\u0026itag=36\u0026quality=small,fallback_host=tc.v21.cache3.c.youtube.com\u0026sig=B3E3F98A81B7E2842856A1A7C03197FD90BFF940.94BABB0ADFC09AC7BE3782ED54391613B7F778B9\u0026type=video%2F3gpp%3B+codecs%3D%22mp4v.20.3%2C+mp4a.40.2%22\u0026url=http%3A%2F%2Fr7---sn-nx57yn7z.c.youtube.com%2Fvideoplayback%3Fid%3Da8aa1258c707a28b%26cp%3DU0hVRlBLUl9HS0NONV9IRVZGOmdHWEprUGlVb1FY%26algorithm%3Dthrottle-factor%26fexp%3D920704%252C912806%252C902000%252C922403%252C922405%252C929901%252C913605%252C925006%252C931202%252C908529%252C920201%252C930101%252C911116%252C910221%252C901451%252C919114%26ms%3Dau%26source%3Dyoutube%26upn%3DeFfexTWLsUo%26expire%3D1361004521%26ipbits%3D8%26itag%3D17%26key%3Dyt1%26ip%3D207.241.226.160%26newshard%3Dyes%26factor%3D1.25%26sparams%3Dalgorithm%252Cburst%252Ccp%252Cfactor%252Cid%252Cip%252Cipbits%252Citag%252Csource%252Cupn%252Cexpire%26mv%3Dm%26mt%3D1360983492%26burst%3D40%26sver%3D3\u0026itag=17\u0026quality=small", "keywords": "russia_meteorite,Russia,Eastern Europe,General news", "afv_video_min_cpm": 6000000, "afv_ad_tag_restricted_to_instream": "https:\/\/web.archive.org\/web\/20130216025900\/http:\/\/googleads.g.doubleclick.net\/pagead\/ads?client=ca-pub-6219811747049371\u0026video_cpm=6000000\u0026ad_type=video\u0026hl=en\u0026loeid=\u0026description_url=http%3A%2F%2Fwww.youtube.com%2Fvideo%2FqKoSWMcHoos\u0026host=ca-host-pub-7659031411465943\u0026ht_id=496601\u0026channel=afv_instream%2BVertical_3%2BVertical_16%2BVertical_396%2Bafv_instream_us%2Bafv_user_associatedpress%2Bafv_user_id_52X5wxOL_s5yw0dQk7NtgA%2Byt_mpvid_AATVzqx7aHdd4IKR%2Byt_cid_1123%2Bytexp_920704.912806.902000.922403.922405.929901.913605.925006.931202.908529.920201.930101.911116.910221.901451.919114%2Bytdevice_1%2Bytps_default%2Bytel_detailpage\u0026max_ad_duration=15000\u0026ytdevice=1", "pyv_in_related_cafe_experiment_id": "", "inactive_skippable_threshold": 600000, "rvs": "id=UZJiCBLANfU\u0026view_count=2%2C277\u0026length_seconds=63\u0026title=Reid%3A+Republicans+Look+to+Block+Hagel\u0026author=AssociatedPress,id=4zAG_al9p4A\u0026view_count=2%2C649\u0026length_seconds=53\u0026title=Raw%3A+Stricken+Cruise+Ship+Heads+to+Ala.\u0026author=AssociatedPress,id=5sNgpW2OUOk\u0026view_count=271\u0026length_seconds=111\u0026title=Passenger%3A+%27Good+Thing%27+to+Help+Disabled+Ship\u0026author=AssociatedPress,id=Uwywaecl1Sk\u0026view_count=169\u0026length_seconds=109\u0026title=Arrests%2C+Culprit+Named+in+Horsemeat+Scandal\u0026author=AssociatedPress,id=JrzT5kgtj8U\u0026view_count=6%2C726\u0026length_seconds=68\u0026title=Raw%3A+Passenger+Captures+Smoke+From+Triumph+Fire\u0026author=AssociatedPress,id=j_cxA8LJuE8\u0026view_count=201\u0026length_seconds=92\u0026title=Airline+CEOs%3A+US+Airways%2C+AA+Better+Together\u0026author=AssociatedPress,id=DjCXF1Z0Sgc\u0026view_count=1%2C688\u0026length_seconds=63\u0026title=Raw%3A+On+the+Water+With+the+Crippled+Cruise+Ship\u0026author=AssociatedPress,id=ayvOPkLS8UE\u0026view_count=101\u0026length_seconds=104\u0026title=Broken+Towline+Adds+Misery+to+Ship+Nightmare\u0026author=AssociatedPress,id=Q9EfRuZemio\u0026view_count=139\u0026length_seconds=80\u0026title=Court+Delay+for+Olympic+Sprinter\u0026author=AssociatedPress,id=iY0ZbE8syWo\u0026view_count=42\u0026length_seconds=129\u0026title=Valentine%27s+Day+Means+Passion+for+Paintings\u0026author=AssociatedPress,id=X91hKGDc920\u0026view_count=48\u0026length_seconds=95\u0026title=Freshman+Lawmakers%3A+Let%27s+Work+Together\u0026author=AssociatedPress,id=SxdvinxyfQI\u0026view_count=105\u0026length_seconds=74\u0026title=AP+Top+Stories+Feb.+14+P\u0026author=AssociatedPress", "csi_page_type": "watch7ad", "account_playback_token": "", "ad_slots": "0", "sffb": true, "cr": "US", "video_wall": 1, "no_get_video_log": "1", "ad_tag": "https:\/\/web.archive.org\/web\/20130216025900\/https:\/\/ad-g.doubleclick.net\/N4061\/pfadx\/com.ytpwatch.newsandpolitics\/main_1123;sz=WIDTHxHEIGHT;kvid=qKoSWMcHoos;kpu=AssociatedPress;kpid=1123;u=qKoSWMcHoos|1123;mpvid=AATVzqx7aHdd4IKR;ssl=1;plat=pc;kpeid=52X5wxOL_s5yw0dQk7NtgA;afct=site_content;afv=1;dc_dedup=1;k5=3_16_396;kclt=1;kcr=us;kga=-1;kgg=-1;klg=en;kmsrd=1;ko=p;kr=H;kvz=205;longads=1;nlfb=1;shortform=1;tves=1;yt_vrallowed=1;ytcat=25;ytdevice=1;ytexp=920704.912806.902000.922403.922405.929901.913605.925006.931202.908529.920201.930101.911116.910221.901451.919114;ytps=default;ytvt=w;!c=1123;k2=3;k2=16;k2=396;", "title": "Meteor Explodes Over Russia, Nearly 1,000 Hurt", "gut_tag": "\/4061\/ytpwatch\/main_1123", "ad_video_pub_id": "ca-pub-6219811747049371", "enablecsi": "1", "watermark": ",https:\/\/s.ytimg.com\/yts\/img\/watermark\/youtube_watermark-vflHX6b6E.png,https:\/\/s.ytimg.com\/yts\/img\/watermark\/youtube_hd_watermark-vflAzLcD6.png", "no_afv_instream": "1", "sdetail": "p:\/channel\/UCBR8-60-B28hp2BmDPdn", "is_html5_mobile_device": false, "tk": "w-1eGG5dCoK4pyoCWo20D99EFUcZSgpDJ48FX70hnY7F4cswIi8ZWw==", "ad_device": 1, "enablejsapi": 1, "video_id": "qKoSWMcHoos", "ad_logging_flag": 1, "ad_host": "ca-host-pub-7659031411465943", "ptk": "AssociatedPress", "t": "vjVQa1PpcFM6ISP_wqnHmWFcmRPdRI8MjDtsD8_zDe8=", "host_language": "en", "afv_ad_tag": "https:\/\/web.archive.org\/web\/20130216025900\/http:\/\/googleads.g.doubleclick.net\/pagead\/ads?client=ca-pub-6219811747049371\u0026video_cpm=6000000\u0026ad_type=video\u0026hl=en\u0026loeid=\u0026description_url=http%3A%2F%2Fwww.youtube.com%2Fvideo%2FqKoSWMcHoos\u0026host=ca-host-pub-7659031411465943\u0026ht_id=496601\u0026channel=afv_instream%2BVertical_3%2BVertical_16%2BVertical_396%2Bafv_instream_us%2Bafv_user_associatedpress%2Bafv_user_id_52X5wxOL_s5yw0dQk7NtgA%2Byt_mpvid_AATVzqx7aHdd4IKR%2Byt_cid_1123%2Bytexp_920704.912806.902000.922403.922405.929901.913605.925006.931202.908529.920201.930101.911116.910221.901451.919114%2Bytdevice_1%2Bytps_default%2Bytel_detailpage\u0026max_ad_duration=15000\u0026ytdevice=1", "storyboard_spec": "https:\/\/web.archive.org\/web\/20130216025900\/https:\/\/i2.ytimg.com\/sb\/qKoSWMcHoos\/storyboard3_L$L\/$N.jpg|48#27#100#10#10#0#default#6MDJBnDCLuenUY1W5vKLGzEmU2o|80#45#75#10#10#1000#M$M#CLG_IKzKsjWpU_WYHYUVjmOMYy4|160#90#75#5#5#1000#M$M#kvv3jZ6iWaIAH2YTlAgGsITY8SA", "pltype": "content", "ssl": 1, "adsense_video_doc_id": "yt_qKoSWMcHoos", "ad_channel_code_instream": "afv_instream,Vertical_3,Vertical_16,Vertical_396,afv_instream_us,afv_user_associatedpress,afv_user_id_52X5wxOL_s5yw0dQk7NtgA,yt_mpvid_AATVzqx7aHdd4IKR,yt_cid_1123,ytexp_920704.912806.902000.922403.922405.929901.913605.925006.931202.908529.920201.930101.911116.910221.901451.919114,ytdevice_1,ytps_default,ytel_detailpage", "fexp": "920704,912806,902000,922403,922405,929901,913605,925006,931202,908529,920201,930101,911116,910221,901451,919114", "dclk": true, "sourceid": "y", "invideo": true, "showpopout": 1, "ad_flags": 0, "sendtmp": "1", "endscreen_module": "https:\/\/web.archive.org\/web\/20130216025900\/https:\/\/s.ytimg.com\/yts\/swfbin\/endscreen-vfl4_CAIR.swf", "afv_inslate_ad_tag": "https:\/\/web.archive.org\/web\/20130216025900\/http:\/\/googleads.g.doubleclick.net\/pagead\/ads?client=ca-pub-6219811747049371\u0026ad_type=userchoice\u0026hl=en\u0026loeid=\u0026description_url=http%3A%2F%2Fwww.youtube.com%2Fvideo%2FqKoSWMcHoos\u0026host=ca-host-pub-7659031411465943\u0026ht_id=496601\u0026max_ad_duration=15000\u0026ytdevice=1", "oid": "MldY9LAJ_TSuiNeKOk09Lw", "timestamp": 1360983540, "mpu": true, "excluded_ads": "2=2_2_1,1_2_1,1_2,2_2", "length_seconds": 74, "yt_pt": "AD1B29mCY7zFeWmd-g6V6F49yi1j-9XxWxrG-qxfn7hjyHMdYbdqwc5VxpQGM1X2jJhm_Ofribgw9cjjK1bJ0EDJ0Nr3fwa0K-X6LIAYNdVkKFSPcqIN7AXUdQggldu1mTSlIRh7MmlgdST4OVQp", "autohide": "2", "allow_embed": 1, "ad3_module": "https:\/\/web.archive.org\/web\/20130216025900\/https:\/\/s.ytimg.com\/yts\/swfbin\/ad3-vfl6hBN5q.swf", "ad_eurl": "https:\/\/web.archive.org\/web\/20130216025900\/http:\/\/www.youtube.com\/video\/qKoSWMcHoos", "loeid": "", "ad_channel_code_overlay": "invideo_overlay_480x70_cat25,afv_overlay,Vertical_3,Vertical_16,Vertical_396,afv_user_associatedpress,afv_user_id_52X5wxOL_s5yw0dQk7NtgA,yt_mpvid_AATVzqx7aHdd4IKR,yt_cid_1123,ytexp_920704.912806.902000.922403.922405.929901.913605.925006.931202.908529.920201.930101.911116.910221.901451.919114,ytdevice_1,ytps_default,ytel_detailpage", "shortform": true, "vq": "auto", "share_icons": "https:\/\/web.archive.org\/web\/20130216025900\/https:\/\/s.ytimg.com\/yts\/swfbin\/sharing-vflD3g2_b.swf", "cafe_experiment_id": "", "fmt_list": "44\/854x480\/99\/0\/0,35\/854x480\/9\/0\/115,43\/640x360\/99\/0\/0,34\/640x360\/9\/0\/115,18\/640x360\/9\/0\/115,5\/320x240\/7\/0\/0,36\/320x240\/99\/0\/0,17\/176x144\/99\/0\/0", "sk": "G5KGZEWxI4nJBoQri7cbz62Vz6cVABvdC", "plid": "AATVzqx6xWXuUPyl", "cid": 1123, "referrer": "https:\/\/web.archive.org\/web\/20130216025900\/https:\/\/www.youtube.com\/channel\/UCBR8-60-B28hp2BmDPdntcQ", "afv_instream_max": 15000}, "min_version": "8.0.0", "assets": {"css": "https:\/\/web.archive.org\/web\/20130216025900\/https:\/\/s.ytimg.com\/yts\/cssbin\/www-player-vflwOI78o.css", "html": "\/html5_player_template", "css_actions": "https:\/\/web.archive.org\/web\/20130216025900\/https:\/\/s.ytimg.com\/yts\/cssbin\/www-player-actions-vflAdyzYh.css", "js": "https:\/\/web.archive.org\/web\/20130216025900\/https:\/\/s.ytimg.com\/yts\/jsbin\/html5player-vfllMCQWM.js"}};
    </script>
    <div id="watch7-player" class="flash-player wm-videoplayer player-root" style="overflow: hidden;"><iframe src="/player/embed?v=<?php echo $_GET['v'] ?>
</div>
    <script>
      (function() {
        var swf = "      \u003cembed type=\"application\/x-shockwave-flash\"     s\u0072c=\"\/\/s.ytimg.com\/yt\/swfbin\/watch_as3-vfloWhEvq.swf\"     id=\"movie_player\"    flashvars=\"fexp=907722%2C906062%2C910102%2C927104%2C922401%2C920704%2C912806%2C927201%2C913546%2C913556%2C925109%2C919003%2C920201%2C912706%2C900816\u0026amp;ptk=youtube_multi\u0026amp;enablecsi=1\u0026amp;allow_embed=1\u0026amp;rvs=view_count%3D24%252C209%252C324%26feature_type%3Dfvwp%26author%3DProtoOfSnagem%26title%3DHEYYEYAAEYAAAEYAEYAA%26length_seconds%3D127%26featured%3D1%26id%3DZZ5LpwO-An4%2Cview_count%3D13%252C121%252C773%26author%3Ddersiraresmc%26length_seconds%3D365%26id%3Dkv4RIhMpV40%26title%3DCritical%2BHits%2BVol.2%2Cview_count%3D9%252C033%252C824%26author%3Dayazkhatrier%26length_seconds%3D204%26id%3Dr6VCnYkNYLo%26title%3D100%2BGreatest%2BInternet%2BVideos%2BIn%2B3%2BMinutes%2Cview_count%3D642%252C634%26author%3DFa1lsp3cxD%26length_seconds%3D48%26id%3D8e47ianJYGg%26title%3DFamily%2BGuy-%2BStewie%2Bgets%2Brick%2Broll%2527d%2Cview_count%3D861%252C498%26author%3DThePrimeCronus%26length_seconds%3D3749%26id%3DS3P2iaWma-Y%26title%3D1-Hour%2BEpic%2BMusic%2B%257C%2BTwo%2BSteps%2BFrom%2BHell%2BVol.%2B2%2Cview_count%3D2%252C285%252C240%26author%3Dlilsportsplaya69%26length_seconds%3D197%26id%3DWYLvdLWkhk8%26title%3DChuck%2BNorris%2Bhears%2Bhis%2Bown%2Bfacts...%2Cview_count%3D2%252C010%252C479%26author%3Dbeeerent%26length_seconds%3D230%26id%3DLjur6v7-yoc%26title%3DHitler%2Bfinds%2Bout%2BPokemon%2Baren%2527t%2Breal%2Cview_count%3D79%252C447%252C461%26author%3Dakhilkhatri0608%26length_seconds%3D350%26id%3DVSrAJsWvEIc%26title%3DOne%2Bof%2Bthe%2Bbest%2Binspirational%2Bvideos%2Bever%2B-%2BSusan%2BBoyle%2B-%2BBritains%2BGot%2BTalent%2B2009%2Cview_count%3D299%252C142%26author%3Druigejoostnl%26length_seconds%3D52%26id%3DnAElQjPx7LQ%26title%3DBest%2Bninja%2Bdefuse%2Bever%2521%2521%2521%2BSND%2BMW3%2Cview_count%3D10%252C582%252C034%26author%3DTheSonicParadoxTeam%26length_seconds%3D471%26id%3DTCvMARhbBu8%26title%3DSonic%2BShorts%2B-%2BVolume%2B4%2Cview_count%3D10%252C345%252C179%26author%3DZeljko9NS5Serbia%26length_seconds%3D373%26id%3D1jre6_FBBc0%26title%3DKid%2BCudi%2B-%2BPursuit%2Bof%2BHappiness%2B%2528Steve%2BAoki%2BRemix%2529%2B-%2BProject%2BX%2B%2528Party%2BTrailer%2BScene%2529%2BHD%2Cview_count%3D1%252C593%252C982%26author%3DLipigl%26length_seconds%3D42%26id%3DoB6bk5S2_Zc%26title%3DThey%2Bsee%2Bme%2Btrollin%2527%2BThey%2Bhatin%2527\u0026amp;vq=auto\u0026amp;account_playback_token=\u0026amp;autohide=1\u0026amp;csi_page_type=watch5\u0026amp;keywords=Cotter548%2CShawn%2CCotter%2Clol%2Cgamefaqs%2CCE%2Creddit%2Crettocs%2Cno%2Cbrb%2Cafk%2Clawl%2Cpwnt%2CRickroll%2CRickroll%27d%2CRick%2CRoll%2CDuckroll%2CDuck%2Crick%2Croll%2Castley%2Cnever%2Cgonna%2Cgive%2Cyou%2Cup%2Clet%2Cdown%2Crun%2Caround%2Cand%2Churt\u0026amp;cr=US\u0026amp;iv3_module=http%3A%2F%2Fs.ytimg.com%2Fyt%2Fswfbin%2Fiv3_module-vflGCS_pr.swf\u0026amp;fmt_list=43%2F320x240%2F99%2F0%2F0%2C34%2F320x240%2F9%2F0%2F115%2C18%2F320x240%2F9%2F0%2F115%2C5%2F320x240%2F7%2F0%2F0%2C36%2F320x240%2F99%2F0%2F0%2C17%2F176x144%2F99%2F0%2F0\u0026amp;title=RickRoll%27D\u0026amp;length_seconds=212\u0026amp;enablejsapi=1\u0026amp;advideo=1\u0026amp;tk=o3_r7m6s_HAaFxeywi14S3qFcY4uSrEiWfZ8KVUoyEB_gj1rlrELuQ%3D%3D\u0026amp;iv_load_policy=1\u0026amp;iv_module=http%3A%2F%2Fs.ytimg.com%2Fyt%2Fswfbin%2Fiv_module-vflBJ5PLc.swf\u0026amp;sdetail=p%3Abit.ly%2FdwMq4b\u0026amp;url_encoded_fmt_stream_map=itag%3D43%26url%3Dhttp%253A%252F%252Fo-o---preferred---sn-nwj7knek---v3---lscache4.c.youtube.com%252Fvideoplayback%253Fupn%253DsWh0pzcodo0%2526sparams%253Dcp%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Cratebypass%25252Csource%25252Cupn%25252Cexpire%2526fexp%253D907722%25252C906062%25252C910102%25252C927104%25252C922401%25252C920704%25252C912806%25252C927201%25252C913546%25252C913556%25252C925109%25252C919003%25252C920201%25252C912706%25252C900816%2526ms%253Dau%2526expire%253D1349937946%2526itag%253D43%2526ipbits%253D8%2526gcr%253Dus%2526sver%253D3%2526ratebypass%253Dyes%2526mt%253D1349916311%2526ip%253D207.241.237.166%2526mv%253Dm%2526source%253Dyoutube%2526key%253Dyt1%2526cp%253DU0hTTllOVV9JUENOM19RSFlKOmVLUWdkTXRmS0dX%2526id%253Da078394896111c0d%26type%3Dvideo%252Fwebm%253B%2Bcodecs%253D%2522vp8.0%252C%2Bvorbis%2522%26fallback_host%3Dtc.v3.cache4.c.youtube.com%26sig%3DD879CD07A768B7D80A9C7D4E5DD16EDAC9DB4963.CDD2371FC76E7E959C559940842DC999573623D1%26quality%3Dmedium%2Citag%3D34%26url%3Dhttp%253A%252F%252Fo-o---preferred---sn-o097zne7---v18---lscache1.c.youtube.com%252Fvideoplayback%253Fupn%253DsWh0pzcodo0%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526fexp%253D907722%25252C906062%25252C910102%25252C927104%25252C922401%25252C920704%25252C912806%25252C927201%25252C913546%25252C913556%25252C925109%25252C919003%25252C920201%25252C912706%25252C900816%2526ms%253Dau%2526algorithm%253Dthrottle-factor%2526burst%253D40%2526ip%253D207.241.237.166%2526itag%253D34%2526gcr%253Dus%2526sver%253D3%2526mt%253D1349916311%2526mv%253Dm%2526source%253Dyoutube%2526key%253Dyt1%2526ipbits%253D8%2526factor%253D1.25%2526cp%253DU0hTTllOVV9JUENOM19RSFlKOmVLUWdkTXRmS0dX%2526expire%253D1349937946%2526id%253Da078394896111c0d%26type%3Dvideo%252Fx-flv%26fallback_host%3Dtc.v18.cache1.c.youtube.com%26sig%3DC397DCB00566E0FBB1551675B6108A4158C34557.CB3777882F05D65158C043C258FF8D4EBA90FA50%26quality%3Dmedium%2Citag%3D18%26url%3Dhttp%253A%252F%252Fo-o---preferred---sn-nwj7kned---v5---lscache6.c.youtube.com%252Fvideoplayback%253Fupn%253DsWh0pzcodo0%2526sparams%253Dcp%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Cratebypass%25252Csource%25252Cupn%25252Cexpire%2526fexp%253D907722%25252C906062%25252C910102%25252C927104%25252C922401%25252C920704%25252C912806%25252C927201%25252C913546%25252C913556%25252C925109%25252C919003%25252C920201%25252C912706%25252C900816%2526ms%253Dau%2526expire%253D1349937946%2526itag%253D18%2526ipbits%253D8%2526gcr%253Dus%2526sver%253D3%2526ratebypass%253Dyes%2526mt%253D1349916311%2526ip%253D207.241.237.166%2526mv%253Dm%2526source%253Dyoutube%2526key%253Dyt1%2526cp%253DU0hTTllOVV9JUENOM19RSFlKOmVLUWdkTXRmS0dX%2526id%253Da078394896111c0d%26type%3Dvideo%252Fmp4%253B%2Bcodecs%253D%2522avc1.42001E%252C%2Bmp4a.40.2%2522%26fallback_host%3Dtc.v5.cache6.c.youtube.com%26sig%3D2A6196BFA95A0E8887CECC345A153937D8599592.5160A930EF6FDFF466FA41BAB7E76AD5CFE766B0%26quality%3Dmedium%2Citag%3D5%26url%3Dhttp%253A%252F%252Fo-o---preferred---sn-nwj7knek---v19---lscache4.c.youtube.com%252Fvideoplayback%253Fupn%253DsWh0pzcodo0%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526fexp%253D907722%25252C906062%25252C910102%25252C927104%25252C922401%25252C920704%25252C912806%25252C927201%25252C913546%25252C913556%25252C925109%25252C919003%25252C920201%25252C912706%25252C900816%2526ms%253Dau%2526algorithm%253Dthrottle-factor%2526burst%253D40%2526ip%253D207.241.237.166%2526itag%253D5%2526gcr%253Dus%2526sver%253D3%2526mt%253D1349916311%2526mv%253Dm%2526source%253Dyoutube%2526key%253Dyt1%2526ipbits%253D8%2526factor%253D1.25%2526cp%253DU0hTTllOVV9JUENOM19RSFlKOmVLUWdkTXRmS0dX%2526expire%253D1349937946%2526id%253Da078394896111c0d%26type%3Dvideo%252Fx-flv%26fallback_host%3Dtc.v19.cache4.c.youtube.com%26sig%3DA43F1CE03CC729FD57D1211C61F21AAB7C5AF20D.854D2A74C6CBA3160762D9FA75903D35A67382ED%26quality%3Dsmall%2Citag%3D36%26url%3Dhttp%253A%252F%252Fo-o---preferred---sn-nwj7kner---v4---lscache8.c.youtube.com%252Fvideoplayback%253Fupn%253DsWh0pzcodo0%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526fexp%253D907722%25252C906062%25252C910102%25252C927104%25252C922401%25252C920704%25252C912806%25252C927201%25252C913546%25252C913556%25252C925109%25252C919003%25252C920201%25252C912706%25252C900816%2526ms%253Dau%2526algorithm%253Dthrottle-factor%2526burst%253D40%2526ip%253D207.241.237.166%2526itag%253D36%2526gcr%253Dus%2526sver%253D3%2526mt%253D1349916311%2526mv%253Dm%2526source%253Dyoutube%2526key%253Dyt1%2526ipbits%253D8%2526factor%253D1.25%2526cp%253DU0hTTllOVV9JUENOM19RSFlKOmVLUWdkTXRmS0dX%2526expire%253D1349937946%2526id%253Da078394896111c0d%26type%3Dvideo%252F3gpp%253B%2Bcodecs%253D%2522mp4v.20.3%252C%2Bmp4a.40.2%2522%26fallback_host%3Dtc.v4.cache8.c.youtube.com%26sig%3D719E70BF679A7B41474D05D3706358168E217890.90B1765E62D594BEDEE837BB3F26FA82C0AC2C93%26quality%3Dsmall%2Citag%3D17%26url%3Dhttp%253A%252F%252Fo-o---preferred---sn-o097znee---v9---lscache5.c.youtube.com%252Fvideoplayback%253Fupn%253DsWh0pzcodo0%2526sparams%253Dalgorithm%25252Cburst%25252Ccp%25252Cfactor%25252Cgcr%25252Cid%25252Cip%25252Cipbits%25252Citag%25252Csource%25252Cupn%25252Cexpire%2526fexp%253D907722%25252C906062%25252C910102%25252C927104%25252C922401%25252C920704%25252C912806%25252C927201%25252C913546%25252C913556%25252C925109%25252C919003%25252C920201%25252C912706%25252C900816%2526ms%253Dau%2526algorithm%253Dthrottle-factor%2526burst%253D40%2526ip%253D207.241.237.166%2526itag%253D17%2526gcr%253Dus%2526sver%253D3%2526mt%253D1349916311%2526mv%253Dm%2526source%253Dyoutube%2526key%253Dyt1%2526ipbits%253D8%2526factor%253D1.25%2526cp%253DU0hTTllOVV9JUENOM19RSFlKOmVLUWdkTXRmS0dX%2526expire%253D1349937946%2526id%253Da078394896111c0d%26type%3Dvideo%252F3gpp%253B%2Bcodecs%253D%2522mp4v.20.3%252C%2Bmp4a.40.2%2522%26fallback_host%3Dtc.v9.cache5.c.youtube.com%26sig%3D8F24ED9FCC2500D100D1AAC9CD5A614B0C0FA5AA.6155DD5967D990C9F24D4862F7D70BCAF0914DA0%26quality%3Dsmall\u0026amp;watermark=%2Chttp%3A%2F%2Fs.ytimg.com%2Fyt%2Fimg%2Fwatermark%2Fyoutube_watermark-vflHX6b6E.png%2Chttp%3A%2F%2Fs.ytimg.com%2Fyt%2Fimg%2Fwatermark%2Fyoutube_hd_watermark-vflAzLcD6.png\u0026amp;sourceid=r\u0026amp;timestamp=1349916364\u0026amp;storyboard_spec=http%3A%2F%2Fi4.ytimg.com%2Fsb%2FoHg5SJYRHA0%2Fstoryboard3_L%24L%2F%24N.jpg%7C48%2327%23100%2310%2310%230%23default%23kFKafDpxazQDzs-N0NAkdH-jy_E%7C60%2345%23108%2310%2310%232000%23M%24M%233QCcFMpSH_MACnGTmY_ha2J8UU0%7C120%2390%23108%235%235%232000%23M%24M%23YJotj-gSka-wkwz-SF4GUW_h1Kk\u0026amp;plid=AATLveVba5g8mPZ8\u0026amp;showpopout=1\u0026amp;hl=en_US\u0026amp;tmi=1\u0026amp;iv_logging_level=4\u0026amp;st_module=http%3A%2F%2Fs.ytimg.com%2Fyt%2Fswfbin%2Fst_module-vflCXoloO.swf\u0026amp;no_get_video_log=1\u0026amp;iv_close_button=0\u0026amp;endscreen_module=http%3A%2F%2Fs.ytimg.com%2Fyt%2Fswfbin%2Fendscreen-vflK6XzTZ.swf\u0026amp;iv_read_url=http%3A%2F%2Fwww.youtube.com%2Fannotations_iv%2Fread2%3Fsparams%3Dexpire%252Cvideo_id%26expire%3D1349959800%26key%3Da1%26signature%3D815C68436F1E8F95A9283A421D758B7A6452EFD9.5029A9CC9CFCF79F0B17A60238447CA0FE7CA991%26video_id%3DoHg5SJYRHA0%26feat%3DCS\u0026amp;iv_queue_log_level=0\u0026amp;referrer=http%3A%2F%2Fbit.ly%2FdwMq4b\u0026amp;video_id=oHg5SJYRHA0\u0026amp;sw=1.0\u0026amp;sk=4md16KjsgYmUvVHOsiBQxSFIkPbju0d8C\u0026amp;pltype=contentugc\u0026amp;t=vjVQa1PpcFN8E8yJ1Q1BJFTy1GYmGAMgRZUyNC4FMBY%3D\u0026amp;loudness=-23.6900005341\"     allowscriptaccess=\"always\" allowfullscreen=\"true\" bgcolor=\"#000000\"\u003e\n  \u003cnoembed\u003e\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yt\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            You need Adobe Flash Player to watch this video. \u003cbr\u003e \u003ca href=\"\/\/get.adobe.com\/flashplayer\/\"\u003eDownload it from Adobe.\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e\u003c\/noembed\u003e\n\n";
        document.getElementById('watch7-player').innerHTML = swf;
      })()
    </script>

        
      </div>
    </div>

    <div id="watch7-main-container">
      <div id="watch7-main" class="clearfix">
        <div id="watch7-content">
            <div class="yt-uix-button-panel">
      <div id="watch7-headline" class="clearfix  yt-uix-expander yt-uix-expander-collapsed">
    <h1 id="watch-headline-title">
      

  


  <span class="watch-title  yt-uix-expander-head" dir="ltr" title="Meteor Explodes Over Russia, Nearly 1,000 Hurt">
    Meteor Explodes Over Russia, Nearly 1,000 Hurt
  </span>

    </h1>
  </div>

    <div id="watch7-user-header"><a href="/web/20130216025900/https://www.youtube.com/user/AssociatedPress?feature=watch" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//web.archive.org/web/20130216025900im_/https://i2.ytimg.com/i/52X5wxOL_s5yw0dQk7NtgA/1.jpg?v=4faac8e5" alt="AssociatedPress" width="48"><span class="vertical-align"></span></span></span></span></a><a href="/web/20130216025900/https://www.youtube.com/user/AssociatedPress?feature=watch" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;feature=watch" dir="ltr">AssociatedPress</a><span class="yt-user-separator">·</span><a class="yt-uix-sessionlink yt-user-videos" href="/web/20130216025900/https://www.youtube.com/user/AssociatedPress/videos" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;feature=watch">65,849 videos</a><br><span class="yt-uix-button-subscription-container yt-uix-button-context-light"><button class="yt-subscription-button yt-subscription-button-js-default yt-uix-button yt-uix-button-subscribe-branded" type="button" onclick=";window.location.href=this.getAttribute('href');return false;" href="https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26continue_action%3DzEU_D8ex_5Y-68jXVo1_RRoDkwz0VjSk-x0OXCRie_GrArqo1VuN_Tf-mh8V7WW4RVwj9ob4Hvsh_B4DkY5cIk4o5MRCiRReVaGujROj5E0=%26feature%3Dsubscribe%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" data-subscription-value="UC52X5wxOL_s5yw0dQk7NtgA" data-subscription-feature="watch" data-subscription-type="" data-subscription-button-type="branded" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;feature=watch" role="button" data-subscription-initialized="true"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-subscribe-branded" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span><span class="yt-uix-button-content">  <span class="subscribe-hh-label">Subscribe</span>
  <span class="subscribed-hh-label">Subscribed</span>
  <span class="unsubscribe-hh-label">Unsubscribe</span>
 </span></button><span class="yt-subscription-button-subscriber-count-branded-horizontal">319,029</span><span class="yt-subscription-button-disabled-mask"></span></span><div id="watch7-views-info">  <span class="watch-view-count">
      302 views
  </span>
    <div class="video-extras-sparkbars">
    <div class="video-extras-sparkbar-likes" style="width: 97.2602739726%"></div>
    <div class="video-extras-sparkbar-dislikes" style="width: 2.7397260274%"></div>
  </div>
  <span class="video-extras-likes-dislikes">
      <img class="icon-watch-stats-like" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Like">
  <span class="likes-count">71</span>
 &nbsp;&nbsp;&nbsp;   <img class="icon-watch-stats-dislike" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Dislike">
  <span class="dislikes-count">2</span>

  </span>

</div></div>
      <div id="watch7-action-buttons" class="clearfix">
    <div id="watch7-sentiment-actions">
      <span id="watch-like-dislike-buttons" class="yt-uix-button-group " data-button-toggle-group="optional"><span class="yt-uix-clickcard"><button id="watch-like" class="yt-uix-clickcard-target yt-uix-button yt-uix-button-text yt-uix-tooltip" title="" type="button" onclick=";return false;" data-unlike-tooltip="Unlike" data-like-tooltip="I like this" data-orientation="vertical" data-position="bottomright" data-button-toggle="true" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-like" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span><span class="yt-uix-button-content">Like </span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to like <span class="yt-user-name " dir="ltr">AssociatedPress</span>'s video.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button id="watch-dislike" class="yt-uix-clickcard-target yt-uix-button yt-uix-button-text yt-uix-tooltip yt-uix-button-empty" title="I dislike this" type="button" onclick=";return false;" data-orientation="vertical" data-position="bottomright" data-button-toggle="true" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-dislike" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="I dislike this" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to dislike <span class="yt-user-name " dir="ltr">AssociatedPress</span>'s video.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span></span>
    </div>
    <div id="watch7-secondary-actions" class="yt-uix-button-group" data-button-toggle-group="required">
        <span>
    <button type="button" class="action-panel-trigger  yt-uix-button-toggled yt-uix-button yt-uix-button-text yt-uix-tooltip" onclick=";return false;" title="" data-trigger-for="action-panel-details" data-button-toggle="true" role="button"><span class="yt-uix-button-content">About </span></button>
  </span>

        <span>
    <button type="button" class="action-panel-trigger   yt-uix-button yt-uix-button-text yt-uix-tooltip" onclick=";return false;" title="" data-trigger-for="action-panel-share" data-button-toggle="true" role="button"><span class="yt-uix-button-content">Share </span></button>
  </span>

          <span class="yt-uix-clickcard">
    <button type="button" class="action-panel-trigger   yt-uix-clickcard-target yt-uix-button yt-uix-button-text yt-uix-tooltip" onclick=";return false;" title="" data-upsell="playlist" data-trigger-for="action-panel-none" data-button-toggle="true" data-position="bottomleft" data-orientation="vertical" role="button"><span class="yt-uix-button-content">Add to </span></button>
        <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to add <span class="yt-user-name " dir="ltr">AssociatedPress</span>'s video to your playlist.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>

  </span>

        <span>
    <button type="button" class="action-panel-trigger   yt-uix-button yt-uix-button-text yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="Statistics" data-trigger-for="action-panel-stats" data-button-toggle="true" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-action-panel-stats" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Statistics" title="">
<span class="yt-uix-button-valign"></span></span></button>
  </span>

        <span>
    <button type="button" class="action-panel-trigger   yt-uix-button yt-uix-button-text yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="Report" data-trigger-for="action-panel-report" data-button-toggle="true" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-action-panel-report" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Report" title="">
<span class="yt-uix-button-valign"></span></span></button>
  </span>

    </div>
  </div>

      <div id="watch7-action-panels" class="yt-uix-button-panel">
      <div id="action-panel-details" class="action-panel-content" data-panel-loaded="true">
    <div id="watch-description" class="yt-uix-expander yt-uix-expander-collapsed yt-uix-button-panel">
      <div id="watch-description-content">
        <div id="watch-description-clip">
          <p id="watch-uploader-info">
            <strong>Published on <span id="eow-date" class="watch-video-date">Feb 15, 2013</span>
</strong>
          </p>
          <div id="watch-description-text">
            <p id="eow-description">A meteor streaked across the sky and exploded over Russia's Ural Mountains with the power of an atomic bomb Friday, its sonic blasts shattering countless windows and injuring nearly 1,000 people. (Feb. 15</p>
          </div>
            <div id="watch-description-extras">
    <ul class="watch-extras-section">
      <li>
        <h4 class="title">
Category
        </h4>
        <div class="content">
              <p id="eow-category"><a href="/web/20130216025900/https://www.youtube.com/news">News &amp; Politics</a></p>

        </div>
      </li>


        <li>
          <h4 class="title">License</h4>
          <div class="content">
              <p id="eow-reuse">
Standard YouTube License
  </p>

          </div></li>
        
    </ul>
  </div>

        </div>
        <ul id="watch-description-extra-info">
          
        </ul>
      </div>

      <div id="watch-description-toggle" class="yt-uix-expander-head yt-uix-button-panel">
        <div id="watch-description-expand" class="expand">
          <button type="button" class="metadata-inline yt-uix-button yt-uix-button-text" onclick=";return false;" role="button"><span class="yt-uix-button-content">Show more </span></button>
        </div>
        <div id="watch-description-collapse" class="collapse">
          <button type="button" class="metadata-inline yt-uix-button yt-uix-button-text" onclick=";return false;" role="button"><span class="yt-uix-button-content">Show less </span></button>
        </div>
      </div>
    </div>
  </div>

      <div id="action-panel-share" class="action-panel-content hid">
      <div id="watch-actions-share-loading">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

    </div>
  </div>
  <div id="watch-actions-share-panel"></div>

  </div>

      <div id="action-panel-addto" class="action-panel-content hid" data-auth-required="true">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

    </div>
  </div>

      <div id="action-panel-stats" class="action-panel-content hid">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

    </div>
  </div>

      <div id="action-panel-report" class="action-panel-content hid" data-auth-required="true">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Loading icon">

    <span class="yt-spinner-message">
Loading...
    </span>
  </p>

    </div>
  </div>

      <div id="action-panel-login" class="action-panel-content hid">
    <div class="action-panel-login">
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-default" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
      <a href="/web/20130216025900/https://www.youtube.com/signup?next=%2Fwatch%3Fv%3DqKoSWMcHoos" class="yt-uix-button-alert-link">Sign up</a>
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
    <div id="watch7-discussion">

        
        <div id="comments-view" data-type="highlights" class="">

                  <h4>
          <strong>Top Comments</strong>

  </h4>

    <ul>
      


  <li class="comment" data-tag="top" data-author-id="etXtGs66GaIk5lLA7ybF8w" data-id="umveGTYZyyw8J8TbWujBjcINCxW6BSMrQj7MtlxjfOA" data-score="6">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
      <a href="/web/20130216025900/https://www.youtube.com/user/kdavidmcd" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i2.ytimg.com/i/etXtGs66GaIk5lLA7ybF8w/1.jpg" src="//web.archive.org/web/20130216025900/https://i2.ytimg.com/i/etXtGs66GaIk5lLA7ybF8w/1.jpg" alt="kdavidmcd" width="48" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span></a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="/web/20130216025900/https://www.youtube.com/user/kdavidmcd" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg" dir="ltr">kdavidmcd</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="https://web.archive.org/web/20130216025900/http://www.youtube.com/comment?lc=umveGTYZyyw8J8TbWujBjcINCxW6BSMrQj7MtlxjfOA">
              4 hours ago
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>Doesn't﻿ this happen in every comet disaster movie before the big one hits?</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
    <span class="separator">·</span>

      <span class="comments-rating-positive" title="6 up, 0 down">
        6
      </span>

    <span class="yt-uix-clickcard"><button type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">kdavidmcd</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">kdavidmcd</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

      


  <li class="comment" data-tag="top" data-author-id="Lp99V0dImfO-x9k2D4pyvA" data-id="umveGTYZyyzzEQ2x51aqLwYx45A6LXV1PSQYmGZA_Zc" data-score="2">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
      <a href="/web/20130216025900/https://www.youtube.com/user/georgeadkins371" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i1.ytimg.com/i/Lp99V0dImfO-x9k2D4pyvA/1.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="georgeadkins371" width="48" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span></a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="/web/20130216025900/https://www.youtube.com/user/georgeadkins371" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg" dir="ltr">georgeadkins371</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="https://web.archive.org/web/20130216025900/http://www.youtube.com/comment?lc=umveGTYZyyzzEQ2x51aqLwYx45A6LXV1PSQYmGZA_Zc">
              5 hours ago
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>It was that Iranian Space monkey. He must have been wondering﻿ what that red button would do.</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
    <span class="separator">·</span>

      <span class="comments-rating-positive" title="2 up, 0 down">
        2
      </span>

    <span class="yt-uix-clickcard"><button type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">georgeadkins371</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">georgeadkins371</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span>
in reply to <a href="/web/20130216025900/https://www.youtube.com/user/BabybooR33" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg" dir="ltr">BabybooR33</a>
      <a href="#" class="comment-action comment-action-showparent" onclick="return false;" data-action="show-parent">(Show the comment)</a>
  </div>

  </div>


  </li>

  </ul>


      <hr>
          <h4>
      <a href="//web.archive.org/web/20130216025900/https://www.youtube.com/video_response_view_all?v=qKoSWMcHoos">
            <strong>Video Responses</strong>

      </a>
  </h4>

    <ul class="video-list">
          <li class="video-response">
    <a href="/web/20130216025900/https://www.youtube.com/watch?v=_iWcog4NsS8" class="yt-uix-contextlink yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;feature=watch_response">
      <span class="video-thumb ux-thumb yt-thumb-default-76 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i4.ytimg.com/vi/_iWcog4NsS8/default.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" width="76" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span>
      <span dir="ltr" class="title" title="Interesting Rocks and Fossils">
        Interesting Rocks and Fossils
      </span>
      <span class="stat attribution">
by <span class="yt-user-name " dir="ltr">JKrockhound</span>
      </span>
        <span class="stat view-count">
          42 views
        </span>
    </a>
  </li>

          <li class="video-response">
    <a href="/web/20130216025900/https://www.youtube.com/watch?v=gcmxH9OLu0k" class="yt-uix-contextlink yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;feature=watch_response">
      <span class="video-thumb ux-thumb yt-thumb-default-76 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i4.ytimg.com/vi/gcmxH9OLu0k/default.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" width="76" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span>
      <span dir="ltr" class="title" title="METEORITE HITS RUSSIA INJURING 1,100 PEOPLE">
        METEORITE HITS RUSSIA INJURING 1,100 PEOPLE
      </span>
      <span class="stat attribution">
by <span class="yt-user-name " dir="ltr">Rafael Santiago</span>
      </span>
        <span class="stat view-count">
          167 views
        </span>
    </a>
  </li>

    </ul>

      <hr>
        <div onmouseover="if (yt.www &amp;&amp; yt.www.watch &amp;&amp; yt.www.watch.livecomments) yt.www.watch.livecomments.handleCommentMouseEvent(this, event);" onmouseout="if (yt.www &amp;&amp; yt.www.watch &amp;&amp; yt.www.watch.livecomments) yt.www.watch.livecomments.handleCommentMouseEvent(this, event);">
      <h4>
      <a href="/web/20130216025900/https://www.youtube.com/all_comments?v=qKoSWMcHoos">
            <strong>All Comments</strong> (87)

      </a>
  </h4>


          <div class="comments-post-alert comments-post">
        <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dcomments%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1">Sign in</a> now to post a comment!

      </div>


        <div id="live-comments-setting-scroll" class="live-comments-setting hid">
    <span id="live-comments-count"></span>
    <a onclick="yt.www.watch.livecomments.setScroll(true); return false;">Update automatically</a>
  </div>
  <div id="live-comments-setting-no-scroll" class="live-comments-setting hid">
    <a onclick="yt.www.watch.livecomments.setScroll(false); return false;">Disable automatic updates</a>
  </div>

      <ul id="all-comments">
      


  <li class="comment" data-author-id="RVUtYJitpHGnMffbY5HQuQ" data-id="umveGTYZyyznShLzj5ZAFD9iRm_8z89nac1SYmwVljQ">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
      <a href="/web/20130216025900/https://www.youtube.com/user/Toonses36" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i3.ytimg.com/i/RVUtYJitpHGnMffbY5HQuQ/1.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Toonses36" width="48" data-group-key="thumb-group-2"><span class="vertical-align"></span></span></span></span></a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="/web/20130216025900/https://www.youtube.com/user/Toonses36" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg" dir="ltr">Toonses36</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="https://web.archive.org/web/20130216025900/http://www.youtube.com/comment?lc=umveGTYZyyznShLzj5ZAFD9iRm_8z89nac1SYmwVljQ">
              1 minute ago
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>They said the big one is not going to affect us. They only said that to not cause mass hysteria. We﻿ only have 24hrs left here on earth. R.I.P ya'll.</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Toonses36</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Toonses36</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span>
in reply to <a href="/web/20130216025900/https://www.youtube.com/channel/UCH0kME4LPTQppSZoltMMA7w" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg" dir="ltr">Gregg Spencer</a>
      <a href="#" class="comment-action comment-action-showparent" onclick="return false;" data-action="show-parent">(Show the comment)</a>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="H0kME4LPTQppSZoltMMA7w" data-id="umveGTYZyywOASG9SDt-_wj5Kn3ddMRlrUGh9l_sYuM">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
      <a href="/web/20130216025900/https://www.youtube.com/channel/UCH0kME4LPTQppSZoltMMA7w" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="https://web.archive.org/web/20130216025900/https://lh3.googleusercontent.com/-GNrYPDnRWvQ/AAAAAAAAAAI/AAAAAAAAAAA/Ou20Sbt7e6Q/s48-c-k/photo.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Gregg Spencer" width="48" data-group-key="thumb-group-2"><span class="vertical-align"></span></span></span></span></a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="/web/20130216025900/https://www.youtube.com/channel/UCH0kME4LPTQppSZoltMMA7w" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg" dir="ltr">Gregg Spencer</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="https://web.archive.org/web/20130216025900/http://www.youtube.com/comment?lc=umveGTYZyywOASG9SDt-_wj5Kn3ddMRlrUGh9l_sYuM">
              26 minutes ago
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>I don't care what Nasa says, the chances of these two events occuring on the exact same day and not being related have to be astronomically small (pardon the pun). A poster below hinted at it, but didn't realize the truth in what he was saying. The last meteor of this﻿ size to strike the earth was over 100 years ago, and the asteroid is apparently the closest flyby on record. We just can't figure out how they're connected. Gotta go beyond the math sometimes.</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Gregg Spencer</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Gregg Spencer</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="sPBSTkh3XxxBYjUwmOaBmg" data-id="umveGTYZyyx_J9UloO7gvlzOXTaVcONDg_0M3mjAH-U">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
      <a href="/web/20130216025900/https://www.youtube.com/user/jellisunc" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i4.ytimg.com/i/sPBSTkh3XxxBYjUwmOaBmg/1.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="jellisunc" width="48" data-group-key="thumb-group-2"><span class="vertical-align"></span></span></span></span></a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="/web/20130216025900/https://www.youtube.com/user/jellisunc" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg" dir="ltr">jellisunc</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="https://web.archive.org/web/20130216025900/http://www.youtube.com/comment?lc=umveGTYZyyx_J9UloO7gvlzOXTaVcONDg_0M3mjAH-U">
              36 minutes ago
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>only﻿ russia</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">jellisunc</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">jellisunc</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="BRYq3PNdDSsSMTTIT-EjsQ" data-id="umveGTYZyyyJf522MVQxbuhG6UeAWVav9SJF9_iI5Zc">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
      <a href="/web/20130216025900/https://www.youtube.com/user/Jeanne90275" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i3.ytimg.com/i/BRYq3PNdDSsSMTTIT-EjsQ/1.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Jeanne90275" width="48" data-group-key="thumb-group-2"><span class="vertical-align"></span></span></span></span></a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="/web/20130216025900/https://www.youtube.com/user/Jeanne90275" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg" dir="ltr">Jeanne90275</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="https://web.archive.org/web/20130216025900/http://www.youtube.com/comment?lc=umveGTYZyyyJf522MVQxbuhG6UeAWVav9SJF9_iI5Zc">
              44 minutes ago
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>OMG...one more thing﻿ to worry about.:-(</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Jeanne90275</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Jeanne90275</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="-asZGLy1U0qHzzsMGt2DTg" data-id="umveGTYZyyx2YF61eXiFHcYinT-QjEenFKqg0PkiFmw">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
      <a href="/web/20130216025900/https://www.youtube.com/user/erichathy222" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="https://web.archive.org/web/20130216025900/https://lh4.googleusercontent.com/-lkjpxF2jR7A/AAAAAAAAAAI/AAAAAAAAAAA/JEQlyZrmaZg/s48-c-k/photo.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Eric Hathaway" width="48" data-group-key="thumb-group-3"><span class="vertical-align"></span></span></span></span></a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="/web/20130216025900/https://www.youtube.com/user/erichathy222" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg" dir="ltr">Eric Hathaway</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="https://web.archive.org/web/20130216025900/http://www.youtube.com/comment?lc=umveGTYZyyx2YF61eXiFHcYinT-QjEenFKqg0PkiFmw">
              1 hour ago
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>Please see my﻿ page for more</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Eric Hathaway</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Eric Hathaway</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span>
in reply to <a href="/web/20130216025900/https://www.youtube.com/user/Toonses36" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg" dir="ltr">Toonses36</a>
      <a href="#" class="comment-action comment-action-showparent" onclick="return false;" data-action="show-parent">(Show the comment)</a>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="5CljbEQvx3LbhmXzRt4QyA" data-id="umveGTYZyyyMxTP5vFj1LlfA9y6XRXShJFpM-qOolK4">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
      <a href="/web/20130216025900/https://www.youtube.com/user/abcdefg14372" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i2.ytimg.com/i/5CljbEQvx3LbhmXzRt4QyA/1.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="abcdefg14372" width="48" data-group-key="thumb-group-3"><span class="vertical-align"></span></span></span></span></a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="/web/20130216025900/https://www.youtube.com/user/abcdefg14372" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg" dir="ltr">abcdefg14372</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="https://web.archive.org/web/20130216025900/http://www.youtube.com/comment?lc=umveGTYZyyyMxTP5vFj1LlfA9y6XRXShJFpM-qOolK4">
              2 hours ago
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>BORING!!!﻿</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">abcdefg14372</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">abcdefg14372</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="cH3PEJyefjWMmlS7r6Sa1g" data-id="umveGTYZyyyOxPofPj_ZJt6HFJOKVtWEKS-J54_WIjM" data-score="-2">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
      <a href="/web/20130216025900/https://www.youtube.com/user/911turbo711" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i4.ytimg.com/i/cH3PEJyefjWMmlS7r6Sa1g/1.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="911turbo711" width="48" data-group-key="thumb-group-3"><span class="vertical-align"></span></span></span></span></a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="/web/20130216025900/https://www.youtube.com/user/911turbo711" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg" dir="ltr">911turbo711</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="https://web.archive.org/web/20130216025900/http://www.youtube.com/comment?lc=umveGTYZyyyOxPofPj_ZJt6HFJOKVtWEKS-J54_WIjM">
              4 hours ago
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>Omg end of the﻿ world</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">911turbo711</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">911turbo711</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="SFhsRz9nOeXvGCTvOnfCqQ" data-id="umveGTYZyyxFE0UX4YXw63cuyvbqdLD45-eSNtp9Jx4">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Report profile image</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li></ul></div></button>
      <a href="/web/20130216025900/https://www.youtube.com/user/josephbrooksofficial" class="yt-user-photo "><span class="video-thumb ux-thumb yt-thumb-square-48 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="https://web.archive.org/web/20130216025900/https://lh3.googleusercontent.com/-9kSGgb-YWUY/AAAAAAAAAAI/AAAAAAAAAAA/DL9mW4xtcgY/s48-c-k/photo.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Joseph Brooks" width="48" data-group-key="thumb-group-3"><span class="vertical-align"></span></span></span></span></a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="/web/20130216025900/https://www.youtube.com/user/josephbrooksofficial" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg" dir="ltr">Joseph Brooks</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="https://web.archive.org/web/20130216025900/http://www.youtube.com/comment?lc=umveGTYZyyxFE0UX4YXw63cuyvbqdLD45-eSNtp9Jx4">
              4 hours ago
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p><a href="#" onclick="yt.www.watch.player.seekTo(1*60+08);return false;">1:08</a> haha He says,﻿ they have to Rush-in! ;) you silly.</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply </span></button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Joseph Brooks</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="" data-action="" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper">  <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
<span class="yt-uix-button-valign"></span></span></button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">Sign in to YouTube</h3>
    <div class="watch7-hovercard-message">
      Sign in with your YouTube Account (YouTube, Google+, Gmail, Orkut, Picasa, or Chrome) to rate <span class="yt-user-name " dir="ltr">Joseph Brooks</span>'s comment.

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
      <a href="https://web.archive.org/web/20130216025900/https://accounts.google.com/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253DqKoSWMcHoos%26nomobiletemp%3D1" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg"><span class="yt-uix-button-content">Sign in</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

  </ul>

  </div>



            <div class="comments-pagination" data-ajax-enabled="true">
      

    <div class="yt-uix-pager" role="navigation">

        
<a href="/web/20130216025900/https://www.youtube.com/all_comments?v=qKoSWMcHoos&amp;page=2" class="yt-uix-button  yt-uix-pager-button yt-uix-pager-show-more yt-uix-sessionlink yt-uix-button-default" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg" data-page="2"><span class="yt-uix-button-content">Show more</span></a>
    </div>

    </div>



    <ul>
      <li class="hid" id="parent-comment-loading">Loading comment...</li>
    </ul>
    <div id="comments-loading" class="hid">Loading...</div>
  </div>


  </div>


        </div>
        <div id="watch7-sidebar">
          
      <div id="watch-longform-ad" style="display:none;">
    <div id="watch-longform-text">
Advertisement
    </div>
    <div id="watch-longform-ad-placeholder">
      <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" height="60" width="300">
    </div>
    <div id="instream_google_companion_ad_div"></div>
  </div>




        <div id="watch-channel-brand-div" style="display: none;">
    <div id="watch-channel-brand-div-text">
Advertisement
    </div>
    <div id="ad300x250"></div>
    <div id="google_companion_ad_div">
    </div>
  </div>


      
  <div class="watch-sidebar-section">
    <div class="watch-sidebar-body">
      <ul id="watch-related" class="video-list">
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=UZJiCBLANfU" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CAMQzRooAA&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i2.ytimg.com/vi/UZJiCBLANfU/default.jpg" src="//web.archive.org/web/20130216025900/https://i2.ytimg.com/vi/UZJiCBLANfU/default.jpg" alt="" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">1:03</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="UZJiCBLANfU" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Reid: Republicans Look to Block Hagel">Reid: Republicans Look to Block Hagel</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        2,277 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=4zAG_al9p4A" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CAQQzRooAQ&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i1.ytimg.com/vi/4zAG_al9p4A/default.jpg" src="//web.archive.org/web/20130216025900/https://i1.ytimg.com/vi/4zAG_al9p4A/default.jpg" alt="" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">0:53</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="4zAG_al9p4A" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Raw: Stricken Cruise Ship Heads to Ala.">Raw: Stricken Cruise Ship Heads to Ala.</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        2,649 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=5sNgpW2OUOk" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CAUQzRooAg&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i2.ytimg.com/vi/5sNgpW2OUOk/default.jpg" src="//web.archive.org/web/20130216025900/https://i2.ytimg.com/vi/5sNgpW2OUOk/default.jpg" alt="" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">1:51</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="5sNgpW2OUOk" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Passenger: 'Good Thing' to Help Disabled Ship">Passenger: 'Good Thing' to Help Disabled Ship</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        271 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=Uwywaecl1Sk" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CAYQzRooAw&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i2.ytimg.com/vi/Uwywaecl1Sk/default.jpg" src="//web.archive.org/web/20130216025900/https://i2.ytimg.com/vi/Uwywaecl1Sk/default.jpg" alt="" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">1:49</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="Uwywaecl1Sk" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Arrests, Culprit Named in Horsemeat Scandal">Arrests, Culprit Named in Horsemeat Scandal</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        169 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=JrzT5kgtj8U" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CAcQzRooBA&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i3.ytimg.com/vi/JrzT5kgtj8U/default.jpg" src="//web.archive.org/web/20130216025900/https://i3.ytimg.com/vi/JrzT5kgtj8U/default.jpg" alt="" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">1:08</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="JrzT5kgtj8U" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Raw: Passenger Captures Smoke From Triumph Fire">Raw: Passenger Captures Smoke From Triumph Fire</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        6,726 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=j_cxA8LJuE8" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CAgQzRooBQ&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i3.ytimg.com/vi/j_cxA8LJuE8/default.jpg" src="//web.archive.org/web/20130216025900/https://i3.ytimg.com/vi/j_cxA8LJuE8/default.jpg" alt="" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">1:32</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="j_cxA8LJuE8" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Airline CEOs: US Airways, AA Better Together">Airline CEOs: US Airways, AA Better Together</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        201 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=DjCXF1Z0Sgc" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CAkQzRooBg&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i1.ytimg.com/vi/DjCXF1Z0Sgc/default.jpg" src="//web.archive.org/web/20130216025900/https://i1.ytimg.com/vi/DjCXF1Z0Sgc/default.jpg" alt="" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">1:03</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="DjCXF1Z0Sgc" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Raw: On the Water With the Crippled Cruise Ship">Raw: On the Water With the Crippled Cruise Ship</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        1,688 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=ayvOPkLS8UE" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CAoQzRooBw&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i2.ytimg.com/vi/ayvOPkLS8UE/default.jpg" src="//web.archive.org/web/20130216025900/https://i2.ytimg.com/vi/ayvOPkLS8UE/default.jpg" alt="" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">1:44</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="ayvOPkLS8UE" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Broken Towline Adds Misery to Ship Nightmare">Broken Towline Adds Misery to Ship Nightmare</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        101 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=Q9EfRuZemio" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CAsQzRooCA&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i2.ytimg.com/vi/Q9EfRuZemio/default.jpg" src="//web.archive.org/web/20130216025900/https://i2.ytimg.com/vi/Q9EfRuZemio/default.jpg" alt="" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">1:20</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="Q9EfRuZemio" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Court Delay for Olympic Sprinter">Court Delay for Olympic Sprinter</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        139 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=iY0ZbE8syWo" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CAwQzRooCQ&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i2.ytimg.com/vi/iY0ZbE8syWo/default.jpg" src="//web.archive.org/web/20130216025900/https://i2.ytimg.com/vi/iY0ZbE8syWo/default.jpg" alt="" width="120" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">2:09</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="iY0ZbE8syWo" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Valentine's Day Means Passion for Paintings">Valentine's Day Means Passion for Paintings</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        42 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=X91hKGDc920" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CA0QzRooCg&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i1.ytimg.com/vi/X91hKGDc920/default.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" width="120" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span><span class="video-time">1:35</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="X91hKGDc920" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Freshman Lawmakers: Let's Work Together">Freshman Lawmakers: Let's Work Together</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        48 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=SxdvinxyfQI" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CA4QzRooCw&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i4.ytimg.com/vi/SxdvinxyfQI/default.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" width="120" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span><span class="video-time">1:14</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="SxdvinxyfQI" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="AP Top Stories Feb. 14 P">AP Top Stories Feb. 14 P</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        105 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=rIYzm1-hPV0" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CA8QzRooDA&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i3.ytimg.com/vi/rIYzm1-hPV0/default.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" width="120" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span><span class="video-time">1:36</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="rIYzm1-hPV0" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Doctors Figuring Out How to Mend a Broken Heart">Doctors Figuring Out How to Mend a Broken Heart</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        56 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=Dp5ayLHPqic" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CBAQzRooDQ&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i1.ytimg.com/vi/Dp5ayLHPqic/default.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" width="120" data-group-key="thumb-group-1"><span class="vertical-align"></span></span></span></span><span class="video-time">1:53</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="Dp5ayLHPqic" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Angie Harmon Teams Up With UNICEF">Angie Harmon Teams Up With UNICEF</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        47 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=VdtcJDBBOEk" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CBEQzRooDg&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i3.ytimg.com/vi/VdtcJDBBOEk/default.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" width="120" data-group-key="thumb-group-2"><span class="vertical-align"></span></span></span></span><span class="video-time">2:07</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="VdtcJDBBOEk" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Carnival: Snapped Towline Delayed Ship's Arrival">Carnival: Snapped Towline Delayed Ship's Arrival</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        54 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=WuMV-7D-j24" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CBIQzRooDw&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i4.ytimg.com/vi/WuMV-7D-j24/default.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" width="120" data-group-key="thumb-group-2"><span class="vertical-align"></span></span></span></span><span class="video-time">1:50</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="WuMV-7D-j24" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Ralph Lauren Creates a Feminine Heroine">Ralph Lauren Creates a Feminine Heroine</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        111 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=2_FGDsVF9r0" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CBMQzRooEA&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i3.ytimg.com/vi/2_FGDsVF9r0/default.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" width="120" data-group-key="thumb-group-2"><span class="vertical-align"></span></span></span></span><span class="video-time">1:13</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="2_FGDsVF9r0" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Airlines Merger Raises Questions on Fares">Airlines Merger Raises Questions on Fares</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        16 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=WN-j2XP8nno" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CBQQzRooEQ&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i4.ytimg.com/vi/WN-j2XP8nno/default.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" width="120" data-group-key="thumb-group-2"><span class="vertical-align"></span></span></span></span><span class="video-time">1:07</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="WN-j2XP8nno" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Empire State Brides: Couples Wed in Iconic Bldg">Empire State Brides: Couples Wed in Iconic Bldg</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        47 views
    </span>

</a>
          </li>
          <li class="video-list-item">
            <a href="/web/20130216025900/https://www.youtube.com/watch?v=BfQIb9aWaQw" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ei=9PUeUZ3xILKbgAK9iYC4Cg&amp;ved=CBUQzRooEg&amp;feature=relmfu">    <span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130216025900/https://i3.ytimg.com/vi/BfQIb9aWaQw/default.jpg" src="https://web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" width="120" data-group-key="thumb-group-2"><span class="vertical-align"></span></span></span></span><span class="video-time">0:27</span>


  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="BfQIb9aWaQw" role="button"><span class="yt-uix-button-content">  <img src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span>  <img class="yt-uix-button-arrow" src="//web.archive.org/web/20130216025900im_/https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">
</button>
</span>
<span dir="ltr" class="title" title="Raw: In the Air Over the Crippled Cruise Ship">Raw: In the Air Over the Crippled Cruise Ship</span><span class="stat attribution">by <span class="yt-user-name " dir="ltr">AssociatedPress</span></span>        <span class="stat view-count">
        14 views
    </span>

</a>
          </li>
      </ul>
    </div>   </div> 

        </div>
      </div>
    </div>

      <div style="visibility: hidden; height: 0px; padding: 0px; overflow: hidden;">
      <img src="//web.archive.org/web/20130216025900im_/https://www.youtube-nocookie.com/gen_204?attributionpartner=AssociatedPress" border="0" width="1" height="1">

  </div>

  </div>
</div>

  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div id="footer-container">
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/footer.php"); ?>
  </div>
  </div>
  </div>
  </div>
  </div>



  <div id="shared-addto-watch-later-login" class="hid">
    <a href="/sign_in" class="sign-in-link">Sign in</a> to add this to Watch Later

  </div>

  <div id="shared-addto-menu" style="display: none;" class="hid sign-in">
    <div class="addto-menu">
      <div id="addto-list-panel" class="menu-panel active-panel">
        <span class="yt-uix-button-menu-item yt-uix-tooltip sign-in" data-possible-tooltip="" data-tooltip-show-delay="750"><a href="/sign_in" class="sign-in-link">Sign in</a> to add this to Watch Later
        </span>

      </div>
      <div id="addto-list-saved-panel" class="menu-panel">
        <div class="panel-content">
          <div class="yt-alert yt-alert-naked yt-alert-success  ">
            <div class="yt-alert-icon">
              <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
            </div>
            <div class="yt-alert-content" role="alert"> <span class="yt-alert-vertical-trick"></span>
              <div class="yt-alert-message">

                <span class="message">Added to <span class="addto-title yt-uix-tooltip yt-uix-tooltip-reverse" title="More information about this playlist" data-tooltip-show-delay="750"></span></span>

              </div>
            </div>
          </div>
          <div class="yt-alert yt-alert-naked yt-alert-warn  private-video-warning hid">
            <div class="yt-alert-icon">
              <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
            </div>
            <div class="yt-alert-content" role="alert"> <span class="yt-alert-vertical-trick"></span>
              <div class="yt-alert-message">
                Private videos will be skipped if viewers don&#39;t have access, but playlist notes are publicly visible.
              </div>
            </div>
          </div>

        </div>
      </div>
      <div id="addto-list-error-panel" class="menu-panel">
        <div class="panel-content">
          <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
          <span class="error-details"></span>
          <a class="show-menu-link">Back to list</a>
        </div>
      </div>

      <div id="addto-note-input-panel" class="menu-panel">
        <div class="panel-content">
          <div class="yt-alert yt-alert-naked yt-alert-success  ">
            <div class="yt-alert-icon">
              <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
            </div>
            <div class="yt-alert-content" role="alert"> <span class="yt-alert-vertical-trick"></span>
              <div class="yt-alert-message">
                <span class="message">Added to playlist:</span>
                <span class="addto-title yt-uix-tooltip" title="More information about this playlist" data-tooltip-show-delay="750"></span>

              </div>
            </div>
          </div>
          <div class="yt-alert yt-alert-naked yt-alert-warn  private-video-warning hid">
            <div class="yt-alert-icon">
              <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
            </div>
            <div class="yt-alert-content" role="alert"> <span class="yt-alert-vertical-trick"></span>
              <div class="yt-alert-message">
                Private videos will be skipped if viewers don&#39;t have access, but playlist notes are publicly visible.
              </div>
            </div>
          </div>

        </div>
        <div class="yt-uix-char-counter" data-char-limit="150">
          <div class="addto-note-box addto-text-box"><textarea id="addto-note" class="addto-note yt-uix-char-counter-input" maxlength="150"></textarea><label for="addto-note" class="addto-note-label">Add an optional note</label></div><span class="yt-uix-char-counter-remaining">150</span>
        </div> <button disabled="disabled" class="playlist-save-note yt-uix-button yt-uix-button-default" type="button" onclick=";return false;" role="button"> <span class="yt-uix-button-content">
            Add note
          </span>
        </button>
      </div>
      <div id="addto-note-saving-panel" class="menu-panel">
        <div class="panel-content loading-content">
          <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
          <span>Saving note...</span>
        </div>
      </div>
      <div id="addto-note-saved-panel" class="menu-panel">
        <div class="panel-content">
          <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
          <span class="message">Note added to:</span>
        </div>
      </div>
      <div id="addto-note-error-panel" class="menu-panel">
        <div class="panel-content">
          <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
          <span class="message">Error adding note:</span>
          <ul class="error-details"></ul>
          <a class="add-note-link">Click to add a new note</a>
        </div>
      </div>
      <div class="close-note hid">
        <img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="close-button">
      </div>

    </div>

  </div>
  <script>
    var ytspf = ytspf || {};
    ytspf.enabled = false;
  </script>
  <script>
    if (window.ytcsi) {
      ytcsi.tick("js_head");
    }
  </script>
  <script id="js-471614378" class="www_base_mod" src="http://s.ytimg.com/yts/jsbin/www_base_mod-vflaJzeRi.js" data-loaded="true"></script>
  <script>
    var searchBox = document.getElementById('masthead-search-term');
    if (searchBox) {
      searchBox.focus();
    }
  </script>




  <script>
    yt.setConfig({
      'MASTHEAD_ENCRYPTED_ID': "tdwoKUR8RaA",
      'MASTHEAD_IS_BRANDED': true
    });






    yt.setConfig('JS_PAGE_MODULES', {
      "\/yts\/jsbin\/www_feed_mod-vflNimF0P.js": []
    });
  </script>


  <script>
    yt.setAjaxToken('feed_change_ajax', "ViR0e1JZqSnaPZ5100v5Zo6oaeV8MTM3MjcyMzI0M0AxMzcyNjM2ODQz");
    yt.setConfig({
      'GUIDE_SELECTED_ITEM': "HCtnHdj3df7iM"
    });
  </script>
  <script>
    yt.setConfig({
      'EVENT_ID': "qsbQUa_GNoafyQGSlIHQCw",
      'PAGE_NAME': "index",
      'LOGGED_IN': false,
      'SESSION_INDEX': null,
      'DELEGATED_SESSION_ID': null,
      'GAPI_HOST': "https:\/\/web.archive.org\/web\/20130701000042\/https:\/\/apis.google.com",
      'GAPI_HINT_PARAMS': "m;\/_\/scs\/abc-static\/_\/js\/k=gapi.gapi.en.aBqw11eoBzM.O\/m=__features__\/am=EA\/rt=j\/d=1\/rs=AItRSTMkiisOVRW5P7l3Ig59NtxV0JdMMA",
      'GAPI_LOCALE': "en_US",
      'MASTHEAD_JS': "\/yts\/jsbin\/www-masthead-vfl8Ap0u_.js",
      'JS_COMMON_MODULE': "\/yts\/jsbin\/www_common_mod-vflFz4kv3.js",
      'SAFETY_MODE_PENDING': false,
      'LOCAL_DATE_TIME_CONFIG': {
        "formatWeekdayShortTime": "EE h:mm a",
        "months": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        "formatLongDate": "MMMM d, yyyy h:mm a",
        "weekdays": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        "shortMonths": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        "formatShortDate": "MMM d, yyyy",
        "shortWeekdays": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        "amPms": ["AM", "PM"],
        "formatLongDateOnly": "MMMM d, yyyy"
      },
      'FEEDBACK_BUCKET_ID': "Home",
      'FEEDBACK_LOCALE_LANGUAGE': "en",
      'FEEDBACK_LOCALE_EXTRAS': {
        "logged_in": false,
        "is_partner": "",
        "guide_subs": "NA",
        "is_branded": "",
        "experiments": "916904,912516,932223,914052,916626,919515,906397,928201,929123,929121,929915,929906,929907,929125,929127,925714,929917,929919,931202,912512,912515,912518,912521,906838,906840,931913,904830,919373,933701,904122,900816,926403,909421,912711,907228",
        "accept_language": null
      }
    });
    yt.setMsg({
      'ADDTO_WATCH_LATER': "Watch Later",
      'ADDTO_WATCH_LATER_ADDED': "Added",
      'ADDTO_WATCH_LATER_ERROR': "Error"
    });
    yt.setAjaxToken('addto_ajax_logged_out', "Oo1hj2iWs9TPzzACwMHQuMe9DTx8MTM3MjcyMzI0M0AxMzcyNjM2ODQz");
    yt.setConfig('FEED_PRIVACY_CSS_URL', "https:\/\/web.archive.org\/web\/20130701000042\/http:\/\/s.ytimg.com\/yts\/cssbin\/www-feedprivacydialog-vflnT4HKf.css");
    yt.setAjaxToken('feed_privacy_ajax', "JCr3sBLdC3okeqXF2zBFLwE-X-Z8MTM3MjcyMzI0M0AxMzcyNjM2ODQz");
    yt.setConfig('FEED_PRIVACY_LIGHTBOX_ENABLED', true);
    yt.setConfig({
      'SBOX_JS_URL': "\/\/web.archive.org\/web\/20130701000042\/http:\/\/s.ytimg.com\/yts\/jsbin\/www-searchbox-vflkqp0xg.js",
      'SBOX_SETTINGS': {
        "REQUEST_DOMAIN": "us",
        "REQUEST_LANGUAGE": "en",
        "PSUGGEST_TOKEN": null,
        "EXPERIMENT_ID": -1,
        "USE_HTTPS": false,
        "HAS_ON_SCREEN_KEYBOARD": false,
        "CHIP_PARAMETERS": {},
        "SHOW_CHIP": false,
        "SESSION_INDEX": null,
        "CLOSE_ICON_URL": "\/s\/img\/icons\/close-vflrEJzIW.png"
      },
      'SBOX_LABELS': {
        "VIEW_CHANNEL_LABEL": "View channel",
        "SUGGESTION_DISMISSED_LABEL": "Suggestion dismissed",
        "WATCH_NOW_LABEL": "Watch now",
        "SUGGESTION_DISMISS_LABEL": "Dismiss"
      }
    });
    yt.setConfig({
      'YPC_LOADER_ENABLED': true,
      'YPC_LOADER_CONFIGS': "\/ypc_config_ajax",
      'YPC_LOADER_JS': "\/yts\/jsbin\/www-ypc-vflKxDpzV.js",
      'YPC_LOADER_CSS': "\/yts\/cssbin\/www-ypc-vfl7OlCUa.css",
      'YPC_LOADER_CALLBACKS': ['yt.www.ypc.checkout.init', 'yt.www.ypc.subscription.init']
    });
  </script>
  <script>
    ytcsi.span('st', 153);
    yt.setConfig({
      'TIMING_ACTION': "glo",
      'TIMING_INFO': {
        "yt_spf": 0,
        "ei": "qsbQUa_GNoafyQGSlIHQCw",
        "yt_li": 0,
        "yt_lt": "cold",
        "e": "916904,912516,932223,914052,916626,919515"
      }
    });
  </script>
  <script>
    yt.setConfig({
      'XSRF_TOKEN': "Ug16hErgO6XbVqSRo9sAw3sa6ep8MTM3MjcyMzI0MkAxMzcyNjM2ODQy",
      'XSRF_REDIRECT_TOKEN': "GQpRVsYnWgcpEZFXuF-pJm7hAZF8MTM3MjcyMzI0M0AxMzcyNjM2ODQz",
      'XSRF_FIELD_NAME': "session_token"
    });
  </script>
  <script>
    yt.setConfig('THUMB_DELAY_LOAD_BUFFER', 300);
  </script>
  <script>
    if (window.ytcsi) {
      ytcsi.tick("js_foot");
    }
  </script>
  <div id="debug"></div>
</body>
<script>
  yt = yt || {};
  yt.playerConfig = {
    "assets": {
      "css_actions": "\/\/s.ytimg.com\/yt\/cssbin\/www-player-actions-vflWsl9n_.css",
      "html": "\/html5_player_template",
      "css": "\/yt\/cssbin\/www-player-vflE5bu0u.css",
      "js": "\/\/s.ytimg.com\/yt\/jsbin\/html5player-vfl1S0-AB.js"
    },
    "url": "\/\/s.ytimg.com\/yt\/swfbin\/watch_as3-vfloWhEvq.swf",
    "min_version": "8.0.0",
    "args": {
      "fexp": "907722,906062,910102,927104,922401,920704,912806,927201,913546,913556,925109,919003,920201,912706,900816",
      "ptk": "youtube_multi",
      "enablecsi": "1",
      "allow_embed": 1,
      "rvs": "",
      "vq": "auto",
      "account_playback_token": "",
      "autohide": "1",
      "csi_page_type": "watch5",
      "keywords": "<?php echo htmlspecialchars($_video['tags']); ?>",
      "cr": "US",
      "iv3_module": "\/\/s.ytimg.com\/yt\/swfbin\/iv3_module-vflGCS_pr.swf",
      "fmt_list": "43\/320x240\/99\/0\/0,34\/320x240\/9\/0\/115,18\/320x240\/9\/0\/115,5\/320x240\/7\/0\/0,36\/320x240\/99\/0\/0,17\/176x144\/99\/0\/0",
      "title": "<?php echo htmlspecialchars($_video['title']); ?>",
      "length_seconds": <?php echo $_video['duration']; ?>,
      "enablejsapi": 1,
      "advideo": "1",
      "tk": "o3_r7m6s_HAaFxeywi14S3qFcY4uSrEiWfZ8KVUoyEB_gj1rlrELuQ==",
      "iv_load_policy": 1,
      "iv_module": "\/\/s.ytimg.com\/yt\/swfbin\/iv_module-vflBJ5PLc.swf",
      "sdetail": "p:bit.ly\/dwMq4b",
      "url_encoded_fmt_stream_map": "",
      "watermark": ",\/\/s.ytimg.com\/yt\/img\/watermark\/youtube_watermark-vflHX6b6E.png,\/\/s.ytimg.com\/yt\/img\/watermark\/youtube_hd_watermark-vflAzLcD6.png",
      "sourceid": "r",
      "timestamp": 1349916364,
      "storyboard_spec": "",
      "plid": "AATLveVba5g8mPZ8",
      "showpopout": 1,
      "hl": "en_US",
      "tmi": "1",
      "iv_logging_level": 4,
      "st_module": "\/\/s.ytimg.com\/yt\/swfbin\/st_module-vflCXoloO.swf",
      "no_get_video_log": "1",
      "iv_close_button": 0,
      "endscreen_module": "\/\/s.ytimg.com\/yt\/swfbin\/endscreen-vflK6XzTZ.swf",
      "iv_read_url": "\/\/www.youtube.com\/annotations_iv\/read2?sparams=expire%2Cvideo_id\u0026expire=1349959800\u0026key=a1\u0026signature=815C68436F1E8F95A9283A421D758B7A6452EFD9.5029A9CC9CFCF79F0B17A60238447CA0FE7CA991\u0026video_id=oHg5SJYRHA0\u0026feat=CS",
      "iv_queue_log_level": 0,
      "referrer": "\/\/bit.ly\/dwMq4b",
      "video_id": "<?php echo htmlspecialchars($_video['rid']); ?>",
      "sw": "1.0",
      "sk": "4md16KjsgYmUvVHOsiBQxSFIkPbju0d8C",
      "pltype": "contentugc",
      "t": "vjVQa1PpcFN8E8yJ1Q1BJFTy1GYmGAMgRZUyNC4FMBY=",
      "loudness": -23.6900005341
    },
    "url_v9as2": "\/\/s.ytimg.com\/yt\/swfbin\/cps-vfl2Ur0rq.swf",
    "params": {
      "allowscriptaccess": "always",
      "allowfullscreen": "true",
      "bgcolor": "#000000"
    },
    "attrs": {
      "id": "movie_player"
    },
    "url_v8": "\/\/s.ytimg.com\/yt\/swfbin\/cps-vfl2Ur0rq.swf",
    "html5": false
  };
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
      forceUpdate, gVapeTubePlayerReady);
    yt.setConfig({
      'PLAYER_REFERENCE': youTubePlayer
    });
  })();
</script>
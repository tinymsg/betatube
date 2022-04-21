<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/important/config.inc.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/lib/new/base.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/lib/new/fetch.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/lib/new/update.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/lib/new/insert.php"); ?>
<?php
    $_user_fetch_utils = new user_fetch_utils();
    $_video_fetch_utils = new video_fetch_utils();
    $_video_insert_utils = new video_insert_utils();
    $_user_insert_utils = new user_insert_utils();
    $_user_update_utils = new user_update_utils();
    $_base_utils = new config_setup();
    
    $_base_utils->initialize_db_var($conn);
    $_video_fetch_utils->initialize_db_var($conn);
    $_video_insert_utils->initialize_db_var($conn);
    $_user_fetch_utils->initialize_db_var($conn);
    $_user_insert_utils->initialize_db_var($conn);
    $_user_update_utils->initialize_db_var($conn);

    if(!isset($_SESSION['siteusername']))
        header("Location: /sign_in");

    $_base_utils->initialize_page_compass("Partnership");
?>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && @$_POST['send']) {
        $error = array();
        if($_user_fetch_utils->if_cooldown($_SESSION['siteusername'])) { $error['message'] = "You've already sent an application!"; $error['status'] = true; }
        
        if(!isset($error['message'])) {
            $_user_insert_utils->send_message("hwilliams8548", "Partnership Application", $_POST['message'], $_SESSION['siteusername']);
            $_user_update_utils->update_comment_cooldown_time($_SESSION['siteusername']);

            $error['success'] = true;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Betatube - <?php echo $_base_utils->return_current_page(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/static/css/new/www-core.css">
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                text-align: left;
                padding: 3px;
            }

            th {
                border: 1px solid #dddddd;
                background: rgb(230,230,230);
                background: -moz-linear-gradient(0deg, rgba(230,230,230,1) 0%, rgba(255,255,255,1) 100%, rgba(255,255,255,1) 100%);
                background: -webkit-linear-gradient(0deg, rgba(230,230,230,1) 0%, rgba(255,255,255,1) 100%, rgba(255,255,255,1) 100%);
                background: linear-gradient(0deg, rgba(230,230,230,1) 0%, rgba(255,255,255,1) 100%, rgba(255,255,255,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#e6e6e6",endColorstr="#ffffff",GradientType=1); 
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
        </style>
    </head>
    <body>
        <div class="www-core-container">
            <?php require($_SERVER['DOCUMENT_ROOT'] . "/static/module/header.php"); ?>
            <?php require($_SERVER['DOCUMENT_ROOT'] . "/static/module/module_sidebar.php"); ?>
            <div class="manage-top">
                <div style="width: 100%;border-top: 1px solid #CACACA;border-bottom: 1px solid #CACACA;">
                    <h3 style="margin-top: 0px;padding: 16px;">Partnership</h3>
                </div>
            </div>
                <?php
                    $search = $_SESSION['siteusername'];
                    $stmt56 = $conn->prepare("SELECT * FROM videos WHERE author = ? AND visibility = 'v'");
                    $stmt56->bind_param("s", $search);
                    $stmt56->execute();
                    $result854 = $stmt56->get_result();
                    $result56 = $result854->num_rows;

                    $results_per_page = 12;

                    $stmt = $conn->prepare("SELECT * FROM videos WHERE author = ? ORDER BY id DESC");
                    $stmt->bind_param("s", $_SESSION['siteusername']);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $results = $result->num_rows;

                    $number_of_result = $result->num_rows;
                    $number_of_page = ceil ($number_of_result / $results_per_page);  

                    if (!isset ($_GET['page']) ) {  
                        $page = 1;  
                    } else {  
                        $page = (int)$_GET['page'];  
                    }  

                    $page_first_result = ($page - 1) * $results_per_page;  

                    $stmt->close();
                ?>
            <div class="manage-base" style="position: relative;left: 9px;top: 3px;">
                <h2>Partner with Betatube</h2>
                Wanna get cool perks for your channel and look cool at the same time? Come sign up to be a partner.<br><br>
                <button type="button" class="collapsible active-dropdown"><img class="www-right-arrow" id="arrow_more">Perks</button>
                <div class="content" style="display: block;">
                    By being a partner... You get<br>
                    - A cool badge on your profile<br>
                    - You will be cool<br>
                    - You will be awesome<br>
                    - A cool emblem on your videos<br>
                </div><br><br>

                <button type="button" class="collapsible active-dropdown"><img class="www-right-arrow" id="arrow_more">Requirements</button>
                <div class="content" style="display: block;">
                    You need to do these things to be ellegible...<br>
                    - Upload high quality videos that people will want to watch<br>
                    - Have a good standing within the community<br>
                    - Be a cool person around everybody else.<br>
                </div><br><br>

                <button type="button" class="collapsible"><img class="www-right-arrow" id="arrow_more">Apply</button>
                <div class="content" style="display: none;">
                    <?php if(isset($error['status'])) { ?>
                        <div class="alert" id="videodoesntexist" style="background-color: #FFA3A3;">
                            <?php echo $error['message']; ?>
                        </div>
                    <?php } ?>
                    <?php if(isset($error['success'])) { ?>
                        <div class="alert" id="videodoesntexist">
                            Successfully sent a partnership request!
                        </div>
                    <?php } ?>
                    <form method="post" action="" id="submitform">
                        <textarea 
                            onkeyup="textCounter(this,'counter',500);" 
                            class="comment-textbox" cols="32" id="com" style="width: 98%;"
                            placeholder="Type some reasons why you should become a partner..." name="message"></textarea><br><br> 
                        <input disabled class="characters-remaining" maxlength="3" size="3" value="500" id="counter"> <?php if(!isset($cLang)) { ?> characters remaining <?php } else { echo $cLang['charremaining']; } ?> 
                        <span style="float: right;"> </span>
                        <input name="send" style="padding:0px;margin:0px;padding-left: 10px;padding-right: 10px;" type="submit" value="Post"><br>
                        <script>
                            function textCounter(field,field2,maxlimit) {
                                var countfield = document.getElementById(field2);
                                if ( field.value.length > maxlimit ) {
                                    field.value = field.value.substring( 0, maxlimit );
                                    return false;
                                } else {
                                    countfield.value = maxlimit - field.value.length;
                                }
                            }
                        </script>
                    </form>
                </div>
            </div>
        </div>
        <div class="www-core-container" style="position: relative;">
        <?php require($_SERVER['DOCUMENT_ROOT'] . "/static/module/footer.php"); ?>
        </div>
        <style>
            a[href="/inbox"]{text-decoration:none!important;}
            img[style="width: 16px;vertical-align: middle;margin-bottom: 3px;"]{width:14px!important;}
            #dropdown-header{border-bottom:0!important;}
            .sign-in-form-box #submitform:before{content: url("data:image/gif;base64,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");margin-left:100px;}
            td[colspan="2"] input{margin-right:112px!important;margin-top:-12px!important;}
            .watch-main-info:last-child{padding-bottom:8px;}
            .channel-info-video[style="margin-top: -11px;background-color: #DDE6F5;border-color: #C5CBD7;"] button,button.www-button.www-button-grey,input.www-button.www-button-grey{background:transparent url(/static/img/spritesheet_main.png)repeat-x scroll 0 -800px;border:1px solid#aaa;border-radius:3px;padding:2px;padding-top:3px;padding-left:8px;padding-right:8px;margin-top:4px;margin-left:3px;}
            .channel-info-video[style="margin-top: -11px;background-color: #DDE6F5;border-color: #C5CBD7;"] button:hover,button.www-button.www-button-grey:hover,input.www-button.www-button-grey:hover{cursor:pointer;text-decoration:underline;}
            .quicklist-add:hover{background-position:-25px -355px;}

            /* edit video */
            #submitform button{margin-left:-13px;margin-bottom:5px;}
            hr[style="border-top: 1px solid #d3d3d3; border-bottom: 0px solid black; padding: 3px;"]{border-top-color:#999!important;
            margin-top:1px;width:48.70rem;border-left:0!important;border-right:0!important;}
            #sidebar-item{font-weight:bold;}
            #sidebar-extra{height:360px;}
            .manage-base{margin-top:-34.36rem;margin-bottom:-262px;height: 606px;}
            /*replace these again/sign in reverted*/
            .sign-in-outer-box{border-color:#999;}
            .sign-in-form-box{background-color:#eee;border:1px solid;border-color:#ccc;}
            input#username{width:169px;margin-left:0;}
            #dropdown-header{border:1px solid#A0B1DC;} 
            #dropdown-header a{border-bottom:1px solid#A0B1DC;}
            /*upload page*/
            .upload-main-s b{font-size:13px;}
            .upload-main-s{width:602px;}
            .upload-inputs{width:590px;border-color:#333;border-radius:2px;height:9px;font-size:12px;margin-top:5px;}
            textarea#upltx2{margin-top:5px;border-radius:2px!important;border-color:#333!important;}
            .upload-new-base{border:1px solid#ddd;border-radius:5px;}
            select#category{margin-top:5px;}
            .barbg{border-color:#aaa;padding:1px;}
            .bar{background-color:#244883;color:rgba(0,0,0,0);}
            .upload-guidelines{background-color:#ffe69b;color:#994800;font-weight:bold;border-radius:4px;}
            select#category{margin-top:5px;}
            input#upltx, input#tags{border-color:#333!important;margin-top:5px;margin-left:0;}
            /*search box*/
            .search-box{padding:2px 1px 3px;}
            .search-box:active{margin-top:4px!important;margin-left:4px!important;}
            .search-box:focus{border: 2px solid#bbdafd;margin-top:4px;margin-left:3px;margin-right:5px;}
            #search-button:hover,button.yt-uix-button.yt-uix-button-default:hover,input[name="send"]:hover{background:#c6d7f3 url(/static/img/spritesheet_main.png) repeat-x center -1802px;}
            #search-button:hover{text-decoration:underline!important;cursor:pointer;}
            .search-button{margin-top:7px;margin-left:2px;font-size:12px;}
            .search-button:active{margin-left:1px!important;margin-top:6px!important;}

            /*my accounts*/
            #sidebar-item{padding-bottom:3px;padding-top:4px;}
            #sidebar-item:hover{background-color: rgb(239, 239, 239);
                background: -moz-linear-gradient(0deg,rgb(192,192,192,1)0%,rgb(239,239,239,1)115%);
                background: -webkit-linear-gradient(0deg,rgb(192,192,192,1)0%,rgb(239,239,239,1)115%);
                background: linear-gradient(0deg,rgb(192,192,192)0%, rgb(239,239,239)115%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="c0c0c0",endColorstr="#efefef",GradientType=1);}
            #sidebar-item:first-child{padding:0;float:left;height:0;border-bottom:0;}
            a[href="/inbox/send"]{margin-left:-43px!important;padding-right:9px!important;position:relative;top:-43px;}
            a[href="/favorites"]{margin-left:0px;}
            ul{border-top-color:#aaa;border-right-color:#aaa;margin-top:70px;}
            div[style="width: 100%;border-top: 1px solid #CACACA;border-bottom: 1px solid #CACACA;"] {
                margin-block: 0 !important;
                border-bottom: 2px solid #aaa !IMPORTANT;
                border-top: 0 !important;
                margin-left: -193px;
                position: relative;
                top: -10px;
                width: 123.5% !important;
                padding:5px;
            }
            h3[style="margin-top: 0px;padding: 16px;"]{padding:2px!important;font-size:17px;}

            /* watch page */
            .channel-info-video[style="margin-top: -11px;background-color: #DDE6F5;border-color: #C5CBD7;"] button{margin-top:-10px;position:relative;top:-3px;}
            span[style="font-size: 10px;"]{font-size:12px!important;text-transform:capitalize;}
            .channel-info-video .thin-line{border-color:#aaa;}

            /* inbox */
            .content{background-color:white;}
            div[style="padding: 10px;"]{border:1px solid#aaa;padding:0!important;margin-top:2.2rem;}
            button.yt-uix-button.yt-uix-button-default,input[name="send"]{font-weight:bold;color:#039;background:#c6d7f3 url(/static/img/spritesheet_main.png)repeat-x center -1602px;border: 1px solid #a0b1dc;
            text-decoration: none;
            border-radius: 3px;
            padding: 3px 0.833em;
            margin: 5px 7px -4px 7px;}
            .content button.yt-uix-button.yt-uix-button-default{margin-top:-5px;margin-left:1px;margin-bottom:-1px;}
            a[style="color: #333; text-decoration: none;"]{color:#039!important;}
            input[name="send"]:hover,button.yt-uix-button.yt-uix-button-default:hover{text-decoration:underline;cursor:pointer;}

            /* compose */
            div[style="padding: 10px;"] form table{margin-left:1rem;}
            td[style="padding: 5px;vertical-align: top;"]{color:#666;}
            b[style="vertical-align: top;"]{color:#000;padding-right:40px;}
            td[style="padding: 5px;vertical-align: top;"] input{margin-left:1rem;}
            input[type="text"][name="subject"]{margin-left:-1.06rem;}
            textarea[name="message"], input[type="text"]{width:600px;margin-left:-1.43rem;border-radius:0!important;border-color:#aaa!important;}
            input[name="send"]{padding-left:4px;padding-right:1px;margin-left:6.1rem;margin-top:-1rem;margin-bottom:1rem;}

            .sub_button:hover,.comment-text a,#upload_button,button{cursor:pointer;}
            img[src="/static/img/mail_notif.png"]{width: 21px!important;margin-top:-2px;}
            .buffer{opacity:0.4;}
            span.www-button-content a{color:#000!important;}
            .grid-item .thumbnail{padding:1px;}
            .video-item .thumbnail, .r120{border:3px double#999;background-repeat:no-repeat;background-size:124px 76px;}
            .r120{background-size:120px 67px;}
            .www-channel-right iframe[width="646"]{width:649px;}
            .active-dropdown:nth-child(3) img{background-position:0px -323px;}
            .video-info-grid,.video-info-watch,.channel-box-top h3[style="display: inline-block;"],.channel-box-description,.featured-video-info{overflow:hidden;}
            .collapsible:nth-child(3) img{background-position:0px -343px;}
            span[style="display: inline-block; vertical-align: top;width: 562px;"]{width:559px!important;padding-left:8px;}
            .thin-line{border-left:0;border-right:0;}
            .channel-box-top{overflow:hidden;height:16px;}
        </style>
        <script>
            var coll = document.getElementsByClassName("collapsible");
            var arrow_more = document.getElementById("arrow_more");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active-dropdown");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                        content.style.backgroundPosition = "0 -342px";

                        //background-position: ;
                    } else {
                        content.style.display = "block";
                        content.style.backgroundPosition = "0 -322px";
                    }
                });
            }
        </script>
    </body>
</html>
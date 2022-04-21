<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/important/config.inc.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/lib/new/base.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/lib/new/fetch.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/lib/new/insert.php"); ?>
<?php
    $_user_fetch_utils = new user_fetch_utils();
    $_video_fetch_utils = new video_fetch_utils();
    $_video_insert_utils = new video_insert_utils();
    $_user_insert_utils = new user_insert_utils();
    $_base_utils = new config_setup();
    
    $_base_utils->initialize_db_var($conn);
    $_video_fetch_utils->initialize_db_var($conn);
    $_video_insert_utils->initialize_db_var($conn);
    $_user_fetch_utils->initialize_db_var($conn);
    $_user_insert_utils->initialize_db_var($conn);

    $_base_utils->initialize_page_compass("Blog");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>da blog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/static/css/new/www-core.css">
    </head>
    <body>
        <div class="www-core-container">
            <?php require($_SERVER['DOCUMENT_ROOT'] . "/static/module/header.php"); ?>
            <div style="min-height: 300px;">
            <h1>2009</h1> <small>(Sat, 12 Jan)</small><hr class="thin-line"><br>
                2009 is out NOW!<br>
                You may be thinking "What happened to 2012 >:("<br><br>
            </div>
            <i>...and then there was nothing...</i>
        </div>
        <div class="www-core-container">
        <?php require($_SERVER['DOCUMENT_ROOT'] . "/static/module/footer.php"); ?>
        </div>

    </body>
</html>
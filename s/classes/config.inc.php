<?php
    $__server = (object) [
        "page_title" => "Betatube",
        "featured_channels" => array("hwilliams8548", "Betatube", "Luke"),
        "ffmpeg_binary" => "ffmpeg", 
        "ffprobe_binary" => "ffprobe", 
        "ffmpeg_threads" => 2, 

        "discord_webhook" => "https://discord.com/api/webhooks/951979096282365953/bafgN9zA95jrzMzn9bQ4ZsXVA4EG5BmZ69tsmylrOTBY5AL33HL3OqZZobS7ec_3TG3_",

        "page_embeds" => (object) [
            "page_title" => "",
            "page_description" => "",
            "page_url" => "",
            "page_image" => "",
        ],

        "db_properties" => (object) [
            "db_user" => "root",
            "db_password" => "root",
            "db_host" => "localhost",
            "db_database" => "betatube",
            "db_connected" => false,
        ], 
		
        "video_properties" => (object) [ "status" => "unloaded" ],
        "user_properties"  => (object) [ "status" => "unloaded" ],
        "group_properties" => (object) [ "status" => "unloaded" ],
        "forum_properties" => (object) [ "status" => "unloaded" ],
    ];

    try
    {
        $__db = new PDO("mysql:host=".$__server->db_properties->db_host.";dbname=".$__server->db_properties->db_database.";charset=utf8mb4",
            $__server->db_properties->db_user,
            $__server->db_properties->db_password,
            [
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
        $__server->db_properties->db_connected = true;
    }
    catch(PDOException $e)
    {
        die("An error occured connecting to the database: ".$e->getMessage());
    }

    session_start();

    /* NORMAL BANS */
    $stmt = $__db->prepare("SELECT * FROM bans WHERE username = :username ORDER BY id DESC");
	$stmt->bindParam(":username", $_SESSION['siteusername']);
	$stmt->execute();

	while($ban = $stmt->fetch(PDO::FETCH_ASSOC)) { 
        $ban_info = $ban;
        if($_SERVER['REQUEST_URI'] != "/ban")
		    header("Location: /ban");
	}

    /* IP BANS */
    $stmt = $__db->prepare("SELECT * FROM bans WHERE username = :username ORDER BY id DESC");
    $stmt->bindParam(":username", $_SERVER["HTTP_CF_CONNECTING_IP"]);
    $stmt->execute();

    while($ban = $stmt->fetch(PDO::FETCH_ASSOC)) { 
        $ban_info = $ban;
        if($_SERVER['REQUEST_URI'] != "/ip_ban")
            header("Location: /ip_ban");
    }

    /* NOT RUNNING UNDER CF CHECK */
    if(!isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER["HTTP_CF_CONNECTING_IP"] = $_SERVER['REMOTE_ADDR'];
    }
	$sitename = 'betatube';
?>
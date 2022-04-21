<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_update.php"); ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__user_u = new user_update($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php
$request = (object) [
    "name1" => '9',
	"name2" => 'nox',
	"name3" => 'hwilliams8548'
    "sender" => $_SESSION['siteusername'],

    "error" => (object) [
        "message" => "",
        "status" => "OK"
    ]
];


if($__user_h->if_subscribed(@$_SESSION['siteusername'], $request->name1)) 
    { $request->error->message = "An error occured"; $request->error->status = ""; }
if($__user_h->if_subscribed(@$_SESSION['siteusername'], $request->name2)) 
    { $request->error->message = "An error occured"; $request->error->status = ""; }
if($__user_h->if_subscribed(@$_SESSION['siteusername'], $request->name3)) 
    { $request->error->message = "An error occured"; $request->error->status = ""; }

if($request->error->status == "OK") { 
    $stmt = $__db->prepare("INSERT INTO subscribers (sender, reciever) VALUES (:sender, :reciever)");
    $stmt->bindParam(":sender", $request->sender);
    $stmt->bindParam(":reciever", $request->name1);
	$stmt->execute();
    $stmt = $__db->prepare("INSERT INTO subscribers (sender, reciever) VALUES (:sender, :reciever)");
    $stmt->bindParam(":sender", $request->sender);
    $stmt->bindParam(":reciever", $request->name2);
	$stmt->execute();
    $stmt = $__db->prepare("INSERT INTO subscribers (sender, reciever) VALUES (:sender, :reciever)");
    $stmt->bindParam(":sender", $request->sender);
    $stmt->bindParam(":reciever", $request->name3);
    $stmt->execute();
	header("Location: /?success=hello");
} else {
    echo json_encode($request->error);
}
?>
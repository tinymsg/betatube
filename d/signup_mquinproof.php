<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php
    function remove_emoji($text) {

        $clean_text = "";

        // Match Emoticons
        $regexEmoticons = '/[\x{1F600}-\x{1F64F}]/u';
        $clean_text = preg_replace($regexEmoticons, '', $text);

        // Match Miscellaneous Symbols and Pictographs
        $regexSymbols = '/[\x{1F300}-\x{1F5FF}]/u';
        $clean_text = preg_replace($regexSymbols, '', $clean_text);

        // Match Transport And Map Symbols
        $regexTransport = '/[\x{1F680}-\x{1F6FF}]/u';
        $clean_text = preg_replace($regexTransport, '', $clean_text);

        // Match Miscellaneous Symbols
        $regexMisc = '/[\x{2600}-\x{26FF}]/u';
        $clean_text = preg_replace($regexMisc, '', $clean_text);

        // Match Dingbats
        $regexDingbats = '/[\x{2700}-\x{27BF}]/u';
        $clean_text = preg_replace($regexDingbats, '', $clean_text);

        return $clean_text;
    }

		$rid = "";
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-_';
		for ($i = 0; $i < 11; $i++)
			$rid .= $characters[mt_rand(0, 63)];

    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['password'] && $_POST['username']) {
        $request = (object) [
            "username" => $_POST['username'],
            "password" => $_POST['password'],
			"rid" => $rid,
            "email" => $_POST['email'],
            "password_hash" => password_hash($_POST['password'], PASSWORD_DEFAULT),
            "name" => $_POST['username'],

            "error" => (object) [
                "message" => "",
                "status" => "OK"
            ]
        ]; 

        $request->username = remove_emoji($request->username);
		
		$_ticker = $__user_h->fetch_user_username('testestestyyyy');
		if($_ticker['country'] !== "1")
		{ $request->error->message = "Signus are disabled for now!"; $request->error->status = "";  }

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) 
            { $request->error->message = "Your email is invalid!"; $request->error->status = "";  }
        if(strlen($request->username) > 21) 
            { $request->error->message = "Your username must be shorter than 20 characters."; $request->error->status = ""; }
        if(strlen($request->password) < 8) 
            { $request->error->message = "Your password must at least be 8 characters long."; $request->error->status = ""; }
        if(!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $request->password)) 
            { $request->error->message = "Include numbers and letters in your password!"; $request->error->status = ""; }
        if($_SERVER[REQUEST_URI] != '/d/signup_mquinproof') 
            { $request->error->message = "Include numbers and letters in your password!"; $request->error->status = ""; }
        if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $request->username))
            { $request->error->message = "Your username cannot contain any special characters!"; $request->error->status = ""; }
        if(!preg_match('/^\S+\w\S{1,}/', $request->username)) 
            { $request->error->message = "Your username cannot contain any special characters!"; $request->error->status = ""; }
        if(preg_match('/\b(\w*nigga\w*)\b/', $request->username)) 
            { $request->error->message = "Your username cannot contain slurs!"; $request->error->status = ""; }
        if(preg_match('/\b(\w*nigger\w*)\b/', $request->username)) 
            { $request->error->message = "Your username cannot contain slurs!"; $request->error->status = ""; }
        if(preg_match('/\b(\w*niger\w*)\b/', $request->username)) 
            { $request->error->message = "Your username cannot contain slurs!"; $request->error->status = ""; }
        if(preg_match('/\b(\w*fag\w*)\b/', $request->username)) 
            { $request->error->message = "Your username cannot contain slurs!"; $request->error->status = ""; }
        if(preg_match('/\b(\w*faggot\w*)\b/', $request->username)) 
            { $request->error->message = "Your username cannot contain slurs!"; $request->error->status = ""; }
        if(preg_match('/\b(\w*fagot\w*)\b/', $request->username)) 
            { $request->error->message = "Your username cannot contain slurs!"; $request->error->status = ""; }
        if(preg_match('/\\s/', $request->username)) 
            { $request->error->message = "Your username cannot contain spaces!"; $request->error->status = ""; }
        if(empty(trim($request->username))) 
            { $request->error->message = "Your username cannot be empty!"; $request->error->status = ""; }
 		if(preg_match('/\b(\w*yopmail\w*)\b/', $request->email)) 
            { $request->error->message = "no"; $request->error->status = ""; }
 		if(preg_match('/\b(\w*realgnox\w*)\b/', $request->username)) 
            { $request->error->message = "mquin is not allowed"; $request->error->status = ""; }
                

        $stmt = $__db->prepare("SELECT username FROM users WHERE username = lower(:username)");
        $stmt->bindParam(":username", $request->username);
        $stmt->execute();
        if($stmt->rowCount()) 
            { $request->error->message = "There's already a user with that same username!"; $request->error->status = ""; }

		
        if($request->error->status == "OK") {
			if($request->email != '2@2.com' && $request->email != 'seed@seedtech.dev') {
            $stmt = $__db->prepare("INSERT INTO users (username, email, password, channelid, title) VALUES (:username, :email, :password, :channelid, :title)");
            $stmt->bindParam(":username", $request->username);
			$stmt->bindParam(":title", $request->username);
            $stmt->bindParam(":email", $request->email);
			$stmt->bindParam(":channelid", $request->rid);
            $stmt->bindParam(":password", $request->password_hash);
            $stmt->execute();
			$_SESSION['siteusername'] = $request->username;
			$stmt = $__db->prepare("UPDATE users SET ip = :ip WHERE username = :username");
			$stmt->bindParam(":username", $_SESSION['siteusername']);
			$stmt->bindParam(":ip",       $_SERVER["HTTP_CF_CONNECTING_IP"]);
			$stmt->execute();
			}
			if($request->email != '2@2.com' && $request->email != 'seed@seedtech.dev') {
            header("Location: /onsignupsub.php");
			} else{
			header("Location: /");
			}
        } else {
            $_SESSION['error'] = $request->error;
            header("Location: /sign_up");
        }
    }
?>

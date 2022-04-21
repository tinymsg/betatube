<?php
session_start();

$config = array(); // add other stuff here
$post = array(); // used for handling post inputs, put sanitized inputs into here!!!

$config['db_host'] = "mysql";
$config['db_user'] = "root";
$config['db_pass'] = "root";
$config['db_name'] = "fulptube";

$config['recaptcha_secret'] = ""; 
$config['recaptcha_sitekey'] = "";

$conn = mysqli_connect($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
?>
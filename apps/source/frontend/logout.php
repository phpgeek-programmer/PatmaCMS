<?php
$url='/';
session_start();

// set up the redirect
if(isset($_REQUEST['redirect'])){
	$url=preg_replace('/[\?\&].*/','',$_REQUEST['redirect']);
	if($url=='')$url='/';
}

unset($_SESSION['userdata']);

header('Location: '.$url);
echo '<a href="'.htmlspecialchars($url).'">redirect</a>';

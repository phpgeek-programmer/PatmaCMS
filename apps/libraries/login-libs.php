<?php
require 'basics.php';

$url='/';
$err=0;

function login_redirect($url,$msg='success'){
	if($msg)$url.='?login_msg='.$msg;
	header('Location: '.$url);
	echo '<a href="'.htmlspecialchars($url).'">redirect</a>';
	exit;
}

// set up the redirect
if(isset($_REQUEST['redirect'])){
	$url=preg_replace('/[\?\&].*/','',$_REQUEST['redirect']);
	if($url=='')$url='/';
}

// check that the email address is provided and valid
function login_check_is_email_provided(){
	if(
		!isset($_REQUEST['email']) || $_REQUEST['email']==''
		|| !filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)
	){
		login_redirect($GLOBALS['url'],'noemail');
	}
}

// check that the captcha is provided
function login_check_is_captcha_provided(){
	if(
	  !isset($_REQUEST["recaptcha_challenge_field"]) || $_REQUEST["recaptcha_challenge_field"]==''
		|| !isset($_REQUEST["recaptcha_response_field"]) || $_REQUEST["recaptcha_response_field"]==''
	){
		login_redirect($GLOBALS['url'],'nocaptcha');
	}
}

// check that the captcha is valid
function login_check_is_captcha_valid(){
	require 'recaptcha.php';
	$resp=recaptcha_check_answer(
		RECAPTCHA_PRIVATE,
		$_SERVER["REMOTE_ADDR"],
		$_REQUEST["recaptcha_challenge_field"],
		$_REQUEST["recaptcha_response_field"]
	);
	if(!$resp->is_valid){
		login_redirect($GLOBALS['url'],'invalidcaptcha');
	}
}

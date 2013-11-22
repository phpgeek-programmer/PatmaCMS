<?php
require 'login-libs.php';

login_check_is_email_provided();

// check that the password is provided
if(!isset($_REQUEST['password']) || $_REQUEST['password']==''){
	login_redirect($url,'nopassword');
}

login_check_is_captcha_provided();
login_check_is_captcha_valid();

// check that the email/password combination matches a row in the user table
$password=md5($_REQUEST['email'].'|'.$_REQUEST['password']);
$r=dbRow('select * from user_accounts where
	email="'.addslashes($_REQUEST['email']).'" and
	password="'.$password.'" and active'
);
if($r==false){
	login_redirect($url,'loginfailed');
}

// success! set the session variable, then redirect
$_SESSION['userdata']=$r;
$groups=json_decode($r['groups']);
$_SESSION['userdata']['groups']=array();
foreach($groups as $g)$_SESSION['userdata']['groups'][$g]=true;
if($r['extras']=='')$r['extras']='[]';
$_SESSION['userdata']['extras']=json_decode($r['extras']);

login_redirect($url);

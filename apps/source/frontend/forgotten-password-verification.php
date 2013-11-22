<?php
require 'login-libs.php';

login_check_is_email_provided();

// check that a verification code was provided
if(
	!isset($_REQUEST['verification_code']) || $_REQUEST['verification_code']==''
){
	login_redirect($url,'novalidation');
}

// check that the email/verification code combination matches a row in the user table
$password=md5($_REQUEST['email'].'|'.$_REQUEST['password']);
$r=dbRow('select * from user_accounts where
	email="'.addslashes($_REQUEST['email']).'" and
	verification_code="'.$_REQUEST['verification_code'].'" and active'
);
if($r==false){
	login_redirect($url,'validationfailed');
}

// success! set the session variable, then redirect
$_SESSION['userdata']=$r;
$groups=json_decode($r['groups']);
$_SESSION['userdata']['groups']=array();
foreach($groups as $g)$_SESSION['userdata']['groups'][$g]=true;
if($r['extras']=='')$r['extras']='[]';
$_SESSION['userdata']['extras']=json_decode($r['extras']);

login_redirect($url,'verified');

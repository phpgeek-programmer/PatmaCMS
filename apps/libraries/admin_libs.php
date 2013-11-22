<?php

require SYSTEM_CORE_PATH . DIRECTORY_SEPARATOR . 'basics.php';

function is_admin(){
    
    if($_SESSION["administrator"] = true) {
        return true;
    } else {
        return false;
    }
    
	/*
        if(!isset($_SESSION['userdata']))
            return false;
        
	if(
		isset($_SESSION['userdata']['groups']['_administrators']) ||
		isset($_SESSION['userdata']['groups']['_superadministrators'])
	)
            return true;
        
	if(!isset($_REQUEST['login_msg']))$_REQUEST['login_msg']='permissiondenied';
            return false;
         * 
         */
}

function login($email, $password) {
    if($email == "admin@patmacms.local" && $password == "password") {
        $_SESSION["administrator"] = true;
        header("location: /administrator?act=dashboard");
    }
}


<?php

    // cek login
    if ( isset($_POST["email"]) && isset($_POST["password"]) ) {
        login($_POST["email"], $_POST["password"]);
    }
   
?>

<?php
	require APPS_LIBRARIES_PATH . DIRECTORY_SEPARATOR . 'recaptcha.php';
	$captcha=recaptcha_get_html(RECAPTCHA_PUBLIC);
?>

<?php
if(isset($_REQUEST['login_msg'])){
	require APPS_SOURCE_ADMIN_PATH . DIRECTORY_SEPARATOR .'login-codes.php';
	$login_msg=$_REQUEST['login_msg'];
	if(isset($login_msg_codes[$login_msg])){
		echo '<script>$(function(){$("<strong>'
			.htmlspecialchars($login_msg_codes[$login_msg])
			.'</strong>").dialog({modal:true});});</script>';
	}
}
?>

<html>
	<head>
		<title>Login</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/themes/south-street/jquery-ui.css" />
		<script src="assets/javascript/login.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/login.css" />
	</head>
	<body>

		<div id="header"></div>

		<div class="tabs">
			<ul>
				<li><a href="#tab1">Login</a></li>
				<li><a href="#tab2">Forgotten Password</a></li>
			</ul>
			<div id="tab1">
				<form method="post" action="administrator?act=login">
					<table>
						<tr><th>email</th><td><input id="email" name="email" type="email" /></td></tr>
						<tr><th>password</th><td><input type="password" name="password" /></td></tr>
						<tr id="captcha"><th>captcha</th><td><?php echo $captcha; ?></td></tr>
						<tr><th colspan="2" align="right"><input name="action" type="submit" value="login" class="login" /></th></tr>
					</table>
				</form>
			</div>
			<div id="tab2">
				<form method="post" action="administrator?act=password-reminder&redirect=<?php echo $_SERVER['PHP_SELF'];?>">
					<table>
						<tr><th>email</th><td><input id="email" type="text" name="email" /></td></tr>
						<tr><th colspan="2" align="right"><input name="action" type="submit" value="resend my password" class="login" /></th></tr>
					</table>
				</form>
			</div>
		</div>

</body>
</html>


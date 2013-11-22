<?php
/**
 * File header ini dipanggil oleh semua file yang mengharuskan pengecekan autorisasi admin
 */

if(!is_admin()){
	//require APPS_SOURCE_ADMIN_PATH . DIRECTORY_SEPARATOR . 'login/login.php';
	//exit;
        header("location: administrator?act=login");
}

header('Content-type: text/html; Charset=utf-8');
?>
<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="/ww.admin/theme/admin.css" type="text/css" />
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/themes/south-street/jquery-ui.css" type="text/css" />
	</head>
	<body>
		<div id="header"> 
			<div id="menu-top">
				<ul>
					<li><a href="/ww.admin/users.php">Users</a></li>
					<li><a href="/ww.incs/logout.php?redirect=/ww.admin/">Log Out</a></li>
				</ul>
			</div>
		</div>
		<div id="wrapper">

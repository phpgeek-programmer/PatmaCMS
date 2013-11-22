<?php
$id=(int)$_REQUEST['id'];
if($_REQUEST['action']=='delete'){
	dbQuery("delete from user_accounts where id=$id");
	unset($_REQUEST['id']);
}
if($_REQUEST['action']=='Save'){
	$groups=$_REQUEST['groups'];
	if(!count($groups))$groups=array(0);
	$grs=dbAll('select name from groups where id in ('.addslashes(join(',',array_keys($groups))).') order by name');
	$groups=array();
	foreach($grs as $r)$groups[]=$r['name'];
	$sql='set email="'.addslashes($_REQUEST['email']).'",active="'.(int)$_REQUEST['active'].'",groups="'.addslashes(json_encode($groups)).'"';
	if(isset($_REQUEST['password']) && $_REQUEST['password']!=''){
		if($_REQUEST['password']!==$_REQUEST['password2'])echo '<em>Password not updated. Must be entered the same twice.</em>';
		else $sql.=',password=md5("'.addslashes($_REQUEST['email'].'|'.$_REQUEST['password']).'")';
	}
	if($id==-1){
		dbQuery('insert into user_accounts '.$sql);
		$_REQUEST['id']=dbLastInsertId();
	}
	else{
		dbQuery('update user_accounts '.$sql.' where id='.$id);
	}
	echo '<em>users updated</em>';
}

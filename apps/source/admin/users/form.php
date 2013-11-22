<?php
$id=(int)$_REQUEST['id'];
$groups=array();
$r=dbRow("select * from user_accounts where id=$id");
if(!is_array($r) || !count($r)){
	$r=array('id'=>-1,'email'=>'','active'=>0);
}
echo '<form action="users.php?id='.$id.'" method="post">';
echo '<input type="hidden" name="id" value="'.$id.'" /><table>';
echo '<tr><th>Email</th><td><input name="email" value="'.htmlspecialchars($r['email']).'" /></td></tr>';
echo '<tr><th>Password</th><td><input name="password" type="password" /></td></tr>';
echo '<tr><th>(repeat)</th><td><input name="password2" type="password" /></td></tr>';
echo '<tr><th>Groups</th><td class="groups">';
$grs=dbAll('select id,name from groups');
$gms=array();
foreach($grs as $g){
	$groups[$g['id']]=$g['name'];
}
$grs=json_decode($r['groups']);
foreach($groups as $k=>$g){
	echo '<input type="checkbox" name="groups['.$k.']"';
	if(in_array($g,$grs))echo ' checked="checked"';
	echo ' />',htmlspecialchars($g),'<br />';
}
echo '</td></tr>';
// }
echo '<tr><th>Active</th><td><select name="active"><option value="0">No</option><option value="1"'.($r['active']?' selected="selected"':'').'>Yes</option></select></td></tr>';
echo '</table>';
echo '<input type="submit" name="action" value="Save" />';
echo '</form>';

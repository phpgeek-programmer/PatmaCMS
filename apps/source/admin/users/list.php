<?php
$users=dbAll('select id,email,groups from user_accounts order by email');
echo '<table style="min-width:50%"><tr><th>User</th><th>Groups</th><th>Actions</th></tr>';
foreach($users as $user){
	echo '<tr><th><a href="users.php?id='.$user['id'].'">'.htmlspecialchars($user['email']).'</a></th>';
	echo '<td>'.join(', ',json_decode($user['groups'])).'</td>';
	echo '<td><a href="users.php?id='.$user['id'].'">edit</a>';
	echo '&nbsp;<a href="users.php?id='.$user['id'].'&amp;action=delete" onclick="return confirm(\'are you sure you want to delete this user?\')">[x]</a></td></tr>';
}
echo '</table>';
echo '<a class="button" href="users.php?id=-1">Create User</a>';

<?php
require 'header.php';
echo '<h1>User Management</h1>';

echo '<div class="left-menu">';
echo '<a href="/ww.admin/users.php">Users</a>';
echo '</div>';

echo '<div class="has-left-menu">';
echo '<h2>User Management</h2>';
if(isset($_REQUEST['action']))require 'users/actions.php';
if(isset($_REQUEST['id']))require 'users/form.php';
require 'users/list.php';
echo '</div>';

echo '<script src="/ww.admin/users/users.js"></script>';
require 'footer.php';

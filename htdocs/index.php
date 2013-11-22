<?php

/*
 * -------------------------------------------------------------------
 *  set the main path constants
 * -------------------------------------------------------------------
 */

// The name of THIS file
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

// The PHP file extension
// this global constant is deprecated.
define('EXT', '.php');

define(BASEPATH, "..");

// apps path
define(APPS_PATH, BASEPATH . DIRECTORY_SEPARATOR . "apps");


// include all config file
foreach (glob(APPS_PATH . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "*.php") as $filename) {
    include $filename;
}

// set include path
set_include_path(APPS_LIBRARIES_PATH . DIRECTORY_SEPARATOR);

// common variables and functions
include_once(SYSTEM_CORE_PATH . DIRECTORY_SEPARATOR . 'common.php');

// grab page and id variabel from url
$page = isset($_GET['page']) ? $_GET['page'] : '';
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// include class Page on apps/libraries
include("Pages.php");

if (!$id) {
    if ($page) { 
        $r = Page::getInstanceByName($page);
        if ($r && isset($r->id))
            $id = $r->id;
    }
    
    if (!$id) { 
        // special page
        $special = 1;
        if (!$page) {
            $r = Page::getInstanceBySpecial($special);
            if ($r && isset($r->id))
                $id = $r->id;
        }
    }
}

// load page data
if ($id) {
    $PAGEDATA = (isset($r) && $r) ? $r : Page::getInstance($id);
} else {
    echo '404 thing goes here';
    exit;
}

// print page body
echo $PAGEDATA->body;

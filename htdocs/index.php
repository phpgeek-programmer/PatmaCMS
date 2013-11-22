<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * File yang pertama kali akan dipanggil oleh web server
 *
 * File index.php di direktori root web akan dipanggil pertama kali untuk
 * menentukan menginisiasi berbagai resource yang dibutuhkan.
 *
 * PHP version 5
 *
 * LISENSI: File ini tunduk pada versi 3.01 dari lisensi PHP
 * Yang tersedia melalui dunia-wide-web di URI berikut:
 * Http://www.php.net/license/3_01.txt. Jika Anda tidak menerima salinan
 * Lisensi PHP dan tidak dapat memperolehnya melalui web, silahkan
 * Mengirim catatan ke license@php.net sehingga kami dapat segera mengirimkan salinannya.
 * 
 *
 * @category   Htdocs
 * @package    htdocs
 * @subpackage 
 * @author     Original PhpGeek Programmer <phpgeek.programmer@gmail.com>
 * @author     Another Denbagusjkt <denbagusjkt@gmail.com>
 * @copyright  2012-2013 Cepat Mahir
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    GIT: $Id$
 * @link       https://github.com/phpgeek-programmer/PatmaCMS
 * @since      File available since Release 0.0.1
 */

/**
 * 
 */
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

/**
 * Ekstensi file php
 */
define('EXT', '.php');

define(BASEPATH, "..");

/**
 * Lokasi direktori apps
 */
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

if($page == ADMINISTRATOR_PAGE) {
    include_once(APPS_SOURCE_ADMIN_PATH . DIRECTORY_SEPARATOR . 'index.php');
    exit();
}

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

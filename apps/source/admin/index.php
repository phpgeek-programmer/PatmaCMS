<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * File ini akan mengatur routing ketika akan mengakses administrator
 *
 * File index.php di direktori apps/source/admin ini akan dipanggil pertama kali untuk
 * menyanyikan halaman administrator beserta modul dan aksi yang diminta.
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
 * @category   AppsSourceAdmin
 * @package    AppsSource
 * @subpackage Admin
 * @author     Original PhpGeek Programmer <phpgeek.programmer@gmail.com>
 * @author     Another Denbagusjkt <denbagusjkt@gmail.com>
 * @copyright  2012-2013 Cepat Mahir
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    GIT: $Id$
 * @link       https://github.com/phpgeek-programmer/PatmaCMS
 * @since      File available since Release 0.0.1
 */
require APPS_LIBRARIES_PATH . DIRECTORY_SEPARATOR . 'admin_libs.php';

// routing halaman administrator adalah sebagai berikut
// variabel $_GET["mod"] digunakan untuk memanggil file php yang terkait modul tersebut
// variabel $_GET["act"] digunakan untuk aksi apa yang akan dilakukan, misal login, logout
if (isset($_GET["act"])) {
    if ($_GET["act"] == "login") {
        require APPS_SOURCE_ADMIN_PATH . DIRECTORY_SEPARATOR . 'login/login.php';
        exit();
    } elseif ($_GET["act"] == "logout") {
        require APPS_SOURCE_ADMIN_PATH . DIRECTORY_SEPARATOR . 'login/logout.php';
        exit();
    } elseif ($_GET["act"] == "dashboard") {
        require APPS_SOURCE_ADMIN_PATH . DIRECTORY_SEPARATOR . 'dashboard.php';
        exit();
    }
} else {
    require APPS_SOURCE_ADMIN_PATH . DIRECTORY_SEPARATOR . 'dashboard.php';
    exit();
}



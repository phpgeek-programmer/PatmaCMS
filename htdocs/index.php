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
 * lokasi direktori utama
 */
define(BASEPATH, "..");

/**
 * Lokasi direktori apps
 */
define(APPS_PATH, BASEPATH . DIRECTORY_SEPARATOR . "apps");


// include semua file config
foreach (glob(APPS_PATH . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "*.php") as $filename) {
    include $filename;
}
 

echo "tes halaman frontend";

?>


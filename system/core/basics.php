<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Kumpulan fungsi dasar yang digunakan untuk menjalankan aplikasi
 *
 * Berbagai fungsi dasar yang sering digunakan untuk menjalankan aplikasi didefinisikan 
 * disini.
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
 * @category   SystemCore
 * @package    System
 * @subpackage Core
 * @author     Original PhpGeek Programmer <phpgeek.programmer@gmail.com>
 * @author     Another Denbagusjkt <denbagusjkt@gmail.com>
 * @copyright  2012-2013 Cepat Mahir
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    GIT: $Id$
 * @link       https://github.com/phpgeek-programmer/PatmaCMS
 * @since      File available since Release 0.0.1
 */

session_start();

// include file yang berisi fungsi-fungsi untuk memanipulasi
require dirname(__FILE__).'/database.php';

/**
 * Berfungsi untuk melakukan auto require/include file php yang bernama sesuai
 * paramater yang dilewatkan.
 * 
 * @param string $name
 */
function __autoload($name) {
	require $name . '.php';
}


<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Konfigurasi untuk mengakses basis data ditentukan disini.
 *
 * Semua variabel yang dibutuhkan untuk melakukan koneksi ke database ditentukan
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
 * @category   AppsConfig
 * @package    Apps
 * @subpackage Config
 * @author     Original PhpGeek Programmer <phpgeek.programmer@gmail.com>
 * @author     Another Denbagusjkt <denbagusjkt@gmail.com>
 * @copyright  2012-2013 Cepat Mahir
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    GIT: $Id$
 * @link       https://github.com/phpgeek-programmer/PatmaCMS
 * @since      File available since Release 0.0.1
 */

/*
 * -------------------------------------------------------------------
 *  set database variable configuration
 * -------------------------------------------------------------------
 */

/**
 * Group $dbVars yang akan digunakan digunakan untuk koneksi ke database
 */
$activeGroupsDbVars = "default";

/**
 * Array $dbVars digunakan untuk melakukan koneksi ke database
 */
$dbVars['default']['username'] = 'patmacms';
$dbVars['default']['password'] = 'patmacms';
$dbVars['default']['hostname'] = 'localhost';
$dbVars['default']['database'] = 'patmacms_local';



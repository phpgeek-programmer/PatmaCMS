<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Semua konstanta yang dibutuhkan oleh patmacms di definisikan disini.
 *
 * Kecuali konstanta yang dibutuhkan saat startup, semua konstanta akan didefinisikan
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
 * ------------------------------------------------------------------
 * set page uri for administrator area
 * ------------------------------------------------------------------
 */

define(ADMINISTRATOR_PAGE, "administrator");


/*
 * -------------------------------------------------------------------
 *  set constant for system path
 * -------------------------------------------------------------------
 */

/**
 * Lokasi direktori system
 */
define(SYSTEM_PATH, BASEPATH . DIRECTORY_SEPARATOR . "system" );

/**
 * Lokasi direktori core system
 */
define(SYSTEM_CORE_PATH, SYSTEM_PATH . DIRECTORY_SEPARATOR . "core");


/*
 * -------------------------------------------------------------------
 *  set constant for apps path
 * -------------------------------------------------------------------
 */

/**
 * Lokasi direktori application config
 */
define(APPS_CONFIG_PATH, APPS_PATH . DIRECTORY_SEPARATOR . "config");

/**
 * Lokasi direktori Application Libraries
 */
define(APPS_LIBRARIES_PATH, APPS_PATH . DIRECTORY_SEPARATOR . "libraries");

/**
 * Lokasi direktori source
 */
define(APPS_SOURCE_PATH, APPS_PATH . DIRECTORY_SEPARATOR . "source");

/**
 * Lokasi direktori source admin
 */
define(APPS_SOURCE_ADMIN_PATH, APPS_SOURCE_PATH . DIRECTORY_SEPARATOR . "admin");

/**
 * Lokasi direktori source frontend
 */
define(APPS_SOURCE_FRONTEND_PATH, APPS_SOURCE_PATH . DIRECTORY_SEPARATOR . "frontend");
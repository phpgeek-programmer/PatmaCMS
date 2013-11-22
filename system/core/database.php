<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Kumpulan fungsi yang digunakan untuk bekerja dengan database
 *
 * Berbagai fungsi yang sering digunakan melakukan koneksi dan query ke database.
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


/**
 * Melakukan koneksi ke database dan mengembalikan objek hasil koneksi
 * 
 * @global string $activeGroupsDbVars
 * @global array $dbVars
 * @return object \PDO
 */
function dbInit(){
	if(isset($GLOBALS['db']))return $GLOBALS['db'];
        global $activeGroupsDbVars;
	global $dbVars;
	$db=new PDO(
                'mysql:host='.$dbVars[$activeGroupsDbVars]['hostname']
                .';dbname='.$dbVars[$activeGroupsDbVars]['database']
                ,$dbVars[$activeGroupsDbVars]['username']
                ,$dbVars[$activeGroupsDbVars]['password']
                );
	$db->query('SET NAMES utf8');
	$db->num_queries=0;
	$GLOBALS['db']=$db;
	return $db;
}

/**
 * Melakukan query ke database setelah koneksi berhasil dilakukan
 * 
 * @param string $query
 * @return object
 */
function dbQuery($query){
	$db=dbInit();
	$q=$db->query($query);
	$db->num_queries++;
	return $q;
}

/**
 * Mendapatkan hasil query berupa array asosiatif.
 * 
 * @param string $query
 * @return array
 */
function dbRow($query) {
	$q = dbQuery($query);
	return $q->fetch(PDO::FETCH_ASSOC);
}

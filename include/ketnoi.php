<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'traicay');
$ung=mysql_connect('localhost','root','') or die('Khong The Ket Noi Voi May Chu');
$strSQL=mysql_select_db('traicay',$ung);
mysql_query("SET NAMES 'utf8'");
?>
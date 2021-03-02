
<?php
define('DB_SERVER','mysql5039.site4now.net');
define('DB_USER','a706a4_traicay');
define('DB_PASS' ,'1q2w3e4r');
define('DB_NAME', 'db_a706a4_traicay');
echo "Hello world!<br>";

$ung=mysqli_connect('mysql5039.site4now.net','a706a4_traicay','1q2w3e4r') ;
echo "I'm about to learn PHP!<br>";
$strSQL=mysqli_select_db('db_a706a4_traicay',$ung);
mysqli_query("SET NAMES 'utf8'");
?>

<?php
ob_start();
session_start(); 
?>


<?php

$username="admin";
$password="12345678";
$sunucu="localhost";
$database="oguzhan";



$baglan=mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF8");
if(!$baglan)
{
mysql_close($baglan);
echo  "<meta http-equiv='refresh' content='0;>";
	exit();
}


$db=mysql_select_db($database);
if(!$db) { echo "Veritabanı hatası:".mysql_error(); echo "<br>";

echo  "<meta http-equiv='refresh' content='0;";
	

	exit();


	 }





?>
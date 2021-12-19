<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_pembayaran_fahri";
    
$conn = mysql_connect($host, $user, $pass) or die("koneksi gagal;" . mysql_error());
mysql_select_db($dbname, $conn) or die ("DB gagal" . mysql_error());
?>
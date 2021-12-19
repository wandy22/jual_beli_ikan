<?php
include "../koneksi.php";

$user = $_POST['username'];
$pass =$_POST['password'];

$sql ="SELECT * FROM user WHERE username='$user' AND password='$pass'";
$query = mysql_query($sql);
$num = mysql_num_rows($query);

if($num > 0){
    session_start();
    $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
    header("location:../dasbor.php");
  
}else{
    echo "login salah, <a href=\"/ukk_fahri/admin/index.php\">kembali login</a>";
}
?>
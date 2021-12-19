<?php
include 'koneksi.php';
$masakan= $_POST['nama_masakan'];
$status= $_POST['status'];
$harga= $_POST['harga'];
$sql= "INSERT INTO masakan values(NULL,'$masakan','$harga','$status')";
$query= mysql_query($sql);
if($query){
    header('location:masakan_view.php');
}else{
    echo'eror';
}
?>
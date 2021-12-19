<?php 
include 'koneksi.php';
if($_GET['aksi']=='tambah'){
    $tgl = date('Y-m-d H:i:s');
    $sqlorder="INSERT INTO orders VALUES(NULL,'{$_POST['no_meja']}','$tgl','{$_POST['user']}','{$_POST['keterangan']}','{$_POST['status']}')";
    $query = mysql_query($sqlorder);
    $idorder = mysql_insert_id();
    foreach($_POST['masakan'] AS $key => $value){
    $sqlharga = mysql_query("SELECT * FROM masakan WHERE id_masakan='{$value}'");
    $array=mysql_fetch_array($sqlharga);
    $sqldetail = "INSERT INTO detail_order VALUES(NULL,'$idorder','{$value}','{$_POST['keterangan']}','{$array['harga']}')";
$query = mysql_query($sqldetail);
    }
    header('location:order_view.php');
}
?>
<?php
include'koneksi.php';
$id=$_GET['id_masakan'];
$sql="DELETE FROM masakan WHERE id_masakan='$id'";
$query=mysql_query($sql);
if ($query) {
    header('location:masakan_view.php');
}else {
    echo 'error';
}
?>
<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $id_masakan=$_POST['id_masakan'];
    $nama_masakan=$_POST['nama_masakan'];
    $harga=$_POST['harga'];
    $status_masakan=$_POST['status'];
    $sql = "UPDATE masakan SET nama_masakan='$nama_masakan',harga='$harga',status_masakan='$status_masakan' WHERE id_masakan='$id_masakan'";

    $query=mysql_query($sql);
    if ($query) {
        echo '<script>window.location="masakan_view.php"</script>';
    }else {
        echo 'gagal';
    }
}
?>
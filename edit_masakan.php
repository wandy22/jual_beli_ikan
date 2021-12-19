<?php
include('header.php');
?>
<?php 
include('koneksi.php');
$sql = "SELECT * FROM masakan WHERE id_masakan='{$_GET['id_masakan']}' ";
$query = mysql_query($sql);
$data = mysql_fetch_array($query);
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <h1>Tambah Ikan</h1>
        <a href="masakan_view.php" class="btn btn-info">Kembali</a>
        <form action="proses_edit.php" method="post">
            <input type="hidden" name="id_masakan" value="<?php echo $data['id_masakan'];?>">
                        <div class="form-group">
                            <label for="judul">Nama Ikan</label>
                            <input type="text"  value="<?php echo $data['nama_masakan']; ?>" name="nama_masakan" class="form-control" ></div>
           <div class="form-group">
                            <label for="judul">Status</label>
                            <select class="form-control" name="status">
                                <option value="Tersedia"<?php if($data['status_masakan']=='Dikemas'){echo 'selected'; } ?>>Tersedia</option>
                                <option value="Habis"<?php if($data['status_masakan']=='sedang pengiriman'){echo 'selected'; } ?>>Habis</option>
                                <option value="Basi"<?php if($data['status_masakan']=='telah sampai'){echo 'selected'; } ?>> Basi</option>
                </select>
            </div>
            <div class="form-group">
                            <label for="judul">Harga Masakan</label>
                <div><input type="text" value="<?php echo $data['harga']; ?>"name="harga" class="form-control"></div>
            </div>
        
                        <div class="form-group">
                           <input type="submit" name="simpan" value="simpan">
                        </div>
            

                    </form>
    </body>
</html>
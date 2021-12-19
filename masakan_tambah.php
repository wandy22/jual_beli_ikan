<?php
include('header.php');
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <h1>Tambah Masakan</h1>
        <a href="masakan_view.php" class="btn btn-info">Kembali</a>
        <form action="aksi_tambah.php" method="post">
                        <div class="form-group">
                            <label for="judul">Nama Masakan</label>
                            <input type="text" name="nama_masakan" class="form-control"></div>
                       
            <div class="form-group">
                            <label for="judul">Status</label>
                            <select class="form-control" name="status">
                                <option value="Tersedia">Tersedia</option>
                                <option value="Habis">Habis</option>
                                <option value="Basi">Basi</option>
                               
                </select>
                        </div>
            <div class="form-group">
                            <label for="judul">Harga Masakan</label>
                            <div><input type="text" name="harga" class="form-control"></div>
                        </div>
                        <div class="form-group">
                           <input type="submit" name="simpan" value="simpan">
                        </div>
                        
                    </form>
    </body>
</html>
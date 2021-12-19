<?php
include('header.php');
?>
<html>
    <title>
    <head></head>
    </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <body>
<div class="container">
<div class="starter-template">
<div class="row">
    <div class="col-md-4 col-md-offset-4">
    <h1 class="text-center">Tambah Order</h1>
        <hr/>
        <a href="order_view.php" class="btn btn-warning">kembali</a><br/><br/>
    <form action="order_aksi.php?aksi=tambah" method="POST">
    <div class="form-group">
        <label>Masakan</label>
        <select name="masakan[]" multiple class="form-control">
        <?php
            include'koneksi.php';
            $sql = "SELECT * FROM masakan";
            $query = mysql_query($sql);
            while($dtmasakan = mysql_fetch_array($query)){ ?>
                <option value='<?php echo $dtmasakan['id_masakan']; ?>'><?php echo $dtmasakan['nama_masakan']; ?></option>;    
            <?php }
            ?>
        </select>
        </div>
        <div class="form-group">
        <label>Nomor Meja</label>
            <input type="text" name="no_meja" class="form-control">
        </div>
        <div class="form-group">
        <label>User</label>
            <select name="user" class="form-control">
            <?php 
            $sql = "SELECT * FROM user";
            $query = mysql_query($sql);
            while($dtuser = mysql_fetch_array($query)){ ?>
                <option value='<?php echo $dtuser['id_pengguna']; ?>'><?php echo $dtuser['username']; ?></option>
            <?php }
            ?>
            </select>
        </div>
        <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
            </select>
        </div>
        <div class="form-group">
        <label>Keterangan</label>
        <textarea name="keterangan" class="form-control"></textarea>
        </div>
        <div class="form-group">
        <button name="tambah" type="submit" class="btn btn-primary">Tambah Order</button> <a href="order_view.php">kembali</a>
        </div>
    </form>
    </div>
    </div>
    </div>
</div>
</body>
</html>
<?php
include 'koneksi.php';
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title></title>
    </head>
    <body>
    <div class="container">
        <div class="starter-template" style="text-align: center;">
        <h2>Tranksaksi</h2>
        <?php
        $sql = "SELECT * FROM orders WHERE id_order='{$_GET['id']}'";
            print $sql;
            exit;
        $query = mysql_query($sql);
        $data = mysql_fetch_array($query);
        $user = mysql_query("SELECT nama_user FROM user WHERE id_user='{$data['id_user']}'");
        $datauser = mysql_fetch_array($user);
        $detail = mysql_query("SELECT * FROM detail_order a, masakan b WHERE a.id_order='{$data['id_order']}' AND a.id_masakan=b.id_masakan");
            ?>
            <form>
            <label>Tanggal</label><p><?php echo $data['tanggal']; ?></p>
            <label>Nomor Meja</label><p><?php echo $data['no_meja']; ?></p>    
            <div class="form-group">
            <label>Pesanan</label>    
            <td>
                <table>
                <ol>
                    <?php
                    while ($datadet = mysql_fetch_array($detail)) {?>
                    <li>
                    <?php echo $datadet['nama_masakan']; ?>
                    Harga: Rp.<?php echo $datadet['harga'];?>,-
                    </li>
                    <?php }
                    ?>
                    </ol>
                </table>
                </td>
                </div>
                <div class="form-group">
                <label>Pengguna</label><p><?php echo $datauser['nama_user']; ?></p>
                </div>
                <div class="form-group">
                <label>Bayar</label>
                <input type="text" name="bayar" class="form-control" required>
                </div>
                <div class="form-group">
                <?php 
                    $userdata1 = mysql_query("SELECT nama_user FROM user WHERE id_user='{$data['id_user']}'");
                    $userdata2 = mysql_fetch_array($userdata1);
                    $userdetail = mysql_query("SELECT * FROM detail_order a,masakan b WHERE a.id_order='{$data['id_order']}' AND a.id_masakan=b.id_masakan");
                    $total=0;
                    while ($datadet1=mysql_fetch_array($userdetail)) {
                        $total +=$datadet1['harga'];
                    }
                    ?>
                    <label>Total Bayar</label>
                    <input type="text" name="total" class="form-control" disabled value="<?php echo $total ?>">
                </div>
                <div class="form-group">
                <label>kembalian</label>
                <input type="text" name="kembalian" class="form-control" disabled>
                </div>
                <input type="submit" class="btn btn-primary btn-lg" name="button" value="simpan">
            </form>
        </div>
        </div>
    </body>
</html>
<?php include('header.php')?>
<html>
    <head>
    <title></title>
    </head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <body>
<div class="container">
<div class="starter-template">
    <h1 class="text-center">Data Pemesanan Ikan</h1>
    <a href="order_tambah.php" class="btn btn-primary">Tambah Ikan</a><br/><br/>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Order</th>
            <th>Data Order</th>
            <th>Nomor rumah</th>
            <th>Tgl</th>
            <th>User</th>
            <th>Keterangan</th>
            <th>Status Order</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php 
    include 'koneksi.php';
            $sql = "SELECT * FROM orders";
            $query = mysql_query($sql);
            $no = 1;
            while($data = mysql_fetch_array($query)){
           $userdata = mysql_query("SELECT nama_user FROM user WHERE id_pengguna='{$data['id_user']}'");
           $datauser= mysql_fetch_array($userdata);
                
           $sqldet = "SELECT * FROM detail_order a,masakan b WHERE a.id_order='{$data['id_order']}' and a.id_masakan=b.id_masakan";
           $userdet = mysql_query($sqldet);
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data['id_order']; ?></td>
                <td>
                    <ol>
                    <?php 
                    while($datadet = mysql_fetch_array($userdet)){
                    echo'<li>';
                    echo 'nama masakan: '.$datadet['nama_masakan'].'<br/>';
                    echo 'harga: rp. '.$datadet['harga'].'<br/>';
                    echo 'keterangan: '.$data['keterangan'].'<br/>';
                    echo'</li>';
                    }
                    ?>
                    </ol>
                </td>
                <td><?php echo $data['no_meja']; ?></td>
                <td><?php echo $data['tanggal']; ?></td>
                <td><?php echo $datauser['nama_user']; ?></td>
                <td><?php echo $data['keterangan']; ?></td>
                <td><?php echo $data['status_order']; ?></td>
                <td> <a href ="tranksaksi.php?id=<?php echo $userdet['id_order']; ?>">transaksi</a></td>
            </tr>
            <?php
                $no++;
            } ?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>
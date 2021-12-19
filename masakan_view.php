<?php
include('header.php')
    ?>
<html>
    <head>
    <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <div class="container">
  <h2>Menu Ikan Wawan</h2>
        <a href="masakan_tambah.php" class="btn btn-primary">Tambah</a>
        <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Ikan</th>
        <th>Harga</th>
        <th>status</th>
          <th>Aksi</th>  
      </tr>
    </thead>
            <?php
    include'koneksi.php';
    $sql= "select * from masakan";
$query= mysql_query($sql);
$no = 0;
while ($data= mysql_fetch_array($query)) {
$no++    ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data['nama_masakan']; ?></td>
                 <td><?php echo $data['harga']; ?></td>
                 <td><?php echo $data['status_masakan']; ?></td>
                <td><a href="edit_masakan.php?id_masakan=<?php echo $data['id_masakan']; ?>">edit</a> | <a href="hapus.php?id_masakan=<?php echo $data['id_masakan']; ?>">hapus</a></td>
            </tr>
            <?php } ?>
        </table>
</div>
    </body>
</html>
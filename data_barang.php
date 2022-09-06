<?php 
class dashboard{

  function __construct(){
    include"menu.php";
  }

}
$halaman_utama = new dashboard;

include 'database.php';
$db = new database();
$data_barang = $db->data_barang();
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CV. Maju Mundur</title>
  </head>
  <body>
    <div class="row" style="margin: 20px;">
  <?php include "form_barang.php"; ?>

  <div class="col-8" style="border: 1px solid lightgray; border-radius: 10px; padding: 10px;">
  <h3 style="text-align: center; background-color: lightblue; border-radius: 10px; color: white; padding: 10px;">Data Barang</h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Foto</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Distributor</th>
      <th scope="col">Telp Distributor</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1;
    foreach($data_barang as $row) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo "<img src= 'Dokumen/$row[foto]' width='100' height='100'>";?></td>
        <td><?php echo $row['kd_barang'] ?></td>
        <td><?php echo $row['nm_barang'] ?></td>
        <td><?php echo $row['harga'] ?></td>
        <td><?php echo $row['stok'] ?></td>
        <td><?php echo $row['nm_distributor'] ?></td>
        <td><?php echo $row['no_hp'] ?></td>
        <td><?php echo"<a href='data_barang.php?&edit=update&&id=$row[kd_barang]' class='btn btn-sm btn-success'> Edit </a>";?> <a href = "<?php echo "proses_barang.php?aksi=delete&&id=$row[kd_barang]"; ?>" class = "btn btn-m btn-warning" onclick ="javascript: return confirm('Apakah Anda yakin ingin menghapus data ini ?')"> Delete</a></td>
      </tr>
      <?php
    }
    ?>
  </tbody>
</table>
  </div>

  </div>

  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php 
class dashboard{

  function __construct(){
    include"menu.php";
  }

}
$halaman_utama = new dashboard;
include 'database.php';
$db = new database();
$data_barang_masuk = $db->data_barang_masuk();
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="aset/fontawesome-free/css/all.min.css">

    <title>CV. Maju Mundur</title>

    <style>
    .box {
        position: relative;
        margin-left: -50px;
        left: 10%;
    }
    </style>

</head>

<body>
    <div class="row" style="margin: 20px;">
        <?php include"form_barang_masuk.php"; ?>

        <div class="col-8" style="border: 1px solid lightgray; border-radius: 10px; padding: 10px;">
            <h3
                style="text-align: center; background-color: lightblue; border-radius: 10px; color: white; padding: 10px;">
                Data Barang Masuk</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No Ref</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Nama Distributor</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah Beli</th>
                        <th scope="col">Total</th>
                        <th scope="col">Penerima</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

    foreach($data_barang_masuk as $row) {
      ?>
                    <tr>
                        <td><?php echo $row['no_ref']; ?></td>
                        <td><?php echo $row['tgl_masuk'] ?></td>
                        <td><?php echo $row['nm_barang'] ?></td>
                        <td><?php echo $row['nm_distributor'] ?></td>
                        <td><?php echo $row['harga'] ?></td>
                        <td><?php echo $row['jumlah'] ?></td>
                        <td><?php echo $row['total'] ?></td>
                        <td><?php echo $row['penerima'] ?></td>
                        <td><?php echo"<a href='data_barang_masuk.php?&edit=update&&id=$row[no_ref]' <i class=' btn btn-warning py-2 px-1 far fa-edit'></i> </a>";?>
                            <a href="<?php echo "proses_barang_masuk.php?aksi=delete&&id=$row[no_ref]"; ?>"
                                onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')">
                                <i class=' btn btn-danger py-2 px-1 far fa-trash-alt'></i></a>
                        </td>
                    </tr>
                    <?php
    }
    ?>
                </tbody>
            </table>
        </div>

    </div>

    <div class="col-10 box" style="border: 1px solid lightgray; border-radius: 10px; padding: 10px;">
        <h3 style="text-align: center; background-color: lightblue; border-radius: 10px; color: white; padding: 10px;">
            Total Pembelanjaan</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tanggal Barang</th>
                    <th scope="col">No Ref</th>
                    <th scope="col">Penerima</th>

                </tr>
            </thead>
            <tbody>

            </tbody>

        </table>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
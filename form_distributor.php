<div class="row" style="margin: 20px;">
<?php 
function Update_distributor(){
  
  $db = new database();
  $kd_distributor = $_GET['id'];
  $distributor = $db -> tampil_update_distributor($kd_distributor);
  
?>

<div class="col-4" style="border: 1px solid lightgray; border-radius: 10px; padding: 10px;">
  <h3 style="text-align: center; background-color: lightblue; border-radius: 10px; color: white; padding: 10px;">Update Distributor</h3>
  <div class="mb-3">
  
  <form method = "POST" action ="<?php echo "proses_distributor.php?aksi=update"; ?>" enctype="multipart/form-data">
  <label class="form-label">Kode Distributor</label>
  <input type="text" name="kd_distributor" class="form-control" value="<?php echo $distributor['kd_distributor'] ?>" readonly>
  </div>

  <div class="mb-3">
  <label class="form-label">Nama Distributor</label>
  <input type="text" name ="nm_distributor" class="form-control" value="<?php echo $distributor['nm_distributor'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Alamat</label>
  <input type="text" name ="alamat"class="form-control" value="<?php echo $distributor['alamat'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">No HP</label>
  <input type="text" name ="nohp" class="form-control" value="<?php echo $distributor['nohp'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Pemilik</label>
  <input type="text" name ="pemilik" class="form-control" value="<?php echo $distributor['pemilik'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Tipe Produk</label>
  <input type="text" name ="tipe_produk" class="form-control" value="<?php echo $distributor['tipe_produk'] ?>">
  </div>

  <div class="mb-3">
  <input type="submit" name="simpan" class="btn btn-primary" value="Update Distributor">
  <a href="data_distributor.php" class="btn btn-secondary">Cancel</a>
  </div>

	</form>
  </div>

<?php 
}
function Tambah_data(){

?>
  
  <div class="col-4" style="border: 1px solid lightgray; border-radius: 10px; padding: 10px;">
  <h3 style="text-align: center; background-color: lightblue; border-radius: 10px; color: white; padding: 10px;">Input Distributor</h3>
  <div class="mb-3">
  
  <form method = "POST" action ="<?php echo "proses_distributor.php?aksi=tambah"; ?>" enctype="multipart/form-data">
  <label class="form-label">Kode Distributor</label>
  <input type="text" name="kd_distributor" class="form-control" placeholder="Masukkan Kode Distributor">
  </div>

  <div class="mb-3">
  <label class="form-label">Nama Distributor</label>
  <input type="text" name ="nm_distributor" class="form-control" placeholder="Masukkan Nama Distributor">
  </div>

  <div class="mb-3">
  <label class="form-label">Alamat</label>
  <input type="text" name ="alamat"class="form-control" placeholder="Masukkan Alamat">
  </div>

  <div class="mb-3">
  <label class="form-label">No HP</label>
  <input type="text" name ="nohp" class="form-control" placeholder="Masukkan No HP">
  </div>

  <div class="mb-3">
  <label class="form-label">Pemilik</label>
  <input type="text" name ="pemilik" class="form-control" placeholder="Masukkan Pemilik">
  </div>

  <div class="mb-3">
  <label class="form-label">Tipe Produk</label>
  <input type="text" name ="tipe_produk" class="form-control" placeholder="Masukkan Tipe Produk">
  </div>

  <div class="mb-3">
  <input type="submit" name="simpan" class="btn btn-primary" value="Simpan Data">
  <input type="reset" class="btn btn-secondary" value="Reset">
  </div>

	</form>
  </div>
  <?php } ?>

  <?php 
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  $edit = $_GET ['edit'];
  if ($edit == "update") {
    Update_Distributor();
  }else{
    Tambah_data();
  }
  ?>
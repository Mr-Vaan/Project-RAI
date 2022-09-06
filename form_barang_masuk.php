<div class="row" style="margin: 20px;">
<?php 
function Update_data(){
  
  $db = new database();
  $kd_barang = $_GET['id'];
  $barang = $db -> tampil_update_barang($kd_barang);
  $data_distributor= $db->data_distributor();
?>

<div class="col-4" style="border: 1px solid lightgray; border-radius: 10px; padding: 10px;">
  <h3 style="text-align: center; background-color: lightblue; border-radius: 10px; color: white; padding: 10px;">Update Barang</h3>
  <div class="mb-3">
  
  <form method = "POST" action ="<?php echo "proses_barang_masuk.php?aksi=update"; ?>" enctype="multipart/form-data">
  <label class="form-label">Kode Barang</label>
  <input type="text" name="kd_barang" class="form-control" value="<?php echo $barang['kd_barang'] ?>" readonly>
  </div>

  <div class="mb-3">
  <label class="form-label">Nama Barang</label>
  <input type="text" name ="nm_barang" class="form-control" value="<?php echo $barang['nm_barang'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Harga Barang</label>
  <input type="text" name ="harga"class="form-control" value="<?php echo $barang['harga'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Stok Barang</label>
  <input type="text" name ="stok" class="form-control" value="<?php echo $barang['stok'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Distributor</label>
  <select name ="distributor" class="form-control">
    <option value="<?php echo $barang['distributor'] ?>"><?php echo $barang['distributor'] ?></option>
  <?php 
    foreach($data_distributor as $row) {
      ?>
      <option value="<?php echo "$row[nm_distributor]"; ?>"><?php echo "$row[nm_distributor]"; ?></option>
      <?php } ?>
  </select>
  </div>

  <div class="mb-3">
  <label class="form-label">Keterangan Barang</label>
  <textarea class="form-control" name ="ket" rows="3" placeholder="Masukkan Keterangan Barang"><?php echo $barang['ket'] ?></textarea>
  </div>

  <div class="mb-3">
  <input type="submit" name="simpan" class="btn btn-primary" value="Update Data">
  <a href="data_barang.php" class="btn btn-secondary">Cancel</a>
  </div>

	</form>
  </div>

<?php 
}
function Tambah_data(){  
$db = new database();
$data_distributor= $db->data_distributor();
$data_barang= $db->data_barang();
?>
  
  <div class="col-4" style="border: 1px solid lightgray; border-radius: 10px; padding: 10px;">
  <h3 style="text-align: center; background-color: lightblue; border-radius: 10px; color: white; padding: 10px;">Input Barang Masuk</h3>
  <div class="mb-3">
  
  <form method = "POST" action ="<?php echo "proses_barang_masuk.php?aksi=tambah"; ?>">
  <label class="form-label">No referensi</label>
  <input type="text" name="no_ref" class="form-control" placeholder="Masukkan Kode Barang">
  </div>

  <div class="mb-3">
  <label class="form-label">Tanggal Masuk Barang</label>
  <input type="date" name ="tgl_masuk" class="form-control" placeholder="Masukkan Nama Barang">
  </div>

  <div class="mb-3">
  <label class="form-label">Nama Barang</label>
  <select name ="kd_barang" class="form-control">
  <?php 
    foreach($data_barang as $row) {
      ?>
      <option value="<?php echo "$row[kd_barang]"; ?>"><?php echo "$row[nm_barang]"; ?></option>
      <?php } ?>
  </select>
  </div>

  <div class="mb-3">
  <label class="form-label">Distributor</label>
  <select name ="kd_distributor" class="form-control">
  <?php 
    foreach($data_distributor as $row) {
      ?>
      <option value="<?php echo "$row[kd_distributor]"; ?>"><?php echo "$row[nm_distributor]"; ?></option>
      <?php } ?>
  </select>
  </div>

  <div class="mb-3">
  <label class="form-label">Jumlah Masuk Barang</label>
  <input type="text" name ="jumlah"class="form-control" placeholder="Masukkan Harga Barang">
  </div>

 <div class="mb-3">
  <label class="form-label">Penerima Barang</label>
  <input type="text" name ="penerima"class="form-control" placeholder="Masukkan Harga Barang">
  </div>

  <div class="mb-3">
  <label class="form-label">Keterangan Barang</label>
  <textarea class="form-control" name ="ket" rows="3" placeholder="Masukkan Keterangan Barang"></textarea>
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
    Update_Data();
  }else{
    Tambah_data();
  }
  ?>
<main id="main" class="main">
<h3>Pemasukan</h3>
<div class="container mt-3">
  <h2>tampil pemasukan</h2>
  <form action="<?= base_url('home/simpan_pemasukan') ?>" method="post">
    <div class="mk-3">
      <label for="nama_siswa ">id siswa  :</label>
      <input type="text" class="form-control" id="nama_siswa" placeholder="Enter nama_siswa" name="nama_siswa" value="<?=$uangkas1->id_siswa?>">
    </div>
    <div class="mk-3">
      <label for="id_bulan_pembayaran">id bulan pembayaran  :</label>
      <input type="text" class="form-control" id="id_bulan_pembayaran " placeholder="Enter id_bulan_pembayaran" name="id_bulan_pembayaran" value="<?=$uangkas1->id_bulan_pembayaran?>">
    </div>
     <div class="mp-3">
      <label for="minggu_ke_1 ">minggu_ke_1:</label>
      <input type="text" class="form-control" id="minggu_ke_1 " placeholder="Enter minggu_ke_1" name="minggu_ke_1" value="<?=$uangkas1->minggu_ke_1?>">
    </div>
    <div class="mp-3">
      <label for="minggu_ke_2 ">minggu_ke_2 :</label>
      <input type="text" class="form-control" id="minggu_ke_2 " placeholder="Enter minggu_ke_2" name="minggu_ke_2" value="<?=$uangkas1->minggu_ke_2?>">
    </div>
    <div class="mp-3">
      <label for="minggu_ke_3 ">minggu_ke_3 :</label>
      <input type="text" class="form-control" id="minggu_ke_3 " placeholder="Enter minggu_ke_3" name="minggu_ke_3" value="<?=$uangkas1->minggu_ke_3?>">
    </div>
    <div class="mp-3">
      <label for="minggu_ke_4 ">minggu_ke_4 :</label>
      <input type="text" class="form-control" id="minggu_ke_4 " placeholder="Enter minggu_ke_4" name="minggu_ke_4" value="<?=$uangkas1->minggu_ke_4?>">
    </div>
    <div class="mp-3">
      <label for="status_lunas ">status lunas :</label>
      <input type="text" class="form-control" id="status_lunas " placeholder="Enter status_lunas" name="status_lunas" value="<?=$uangkas1->status_lunas?>">
    </div>
    <tr>
      <input type="hidden" value="<?=$uangkas1->id_uangkas?>" name="id">
       <button type="submit" class="btn btn-primary">Submit</button>
    </tr>s
  </form>
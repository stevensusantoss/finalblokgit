<main id="main" class="main">
<h3>Pengeluaran</h3>
<div class="container mt-3">
  <h2>tampil pengeluaran</h2>
  <form action="<?= base_url('home/simpan_pengeluaran') ?>" method="post">
     <div class="mp-3">
      <label for="keterangan ">keterangan:</label>
      <input type="text" class="form-control" id="keterangan " placeholder="Enter keterangan" name="keterangan" value="<?=$pengeluaran1->keterangan?>">
    </div>
    <div class="mp-3">
      <label for="tanggal_pengeluaran ">tanggal pengeluaran :</label>
      <input type="date" class="form-control" id="tanggal_pengeluaran " placeholder="Enter tanggal_pengeluaran" name="tanggal_pengeluaran" value="<?=$pengeluaran1->tanggal_pengeluaran?>">
    </div>
    <div class="mk-3">
      <label for="jumlah_pengeluaran">jumlah pengeluaran :</label>
      <input type="text" class="form-control" id="jumlah_pengeluaran " placeholder="Enter jumlah_pengeluaran" name="jumlah_pengeluaran" value="<?=$pengeluaran1->jumlah_pengeluaran?>">
    </div>
    <tr>
      <input type="hidden" value="<?=$pengeluaran1->id_pengeluaran?>" name="id">
       <button type="submit" class="btn btn-primary">Submit</button>
    </tr>
  </form>
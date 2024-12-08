<main id="main" class="main">
<h3>Pemasukan</h3>
<div class="container mt-3">
  <h2>tampil pemasukan</h2>
  <form action="<?= base_url('home/simpan_pemasukan') ?>" method="post">
    <div class="mk-3">
      <label for="id_siswa ">id siswa  :</label>
      <input type="text" class="form-control" id="id_siswa" placeholder="Enter id_siswa" name="id_siswa" value="<?=$pemasukan1->id_siswa?>">
    </div>
    <div class="mk-3">
      <label for="jumlah_pemasukan">jumlah pemasukan :</label>
      <input type="text" class="form-control" id="jumlah_pemasukan " placeholder="Enter jumlah_pemasukan" name="jumlah_pemasukan" value="<?=$pemasukan1->jumlah_pemasukan?>">
    </div>
     <div class="mp-3">
      <label for="keterangan ">keterangan:</label>
      <input type="text" class="form-control" id="keterangan " placeholder="Enter keterangan" name="keterangan" value="<?=$pemasukan1->keterangan?>">
    </div>
    <div class="mp-3">
      <label for="tanggal_pemasukan ">tanggal pemasukan :</label>
      <input type="date" class="form-control" id="tanggal_pemasukan " placeholder="Enter tanggal_pemasukan" name="tanggal_pemasukan" value="<?=$pemasukan1->tanggal_pemasukan?>">
    </div>
    <tr>
      <input type="hidden" value="<?=$pemasukan1->id_pemasukan?>" name="id">
       <button type="submit" class="btn btn-primary">Submit</button>
    </tr>s
  </form>
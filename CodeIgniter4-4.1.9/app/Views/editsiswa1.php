<main id="main" class="main">
<h3>Daftar siswa</h3>
<div class="container mt-3">
  <h2>tampil siswa</h2>
  <form action="<?= base_url('home/simpan_siswa') ?>" method="post">
    <div class="mk-3">
      <label for="nama_siswa ">nama siswa :</label>
      <input type="text" class="form-control" id="nama_siswa" placeholder="Enter nama_siswa" name="nama_siswa" value="<?=$siswa1->nama_siswa?>">
    </div>
    <div class="mk-3">
      <label for="jenis_kelamin">jenis kelamin :</label>
      <input type="text" class="form-control" id="jenis_kelamin " placeholder="Enter jenis_kelamin" name="jenis_kelamin" value="<?=$siswa1->jenis_kelamin?>">
    </div>
     <div class="mp-3">
      <label for="nomor_telepon ">nomor telepon:</label>
      <input type="text" class="form-control" id="nomor_telepon " placeholder="Enter nomor_telepon" name="nomor_telepon" value="<?=$siswa1->nomor_telepon?>">
    </div>
    <div class="mp-3">
      <label for="email ">email :</label>
      <input type="text" class="form-control" id="email " placeholder="Enter email" name="email" value="<?=$siswa1->email?>">
    </div>
    <tr>
      <input type="hidden" value="<?=$siswa1->id_siswa?>" name="id">
       <button type="submit" class="btn btn-primary">Submit</button>
    </tr>s
  </form>
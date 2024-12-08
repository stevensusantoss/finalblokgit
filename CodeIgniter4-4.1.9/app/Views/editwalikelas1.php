<main id="main" class="main">
<h3>Daftar walikelas</h3>
<div class="container mt-3">
  <h2>tampil siswa</h2>
  <form action="<?= base_url('home/simpan_walikelas') ?>" method="post">
    <div class="mk-3">
      <label for="nama_walikelas ">nama walikelas :</label>
      <input type="text" class="form-control" id="nama_walikelas" placeholder="Enter nama_walikelas" name="nama_walikelas" value="<?=$walikelas1->nama_walikelas?>">
    </div>
    <div class="mp-3">
      <label for="email ">email :</label>
      <input type="text" class="form-control" id="email " placeholder="Enter email" name="email" value="<?=$siswa1->email?>">
    </div>
    <tr>
      <input type="hidden" value="<?=$walikelas1->id_walikelas?>" name="id">
       <button type="submit" class="btn btn-primary">Submit</button>
    </tr>s
  </form>
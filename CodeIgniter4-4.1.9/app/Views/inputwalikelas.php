<main id="main" class="main">
<h2 style="font-family: sans-serif; background-color:  #f0f0f0;font-weight: bold;">siswa</h2>

  <form action="/home/input_walikelas" method="POST">
    <table>
      <tr>
        <td>nama walikelas</td>
        <td><input type="text" class="form-control" name="nama_walikelas" value="<?= $siswa1->nama_walikelas?>"></td>
      </tr>
      <tr>
        <td>email</td>
        <td><input type="text" class="form-control" name="email" value="<?= $siswa1->email?>"></td>
      </tr>
      <tr>      
        <td></td>
        <td>
      <input type="submit" value="Simpan">
      <input type="reset" value="Reset">
      <input type="button" value="Kembali">


        </td>
      </tr>
    </table>
  </form>
<main id="main" class="main">
<h2 style="font-family: sans-serif; background-color:  #f0f0f0;font-weight: bold;">siswa</h2>

  <form action="/home/input_bendahara" method="POST">
    <table>
      <tr>
        <td>nama bendahara</td>
        <td><input type="text" class="form-control" name="nama_bendahara" value="<?= $bendahara1->nama_bendahara?>"></td>
      </tr>
      <tr>
        <td>jenis kelamin</td>
        <td>
          <select id="gender" name="jenis_kelamin" value="<?= $siswa1->jenis_kelamin?>" >
          <option value="laki-laki">laki-laki</option>
         <option value="perempuan">perempuan</option>
         <option value="lainnya">Lainnya</option>
        </select>
        <td>
      </tr>
      <tr>
        <td>nomor telepon</td>
        <td><input type="text" class="form-control" name="nomor_telepon" value="<?= $bendahara1->nomor_telepon?>"></td>
      </tr>
      <tr>
        <td>email</td>
        <td><input type="text" class="form-control" name="email" value="<?= $bendahara1->email?>"></td>
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
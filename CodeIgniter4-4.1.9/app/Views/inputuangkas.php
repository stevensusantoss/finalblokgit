<main id="main" class="main">
<h2 style="font-family: sans-serif; background-color:  #f0f0f0;font-weight: bold;">Uang kas</h2>

  <form action="/home/input_uangkas" method="POST">
    <table>
       <tr>
        <td>NAMA SISWA</td>
        <td><input type="text" class="form-control" name="nama" value="<?= $uangkas1->nama_siswa?>"></td>
      </tr>
      <tr>
        <td>id bulan pembayaran</td>
        <td><input type="text" class="form-control" name="id_bulan_pembayaran" value="<?= $uangkas1->id_bulan_pembayaran?>"></td>
      </tr>
      <tr>
        <td>minggu_ke_1</td>
        <td><input type="text" class="form-control" name="minggu_ke_1" value="<?= $uangkas1->minggu_ke_1?>"></td>
      </tr>
      <tr>
        <td>minggu ke 2</td>
        <td><input type="text" class="form-control" name="minggu_ke_2" value="<?= $uangkas1->minggu_ke_2?>"></td>
      </tr>
      <tr>
        <td>minggu ke 3</td>
        <td><input type="text" class="form-control" name="minggu_ke_3" value="<?= $uangkas1->minggu_ke_3?>"></td>
      </tr>
      <tr>
        <td>minggu ke 4</td>
        <td><input type="text" class="form-control" name="minggu_ke_4" value="<?= $uangkas1->minggu_ke_4?>"></td>
      </tr>
       <tr>
        <td>status_lunas</td>
        <td><input type="text" class="form-control" name="status_lunas" value="<?= $uangkas1->status_lunas?>"></td>
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
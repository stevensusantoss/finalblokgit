<main id="main" class="main">
<h2 style="font-family: sans-serif; background-color:  #f0f0f0;font-weight: bold;">Pemasukan</h2>

  <form action="/home/input_pemasukan" method="POST">
    <table>
      <tr>
        <td>id siswa</td>
        <td><input type="text" class="form-control" name="id_siswa" value="<?= $pemasukan1->id_siswa?>"></td>
      </tr>
      <tr>
        <td>jumlah pemasukan</td>
        <td><input type="text" class="form-control" name="jumlah_pemasukan" value="<?= $pemasukan1->jumlah_pemasukan?>"></td>
      </tr>
      <tr>
        <tr>
        <td>keterangan</td>
        <td><input type="text" class="form-control" name="keterangan" value="<?= $pemasukan1->keterangan?>"></td>
      </tr>
      <tr>
        <td>tanggal pemasukan</td>
        <td><input type="date" class="form-control" name="tanggal_pemasukan" value="<?= $pemasukan1->tanggal_pemasukan?>"></td>
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
<main id="main" class="main">
<h2 style="font-family: sans-serif; background-color:  #f0f0f0;font-weight: bold;">Pengeluaran</h2>

  <form action="/home/input_pengeluaran" method="POST">
    <table>
        <tr>
        <td>keterangan</td>
        <td><input type="text" class="form-control" name="keterangan" value="<?= $pengeluaran1->keterangan?>"></td>
      </tr>
      <tr>
        <td>tanggal pengeluaran</td>
        <td><input type="date" class="form-control" name="tanggal_pengeluaran" value="<?= $pengeluaran1->tanggal_pengeluaran?>"></td>
      </tr>
      <tr>
        <td>jumlah pengeluaran</td>
        <td><input type="text" class="form-control" name="jumlah_pengeluaran" value="<?= $pengeluaran1->jumlah_pengeluaran?>"></td>
      </tr>     
        <td></td>
        <td>
      <input type="submit" value="Simpan">
      <input type="reset" value="Reset">
      <input type="button" value="Kembali">


        </td>
      </tr>
    </table>
  </form>
<main id="main" class="main">
<h2 style="font-family: sans-serif; background-color:  #f0f0f0;font-weight: bold;">user</h2>

  <form action="/home/input_user" method="POST">
    <table>
      <tr>
        <td>Email</td>
        <td><input type="text" class="form-control" name="email" value="<?= $ssgood->email?>"></td>
      </tr>
      <tr>
        <td>username</td>
        <td><input type="text" class="form-control" name="username" value="<?= $ssgood->username?>"></td>
      </tr>
      <tr>
        <tr>
        <td>password</td>
        <td><input type="text" class="form-control" name="password" value="<?= $ssgood->password?>"></td>
      </tr>
      <tr>
        <td>level</td>
        <td><input type="text" class="form-control" name="level" value="<?= $ssgood->level?>"></td>
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
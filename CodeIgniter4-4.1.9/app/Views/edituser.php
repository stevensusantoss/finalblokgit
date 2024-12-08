<main id="main" class="main">
<h3>Daftar user</h3>
<div class="container mt-3">
  <h2>tampil user</h2>
  <form action="<?= base_url('home/simpan_user') ?>" method="post">
    <div class="mk-3">
      <label for="email ">email :</label>
      <input type="text" class="form-control" id="email " placeholder="Enter email" name="email" value="<?=$ssgood->email?>">
    </div>
     <div class="mp-3">
      <label for="username ">username :</label>
      <input type="text" class="form-control" id="username " placeholder="Enter username" name="username" value="<?=$ssgood->username?>">
    </div>
    <div class="mp-3">
      <label for="password ">password :</label>
      <input type="text" class="form-control" id="password " placeholder="Enter password" name="password" value="<?=$ssgood->password?>">
    </div>
   <div class="mq-3">
      <label for="level ">level :</label>
      <input type="text" class="form-control" id="level " placeholder="Enter level" name="level" value="<?=$ssgood->level?>">
    </div>
    <tr>
      <input type="hidden" value="<?=$ssgood->id_user?>" name="id">
       <button type="submit" class="btn btn-primary">Submit</button>
    </tr>
  </form>
<?php

namespace App\Controllers;
use App\Models\Msskece;
use TCPDF;
class Home extends BaseController
{
	public function index()
	{
		echo view('welcome_message');
	}
	public function form()
	{
		echo view ('form.php');
		echo view ('ssheader.php');
         echo view ('ssfooter.php');
	}
    public function dashboard()
  {
     if (session()->get('id')>0) { 
     echo view ('header.php');
     echo view ('menu7.php');
     echo view ('dashboard');
     echo view ('footer.php');
   }else{
      return redirect()->to('home/login');
  }
  }
	public function Login()
	{
		echo view ('pages-login');
	}
    public function logout()
  {
    session()->destroy();
      return redirect ()->to('home/login');
  }
  public function aksi_login()
  {
    $a=$this->request->getPost('email');
    $b=$this->request->getPost('pswd');

    $Joyce= new Msskece;
    $data = array(
        "email"=>$a,
        "password"=>MD5($b),
        );

    $cek = $Joyce->getWhere('tabel_user', $data);
  
    if ($cek != null) {
    
    session()->set('id', $cek->id_user);
    session()->set('u', $cek->username);
    session()->set('level', $cek->level);
      return redirect ()->to('home/dashboard');
     }else{
      return redirect ()->to('home/login');
    }
  }
  public function register()
  {
    return view('pages-register.php');
  }
  public function aksi_register()
  {
    $a=$this->request->getPost('username');
    $b=$this->request->getPost('email');
    $c=$this->request->getPost('password');
    $d=$this->request->getPost('level');
    $Joyce= new Msskece();
    $data = array(
      "username"=>$a,
      "email"=>$b,
      "password"=>$c,
      "level"=>$d
    );
    $Joyce->input('tabel_user',$data);

    $cek = $Joyce->getWhere('tabel_user', $data);

    if ($cek != null) {

      session()->set('id', $cek->id_user);
      session()->set('u', $cek->username);
      session()->set('level', $cek->level);

      //penulisan kode array isinya pakai $cek[isinya]//
      return redirect ()->to('home/dashboard');
    }else{
      return redirect ()->to('home/login');
    }
  }
  public function tabel_user()
    {
     if (session()->get('id')>0) {
      $Joyce= new Msskece;
      $wendy['ssgood']=$Joyce->tampil('tabel_user');
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('tabel_user_jabatan', $wendy);
           echo view ('footer.php');
           }else{
      return redirect()->to('home/login');
    }
  }
    public function edit_user($id)
    {
      $Joyce= new Msskece;
      $wece= array('id_user' => $id);
      $wendy['ssgood']=$Joyce->getWhere('tabel_user',$wece);
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('edituser', $wendy);
          echo view ('footer.php');
    }
     public function simpan_user()
     {
        $b=$this->request->getpost('email');
       $c=$this->request->getpost('username');
        $d=$this->request->getpost('password');
         $e=$this->request->getpost('level');
            $id=$this->request->getpost('id');
        $Joyce= new Msskece;
        $wece=array('id_user' => $id);
        $data=array(
         "email"=>$b, 
         "username"=>$c,
          "password"=>MD5($d),
           "level"=>$e,
        );
        $Joyce->edit('tabel_user',$data,$wece);
        return redirect()->to('home/tabel_user');
  }
    public function input_user()
   {
          $Joyce= new Msskece;
          $data = array (
            'email'=> $this->request->getPost('email'),
            'username'=> $this->request->getPost('username'),
             'password'=> $this->request->getPost('password'),
              'level'=> $this->request->getPost('level'),
          );
          
           $Joyce->input('tabel_user', $data);
           return redirect()->to('/home/tabel_user');
  }
  public function hapus_user($id)
    {
      $Joyce= new Msskece;
      $wece= array('id_user' => $id);
      $wendy['ssgood']=$Joyce->hapus('tabel_user',$wece);
    return redirect()->to('home/tabel_user');
    }
     public function user1()
  {
        $Joyce= new Msskece;
      $wendy['ssgood']=$Joyce->tampil('tabel_user');
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('input_user2.php', $wendy);
           echo view ('footer.php');
   }
    public function tabel_siswa()
    {
     if (session()->get('id')>0) {
      $Joyce= new Msskece;
      $wendy['siswa1']=$Joyce->tampil('siswa');
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('tabelsiswa', $wendy);
           echo view ('footer.php');
           }else{
      return redirect()->to('home/login');
    }
  }
     public function editsiswa($id)
    {
      $Joyce= new Msskece;
      $wece= array('id_siswa' => $id);
      $wendy['siswa1']=$Joyce->getWhere('siswa',$wece);
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('editsiswa1', $wendy);
          echo view ('footer.php');
    }
    public function hapus_siswa($id)
    {
      $Joyce= new Msskece;
      $wece= array('id_siswa' => $id);
      $wendy['siswa1']=$Joyce->hapus('siswa',$wece);
    return redirect()->to('home/tabel_siswa');
    }
      public function simpan_siswa()
    {
       $a=$this->request->getpost('nama_siswa');
       $b=$this->request->getpost('jenis_kelamin');
       $c=$this->request->getpost('nomor_telepon');
        $d=$this->request->getpost('email');
         $id=$this->request->getpost('id');
        $Joyce= new Msskece;
        $wece=array('id_siswa' => $id);
        $data=array(
         "nama_siswa"=>$a,
         "jenis_kelamin"=>$b,
         "nomor_telepon"=>$c,
         "email"=>$d,
        );
        $Joyce->edit('siswa',$data,$wece);
        return redirect()->to('home/tabel_siswa');
  }
   public function input_siswa()
   {
           if (session()->get('id')>0) {
            $Joyce= new Msskece;
           $data = array (
            'nama_siswa'=> $this->request->getPost('nama_siswa'),
           'jenis_kelamin'=> $this->request->getPost('jenis_kelamin'),
           'nomor_telepon'=> $this->request->getPost('nomor_telepon'),
           'email'=> $this->request->getPost('email'),
           );

           $Joyce->input('siswa', $data);
           return redirect()->to('/home/tabel_siswa');
           }else{
      return redirect()->to('home/login');
    }
     }
     public function siswa3()
  {
        $Joyce= new Msskece;
      $wendy['siswa1']=$Joyce->tampil('siswa');
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('inputsiswa.php', $wendy);
           echo view ('footer.php');
         }
      public function tabel_walikelas()
    {
     if (session()->get('id')>0) {
      $Joyce= new Msskece;
      $wendy['walikelas1']=$Joyce->tampil('walikelas');
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('tabelwalikelas', $wendy);
           echo view ('footer.php');
           }else{
      return redirect()->to('home/login');
    }
  }
     public function editwalikelas($id)
    {
      $Joyce= new Msskece;
      $wece= array('id_walikelas' => $id);
      $wendy['walikelas1']=$Joyce->getWhere('walikelas',$wece);
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('editwalikelas1', $wendy);
          echo view ('footer.php');
  }
   public function hapus_walikelas($id)
    {
      $Joyce= new Msskece;
      $wece= array('id_walikelas' => $id);
      $wendy['walikelas1']=$Joyce->hapus('walikelas',$wece);
    return redirect()->to('home/tabel_walikelas');
    }
    public function simpan_walikelas()
    {
       $a=$this->request->getpost('nama_walikelas');
        $b=$this->request->getpost('email');
         $id=$this->request->getpost('id');
        $Joyce= new Msskece;
        $wece=array('id_walikelas' => $id);
        $data=array(
         "nama_walikelas"=>$a,
         "email"=>$b,
        );
        $Joyce->edit('walikelas',$data,$wece);
        return redirect()->to('home/tabel_walikelas');
  }
   public function input_walikelas()
   {
           if (session()->get('id')>0) {
            $Joyce= new Msskece;
           $data = array (
            'nama_walikelas'=> $this->request->getPost('nama_walikelas'),
           'email'=> $this->request->getPost('email'),
           );
           $Joyce->input('walikelas', $data);
           return redirect()->to('/home/tabel_walikelas');
           }else{
      return redirect()->to('home/login');
    }
  }
     public function walikelas3()
  {
        $Joyce= new Msskece;
      $wendy['siswa1']=$Joyce->tampil('walikelas');
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('inputwalikelas.php', $wendy);
           echo view ('footer.php');
         }
 public function profile1()
  {
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('profile.php');
           echo view ('footer.php');
         }
         public function bulan()
  {
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('bulan.php');
           echo view ('footer.php');
         }
     public function tabel_pemasukan1()
    {
     if (session()->get('id')>0) {
      $Joyce= new Msskece;
      $wendy['pemasukan1']=$Joyce->join('tabel_pemasukan','siswa','tabel_pemasukan.id_siswa=siswa.id_siswa');
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('pemasukan', $wendy);
           echo view ('footer.php');
           }else{
      return redirect()->to('home/login');
    }
  }
    public function editpemasukan($id)
    {
      $Joyce= new Msskece;
      $wece= array('id_pemasukan' => $id);
      $wendy['pemasukan1']=$Joyce->getWhere('tabel_pemasukan',$wece);
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('editpemasukan1', $wendy);
          echo view ('footer.php');
  }
    public function hapus_pemasukan($id)
    {
      $Joyce= new Msskece;
      $wece= array('id_pemasukan' => $id);
      $wendy['pemasukan1']=$Joyce->hapus('tabel_pemasukan',$wece);
    return redirect()->to('home/tabel_pemasukan1');
    }
    public function simpan_pemasukan()
    {
       $a=$this->request->getpost('id_siswa');
        $b=$this->request->getpost('jumlah_pemasukan');
        $c=$this->request->getpost('keterangan');
        $d=$this->request->getpost('tanggal_pemasukan');
         $id=$this->request->getpost('id');
        $Joyce= new Msskece;
        $wece=array('id_pemasukan' => $id);
        $data=array(
         "id_siswa"=>$a,
         "jumlah_pemasukan"=>$b,
         "keterangan"=>$c,
         "tanggal_pemasukan"=>$d,
        );
        $Joyce->edit('tabel_pemasukan',$data,$wece);
        return redirect()->to('home/tabel_pemasukan1');
  }
  public function input_pemasukan()
   {
           if (session()->get('id')>0) {
            $Joyce= new Msskece;
           $data = array (
            'id_siswa'=> $this->request->getPost('id_siswa'),
           'jumlah_pemasukan'=> $this->request->getPost('jumlah_pemasukan'),
           'keterangan'=> $this->request->getPost('keterangan'),
           'tanggal_pemasukan'=> $this->request->getPost('tanggal_pemasukan'),
           );
           $Joyce->input('tabel_pemasukan', $data);
           return redirect()->to('/home/tabel_pemasukan1');
           }else{
      return redirect()->to('home/login');
    }
  }
    public function pemasukan3()
  {
        $Joyce= new Msskece;
      $wendy['pemasukan1']=$Joyce->tampil('tabel_pemasukan');
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('inputpemasukan.php', $wendy);
           echo view ('footer.php');
         }
    public function tabel_pengeluaran1()
    {
     if (session()->get('id')>0) {
      $Joyce= new Msskece;
      $wendy['pengeluaran1']=$Joyce->join('tabel_pengeluaran','tabel_user','tabel_pengeluaran.id_user=tabel_user.id_user');
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('pengeluaran', $wendy);
           echo view ('footer.php');
           }else{
      return redirect()->to('home/login');
    }
  }
    public function editpengeluaran($id)
    {
      $Joyce= new Msskece;
      $wece= array('id_pengeluaran' => $id);
      $wendy['pengeluaran1']=$Joyce->getWhere('tabel_pengeluaran',$wece);
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('editpengeluaran1', $wendy);
          echo view ('footer.php');
  }
   public function hapus_pengeluaran($id)
    {
      $Joyce= new Msskece;
      $wece= array('id_pengeluaran' => $id);
      $wendy['pengeluaran1']=$Joyce->hapus('tabel_pengeluaran',$wece);
    return redirect()->to('home/tabel_pengeluaran1');
  }
   public function simpan_pengeluaran()
    {
        $b=$this->request->getpost('keterangan');
        $c=$this->request->getpost('tanggal_pengeluaran');
        $d=$this->request->getpost('jumlah_pengeluaran');
         $id=$this->request->getpost('id');
        $Joyce= new Msskece;
        $wece=array('id_pengeluaran' => $id);
        $data=array(
         "keterangan"=>$b,
         "tanggal_pengeluaran"=>$c,
         "jumlah_pengeluaran"=>$d,
        );
        $Joyce->edit('tabel_pengeluaran',$data,$wece);
        return redirect()->to('home/tabel_pengeluaran1');
  }
   public function input_pengeluaran()
   {
           if (session()->get('id')>0) {
            $Joyce= new Msskece;
           $data = array (
           'keterangan'=> $this->request->getPost('keterangan'),
           'tanggal_pengeluaran'=> $this->request->getPost('tanggal_pengeluaran'),
            'jumlah_pengeluaran'=> $this->request->getPost('jumlah_pengeluaran'),
           );
           $Joyce->input('tabel_pengeluaran', $data);
           return redirect()->to('/home/tabel_pengeluaran1');
           }else{
      return redirect()->to('home/login');
    }
  }
     public function pengeluaran3()
  {
        $Joyce= new Msskece;
      $wendy['pengeluaran1']=$Joyce->tampil('tabel_pengeluaran');
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('inputpengeluaran.php', $wendy);
           echo view ('footer.php');
         }
     public function tabel_uangkas1()
    {
     if (session()->get('id')>0) {
      $Joyce= new Msskece;
      $wendy['uangkas1']=$Joyce->join('tabel_uang_kas','siswa','tabel_uang_kas.id_siswa=siswa.id_siswa');
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('uangkas', $wendy);
           echo view ('footer.php');
           }else{
      return redirect()->to('home/login');
    }
  }
    public function edituangkas($id)
    {
      $Joyce= new Msskece;
      $wece= array('id_uangkas' => $id);
      $wendy['uangkas1']=$Joyce->getWhere('tabel_uang_kas',$wece);
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('edituangkas1', $wendy);
          echo view ('footer.php');
  }
  public function hapus_uangkas($id)
    {
      $Joyce= new Msskece;
      $wece= array('id_uangkas' => $id);
      $wendy['uangkas1']=$Joyce->hapus('tabel_uang_kas',$wece);
    return redirect()->to('home/tabel_uangkas1');
    }
     public function simpan_uangkas()
    {   
        $a=$this->request->getpost('id_siswa');
        $b=$this->request->getpost('id_bulan_pembayaran');
        $c=$this->request->getpost('minggu_ke_1');
        $d=$this->request->getpost('munggu_ke_2');
         $e=$this->request->getpost('munggu_ke_3');
         $f=$this->request->getpost('munggu_ke_4');
         $id=$this->request->getpost('id');
        $Joyce= new Msskece;
        $wece=array('id_uangkas' => $id);
        $data=array(
         "id_siswa"=>$a,
         "id_bulan_pembayaran"=>$b,
         "minggu_ke_1"=>$c,
         "minggu_ke_2"=>$d,
         "minggu_ke_3"=>$e,
          "minggu_ke_4"=>$f,
        );
        $Joyce->edit('tabel_uang_kas',$data,$wece);
        return redirect()->to('home/tabel_uangkas1');
  }
   public function input_uangkas()
   {
           if (session()->get('id')>0) {
            $Joyce= new Msskece;
           $data = array (
           'id_siswa'=> $this->request->getPost('id_siswa'),
           'nama_siswa'=> $this->request->getPost('nama'),
           'id_bulan_pembayaran'=> $this->request->getPost('id_bulan_pembayaran'),
            'minggu_ke_1'=> $this->request->getPost('minggu_ke_1'),
            'minggu_ke_2'=> $this->request->getPost('minggu_ke_2'),
            'minggu_ke_3'=> $this->request->getPost('minggu_ke_3'),
            'minggu_ke_4'=> $this->request->getPost('minggu_ke_4'),
           );
           $Joyce->input('tabel_uang_kas', $data);
           return redirect()->to('/home/tabel_uangkas1');
           }else{
      return redirect()->to('home/login');
    }
  }
    public function uangkas3()
  {
        $Joyce= new Msskece;
      $wendy['uangkas1']=$Joyce->tampil('tabel_uang_kas');
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('inputuangkas.php', $wendy);
           echo view ('footer.php');
    }
      public function tabel_bendahara()
    {
     if (session()->get('id')>0) {
      $Joyce= new Msskece;
      $wendy['bendahara1']=$Joyce->tampil('bendahara');
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('tabelbendahara', $wendy);
           echo view ('footer.php');
           }else{
      return redirect()->to('home/login');
    }
  }
      public function editbendahara($id)
    {
      $Joyce= new Msskece;
      $wece= array('id_bendahara' => $id);
      $wendy['bendahara1']=$Joyce->getWhere('bendahara',$wece);
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('editbendahara1', $wendy);
          echo view ('footer.php');
    }
     public function hapus_bendahara($id)
    {
      $Joyce= new Msskece;
      $wece= array('id_bendahara' => $id);
      $wendy['bendahara1']=$Joyce->hapus('bendahara',$wece);
    return redirect()->to('home/tabel_bendahara');
    }
      public function simpan_bendahara()
    {
       $a=$this->request->getpost('nama_bendahara');
       $b=$this->request->getpost('jenis_kelamin');
       $c=$this->request->getpost('nomor_telepon');
        $d=$this->request->getpost('email');
         $id=$this->request->getpost('id');
        $Joyce= new Msskece;
        $wece=array('id_bendahara' => $id);
        $data=array(
         "nama_bendahara"=>$a,
         "jenis_kelamin"=>$b,
         "nomor_telepon"=>$c,
         "email"=>$d,
        );
        $Joyce->edit('bendahara',$data,$wece);
        return redirect()->to('home/tabel_bendahara');
  }
   public function input_bendahara()
   {
           if (session()->get('id')>0) {
            $Joyce= new Msskece;
           $data = array (
            'nama_bendahara'=> $this->request->getPost('nama_bendahara'),
           'jenis_kelamin'=> $this->request->getPost('jenis_kelamin'),
           'nomor_telepon'=> $this->request->getPost('nomor_telepon'),
           'email'=> $this->request->getPost('email'),
           );

           $Joyce->input('bendahara', $data);
           return redirect()->to('/home/tabel_bendahara');
           }else{
      return redirect()->to('home/login');
    }
  }
     public function bendahara3()
  {
        $Joyce= new Msskece;
      $wendy['siswa1']=$Joyce->tampil('bendahara');
         echo view ('header.php');
         echo view ('menu7.php');
          echo view ('inputbendahara.php', $wendy);
           echo view ('footer.php');
         }
}
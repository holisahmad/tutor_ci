<?php
ini_set( "display_errors", 0);
function sukses_masuk($username,$pass){
$db = new mysqli("localhost","root","it55wss","brorizdb");
    // Apabila username dan password ditemukan
    //$loginn= $db->query("SELECT * FROM jalan WHERE user='$username' AND pass='$pass' AND blokir='N'");

     $sql_l="SELECT * FROM masukin WHERE user='$username' AND pass='$pass' AND blokir='N'";
     if(!$hasil = $db->query($sql_l)){
     die(' query error [' . $db->error . ']');
     }

    $ketemuu=mysqli_num_rows($hasil);
    $rr=$hasil->fetch_object();
    if ($ketemuu > 0){
      session_start();
        $_SESSION['id']           = $rr->id_user;
        $_SESSION['username']     = $rr->user;
//        $_SESSION['passuser']     = $rr->pass;
        $_SESSION['level']          = $rr->level;
        $_SESSION['nama']          = $rr->nama;
  //      $_SESSION['kd_dept']         = $rr->kd_dept;
		$_SESSION['nota']         = $rr->t_nota;
//        $_SESSION['salah']          = 0;
		

if ($rr->level == "admin"){ 
	header('location:admin/home');
}else if ($rr->level == "user"){
	header('location:pds/home');
}
		
        // session timeout
        $_SESSION['login'] = 1;

    }
    return false;
}

function msg(){
  echo "<link href='css/screen.css' rel='stylesheet' type='text/css'>
  <link href='css/reset.css' rel='stylesheet' type='text/css'>
  <link href='css/style_button.css' rel='stylesheet' type='text/css'>
  <center><br><br><br><br><br><br>Maaf, silahkan cek kembali <b>Username</b> dan <b>Password</b> Anda<br><br>Kesalahan $_SESSION[salah]";
  echo "<div> <a href='index.php'><img src='images/kunci.png'  height=176 width=176></a>
  </div>";
  echo "<input type=button class='button buttonblue mediumbtn' value='KEMBALI' onclick=location.href='index.php'></a></center>";
  return false;
}

function salah_blokir($username){
  echo "<link href='css/screen.css' rel='stylesheet' type='text/css'>
  <link href='css/reset.css' rel='stylesheet' type='text/css'>
  <link href='css/style_button.css' rel='stylesheet' type='text/css'>
  <center><br><br><br><br><br><br>Maaf, Username <b>$username</b> telah <b>TERBLOKIR</b>, silahkan hubungi Administrator.";
  echo "<div style=''> <a href='index.php'><img src='images/kunci.png'  height=176 width=176></a>
  </div>";
  echo "<input type=button class='button buttonblue mediumbtn' value='KEMBALI' onclick=location.href='index.php'></a></center>";
  return false;
}
function salah_username($username){
  echo "<link href='css/screen.css' rel='stylesheet' type='text/css'>
  <link href='css/reset.css' rel='stylesheet' type='text/css'>
  <link href='css/style_button.css' rel='stylesheet' type='text/css'>
  <center><br><br><br><br><br><br>Maaf, Username <b>$username</b> tidak dikenal.";
  echo "<div> <a href='index.php'><img src='images/kunci.png'  height=176 width=176></a>
  </div>";
  echo "<input type=button class='button buttonblue mediumbtn' value='KEMBALI' onclick=location.href='index.php'></a></center>";
  return false;
}

function salah_password(){
  echo "<link href='css/screen.css' rel='stylesheet' type='text/css'>
  <link href='css/reset.css' rel='stylesheet' type='text/css'>
  <link href='css/style_button.css' rel='stylesheet' type='text/css'>
  <center><br><br><br><br><br><br>Maaf, silahkan cek kembali <b>Password</b> Anda<br><br>Kesalahan $_SESSION[salah]";
  echo "<div> <a href='index.php'><img src='images/kunci.png'  height=176 width=176></a>
  </div>";
  echo "<input type=button class='button buttonblue mediumbtn' value='KEMBALI' onclick=location.href='index.php'></a></center>";
   return false;
}

function blokir($username){
$db = new mysqli("localhost","root","it55wss","brorizdb");
$bl="Y";
$sql    = "UPDATE masukin SET blokir=? WHERE user=?";
$stmt = $db -> prepare($sql);
$stmt -> bind_param('ss',$bl, $username);
$stmt -> execute();

session_destroy();
     return false;
}

?>
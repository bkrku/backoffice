<?php
include "../lib/connection.php";
function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$username = antiinjection($_POST['username']);
$pass     = antiinjection(md5($_POST['password']));

$login=mysql_query("SELECT * FROM users WHERE username='$username' AND password='$pass' AND blokir='N'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);


if ($ketemu > 0){
  session_start();
  session_register("namauser");
  session_register("namalengkap");
  session_register("passuser");
  session_register("leveluser");

  $_SESSION[namauser]     = $r[username];
  $_SESSION[namalengkap]  = $r[nama_lengkap];
  $_SESSION[passuser]     = $r[password];
  $_SESSION[leveluser]    = $r[level];
  
  header('location:homeku.php?validity=home');
}
else{
  header('location:index.php?login=false');
}
?>

<?php
  require 'function.php';

  $id=$_POST["id"];
  session_start();

  if(hapus($id)>0){
    $_SESSION["success_message"] = "data berhasil dihapus";
  }
  else{
    $_SESSION["fail_message"] = "data gagal dihapus";
  }
  header('Location: index.php');
  exit;
<?php
require 'function.php';

$id=$_POST["id"];

if(hapus($id)>0){
    echo ' <script>
    alert("data berhasil di dihapus");
    document.location.href="index.php";
    </script>';
  }
  else{
    echo ' <script>
    alert("data gagal di dihapus");
    document.location.href="index.php";
    </script>';
  }
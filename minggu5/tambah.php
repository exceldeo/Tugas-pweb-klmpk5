<?php 
    include 'function.php';
    
    if(tambah($_POST)>0){
        echo ' <script>
        alert("data berhasil di tambahkan");
        document.location.href="index.php";
        </script>';
    }
    else{
        echo ' <script>
        alert("data gagal di tambahkan");
        document.location.href="index.php";
        </script>';
    }

?>

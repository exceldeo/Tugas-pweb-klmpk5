<?php 

// koneksi ke mysql
$conn = mysqli_connect("localhost","root","","tugas_3_pweb");

// mengambil satu-satu query di masukan ke array
function query($query){
  global $conn;
  $result = mysqli_query($conn,$query);

  $rows=[];
  while($row = mysqli_fetch_assoc($result)){
    $rows[]=$row;
  }
  close();
  return $rows;
}

// fungsi tambah data
function tambah($data){
  global $conn;
  $nama=htmlspecialchars($data["nama"]);
  $alamat=htmlspecialchars($data["alamat"]);
  $no_hp=htmlspecialchars($data["no_hp"]);
  
  $query="INSERT INTO user value (NULL,'$nama','$alamat','$no_hp')";
  
  // var_dump($query);
  // die;
  mysqli_query($conn,$query);
  $cek = mysqli_affected_rows($conn);
  close();
  return $cek;
}

// fungsi hapus data
function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM user WHERE id = $id");
    $cek = mysqli_affected_rows($conn);
    close();
    return $cek;
}

function ubah($data){
  global $conn;
  $id=$data['id'];
  $alamat=htmlspecialchars($data["alamat"]);
  $no_hp=htmlspecialchars($data["no_hp"]);
  $nama=htmlspecialchars($data["nama"]);

  $query="UPDATE user SET 
      nama = '$nama',
      alamat = '$alamat',
      no_hp = '$no_hp'
      WHERE id=$id
      ";
  // var_dump($query);die;
  mysqli_query($conn,$query);
  $cek = mysqli_affected_rows($conn);
  close();
  return $cek;
}

function close(){
  mysqli_close(mysqli_connect("localhost","root","","tugas_3_pweb"));
}
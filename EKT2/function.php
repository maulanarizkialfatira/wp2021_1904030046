<?php
$conn = mysqli_connect('localhost', 'root', '', 'wpsmst5');

//pemanggilan data
function query($query)
{
  global $conn;

  //mengabil data
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  //pemanggilan elemen data
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
function tambah($data)
{
  global $conn;
  $nama = ($data['nama']);
  $alamat = ($data['alamat']);
  $jenis_kelamin = ($data['jenis_kelamin']);
  $agama = ($data['agama']);
  $sekolah_asal = ($data['sekolah_asal']);
  $foto_maba = ($data['foto_maba']);
  $query = "INSERT INTO calon_mhs
  VALUES
  (null,'$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal','$foto_maba');";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
//hapus data mahasiswa
function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM calon_mhs WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
//hapus data dosen
function hapusdos($nidn)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM data_dosen WHERE nidn =$nidn") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

//edit
function edit($data)
{
  global $conn;
  // 'nama' dari name di form tambah

  $id = ($data['id']);
  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $agama = htmlspecialchars($data['agama']);
  $sekolah_asal = htmlspecialchars($data['sekolah_asal']);
  $foto = htmlspecialchars($data['foto_maba']);

  $query = "UPDATE calon_mhs SET 
	nama ='$nama',
	alamat='$alamat',
	jenis_kelamin='$jenis_kelamin',
	agama='$agama',
	sekolah_asal='$sekolah_asal', 
  foto_maba='$foto' 
	WHERE id='$id';";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
//search

function cari($keyword)
{
  global $conn;
  // %$keyword% mencari nama yang sesuai depan maupun belakang %
  $query = "SELECT * FROM calon_mhs WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

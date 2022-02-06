<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030046');

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

//hapus barang
function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM buku WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

//hapus tulis
function hapust($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM tulis WHERE idt =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

//edit buku
function edit($data)
{
  global $conn;
  // 'nama' dari name di form tambah

  $id = ($data['id']);
  $nama = htmlspecialchars($data['nama']);
  $harga = htmlspecialchars($data['harga']);
  $stok = htmlspecialchars($data['stok']);
  $foto = htmlspecialchars($data['foto']);

  $query = "UPDATE buku SET 
	nama ='$nama',
	harga='$harga',
	stok='$stok', 
  foto='$foto' 
	WHERE id='$id';";
}

//edit tulis
function editt($data)
{
  global $conn;
  // 'nama' dari name di form tambah

  $idt = ($data['idt']);
  $namat = htmlspecialchars($data['namat']);
  $hargat = htmlspecialchars($data['hargat']);
  $stokt = htmlspecialchars($data['stokt']);
  $fotot = htmlspecialchars($data['fotot']);

  $query = "UPDATE tulis SET 
	namat ='$namat',
	hargat='$hargat',
	stokt='$stokt', 
  fotot='$fotot' 
	WHERE idt='$idt';";
}


//search buku

function cari($keyword)
{
  global $conn;
  // %$keyword% mencari nama yang sesuai depan maupun belakang %
  $query = "SELECT * FROM buku WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


//search tulis

function carit($keyword)
{
  global $conn;
  // %$keyword% mencari nama yang sesuai depan maupun belakang %
  $query = "SELECT * FROM tulis WHERE namat LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

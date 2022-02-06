<?php
require 'function.php';

if (!isset($_GET['id'])) {
  header("location buku.php");
  exit;
}

$id = $_GET['id'];
if (hapus($id) > 0) {
  echo
  "<script>
    alert('data berhasil di hapus');
    document.location.herf = 'buku.php';
    </script>";
} else {
  "<script>
    alert('data gagal di hapus');
    </script>";
}

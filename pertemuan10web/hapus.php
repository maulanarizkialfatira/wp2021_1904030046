<?php
require 'function.php';

if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

$id = $_GET['id'];
if (hapus($id) > 0) {
  echo
  "<script>
    alert('data berhasil di hapus');
    document.location.herf = 'index.php';
    </script>";
} else {
  "<script>
    alert('data gagal di hapus');
    </script>";
}

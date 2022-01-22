<?php
require "function.php";

if (!isset($_GET['nidn'])) {
  header("location: dosen.php");
  exit;
}

$nidn = $_GET['nidn'];
if (hapusdos($nidn) > 0) {
  echo
  "<script>
    alert('data berhasil di hapus');
    document.location.herf = 'dosen.php';
    </script>";
} else {
  "<script>
    alert('data gagal di hapus');
    </script>";
}

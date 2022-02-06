<?php
require 'function.php';

if (!isset($_GET['idt'])) {
  header("location tulis.php");
  exit;
}

$id = $_GET['idt'];
if (hapus($id) > 0) {
  echo
  "<script>
    alert('data berhasil di hapus');
    document.location.herf = 'tulis.php';
    </script>";
} else {
  "<script>
    alert('data gagal di hapus');
    </script>";
}

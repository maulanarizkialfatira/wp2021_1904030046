<?php
$host = 'localhost';
$user = 'root';
$pwsd = '';
$db   = 'wpsmst5';


$conn = mysqli_connect($host, $user, $pwsd, $db);

$result = mysqli_query($conn, 'SELECT * FROM calon_mhs' );

//Ambil data dari table //

//mysqli_fetch_row($result);
//mysqli_fetch_assoc();
//mysqil_fetch_array();

// while ( $camaba = mysqli_fetch_row($result)){
// var_dump ($camaba);
//}

<!DOCTYPE html>
<html lang="en">
<head>
    <title>UTS5A_1904030046</title>
</head>
<body>
<H1>Tugas UTS WEB Programing</H1>
<h3>Nama : Maulana Rizki Alfatira (1904030046)</h3>

<hr>
    <h2>Jawaban No.1 :Array merupakan sebuah variabel yang menyimpan lebih dari 1 buah data yang memiliki tipe data yang sama. Jadi dapat dikatakan bahwa array merupakan kumpulan dari data-data tunggal yang dijadikan dalam 1 variabel array.

Sedangkan Variabel adalah suatu tempat untuk menampung data yang nilainya selalu berubah. Variabel adalah suatu tempat untuk menampung data yang nilainya selalu berubah. Variabel digunakan sebagai tempat penyimpanan data sementara. </h2>

<hr>
    <h2>Map Dengan Array</h2>
    <?php
    $maul = array(
                "ID"            =>"1904030046",
                "Nama"          =>"Maulana Rizki Alfatira",
                "Tanggallahir"  =>"2002-05-30",
                "Alamat"        =>"Cikupa, Ds.Talaga",
                "Game Favorit"  =>"Genshin Impact",
                "Hobi"          =>"Main Game",
                "Kuliah"        =>"Unversitas Islam Syekh Yusuf"
                );     
                var_dump($maul);
                echo"<br>";  
    echo("ID :" . $maul["ID"]); 
    echo"<br>";  
    echo("Nama :" . $maul["Nama"]); 
    echo"<br>"; 
    echo("Tanggal lahir :" . $maul["Tanggallahir"]); 
    echo"<br>"; 
    echo("Alamat :" . $maul["Alamat"]); 
    echo"<br>"; 
    echo("Game Favorit :" . $maul["Game Favorit"]); 
    echo"<br>"; 
    echo("Hobi :" . $maul["Hobi"]); 
    echo"<br>"; 
    echo("Kuliah :" . $maul["Kuliah"]); 
    echo"<br>"; 
    
    ?>
<hr> 
</body>
</html>
    <h2>Array Multidimensi</h2>
<?php
// Array multidimensi

echo("<h1> Multidimensi</h1>");                                      //multidimensi array dalam array
echo("<br>");
$kendaraan =[
		"Nama" => "motor",
		"Jenis" => [
					"honda"=>"scoopy",
					"yamaha"=>"Nmax"
					],
		];
var_dump($kendaraan);
echo "<br>"."<hr>";
?>
<hr>

<h2>Else dan If</h2>
<?php
$paket = "301";
if($paket == "301")
{
    echo "Nama paket Microsoft Office & biaya 350000";
}
 elseif($paket == "302")
{
    echo "Nama paket Visual Basic & biaya 450000";
}
elseif($paket == "303")
{
    echo "Nama paket Visual Foxpro & biaya 400000 ";
}
else{
    echo "Tidak ada paket yang lain";
}

?>
<hr>

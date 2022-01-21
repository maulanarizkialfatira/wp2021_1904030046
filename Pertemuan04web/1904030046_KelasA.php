<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Pertemuan 4</title>
</head>
<body>
    <H1>Tugas Pertemuan 4 WEB Programing</H1>
    <h3>Nama : Maulana Rizki Alfatira (1904030046)</h3>
    <hr>
    <h2>Membuat Array</h2>
        <?php
            $values = array(1,2,3,4,5.20);
            var_dump($values);
            echo"<br>";
            echo($values[4]);

            echo"<br>";

            $keluarga = array("Ayah" , "Ibu" , "Adik ke.1" , "Adik ke.2");
            var_dump($keluarga);

            echo"<br>";
            //mengganti isi value
            $keluarga[1] = "Mama";
            var_dump($keluarga);
            echo"<br>";

            //menambahkan isi value
            $keluarga[] = "Paman";
            var_dump($keluarga);
            echo"<br>";

            //mengahapus isi value
            unset($keluarga[3]) ;
            echo"<br>";

            //mengambil total data di value
            var_dump(count($keluarga));
            echo"<br>";
        ?>
    <hr>
    <h2>Map Dengan Array</h2>
    <?php
    $iki = array(
            "id"  =>"0912",
            "nama"=>"IKI",
            "hobi"=>"Main Game"
            );
            var_dump($iki);
            echo"<br>";

    $maul = array(
                "ID"    =>"1904030046",
                "Nama"  =>"Maulana Rizki Alfatira",
                "Hobi"  =>"Main Game"
                );     
                var_dump($maul);
                echo"<br>";  
    echo("ID :" . $maul["ID"]); 
    echo"<br>";  
    echo("Nama :" . $maul["Nama"]); 
    echo"<br>"; 
    echo("Hobi :" . $maul["Hobi"]); 
    echo"<br>"; 
    
    ?>
<hr>
    <h2>Operator Aritmatika</h2>
    <?php
    $tambah = 15 + 15;
    $Kurang = 20 - 15;
    $kali   = 3*5;
    $bagi   = 20/2;
    $modular= 100 % 2;
   

    echo " Tambah   : " . $tambah . "<br>";
    echo " Kurang   : " . $Kurang . "<br>";
    echo " Kali   : " . $kali . "<br>";
    echo " Bagi   : " . $bagi . "<br>";
    echo " Modular   : " . $modular . "<br>";
    
    ?>

<hr>
    <h2>Incerment</h2>
    <?php
    $a = 5;
    $a++;
    echo($a);
    ?>   
    
</body>
</html>
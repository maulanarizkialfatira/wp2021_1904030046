<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>If Statment</h2>
    <?php
        $nilai = 90 ;
        $absen = 90 ;
        if($nilai >= 80 && $absen >= 80)
        {
            echo " Anda Lulus" . "</br>";
        } 
        ?>
    <hr>

    <h2>else Statment</h2>
    <?php
        $nilai = 70 ;
        $absen = 90 ;
        if($nilai >= 80 && $absen >= 80)
        {
            echo " Anda Lulus" . "</br>";
        } else{
            echo "Anda Tidak Lulus". "</br>";
        }
    ?>
    <hr>

    <h2>Else IF Statment</h2>
    <?php
        $nilai = 60 ;
        $absen = 60 ;
        if($nilai >= 80 && $absen >= 80)
        {
            echo " Anda Lulus" . "</br>";
        } else if ( $nilai >=70 && $absen>=70){
            echo "Nilai Anda B". "</br>";
        } else if ( $nilai >=60 && $absen>=60){
            echo "Nilai Anda C". "</br>";
        } else if ( $nilai >=50 && $absen>=75){
            echo "Nilai Anda D". "</br>";
        } else {
            echo "Nilai Anda E". "</br>";
        }
    ?>
    <hr>

    <h2>Swicth Statment</h2>
    <?php
        $nilai = "A";
        $absen = "A";
        switch ($nilai && $absen){
            case "A":
                echo " Anda Lulus dengan sangat baik" . "</br>";
                break;
            case "B":
            case "C":
                echo " Anda Lulus" . "</br>";
                break;
            case "D":
                echo "Anda tidak lulus" . "</br>";
                break;
            default:
                echo "Mungkin Anda salah jurusan"."</br>";
        }
        
    ?>
    <hr>
</body>
</html>
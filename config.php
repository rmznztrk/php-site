<?php 

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "coursedb";

    $baglanti = mysqli_connect($host,$username,$password,$database);

    if (mysqli_connect_errno() > 0) {
        die("hata: ".mysqli_connect_errno()); //die kendisinden sonra yani burdan sonra programi bitirir(alt satirlara gecmez)
    }

    echo "baglanti tamam.";

    mysqli_close($baglanti);

    echo "baglanti kapatildi.";

?>
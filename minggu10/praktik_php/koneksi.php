<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($hostname, $username, $password);

    if($connect){
        echo "koneksi ke MySQL berhasil";
    }else{
        echo "Koneksi ke MySQL gagal";
    }
 ?>
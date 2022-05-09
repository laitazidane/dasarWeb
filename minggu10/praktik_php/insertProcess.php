<?php 
    include "myconnection.php";

    $name = $_POST["myname"];
    $address = $_POST["myaddress"];
    $foto  = $_FILES['upload']['name'];
    $direktori = "berkasupload/";
    
    if(isset($_POST['send'])){
        
        if(isset($foto)){
            $query = "INSERT INTO student(name, address, foto)
                VALUES('$name','$address','$direktori$foto')";
        
        mysqli_query($connect, $query);
        move_uploaded_file($_FILES['upload']['tmp_name'], $direktori.$foto);
        echo "Data baru berhasil ditambahkan";   
        }
        
    }
    else{
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
 ?>
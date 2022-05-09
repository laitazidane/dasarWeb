<?php 
    include "myconnection.php";

    $id = $_POST["myid"];
    $name = $_POST["myname"];
    $address = $_POST["myaddress"];
    $direktori = "berkasupload/";
    $namefoto = $_POST["upload"];
    

    if(isset($_POST['send'])){
        if(isset($namefoto)){
            move_uploaded_file($_FILES[$namefoto]['tmp_name'], $direktori.$namefoto);
            $query = "UPDATE student SET name='$name', address='$address', foto = '$direktori$namefoto'  WHERE id=$id";
            mysqli_query($connect, $query);

        }
        header('Location:homeCRUD.php');
    }
    else{
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
 ?>


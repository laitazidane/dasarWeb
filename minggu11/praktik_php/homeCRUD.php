<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <h1>DATA MAHASISWA</h1>
   <form action="search.php" method="get">
        Cari data mahasiswa berdasarkan nama:
        <input type="text" name="carinama">
        <input type="submit" value="cari">
    </form>
    <br>

   <a href="insertForm.html">
    <input type="button" value="Tambah Data">
   </a><br><br>

   <table>
       <tr>
           <th> ID </th>
           <th> Nama </th>
           <th> Alamat </th>
           <th> Foto </th>
           <th> Aksi </th>
       </tr>
       <?php

        include "myconnection.php";

        $query =  "SELECT * FROM student";
        $result = mysqli_query($connect, $query);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td> <img src="<?php echo $row["foto"]; ?>" alt="" width="100px"></td>
            <td>
                <a href="editForm.php?id=<?php echo $row["id"]; ?>">
                <button>Edit</button></a>
                <a href="delete.php?id=<?php echo $row["id"]; ?>">
                <button>Hapus</button></a>
            </td>
        </tr>
        <?php  
                }
            }
            else{
                echo "0 results";
            }
        ?>
   </table>
   <br>
   <a href="cetak.php"><button>Cetak Laporan</button> </a>
</body>
</html>
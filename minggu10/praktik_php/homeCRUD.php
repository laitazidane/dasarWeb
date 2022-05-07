<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <h1>DATA MAHASISWA</h1>

   <a href="insertForm.html">
    <input type="button" value="Tambah Data">
   </a><br><br>
   
   <table>
       <tr>
           <th> ID </th>
           <th> Nama </th>
           <th> Alamat </th>
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
        </tr>
        <?php  
                }
            }
            else{
                echo "0 results";
            }
        ?>
   </table>
</body>
</html>
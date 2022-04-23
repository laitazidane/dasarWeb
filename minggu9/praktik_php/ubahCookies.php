<?php 
    $name = "mahasiswa";
    $value = "Tulis nama kalian";
    setcookie($name, $value, time()+600);

    setcookie("kelas","tulis kelas kalian", time()+3600);
 ?>
 <html>
     <body>
         <?php 
            echo "Cookies telah dibuat";
          ?>
     </body>
 </html>
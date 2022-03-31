<!DOCTYPE html>
<html>
    <head>        
    </head>
    <body>
        <?php 
            $tujuan = "Malang";

            echo "Mau main kemana? ". $tujuan . "<br>";
            echo "<br> Pesan: ";

            switch($tujuan){
                case "Batu":
                    echo "<b>Jangan Lupa bawa jaket</b>";
                    break;
                case "Bandung":
                    echo "<b>Awas kalau belanja laper mata</b>";
                    break;
                case "Bali":
                    echo "<b>Pakai sunblock SPF 50</b>";
                    break;
                default:
                    echo "<b>Jangan Lupa bawa jaket</b>";
            }   
         ?>
    </body>
</html>
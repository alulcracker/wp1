<html>
<link rel="stylesheet" type="text/css" href="style.css" >
    <head>
        <title>TUGAS 4 - WP1</title>
    </head>
    <body>
    <h3>Contoh Operator Perbandingan</h3>
    <?php
        #bahan mwehehe
        $a = 88;
        $l = 88;
        $u = 99;
        $ll = 99;

        echo "( == ) : Jika nilai $a sama dengan nilai $l maka hasilnya Benar.<br>";
        if($a == $l){
            echo "$a == $l >> ";
            echo "True :)<br>";
        } else {
            echo "$a == $l >> ";
            echo "False :(<br>";
        }
        
        echo "____________________________________________________________________________<br><br>";

        echo "( != ) : Jika nilai $a tidak sama dengan nilai $l, maka hasilnya Salah.<br>";
        if($a != $l){
            echo "$a != $l >> ";
            echo "True :)<br>";
        } else {
            echo "$a != $l >> ";
            echo "False :(<br>";
        }

        echo "____________________________________________________________________________<br><br>";

        echo "( < ) : Jika nilai $a lebih besar dari nilai $u, maka hasilnya Salah.<br>";
        if($a > $u){
            echo "$a > $u >> ";
            echo "True :)<br>";
        } else {
            echo "$a > $u >> ";
            echo "False :(<br>";
        }

        echo "____________________________________________________________________________<br><br>";

        echo "( > ) : jika nilai $a kurang dari nilai $u, maka hasilnya Benar.<br>";
        if($a < $u){
            echo "$a < $u >> ";
            echo "True :)<br>";
        } else {
            echo "$a < $u >> ";
            echo "False :(<br>";
        }

        echo "____________________________________________________________________________<br><br>";

        echo " ( >= ) : Jika nilai $a lebih besar atau sama dengan nilai $ll, maka hasilnya Salah.<br>";
        if($a >= $ll){
            echo "$a >= $ll >> ";
            echo "True :)<br>";
        } else {
            echo "$a >= $ll >> ";
            echo "False :(<br>";
        }

        echo "____________________________________________________________________________<br><br>";

        echo "( <= ) : Jika nilai $a kurang dari atau sama dengan nilai $ll, maka hasilnya Benar.<br>";
        if($a <= $ll){
            echo "$a <= $ll >> ";
            echo "True :)<br>";
        } else {
            echo "$a <= $ll >> ";
            echo "False :(<br>";
        }
    ?>
    </body>
</html>
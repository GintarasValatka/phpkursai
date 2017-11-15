<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p>
    <?php
        $a = 5;
        $b = 5;
        $c = 5;
            if($a+$b!=$c && $a+$c!=$b && $c+$b!=$a) {echo $a, $b, $c, " Tokiu krastiniu trikampis gali buti.";
                if($a == $b && $c == $a) {echo " Trikampis yra lygiakrastis.";
                }
                    else {echo "Trikampis nera lygiakrastis.";
                    }
            }  
                else {echo " Tokiu krastiniu trikampis negali buti.";
                }  
    ?>
        </p>
    </body>
</html>









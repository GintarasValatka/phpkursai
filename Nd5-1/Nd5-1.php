<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p>
    <?php
        $a = 2;
        $b = 10;
        $c = 8;
            if($a+$b!=$c && $a+$c!=$b && $c+$b!=$a) {echo $a, $b, $c, " Tokiu krastiniu trikampis gali buti.";
                if($a == $b && $c == $a) {echo " Trikampis yra lygiakrastis.";
                }
                    if($a == $c && $a != $b) {echo " Trikampis yra lygiasonis.";
                    }
                        if($a!=$b && $a!=$c) {echo " Trikampis yra ivairiakrasti."; 
                        }  
                }
                else {echo " Tokiu krastiniu trikampis negali buti.";
            }
    ?>
        </p>
    </body>
</html>
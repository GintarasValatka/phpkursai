<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p>
    <?php
        $a=[[1, 3, 4], 
            [2, 5], 
            [       2=>3, 5=>8], 
            [1, 1,        5=>1]];

            $suma=[];

        foreach($a as $eilute){
            // print_r($eilute);
            foreach ($eilute as $stulpelis => $reiksme) {
                $suma[$stulpelis] += $reiksme;
            }
        }
        print_r($suma);
        echo "<br>";

        // echo (max($suma));
        $b=0;
        foreach($suma as $max){
            if($max>$b) {
                $b=$max;
            }
        }
        echo $max;

            
    ?>
        </p>
    </body>
</html>
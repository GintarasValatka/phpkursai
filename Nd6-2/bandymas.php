<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p>
    <?php

    for ($n = 1; $n <=100; $n++){
        if(perfect($n)){
            echo perfect($n) . "<br>";
        }
    }


    function perfect($n){
        for($i=1;$i<$n;$i++){
        $r=$n%$i;
            if($r==0){
                $sum=$sum+$i; 
            }
        }
            if($sum==$n){
            echo $n;
            }
    }
        
    ?>
        </p>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p>
    <?php
        $array=array(-10, 0, 2, 9, -5);
        for($j = 0; $j < count($array); $j ++) {
            for($i = 0; $i < count($array)-1; $i ++){
        
                if($array[$i] < $array[$i+1]) {
                    $laikinas=$array[$i+1];
                    $array[$i+1]=$array[$i];
                    $array[$i]=$laikinas;
                }       
            }
        }
        
        echo "Masyvas mazejimo tvarka: ";
        echo "<br />";
        print_r($array);

        // du for ciklai naudojami del to, kad jeigu butu tik vienas for ciklas, tai lygintume tik elementus pirma su kaimynu. 
     
    ?>
        </p>
    </body>
</html>
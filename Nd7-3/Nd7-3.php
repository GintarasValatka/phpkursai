<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p>
    <?php
        // $a=[[1, 3, 4], 
        //     [2, 5], 
        //     [       2=>3, 5=>8], 
        //     [1, 1,        5=>1]];
        //     $suma= 0;
        // foreach($a as $eilute){
        //     // print_r($eilute);
        //     foreach ($eilute as $stulpelis) {
        //         $suma += $stulpelis[0];
        //         echo $stulpelis;
        //     }
        // }




        $a = [
            [2=>5, 6],
            [2, 5, 7],
            [3 =>6, 4=>12]
        ];

        $sum = [];

        foreach($a as $eilute){
            echo "<br>";
            foreach($eilute as $stulpelis => $reiksme){
                // echo $stulpelis, ":", $reiksme, ";";
                $sum[$stulpelis] += $reiksme;
            }
        }
        print_r($sum);
            
    ?>
        </p>
    </body>
</html>
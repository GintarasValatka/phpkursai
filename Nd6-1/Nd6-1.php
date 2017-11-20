<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p>
    <?php
        $a = [5, 6, 10, 15];
        $b = [8, 5, 3, 25];
            
            function vidurkis($array){
                $total = 0;
                foreach($array as $value){
                    $total += $value;
                }
                $vidurkis = $total/count($array);
                return $vidurkis;
            }

            print_r($a);
            echo "Masyvo vidurkis yra = ", vidurkis($a);
            echo "</br>";
            print_r($b);
            echo "Masyvo vidurkis yra = ", vidurkis($b);

            echo "</br>", "Masyvu skirtumas bus = ", vidurkis($a) - vidurkis($b);
            
    ?>
        </p>
    </body>
</html>
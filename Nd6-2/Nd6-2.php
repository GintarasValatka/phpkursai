<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p>
    <?php
        for ($i = 2; $i <=1000; $i++) {
             dalikliai($i); 
            //  print_r($a);
             perfect($i);
        }
        function dalikliai($i) {    
            $a = array();
            $k = 1;
                while ($i>$k) {
                    if ($i % $k == 0) {
                        array_unshift($a, $k);
                        // echo $k, "<br>";
                    }
                $k++;
                }
                // print_r($a);
                return $a;
        }
        function perfect($i) {
            $a = dalikliai($i); 
            if (array_sum($a) == $i){
            echo $i, "<br>";
            }
        }

        
    ?>
        </p>
    </body>
</html>
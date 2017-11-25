<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p>
    <?php
    $a = ['Jonas', 'Petras', 'Antanas', 'Povilas'];
    echo "Pirma uzduotis", "<br>";
    
    for ($i = 0; $i < count($a); $i++){
        for ($j = $i+1; $j < count($a); $j++){
            echo $a[$i], '-', $a[$j], "<br>";
        } 
    }
    echo "<br>", "Antra uzduotis", "<br>";

    for ($i = 0; $i < count($a); $i++){
        for ($j = 0; $j < count($a); $j++){
            if($i!=$j){
            echo $a[$i], '-', $a[$j], "<br>";
            } 
        }
    }




    ?>
        </p>
    </body>
</html>
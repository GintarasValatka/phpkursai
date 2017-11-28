<!DOCTYPE html>
<html>
  <head>
    <title>Pavadinimas</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php 
      $zmones = [
        ['vardas' => 'Jonas', 'lytis' => 'V'],
        ['vardas' => 'Ona', 'lytis' => 'M'],
        ['vardas' => 'Petras', 'lytis' => 'V'],
        ['vardas' => 'Marytė', 'lytis' => 'M'],
        ['vardas' => 'Eglė', 'lytis' => 'M']
      ];

    if($zmones){
        for( $i=0; $i<count($zmones)-2; $i++){
            for( $j=$i+1; $j<count($zmones)-1; $j++){
                for( $k=$j+1; $k<count($zmones); $k++){
                    if(!($zmones[$i]['lytis']==$zmones[$j]['lytis'] && 
                    $zmones[$j]['lytis']==$zmones[$k]['lytis'])) {
                      echo $zmones[$i]['vardas']."($i)-". $zmones[$j]['vardas'] . "($j)-" . $zmones[$k]['vardas'] . "($k)" . "<br>";
                    }
                }
            }
        }
    }   else {
          echo "Duomenu nera";
        }

        
    ?>
    
  </body>
</html>
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
        for( $i=0; $i<count($zmones); $i++){
            for( $j=$i+1; $j<count($zmones); $j++){
                if(!($zmones[$i]['lytis']==$zmones[$j]['lytis'])){
                    echo $zmones[$i]['vardas'], " - ", $zmones[$j]['vardas'], "<br>"; 
                }
            }
        }
    }   else {
        echo "Duomenu nera";
      }

        
    ?>
    
  </body>
</html>
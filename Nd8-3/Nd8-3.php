<!DOCTYPE html>
<html>
  <head>
    <title>Pavadinimas</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php 
    $mokiniai = [ 
      ['vardas' => 'Jonas', 'pazymiai' => ['lietuviu' => [4, 8, 6, 7], 'anglu' => [6, 7, 8], 'matematika' => [3, 5, 4]]], 
      ['vardas' => 'Ona', 'pazymiai' => ['lietuviu' => [10, 9, 10], 'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]],             
      ['vardas' => 'Rasa', 'pazymiai' => ['lietuviu' => [10, 9, 8], 'anglu' => [9, 8, 6], 'matematika' => [6, 4, 4, 9]]],             
      ['vardas' => 'Laurynas', 'pazymiai' => ['lietuviu' => [8, 9, 8], 'anglu' => [9, 7, 6], 'matematika' => [6, 5, 8, 9]]],                   
      ['vardas' => 'Milda', 'pazymiai' => ['lietuviu' => [10, 10, 8], 'anglu' => [6, 8, 6], 'matematika' => [6, 9, 10, 8]]],                   
      ['vardas' => 'Gabija', 'pazymiai' => ['lietuviu' => [7, 8, 8], 'anglu' => [9, 10, 6], 'matematika' => [6, 10, 7, 10]]]                  
  ];

    foreach($mokiniai as $mokinys){
      foreach($mokinys['pazymiai'] as $pazymys){
          //  print_r($pazymys);
      }
    }

    function vidurkiuSuma($mokiniai){
      
      foreach ($mokiniai as $mokinys){
          $vidSuma = 0;
          foreach ($mokinys['pazymiai'] as $pazymys){
              $vidSuma += vidurkis ($pazymys);
          }
          echo $mokinys['vardas'] ." - Vidurkių suma yra: " .$vidSuma ."<br>"; 
      }
      return $vidSuma;
  }

    function vidurkis($pazymys){
      $suma = 0;
      foreach($pazymys as $ivertinimas){
        $suma += $ivertinimas;
      }
      $vid = round($suma/count($pazymys));
      // echo "Vidurkis yra lygus- ", $vid;
      return $vid;
    }

    // vidurkis($pazymys);
    vidurkiuSuma($mokiniai);

    ?>
    
  </body>
</html>
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
        ['vardas' => 'Ona', 'pazymiai' =>  ['lietuviu' => [10, 9, 10], 'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]]   
    ];

    foreach($mokiniai as $mokinys){
      foreach($mokinys['pazymiai'] as $dalykas => $pazymys){
        for ($i=0; $i<count($pazymys); $i++){
          echo $mokinys['pazymiai'][$dalykas][$i];
        }
      }
    }

    

  //   function vidurkiuSuma($mokiniai){
  //     foreach ($mokiniai as $key => $d){
  //         $vidSuma = 0;
  //         foreach ($d['pazymiai'] as $k=> $value){
  //             $vidSuma += vidurkis ($value);
  //         }
  //         $maxVidurkis[] = ['vardas'=>$d['vardas'], 'vidurkis'=>$vidSuma];
  //         echo $d['vardas'] ." - Vidurkių suma yra: " .$vidSuma ."<br>";
  //     }
  //     return $maxVidurkis;
  // }

    function vidurkis($dalykas){
      $suma = 0;
      foreach($dalykas as $ivertinimas){
        $sum += $ivertinimas;
      }
      $vid = round($sum/count($dalykas));
      echo "Vidurkis yra lygus- ", $vid;
      // return $vid;
    }

    vidurkis($dalykas);

    

    
        
        
    ?>
    
  </body>
</html>
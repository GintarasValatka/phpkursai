<!DOCTYPE html>
<html>
    <head></head>
    <body>
    <?php
    $mokiniai = [
        ['vardas' => 'Jonas', 'pazymiai' => ['lietuviu' => [4, 8, 6, 7], 'anglu' =>[6, 7, 8], 'matematika' => [3, 5, 4]]], 
        ['vardas' => 'Ona', 'pazymiai' => ['lietuviu' => [10, 9, 10], 'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]]
        ];


        function vidurkis($pazymiai){
            $sum = 0;
            foreach($pazymiai as $pazymys){
                $sum+=$pazymys;
            }
            return $sum / count($pazymiai);
        }

        function vidurkiai($mokinys){
            $trimestras = [];
            foreach($mokinys['pazymiai'] as $dalykas=>$pazymiai){
                $vidurkis = vidurkis($pazymiai);
                $trimestras[$dalykas]=$vidurkis;
            }
            return $trimestras;
        }

        foreach($mokiniai as $i=> $m){
            $mokiniai[$i]['trimestras']=vidurkiai($m);
            $mokiniai[$i]['vidurkis']=vidurkis($mokiniai[$i]['trimestras']);
        }

        var_dump($mokiniai);
        exit;
        
        
?>


    <table border="1">
        <tr>
            <th>Vardas</th>
        </tr>
        <?php foreach ($mokiniai as $mokinys): ?>
        <tr>
            <td><?php echo $mokinys['vardas']; ?></td>
            <td><?php foreach($mokinys['pazymiai'] as $dalykas=>$p): ?>
                <div>
                    <?php echo $dalykas . ':';?>
                    <?php foreach ($pazymiai as $pazymys):?>
                        <?php echo $pazymys . ' ';?>
                    
                </div>
            <?php endforeach;?>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
    </body>
</html>
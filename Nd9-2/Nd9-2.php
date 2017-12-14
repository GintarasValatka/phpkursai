<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
    </head>
    <body>
        <?php
            class Zmogus
            {
                public $vardas;
                public $pavarde;
                
                function __construct($vardas, $pavarde) {
                    $this->vardas = $vardas;
                    $this->pavarde = $pavarde;
                }
                // function pilnasVardas() {
                //     return $this->vardas . ' ' . $this->pavarde;
                // }
            }
            $zmones = [new Zmogus('Adomas', 'Adomaitis'), new Zmogus('Ieva', 'Ievaite'), new Zmogus('Petras', 'Petraitis')];
        ?>

        <table border='1'>
        <tr>
            <th>Vardas</th><th>Pavarde</th>
        </tr>
        <?php foreach($zmones as $zmogus): ?>
        <tr>
            <td><?php echo $zmogus->vardas, "<br>";?></td> 
            <td><?php echo $zmogus->pavarde, "<br>";?></td>
        </tr>
        <?php endforeach; ?>
    
        </table>
    </body>
</html>
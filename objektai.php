<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            class Zmogus {
                public $vardas;
                public $pavarde;
                public $trimestras; //['anglu' =>10, 'matematika' =>8]

            
                function __construct($a, $b, $trimestras) {
                    $this->vardas = $a;
                    $this->pavarde = $b;
                    $this->tremestras = $trimestras;
                }

                function vidurkis() {
                    $suma = 0;
                    foreach ($this->trimestras as $balas){
                        $suma+=$balas;
                    }

                }
            }

            $zmones1 = [
                new Zmogus('Jonas', 'Jonaitis';),
                new Zmogus('Ona', 'Onaite';)
            ];

            $zmones1[] = new Zmogus('Ona', 'Onaite';);
            
            foreach ($zmones1 as $z) {
                echo $z->pavarde . ' ' . $z->vidurkis() . '<br>';
            }
            
            ?>

    </body>
</html>
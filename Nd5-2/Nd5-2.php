<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p>
    <?php
        $a = 5;
        $b = 5;
        $c = 5;
        $p = ($a+$b+$c)/2;
        $x = $p*($p-$a)*($p-$b)*($p-$c);
        $plotas = sqrt($x);
        echo "Kai trikampio krastines ", $a, $b, $c, " Trikampio plotas = ", number_format($plotas,2);
    ?>
        </p>
    </body>
</html>
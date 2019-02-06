<!-- stoker 15 dans une bariable.
stocker 5 dans une autre variable.
stoker 8 dans une autre varibale.
Afficher ceci dans la page (en dynamique):
15 + 5+8 = 28
15*(5-8) = -45 
(8-5)/15 = 0.2
Si une des opérations a un résultat inféreur à 20, afficher 
"une des opérations renvoie moins de 20" en bas de la page-->

<?php 

$a = 15;
$b = 5;
$c = 8;



$result1 = $a + $b + $c ;
$result2 = $a*($b-$c) ;
$result3 = 'Division par 0 impossible';

//Si  le nombre 1 est différent de 0, on peut faire le calcul

if ($a !== 0) {
    $result3 = ($c - $b)/$a;
}

echo $a . '+' . $b . '+' . $c . ' = ' . $result1 . '<br/>';

echo "$a  x ( $b - $c ) = $result2 <br/>";

echo "($c - $b ) / $a = $result3 <br/>";

if ($result1 > 20 || $result2 < 20 || $result3 < 20){
    echo 'Une des opérations renvoie moins de 20';
}


<?php

// Quell jour sera-t-on dans 10 jours?
echo date ('l d/m/Y', strtotime('10 days'));

//Dans combien de jours est la fin de kla formation ? (27 mai)
//----unfinished buusiness-------------// 
echo 'Il reste ' .$day . ' jours et '. $hours . ' heures.';
echo date('H/h i/m s/s'). '<br />'; // Affichera "18h 55m 36s



$seconds = date('s'); // renvoi 00, 01 ou 54
echo date('l d F Y');
echo 'Il est ' ;
echo date ('H\hi \e\t ');
echo $seconds . ' seconde';
echo ($seconds > 1) ? 's' : '';
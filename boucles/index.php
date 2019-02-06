
<?php

/***    
 * Les boucles 
 * 
 * Présentation des coucles en PHP
 * 
 */

 // for

for ($i = 0; $i < 10; $i++){
    echo $i;
}

// foreach

$students = ['Mickael' , 'Baptiste' , 'Gregory' , 'Thomas'];

print_r($students);

foreach ($students as $index => $value) {
    echo  $index . ' : ' . $value . '<br />' ;
}
// while

$i = 0;
while($i < 10) {
    echo $i++; 
}

// do ... while

echo'<h2>La boucle do while</h2>';

$i = 10;
do {
    echo $i++;
}while ($i < 10);
'<br />';

// 1. Ecrire une boucle qui affiche les nombres de 10 à 1
echo'<h2>1. Ecrire une boucle qui affiche les nombres de 10 à 1</h2>';
$i = 10;
while($i>0) {
  echo $i . ' . ';
  $i--;
}

// 2. Ecrire une boucle qui affiche uniquement les nombres pairs entre 1 et 100

echo'<h2>2. Ecrire une boucle qui affiche uniquement les nombres pairs entre 1 et 100</h2>';
$i;
for($i=1;$i<=100;$i++){
if($i%2==0){
echo $i."<br>";
}
}

// 3. Ecrire le code permettant de trouver le PGCD de 2 nombres

echo'<h2>3. Ecrire le code permettant de trouver le PGCD de 2 nombres</h2>';

function gcd($a, $b) 
{ 
    // Everything divides 0 
    if($b==0) 
        return $a ; 
  
    return gcd( $b , $a % $b ) ; 
} 
  
// Driver code 
$a = 48 ; 
$b = 18 ; 
  
  
echo "GCD of $a and $b is ", gcd($a , $b) ; 


// 4. Coder le jeu du FizzBuzz
echo'<h2>4. Coder le jeu du FizzBuzz</h2>';
foreach(range(1, 100) as $number){
    
    //Use the Modulus arithmetic operator.
    
    //If the number is divisible by 15, then it is Fizz Buzz.
    if($number % 15 == 0 ){
        echo 'Fizz Buzz', '<br>';
    } 
    //If the number is divisible by 5, then it is Fizz.
    elseif($number % 5 == 0){
        echo 'Fizz', '<br>';
    }
    //If the number is divisible by 3 , then it is Buzz.
    elseif($number % 3 == 0){
        echo 'Buzz', '<br>';
    }
    //If it isn't divisible by 3 or 5, just print out the number.
    else{
        echo $number, '<br>';
    }
}

// 96 - 36 = 60;
// 60 - 36 = 24;
// 36 - 24 = 12;
// 24 - 12 = 12; 
// 12 - 12 = 0 ;

// (a)48 - (b)18 = 30;
// 30 - 18 = 12;
// 12 - 12 = 0;


/***
 * 
 * 
 * Exercices
 1.Créer une boucle qui affiche 10 étoiles (*)
 2.Imbriquer la boucle dans une autre boucle afin d'afficher 10 lignes de 10 étoiles
 3.Nous obtenons un carré. Trouver un moyen de modifier le code pour obtenir un triangle rectangle.
 */

//1.Créer une boucle qui affiche 10 étoiles (*)



 //triangle
for($i = 0; $i<=100; $i++){  
for($j = 100- $i; $j>=0; $j--){  
echo "*";  
}  
echo "<br>";  
} 
echo "<br>"; 
 echo "<br>"; 
 //rectangle
for($i = 0; $i<=9; $i++){  
    for($j = 9; $j>=0; $j--){  
    echo "*";  
    }  
    echo "<br>";  
    } 


    for($i = 0; $i < 11; $i++){
        $state = (i === 5)? 'visible' : 'hidden';

        echo '<span style="visibility: '.$state.'">*</span>';
    }
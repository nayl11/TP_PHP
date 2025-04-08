<!-- Exo1 -->
<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "Le nombre est: $x <br>";
}
 ?> 

<br>;

<?php 
//exo2 (1ere possibilité)
$somme = 0;
 
for ($i=0; $i <101; $i++) {
    $somme = $somme + $i;
    }  
 
if ($i >= 101) {
echo "La somme du calcul des nombre de 1 a 100 est de  $somme";
}


?>  
<br>;

<!-- exo 3 -->
<?php

for ($i = 2; $i <= 2; $i++)
{
    Echo 'Table de multiplication de '.$i.'<br>';
    for ($j = 1; $j <= 10; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
}
?>
<br>;
<!-- exo1 -->
<?php  
$fruits = array("Pomme", "Banane", "Orange", "Fraise", "Kiwi"); 

foreach ($fruits as $x) {
  echo "$x <br>";
}
?> 


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
<!-- Exo1 -->
<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "Le nombre est: $x <br>";
}

echo "<br>";

//exo2 (1ere possibilité)
$somme = 0;
 
for ($i=0; $i <101; $i++) {
    $somme = $somme + $i;
    }  
 
if ($i >= 101) {
echo "La somme du calcul des nombre de 1 a 100 est de  $somme";
}


// exo 3 


for ($i = 2; $i <= 2; $i++)
{
    Echo 'Table de multiplication de '.$i.'<br>';
    for ($j = 1; $j <= 10; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
}

echo "<br>";

// Foreach -->
// exo1 -->
  
$fruits = array("Pomme", "Banane", "Orange", "Fraise", "Kiwi"); 

foreach ($fruits as $x) {
  echo "$x <br>";
}

echo "<br>";

 	// exo2 -->

$personne = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 30,
    "ville" => "Paris"
];
foreach ($personne as $x) {
    echo "$x <br>";
  }

  echo "<br>";
  // exo3

$etudiants = [
    ["nom" => "Martin", "note" => 15],
    ["nom" => "Durand", "note" => 12],
    ["nom" => "Petit", "note" => 18]
];
foreach ($etudiants as $etudiant) {
    echo $etudiant  ["nom"].$etudiant["note"]  ."<br>";
}













// boucle for qui décrimente de 80 a 60

for ($i=80; $i >61 ; $i--) { 
    echo "Le nombre est: $i <br>";
}

for ($i=0; $i <20;$i++) { 
    echo "Le nombre est: $i <br>";
}

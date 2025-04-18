 <?php
// Paramètres de connexion à la base de données

 $host = "localhost" ;
 $dbname = "depot_tp_php" ;
 $username = "root" ;
 $motdepasse = "" ;
 $charset = "utf8mb4" ;

// DSN (Data Source Name)
 $dsn="mysql:host=$host;dbname=$dbname;charset=$charset";

 $options = [
    PDO ::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION,
    PDO ::ATTR_DEFAULT_FETCH_MODE => PDO ::FETCH_ASSOC,
    PDO ::ATTR_EMULATE_PREPARES => false
    // Gestion des erreurs avec exceptions
   // Mode de récupération par défaut: tableau associatif
   // Désactiver l'émulation des requêtes préparées
 ];
// Création de l'instance PDO
try {
    $pdo = new PDO ($dsn, $username,$motdepasse,$options);
    echo "Connexion à la base de données réussie ! </br></br>" ;


  
$sql = " INSERT INTO users (email, nom , âge) VALUES (?,?,?) " ;
 $stmt = $pdo -> prepare ( $sql );
 $stmt -> execute ([ " naylis.lattar11@gmail.com","Naylis",99]);
 echo "Nouvel utilisateur inséré avec l'ID: " . $pdo -> lastInsertId () . "<br><br>" ;


 echo "Utilisateurs de plus de 30 ans :<br>" ;
 $sql = " SELECT *FROM  users WHERE âge > ? " ;
 $stmt = $pdo -> prepare ( $sql );
 $stmt -> execute ([ 30 ]);
 foreach ( $stmt as $stmts ) {
    echo "Nom: " . $stmts [ "nom" ] . ", Âge: " . $stmts [ "âge" ] . "<br>" ;
 }

 $sql = " UPDATE users SET âge = 30 WHERE âge = ? " ;
 $stmt = $pdo -> prepare ( $sql );
 $stmt -> execute ([ 99 ]);
 echo "Nombre d'utilisateurs mis à jour: " . $stmt -> rowCount () . "<br>" ;

 $sql = " DELETE FROM users WHERE âge = ? " ;
 $stmt = $pdo -> prepare ( $sql );
 $stmt -> execute ([ 99 ]);
 echo "Nombre d'utilisateurs supprimés : " . $stmt -> rowCount () . "<br>" ;


 } catch ( PDOException $e ) {
    
    echo "Erreur de connexion à la base de données : " . $e -> getMessage() . "<br>" ;
 } 













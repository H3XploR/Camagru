<?php 
	echo "fichier php de connection lance\n";
	echo $_POST['username'];
	echo "\n";
	echo $_POST['password'];
?>

<?php
try {
    $pdo = new PDO("mysql:host=mysql;dbname=bdd_camagru", 'yantoine', 'yantoine_password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion à la base de données réussie !\n";

    $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
    if (empty($tables)) {
        echo "La base de données est actuellement vide (aucune table).\n";
    } else {
        echo "Tables existantes : " . implode(", ", $tables) . "\n";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>

<?php 
	require_once __DIR__ . "/init_bdd.php";
    error_log("[INFO] Fichier PHP de connexion lancé");
    if (isset($_POST['username'])) {
        error_log("[INFO] Username: " . $_POST['username']);
    }
    if (isset($_POST['password'])) {
        error_log("[INFO] Password: " . $_POST['password']);
    }

    try {
        $pdo = new PDO("mysql:host=mysql;dbname=bdd_camagru", 'yantoine', 'yantoine_password');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        error_log("[SUCCESS] Connexion à la base de données réussie !");

        $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
        if (empty($tables)) {
            error_log("[INFO] La base de données est actuellement vide (aucune table).");
            error_log("[INFO] Lancement d'initialisation de la bdd");
        } else {
            error_log("[INFO] Tables existantes : " . implode(", ", $tables));
        }
    } catch (PDOException $e) {
        error_log("[ERROR] Connexion échouée : " . $e->getMessage());
    }
?>

<?php
class BDD extends PDO {
    public function __construct() {
        parent::__construct("mysql:host=mysql;dbname=bdd_camagru", 'yantoine', 'yantoine_password');
        parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        error_log("[SUCCESS] Connexion à la base de données réussie !");
        $tables = $this->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
        if (empty($tables)) {
            error_log("[INFO] La base de données est actuellement vide (aucune table).");
            error_log("[INFO] Lancement d'initialisation de la bdd");
			$this->init_bdd();
        }
        else {
            error_log("[SUCCESS] La bdd est déjà initialisée (table users existante)");
        }
    }
    public function init_bdd() {
        error_log("[INFO] Tentative d'initialisation de la bdd (table users)");
        try {
            $this->exec("CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY, 
                username VARCHAR(255) NOT NULL UNIQUE, 
                password VARCHAR(255) NOT NULL, 
                email VARCHAR(255) NOT NULL UNIQUE, 
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )");
            error_log("[SUCCESS] BDD (table users) initialisée");
        } catch (PDOException $e) {
            error_log("[ERROR] Echec de l'initialisation de la BDD : " . $e->getMessage());
        }
    }

    public function add_user_bdd($username, $password, $email): bool {
        try {
            $stmt = $this->prepare("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)");
            $stmt->execute([
                'username' => $username,
                'password' => $password,
                'email' => $email
            ]);
            error_log("[SUCCESS] Utilisateur ajouté");
        } catch (PDOException $e) {
            error_log("[ERROR] Echec de l'ajout de l'utilisateur : " . $e->getMessage());
            return false;
        }
        return true;
    }
}
?>

<?php
function init_bdd($pdo) {
    error_log("[INFO] Tentative d'initialisation de la bdd (table users)");
    try {
        $pdo->exec("CREATE TABLE IF NOT EXISTS users (
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
?>
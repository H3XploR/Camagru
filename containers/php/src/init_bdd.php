<?php
    error_log("[INFO] Fichier PHP d'initialisation de la bdd lancé");
    try {
        $pdo = new PDO("mysql:host=mysql;dbname=bdd_camagru", 'yantoine', 'yantoine_password');
        
    } catch (PDOException $e) {
        error_log("[ERROR] Connexion échouée : " . $e->getMessage());
    }
?>
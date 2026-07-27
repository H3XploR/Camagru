<?php
require_once __DIR__ . "/init_bdd.php";

function add_user_bdd($pdo, $username, $password, $email) {
    try {

    } catch (PDOException $e) {
        error_log("[ERROR] Echec de l'ajout de l'utilisateur : " . $e->getMessage());
    }
}

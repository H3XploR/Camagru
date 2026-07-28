<?php
session_start();
require_once __DIR__ . "/class/bdd.php";
error_log("[INFO] Fichier PHP de register lancé");
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    error_log("[INFO] Username: " . $_POST['username']);
    error_log("[INFO] Password: " . $_POST['password']);
    error_log("[INFO] Email: " . $_POST['email']);
    $bdd = new BDD();
    $ret = $bdd->add_user_bdd($_POST['username'], $_POST['password'], $_POST['email']);
    if ($ret) {
        header("Location: index.php");
        exit();
    }
    else {
        echo "<p>Erreur lors de l'ajout de l'utilisateur</p>";
    }
}
else {
    
include_once 'header.php';
echo "<h1>Register</h1>";
echo "<form method='post' action='register.php'>";
echo "<label>";
echo "Email:";
echo "<input name='email' autocomplete='email' />";
echo "</label>";
echo "<label>";
echo "Username:";
echo "<input name='username' autocomplete='username' />";
echo "</label>";
echo "<label>";
echo "Password:";
echo "<input name='password' autocomplete='password' />";
echo "</label>";
echo "<button>Register</button>";
echo "</form>";
}
?>

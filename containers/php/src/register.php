<?php
require_once __DIR__ . "/class/bdd.php";
error_log("[INFO] Fichier PHP de register lancé");
if (isset($_POST['username']) && isset($_POST['password'])) {
    error_log("[INFO] Username: " . $_POST['username']);
    error_log("[INFO] Password: " . $_POST['password']);
    $bdd = new BDD();
}
else {
    
echo "<h1>Register</h1>";
echo "<form method='post' action='register.php'>";
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
echo "<p>Tu as déjà un compte?</p>";
echo "<a href='index.html'>Connexion</a>";
}
?>
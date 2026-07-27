<?php 
	session_start();
	require_once __DIR__ . "/class/bdd.php";
    error_log("[INFO] Fichier PHP de connexion lancé");
    if (isset($_POST['username']) && isset($_POST['password'])) {
        error_log("[INFO] Username: " . $_POST['username']);
        error_log("[INFO] Password: " . $_POST['password']);

    try {
        $pdo = new BDD();
        error_log("[INFO] Recherche de l'utilisateur dans la bdd");
			$stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = :username");
			$stmt->execute(['username' => $_POST['username']]);
			$user = $stmt->fetch();
			if ($user) {
				error_log("[INFO] Utilisateur trouvé");
				error_log("[INFO] Vérification du mot de passe...");
				if (password_verify($_POST['password'], $user['password'])) {
					error_log("[SUCCESS] Mot de passe correct");
					$_SESSION['user_id'] = $user['id'];
					$_SESSION['username'] = $user['username'];
					header("Location: main_page.php");
					exit();
				} else {
					error_log("[ERROR] Mot de passe incorrect");
					echo "<p>Mot de passe incorrect</p>";
				}
			} else {
				error_log("[ERROR] Utilisateur non trouvé");
				echo "<p>Utilisateur non trouvé</p>";
				echo "<form method='post' action='connection.php'>
					<label>
						Username:
						<input name='username' autocomplete='username' />
					</label>
					<label>
						Password:
						<input name='password' autocomplete='password' />
					</label>
					<button>Connect</button>
					<p>Tu n'a pas encore de compte?</p>
					<a href='register.php'>Register</a>
				</form>";
			}
        } catch (PDOException $e) {
            error_log("[ERROR] Connexion échouée : " . $e->getMessage());
        }
    }
?>

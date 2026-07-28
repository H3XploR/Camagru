<?php
session_start();
require_once __DIR__ . "/class/bdd.php";
error_log("[INFO] Fichier PHP de main_page lancé");

if (empty($_SESSION['count'])) {
   $_SESSION['count'] = 1;
} else {
   $_SESSION['count']++;
}
?>
<p>
 Bonjour <?php echo $_SESSION['username']; ?>, vous avez vu cette page <?php echo $_SESSION['count']; ?> fois.
</p>
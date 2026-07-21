<?php echo "executing get_file.php"; 

$uploaddir = './data/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['tmp_name']);

echo '<pre>';
echo 'uploadfile: ' . $uploadfile;
if (move_uploaded_file($_FILES['userfile']['name'], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé
           avec succès. Voici plus d'informations :\n";
} else {
    echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
}

echo 'Voici quelques informations de débogage :';
print_r($_FILES);
echo '</pre>';

?>




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_naissance = $_POST["date_naissance"];
    $sexe = $_POST["sexe"];
    $classe = $_POST["classe"];
    // Récupérer les autres données ici (e-mail, numéro de téléphone, etc.)

    // Traitement des données (vous pouvez les stocker dans une base de données ou un fichier CSV)
    
    // Afficher un message de confirmation
    echo "Inscription réussie pour $prenom $nom.";
} else {
    echo "Accès non autorisé.";
}
?>



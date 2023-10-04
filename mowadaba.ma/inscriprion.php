<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_naissance = $_POST["date_naissance"];
   
    
  
    echo "Inscription réussie pour $prenom $nom.";
} else {
    echo "Accès non autorisé.";
}
?>



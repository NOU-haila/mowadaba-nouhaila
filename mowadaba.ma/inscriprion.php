<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_naissance = $_POST["date_naissance"];
    $email=$_post["email"];
    $con = new mysqli("localhost","root","","mowadaba.ma");
   

   
    if($con->connect_error)
die("error connetion");
  
    echo "Inscription réussie pour $prenom $nom.";
} else {
    echo "Accès non autorisé.";
}




    

   
?>



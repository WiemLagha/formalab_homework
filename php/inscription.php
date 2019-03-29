<?php
$nom=$_GET['nom'];
echo "nom: $nom";

$prenom=$_GET['prenom'];
echo "prenom: $prenom";

$tel=$_GET['tel'];
echo "telephone: ".$tel;

$sexe=$_GET['sexe'];
echo "sexe:". $sexe;

$email=$_GET['email'];
echo "email: ". $email;

$date=$_GET['date'];
echo "date: ". $date;

$nat=$_GET['nat'];
echo "nationalié: ". $nat;

$interet=$_GET['interet'];
echo "interet: ". $interet;

$mdp=$_GET['password'];
echo "mot de passe: ".$mdp;

$mdpC=$_GET['passwordC'];
echo "confirmation mot de passe: ". $mdp;
?>
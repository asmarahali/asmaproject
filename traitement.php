<?php

$servername = "localhost";
$username = "root";
$password = ""; 
try {
    $BDD = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
    $BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}

if (isset($_POST['ok'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pseudo = $_POST['pseudo'];
    $pwd = $_POST['pwd'];
 
 
$requete = $BDD->prepare("INSERT INTO users VALUES(0, :nom, :prenom, :email, :pseudo,:pwd)");
$requete->execute(
    array(
        "nom" => $nom,
        "prenom" => $prenom,
        "email" => $email,
        "pseudo" => $pseudo,
        "pwd" => $pwd
    )
);
$repence = $requete->fetchAll(PDO::FETCH_ASSOC);
var_dump($repence);
}

?>

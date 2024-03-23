<?php

$servername = "localhost1";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "nom_de_votre_base_de_donnees";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}


function commanderVoiture($nom, $email, $modele, $couleur) {
    global $conn;
    $sql = "INSERT INTO commandes (nom_client, email_client, modele_voiture, couleur_voiture) VALUES ('$nom', '$email', '$modele', '$couleur')";

    if ($conn->query($sql) === TRUE) {
        echo "Commande enregistrée avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}


$nom_client = "Jean Dupon";
$email_client = "jean.dupont@example.com";
$modele_voiture = "Voiture modèle X";
$couleur_voiture = "Bleu";

commanderVoiture($nom_client, $email_client, $modele_voiture, $couleur_voiture);


$conn->close();
?>
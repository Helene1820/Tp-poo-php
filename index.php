<?php

require_once "classes/Client.php";
require_once "classes/Employe.php";
require_once "classes/Administrateur.php";

function afficherUtilisateur(Affichable $u) {
    $u->afficher();
}

$client = new Client(1, "Awa", "awa@mail.com", "awa01", "1234", "premium");
$employe = new Employe(2, "Moussa", "moussa@mail.com", "moussa01", "abcd", 250000);
$admin = new Administrateur(3, "Fatou", "fatou@mail.com", "fatou01", "admin");

echo "<h2>Affichage</h2>";
$client->afficher();
$employe->afficher();
$admin->afficher();

echo "<h2>Connexion</h2>";
echo $client->seConnecter() . "<br>";
echo $employe->seConnecter() . "<br>";
echo $admin->seConnecter() . "<br>";

echo "<h2>Réduction Client</h2>";
echo "Réduction : " . $client->calculerReduction(100000) . " FCFA<br>";

echo "<h2>Salaire Annuel Employé</h2>";
echo "Salaire annuel : " . $employe->calculerSalaireAnnuel() . " FCFA<br>";

echo "<h2>Administrateur</h2>";
echo $admin->supprimerUtilisateur() . "<br>";

echo "<h2>Polymorphisme</h2>";
afficherUtilisateur($client);
afficherUtilisateur($employe);
afficherUtilisateur($admin);

echo "<h2>Nombre total</h2>";
echo Utilisateur::afficherNombre();
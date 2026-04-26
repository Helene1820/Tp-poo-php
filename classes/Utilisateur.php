<?php

require_once "Personne.php";
require_once "Authentifiable.php";
require_once "Affichable.php";

abstract class Utilisateur extends Personne implements Authentifiable, Affichable {
    protected $login;
    protected $motDePasse;
    protected static $nombreUtilisateurs = 0;

    public function __construct($id, $nom, $email, $login, $motDePasse) {
        parent::__construct($id, $nom, $email);
        $this->login = $login;
        $this->motDePasse = $motDePasse;
        self::$nombreUtilisateurs++;
    }

    public function seConnecter() {
        return $this->getNom() . " est connecté.";
    }

    public static function afficherNombre() {
        return "Nombre total d'utilisateurs : " . self::$nombreUtilisateurs;
    }

    abstract public function afficherRole();
}
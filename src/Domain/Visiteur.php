<?php

namespace ppePHP\Domain;

class Visiteur 
{

    private $id;

    private $type;

    private $nom;

    private $prenom;

    private $login;

    private $motdepasse;

    private $adresse;

    private $codepostal;

    private $ville;

    private $dateEmbauche;


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }


    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }


    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }


    public function getMotdepasse() {
        return $this->motdepasse;
    }

    public function setMotdepasse($motdepasse) {
        $this->motdepasse = $motdepasse;
    }


    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }


    public function getCodepostal() {
        return $this->codepostal;
    }

    public function setCodepostal($codepostal) {
        $this->codepostal = $codepostal;
    }

    public function getVille() {
        return $this->ville;
    }

    public function setVille($ville) {
        $this->ville = $ville;
    }

    public function getDateEmbauche() {
        return $this->dateEmbauche;
    }

    public function setDateEmbauche($dateEmbauche) {
        $this->dateEmbauche = $dateEmbauche;
    }
}

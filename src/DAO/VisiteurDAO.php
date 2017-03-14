<?php

namespace ppePHP\DAO;

use Doctrine\DBAL\Connection;
use ppePHP\Domain\Visiteur;

class VisiteurDAO 
{

    private $db;

    public function __construct(Connection $db){
        $this->db = $db;
    }

    public function findAll() {
        $sql = "select * from visiteur order by id desc";
        $result = $this->db->fetchAll($sql);
        
        $visiteurs = array();
        foreach ($result as $row) {
            $visiteurId = $row['id'];
            $visiteurs[$visiteurId] = $this->buildVisiteur($row);
        }
        return $visiteurs;
    }


    private function buildVisiteur(array $row){
        $visiteur = new Visiteur();
        $visiteur->setId($row['id']);
        $visiteur->setType($row['type']);
        $visiteur->setNom($row['nom']);
        $visiteur->setPrenom($row['prenom']);
        $visiteur->setLogin($row['login']);
        $visiteur->setMotdepasse($row['motdepasse']);
        $visiteur->setAdresse($row['adresse']);
        $visiteur->setCodepostal($row['codepostal']);
        $visiteur->setVille($row['ville']);
        $visiteur->setDateEmbauche($row['dateEmbauche']);
        return $visiteur;
    }
}

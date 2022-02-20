<?php

declare(strict_types=1);


class Competences
{

    private  $id_competence;

    private  $identifiant;

    private  $nom;



    /**
     * Default constructor
     */
    public function __construct($id_competence,$identifiant,$nom)
    {
        $this->_id_competence=$id_competence;
        $this->_identifiant=$identifiant;
        $this->_nom=$nom;
        //$this->_detail=$detail;
    }


    public function getid_competence(){ return $this->_id_competence;}
    public function getidentifiant(){ return $this->_identifiant;}
    public function getnom(){ return $this->_nom;}


    public function setid_competence(int $newid_competence)
    { 
        $this->_id_competences=$newid_competence;
    }
    public function setidentifiant(string $newidentifiant)
    { 
        $this->_identifiant=$newidentifiant;
    }
    public function setnom(string $newnom)
    { 
        $this->_nom=$newnom;
    }
    

    

}

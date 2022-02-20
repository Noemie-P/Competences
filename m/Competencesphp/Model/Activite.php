<?php

declare(strict_types=1);


class Activite
{

    private  $id_activite;

    private  $identifiant;

    private  $nom;



    /**
     * Default constructor
     */
    public function __construct($id_activite,$identifiant,$nom)
    {
        $this->_id_activite=$id_activite;
        $this->_identifiant=$identifiant;
        $this->_nom=$nom;
    }

    public function getid_activite(){ return $this->_id_activite;}
    public function getidentifiant(){ return $this->_identifiant;}
    public function getnom(){ return $this->_nom;}


    public function setid_activite(int $newid_activite)
    { 
        $this->_id_activite=$newid_activite;
    }
    public function setidentifiant(int $newid_activite)
    { 
        $this->_identifiant=$newidentifiant;
    }
    public function setnom(string $newnom)
    { 
        $this->_nom=$newnom;
    }

}

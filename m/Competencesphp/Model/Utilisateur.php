<?php

declare(strict_types=1);


class Utilisateur
{
    private  $id_utilisateur;

    private  $identifiant;

    private  $nom;

    private  $prenom;

    private  $mdp;

    private  $type_de_compte;

    private  $page;




    /**
     * Default constructor
     */
    public function __construct($id_utilisateur,$identifiant,$nom,$prenom,$mdp,$type_de_compte,$page)
  {
    $this->_id_utilisateur=$id_utilisateur;
    $this->_identifiant=$identifiant;
    $this->_nom=$nom;
    $this->_prenom=$prenom;
    $this->_mdp=$mdp;
    $this->_type_de_compte=$type_de_compte;
    $this->_page=$page;
  }

  public function getid_utilisateur(){ return $this->_id_utilisateur;}
  public function getidentifiant(){ return $this->_identifiant;}
  public function getnom(){ return $this->_nom;}
  public function getprenom(){ return $this->_prenom;}
  public function getmdp(){ return $this->_mdp;}
  public function gettype_de_compte(){ return $this->_type_de_compte;}
  public function getpage(){ return $this->_page;}

  public function setid(string $newid_utilisateur)
  { 
    $this->_id_utilisateur=$newid_utilisateur;
  }
  public function setidentifiant(string $newidentifiant)
  { 
    $this->_identifiant=$newidentifiant;
  }
  public function setnom(string $newnom)
  { 
    $this->_nom=$newnom;
  }
  public function setprenom(string $newprenom)
  { 
    $this->_prenom=$newprenom;
  }
  public function setmdp(string $newmdp)
  { 
    $this->_mdp=$newmdp;
  }
  public function settype_de_compte(string $newtypecpt)
  { 
    $this->_type_de_compte=$newtypecpt;
  }
  public function setpage(string $newpage)
  { 
    $this->_page=$newpage;
  }

}

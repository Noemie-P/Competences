<?php

declare(strict_types=1);


class Competence_visee 
{

    private  $id_competence_visee;

    private  $detail;

    private  $id_realisation;

    private  $id_competence;


    /**
     * Default constructor
     */
    public function __construct($id_competence_visee,$detail,$id_realisation,$id_competence)
    {
        $this->_id_competence_visee=$id_competence_visee;
        $this->_detail=$detail;
        $this->_id_realisation=$id_realisation;
        $this->_id_competence=$id_competence;
    }

    public function getid_competence_visee(){ return $this->_id_competence_visee;}
    public function getdetail(){ return $this->_detail;}
    public function getid_realisation(){ return $this->_id_realisation;}
    public function getid_competence(){ return $this->_id_competence;}


    public function setid_competence_visee(int $newid_competence_visee)
    { 
        $this->_id_competence_visee=$newid_competence_visee;
    }
    public function setdetail(string $newdetail)
    { 
        $this->_detail=$newdetail;
    }
    public function setid_realisation(string $newid_realisation)
    { 
        $this->_id_realisation=$newid_realisation;
    }
    public function setid_competence(string $newid_competence)
    { 
        $this->_id_competence=$newid_competence;
    }
}
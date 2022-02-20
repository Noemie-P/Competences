<?php

declare(strict_types=1);


class Lien
{

    private  $id_liens;

    private  $URI;

    private  $detail;

    private $id_realisation;


    /**
     * Default constructor
     */
    public function __construct($id_liens,$URI,$detail, $id_realisation)
    {
        $this->_id_liens=$id_liens;
        $this->_URI=$URI;
        $this->_detail=$detail;
        $this->_id_realisation=$id_realisation;
    }

    public function getid_liens(){ return $this->_id_liens;}
    public function getURI(){ return $this->_URI;}
    public function getdetail(){ return $this->_detail;}
    public function getid_realisation(){ return $this->_id_realisation;}


    public function setid_liens(int $newid_liens)
    { 
        $this->_id_liens=$newid_liens;
    }
    public function setURI(string $newURI)
    { 
        $this->_URI=$newURI;
    }
    public function setdetails(string $newdetail)
    { 
        $this->_detail=$newdetail;
    }
    public function setid_realisation(string $newid_realisation)
    { 
        $this->_id_realisation=$newis_realisation;
    }





}

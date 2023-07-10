<?php

class Hotel{
    private string $_nom;
    private string $_adresse;
    private string $_cpVille;
    private int $_nbChambre;

    public function __construct(string $nom, string $adresse, string $cpVille, int $nrChambre){
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_cpVille = $cpVille;
        $this->_nbChambre = $nbChambre;
    }

    public function getNom(){
        return $this->_nom;
    }
    public function getAdresse(){
        return $this->_adresse;
    }
    public function getCpVille(){
        return $this->_cpVille;
    }
    public function getNbChambre(){
        return $this->_nbChambre;
    }
    public function setNom($nom){
        $this->_nom = $nom;
    }
    public function setAdresse($adresse){
        $this->_adresse = $adresse;
    }
    public function setCpVille($cpVille){
        $this->_cpVille = $cpVille;
    }
    public function setNbChambre($nbChambre){
        $this->_nbChambre = $nbChambre;
    }
    public function __toString(){
        $result = "$this->_nom";
        return $result;
    }
}
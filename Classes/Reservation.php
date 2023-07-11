<?php
class Reservation{
    private DateTime $_debut;
    private DateTime $_fin;

    public function __construct(string $debut, string $fin){
        $this->_debut = new DateTime ($debut);
        $this->_fin = new DateTime ($fin);
    }

    public function getDebut(){
        return $this->_debut->format('d-m-Y');
    }
    public function getFin(){
        return $this->_fin->format('d-m-Y');
    }
    public function setDebut($debut){
        $this->_debut = new DateTime($debut);
    }
    public function setFin($fin){
        $this->_fin = new DateTime($fin);
    }
}
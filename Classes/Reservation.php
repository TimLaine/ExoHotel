<?php
class Reservation{
    private DateTime $_debut;
    private DateTime $_fin;
    private Client $_client;
    private Chambre $_chambre;

    public function __construct(string $debut, string $fin, Client $client, Chambre $chambre){
        $this->_debut = new DateTime ($debut);
        $this->_fin = new DateTime ($fin);
        $this->_client = $client;
        $this->_chambre = $chambre;
    }

    public function getDebut(){
        return $this->_debut->format('d-m-Y');
    }
    public function getFin(){
        return $this->_fin->format('d-m-Y');
    }
    public function getCLient(){
        return $this->_client;
    }
    public function getChambre(){
        return $this->_chambre;
    }
    public function setDebut($debut){
        $this->_debut = new DateTime($debut);
    }
    public function setFin($fin){
        $this->_fin = new DateTime($fin);
    }
    public function setClient($client){
        $this->_client = $client;
    }
    public function setChambre($chambre){
        $this->_chambre = $chambre;
    }
}
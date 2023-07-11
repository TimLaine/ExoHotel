<?php
class Reservation{
    private DateTime $_debut;
    private DateTime $_fin;
    private Client $_client;
    private Chambre $_chambre;
    // private Hotel $_hotel;

    public function __construct(string $debut, string $fin, Client $client, Chambre $chambre){
        $this->_debut = new DateTime ($debut);
        $this->_fin = new DateTime ($fin);
        $this->_client = $client;
        $this->_chambre = $chambre;
        // $this->_hotel = $hotel;
        $this->_chambre->resaChambre();
        $this->_client->reservation($this);
    }

    public function getDebut(){
        return $this->_debut->format('d-m-Y');
    }
    public function getFin(){
        return $this->_fin->format('d-m-Y');
    }
    public function getClient(){
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
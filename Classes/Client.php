<?php
class Client{
    private string $_nom;
    private string $_prenom;
    private DateTime $_birth;
    private array $_reservations;

    public function __construct(string $nom, string $prenom, string $birth){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_birth = new DateTime($birth);
        $this->_reservations = [];
    }

    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getBirth(){
        return $this->_birth;
    }
    public function setNom($nom){
        $this->_nom = $nom;
    }
    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }
    public function setBirth($birth){
        $this->_birth = new DateTime($birth);
    }
    public function __toString(){
        $result = $this->_prenom. " " . mb_strtoupper($this->_nom);
        return $result;
    }
    public function reservation($resa){
        $this->_reservations [] = $resa;
    }
    public function totalPrix(){
        $totalprix = 0;
        foreach($this->_reservations as $reservation){
            $totalprix = $totalprix + $reservation->getChambre()->getPrix();
        }
        return $totalprix;
    }
    public function getInfosResa(){
        $totalprix = 0;
        $result = "<h1>Réservations de $this : </h1>";
        $result .= count($this->_reservations). " RESERVATIONS <br>";
        foreach($this->_reservations as $reservation){
            $result .= "<b>".$reservation->getChambre()->getHotel()."</b> / Chambre : ".$reservation->getChambre()->getNum()."(".$reservation->getChambre()->getLit()." lits - ".$reservation->getChambre()->getPrix(). " €"; 
            if($reservation->getChambre()->getWifi()){
                $result .= " Wifi : oui)";
            } else {
                $result .= " Wifi : non)";
            }
            $result .= " du ".$reservation->getDebut(). " au ". $reservation->getFin(). "<br>";
        }
        $result .= "Total : ".$this->totalPrix()." €";
        return $result;
    }
}
<?php
class Chambre{
    private int $_num;
    private float $_prix;
    private bool $_wifi;
    private bool $_dispo;
    private Hotel $_hotel;
    private int $_lit;

    public function __construct(int $num, int $lit, float $prix, bool $wifi,$hotel){
        $this->_num = $num;
        $this->_lit = $lit;
        $this->_prix = $prix;
        $this->_wifi = $wifi;
        $this->_dispo = 1;
        $this->_hotel = $hotel;
        $this->_hotel->ajoutHotel($this);
    }

    public function getNum(){
        return $this->_num;
    }
    public function getPrix(){
        return $this->_prix;
    }
    public function getWifi(){
        return $this->_wifi;
    }
    public function getDispo(){
        return $this->_dispo;
    }
    public function setNum($num){
        $this->_num = $num;
    }
    public function setPrix($prix){
        $this->_prix = $prix;
    }
    public function setWifi($wifi){
        $this->_wifi = $wifi;
    }
    public function setDispo($dispo){
        $this->_dispo = $dispo;
    }
    public function __toString(){
        $result = "Chambre n°$this->_num";
        return $result;
    }
    public function resaChambre(){
        if($this->_dispo){
            $this->_hotel->reservationChambre();
            $this->_dispo = !$this->_dispo;
        } else {
            echo "Cette chambre a déjà été réservée.";
        }
    }
}
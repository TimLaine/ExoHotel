<?php
class Chambre{
    private int $_num;
    private float $_prix;
    private bool $_wifi;
    private bool $_dispo;

    public function __construct(int $num, float $prix, bool $wifi){
        $this->_num = $num;
        $this->_prix = $prix;
        $this->_wifi = $wifi;
        $this->_dispo = $dispo;
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
}
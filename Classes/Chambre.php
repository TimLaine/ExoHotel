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
}
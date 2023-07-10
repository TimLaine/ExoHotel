<?php
class Reservation{
    private DateTime $_debut;
    private DateTime $_fin;

    public function __construct(string $debut, string $fin){
        $this->_debut = new DateTime ($debut)
        $this->_fin = new DateTime ($fin)
    }
}
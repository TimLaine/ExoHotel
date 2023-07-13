<?php

class Hotel{
    private string $_nom;
    private string $_adresse;
    private string $_cp;
    private string $_ville;
    private array $_chambres;

    public function __construct(string $nom, string $adresse, string $cp, string $ville){
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_cp = $cp;
        $this->_ville = $ville;
        $this->_chambres = [];
    }

    public function getNom(){
        return $this->_nom;
    }
    public function getAdresse(){
        return $this->_adresse;
    }
    public function getCp(){
        return $this->_cp;
    }
    public function getVille(){
        return $this->_ville;
    }
    public function getNbChambreActuel(){
        return $this->getNbChambre();
    }
    public function setNom($nom){
        $this->_nom = $nom;
    }
    public function setAdresse($adresse){
        $this->_adresse = $adresse;
    }
    public function setCp($cp){
        $this->_cp = $cp;
    }
    public function setVille($ville){
        $this->_Ville = $ville;
    }
    public function __toString(){
        $result = "$this->_nom";
        return $result;
    }
    public function infoChambres(){
        $result = "";
        foreach($this->_chambres as $chambre){
            $result .= $chambre."<br>";
        }
        return $result;
    }
    public function ajoutHotel($chambre){
        $this->_chambres [] = $chambre;
    }
    public function nbChambres(){
        return count($this->_chambres);
    }
    public function nbResaChambres(){
        $result = 0;
        foreach($this->_chambres as $chambre){
            if(!$chambre->getDispo()){
                $result += 1;
            }
        }
        return $result;
    }
    public function chambresDispo(){
        $result = $this->nbChambres() - $this->nbResaChambres();
        return $result;
    }
    public function getInfos(){
        $result = "<h1>$this</h1>";
        $result .= "$this->_adresse $this->_cp $this->_ville <br>";
        $result .= "Nombre de chambres : ".$this->nbChambres()." <br>";
        $result .= "Nombre de chambres réservées : ". $this->nbResaChambres(). "<br>";
        $result .= "Nombre de chambres dispo : ".$this->chambresDispo()." <br>";
        return $result;
    }
    public function getInfosResa(){
        $result = "Réservations de l'hôtel $this";
        $result .= "";
    }
}
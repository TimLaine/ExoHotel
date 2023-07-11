<?php

class Hotel{
    private string $_nom;
    private string $_adresse;
    private string $_cp;
    private string $_ville;
    private array $_chambres;

    public function __construct(string $nom, string $adresse, string $cp, string $ville, int $nbChambre){
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
    public function getNbChambre(){
        return count($this->_chambres)+1;
    }
    public function getNbChambreActuel(){
        return $this->_nbChambreActuel;
    }
    public function setNom($nom){
        $this->_nom = $nom;
    }
    public function setAdresse($adresse){
        $this->_adresse = $adresse;
    }
    public function setCp($cp){
        $this->_cpVille = $cp;
    }
    public function setVille($ville){
        $this->_cpVille = $ville;
    }
    public function setNbChambre($nbChambre){
        $this->_nbChambre = $nbChambre;
    }
    public function __toString(){
        $result = "$this->_nom";
        return $result;
    }
    public function ajoutHotel(Chambre $chambre){
        if(count($this->_chambres) < $this->_nbChambre){
            $this->_chambres [] = $chambre;
        } else {
            echo "Toutes les chambres de l'Hôtel ont été définies.";
        }
    }
    public function infoChambres(){
        $result = "";
        foreach($this->_chambres as $chambre){
            $result .= $chambre."<br>";
        }
        return $result;
    }
    public function reservationChambre(){
        if($this->_nbChambreActuel > 0){
            $this->_nbChambreActuel = $this->_nbChambreActuel - 1;
        } else {
            echo "Il n'y a plus de chambre libre dans l'hôtel.";
        }
    }
    public function getInfos(){
        $result = "<h1>$this</h1>";
        $result .= "$this->_adresse $this->_cp $this->_ville <br>";
        $result .= "Nombre de chambres : $this->_nbChambre <br>";
        $result .= "Nombre de chambres réservées : ". $this->_nbChambre - $this->_nbChambreActuel. "<br>";
        $result .= "Nombre de chambres dispo : $this->_nbChambreActuel <br>";
        return $result;
    }
    public function getInfosResa(){
        $result = "Réservations de l'hôtel $this";
        $result .= "";
    }
}
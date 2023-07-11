<?php
class Client{
    private string $_nom;
    private string $_prenom;
    private DateTime $_birth;

    public function __construct(string $nom, string $prenom, string $birth){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_birth = new DateTime($birth);
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
        $result = "$this->_prenom". " " ."$this->_nom";
        return $result;
    }
}
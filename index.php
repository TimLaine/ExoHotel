<?php
spl_autoload_register(function ($class_name) {
    include 'Classes/'. $class_name . '.php';
});

$hilton = new Hotel("Hilton **** Strasbourg","1 Avenue Herrenschmidt","67000 Strasbourg",30);
$client1 = new Client("Lainé","Timothée","23-03-1996");
$chambre413 = new Chambre(413,200.00,1);
echo $client1->getBirth()->format('d m Y');
echo "<br>";
var_dump($chambre413->getWifi());
echo "<br>";
echo $chambre413->setWifi(0);
echo "<br>";
var_dump($chambre413->getWifi());
echo "<br>";
var_dump($chambre413->getDispo());
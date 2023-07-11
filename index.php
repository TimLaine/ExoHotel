<?php
spl_autoload_register(function ($class_name) {
    include 'Classes/'. $class_name . '.php';
});

$hilton = new Hotel("Hilton **** Strasbourg","1 Avenue Herrenschmidt","67000 Strasbourg",30);
$client1 = new Client("Lainé","Timothée","23-03-1996");
$chambre01 = new Chambre(01,200.00,1,$hilton);
$chambre02 = new Chambre(02,200.00,1,$hilton);
$chambre03 = new Chambre(03,200.00,1,$hilton);
echo $client1->getBirth()->format('d m Y');
echo "<br>";
var_dump($chambre413->getWifi());
echo "<br>";
echo $chambre413->setWifi(0);
echo "<br>";
var_dump($chambre413->getWifi());
echo "<br>";
var_dump($chambre413->getDispo());
echo "<br>". $chambre413;
echo "<br>";
echo $hilton->infoChambres();
<?php
spl_autoload_register(function ($class_name) {
    include 'Classes/'. $class_name . '.php';
});

$hilton = new Hotel("Hilton **** Strasbourg","1 Avenue Herrenschmidt","67000", "Strasbourg",3);
$client1 = new Client("Lainé","Timothée","23-03-1996");
$chambre01 = new Chambre(01,2,200.00,1,$hilton);
$chambre02 = new Chambre(02,2,200.00,1,$hilton);
$chambre03 = new Chambre(03,2,200.00,1,$hilton);
$chambre04 = new Chambre(04,2,200.00,1,$hilton);
// $reservation1 = new Reservation("01-02-2022","01-03-2022",$client1,$chambre01);
$reservation2 = new Reservation("01-02-2022","01-03-2022",$client1,$chambre02);
echo "<br>";
$reservation2bis = new Reservation("01-02-2022","01-03-2022",$client1,$chambre02);
$reservation3 = new Reservation("01-02-2022","01-03-2022",$client1,$chambre03);
$reservation4 = new Reservation("01-02-2022","01-03-2022",$client1,$chambre04);
echo "<br>";
echo $hilton->getInfos();
echo "<br>";
echo $hilton->infoChambres();
echo "<br>". $client1->getInfosResa();
echo "<br>". $chambre01->getDispo();
echo "<br>". $chambre02->getDispo();
echo "<br>". $chambre03->getDispo();
echo "<br>". $chambre04->getDispo();
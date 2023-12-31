<link rel="stylesheet" href="CSS/style.css">

<?php
spl_autoload_register(function ($class_name) {
    include 'Classes/'. $class_name . '.php';
});

$hilton = new Hotel("Hilton **** Strasbourg","1 Avenue Herrenschmidt","67000", "Strasbourg",3);
$client1 = new Client("Lainé","Timothée","23-03-1996");
$client2 = new Client("Blondel","Perrine","11-12-1996");
$chambre01 = new Chambre(01,2,200.00,1,$hilton);
$chambre02 = new Chambre(02,2,200.00,1,$hilton);
$chambre03 = new Chambre(03,2,200.00,1,$hilton);
$chambre04 = new Chambre(04,2,200.00,1,$hilton);
$reservation1 = new Reservation("01-02-2022","01-03-2022",$client2,$chambre01);
// $reservation2 = new Reservation("01-02-2022","01-03-2022",$client1,$chambre02);
// $reservation2bis = new Reservation("01-02-2022","01-03-2022",$client1,$chambre02);
$reservation3 = new Reservation("01-02-2022","01-03-2022",$client1,$chambre03);
$reservation4 = new Reservation("01-02-2022","01-03-2022",$client1,$chambre04);
echo $hilton->showInfos();
echo "<br><br><br><br><br>";
echo $hilton->showInfosResa();
echo "<br><br><br><br><br>". $client1->showInfosResa();
echo "<br><br><br><br><br>". $client2->showInfosResa();
echo "<br><br><br><br><br>". $hilton->infoChambres();
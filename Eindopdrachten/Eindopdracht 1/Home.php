<?php
include 'Autoload.php';

// Verplicht Straatnaam=STRING Huisnummer=INT Plaats=STRING
$Huis = new Huis("Huislaan", 12, "Amsterdam");
// Kamers=INT Toiletten=INT Verwarming=BOOL Verwarmingsoort=STRING 
// grond=INT Woz=INT
$Huis->setKamers(2);
$Huis->setToiletten(2);
$Huis->setVerwarming(1);
$Huis->setVerwarming_soort("gas");
$Huis->setGrond(300);
$Huis->setWOZ(300000);

echo $Huis->getHuis();
?>
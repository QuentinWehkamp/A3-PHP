<?php
include 'Autoload.php';

// Verplicht Straatnaam=STRING Huisnummer=INT Plaats=STRING
$huis = new Huis("Huislaan", 12, "Amsterdam");
// Kamers=INT Toiletten=INT Verwarming=BOOL Verwarmingsoort=STRING 
// grond=INT Woz=INT
$huis->setKamers(1);
$huis->setToiletten(2);
$huis->setVerwarming(1);
$huis->setVerwarming_soort("gas");
$huis->setGrond(300);
$huis->setWOZ(400);

echo "Plaats: ", $huis->getPlaats(), "</br>";
echo "Straat: " ,$huis->getStraatnaam(), "</br>";
echo "Huisnummer: " ,$huis->getHuisnummer(), "</br>";
echo "Kamers: " ,$huis->getKamers(), "</br>";
echo "Toiletten: " ,$huis->getToiletten(), "</br>";
echo "Verwarming: " ,$huis->getVerwarming(), "</br>";
echo "Verwarming soort: ", $huis->getVerwarmingsoort(), "</br>"; 
echo "Grond in m²: ", $huis->getGrond(), "</br>" ;
echo "WOZ in euro: ", $huis->getWOZ(), "</br>";
echo "WOZ Belasting: ", $huis->belasting()->wozBelasting(), "</br>";
echo "Kamer Belasting: ", $huis->belasting()->kamerBelasting(), "</br>";
echo "Plaats Belasting: ", $huis->belasting()->plaatsBelasting(), "</br>";
echo "Totaal: ", $huis->belasting()->getBelasting();
?>
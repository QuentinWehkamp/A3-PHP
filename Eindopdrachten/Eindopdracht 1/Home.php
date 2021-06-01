<?php
include 'Autoload.php';

// Verplicht Straatnaam=STRING Huisnummer=INT Plaats=STRING
$huis = new Huis("Huislaan", 12, "Amsterdam");
// Kamers=INT Toiletten=INT Verwarming=BOOL Verwarmingsoort=STRING 
// grond=INT Woz=INT
$huis->setKamers(2);
$huis->setToiletten(2);
$huis->setVerwarming(1);
$huis->setVerwarming_soort("gas");
$huis->setGrond(300);
$huis->setWOZ(300000);

echo $huis->getHuis(), "</br>";

echo $Belasting->wozBelasting($woz);
if (isset($woz)){
    echo "<p1>WOZ Belasting: </p1>";
    $Belasting->wozBelasting();
}
if (isset($Kamers)){
    $Belasting->kamerBelasting();
}
if (isset($Plaats)){
    $Belasting->plaatsBelasting();
}
?>
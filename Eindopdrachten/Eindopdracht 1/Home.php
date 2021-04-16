<?php
include 'Autoload.php';

// Kamers=INT Toiletten=INT Verwarming=BOOL Verwarmingsoort=STRING Straatnaam=STRING
// Huisnummer=INT Plaats=STRING Grond=INT Woz=INT
$Huis = new Huis(2, 2, 1, 'gas', 'Huislaan', 12, 'Amsterdam', 300, 300.000);

echo $Huis->getHuis();
?>
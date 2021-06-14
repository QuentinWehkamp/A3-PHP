<?php
class Belasting
{
    // Bel == belasting
    private int $wozBel;
    private int $kamerBel;
    private int $plaatsBel;
    private int $totaalBel;

    public function wozBelasting($woz, $wozBel)
    {
        if ($woz < 100000) {
            $wozBel == 600;
        } elseif ($woz >= 100000 && $woz <= 200000) {
            $wozBel == 2000;
        } elseif ($woz > 200000) {
            $wozBel == 6000;
        }
        return $wozBel;
    }

    public function kamerBelasting($Kamers, $kamerBel)
    {
        if ($Kamers == 1) {
            $kamerBel == 100;
        } elseif ($Kamers == 2) {
            $kamerBel == 300;
        } elseif ($Kamers >= 3) {
            $kamerBel == 800;
        }
    }

    public function plaatsBelasting($Plaats, $plaatsBel)
    {
        if ($Plaats == "Amsterdam" || $Plaats == "Rotterdam" || $Plaats == "Groningen") {
            $plaatsBel == 1000;
        } else {
            $plaatsBel == 0;
        }

    }
    public function getBelasting($wozBel, $kamerBel, $plaatsBel){
        $totaalBel = $wozBel + $kamerBel + $plaatsBel;
    }
}
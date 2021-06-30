<?php
class Belasting
{
    private $huis;

    public function __construct($huis)
    {
        $this->huis = $huis;
    }
    public function wozBelasting()
    {
        $wozBel = 0;
        if ($this->huis->getWoz() < 100000) {
            $wozBel = 600;
        } elseif ($this->huis->getWoz() >= 100000 && $this->huis->getWoz() <= 200000) {
            $wozBel = 2000;
        } elseif ($this->huis->getWoz() > 200000) {
            $wozBel = 6000;
        }
        return $wozBel;
    }

    public function kamerBelasting()
    {
        $kamerBel = 0;
        if ($this->huis->getKamers() == 1) {
            $kamerBel = 100;
        } elseif ($this->huis->getKamers() == 2) {
            $kamerBel = 300;
        } elseif ($this->huis->getKamers() >= 3) {
            $kamerBel = 800;
        }
        return $kamerBel;
    }

    public function plaatsBelasting()
    {
        $plaatsBel = 0;
        if ($this->huis->getPlaats() == "Amsterdam" || $this->huis->getPlaats() == "Rotterdam" || $this->huis->getPlaats() == "Groningen") {
            $plaatsBel = 1000;
        } else {
            $plaatsBel = 0;
        }
        return $plaatsBel;
    }
    public function getBelasting()
    {
       return $this->wozBelasting() + $this->kamerBelasting() + $this->plaatsBelasting();
    }
}

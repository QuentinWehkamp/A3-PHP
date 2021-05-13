<?php
class Huis {
    private int $Kamers;
    private int $Toiletten;
    private bool $Verwarming;
    private string $Verwarming_soort;
    private string $Straatnaam;
    private int $Huisnummer;
    private string $Plaats;
    private int $grond;
    private int $woz;

    public function __construct($Straatnaam, $Huisnummer, $Plaats)
    {
        $this->Straatnaam = $Straatnaam;
        $this->Huisnummer = $Huisnummer;
        $this->Plaats = $Plaats;
    }

    public function setKamers($Kamers){
        $this->Kamers = $Kamers;
    }

    public function setToiletten($Toiletten){
        $this->Toiletten = $Toiletten;
    }

    public function setVerwarming($Verwarming){
        $this->Verwarming = $Verwarming;
    }

    public function setVerwarming_soort($Verwarming_soort){
        $this->Verwarming_soort = $Verwarming_soort;
    }

    public function setGrond($grond){
        $this->grond = $grond;
    }

    public function setWOZ($woz){
        $this->woz = $woz;
    }

    public function getHuis(){
        return array($this->Kamers, $this->Toiletten, $this->Verwarming, $this->Verwarming_soort, $this->Straatnaam, $this->Huisnummer, $this->Plaats, $this->grond, $this->woz);
    }
}
?>
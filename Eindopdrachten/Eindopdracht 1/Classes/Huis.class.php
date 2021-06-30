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
    private $belasting;

    private $elements = array("Kamers", "Toiletten", "Verwarming", "Verwarming_soort", "Straatnaam", "Huisnummer", "Plaats", "grond", "woz");

    public function __construct($Straatnaam, $Huisnummer, $Plaats)
    {
        $this->Straatnaam = $Straatnaam;
        $this->Huisnummer = $Huisnummer;
        $this->Plaats = $Plaats;
        $this->belasting = new belasting($this);
    }

    public function belasting(){
        return $this->belasting;
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

    public function getKamers(){
        return $this->Kamers;
    }
    public function getToiletten(){
        return $this->Toiletten;
    }
    public function getVerwarming(){
        return $this->Verwarming;
    }
    public function getVerwarmingsoort(){
        return $this->Verwarming_soort;
    }
    public function getPlaats(){
        return $this->Plaats;
    }
    public function getStraatnaam(){
        return $this->Straatnaam;
    }
    public function getHuisnummer(){
        return $this->Huisnummer;
    }
    public function getGrond(){
        return $this->grond;
    }
    public function getWoz(){
        return $this->woz;
    }
}

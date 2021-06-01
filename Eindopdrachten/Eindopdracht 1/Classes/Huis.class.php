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

    private $elements = array("Kamers", "Toiletten", "Verwarming", "Verwarming_soort", "Straatnaam", "Huisnummer", "Plaats", "grond", "woz");

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
        $output = "";
        for($e=0; $e<9; $e++){
            if(isset($this->elements[$e])){
                $output .= $this->{$this->elements[$e]};
            }
        }
        return $output;
    }
}

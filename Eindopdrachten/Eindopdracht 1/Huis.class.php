<?php
class Huis {
    private $Kamers;
    private $Toiletten;
    private $Verwarming;
    private $Verwarming_soort;
    private $Straatnaam;
    private $Huisnummer;
    private $Plaats;
    private $grond;
    private $woz;

    public function setKamers($Kamers){
        if(is_numeric($this)){
            $this->Kamers = $Kamers;
        }
    }
    public function setToiletten($Toiletten){
        if(is_numeric($this)){
            $this->Toiletten = $Toiletten;
        }
    }
    // constructor
}
?>
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

    public function __construct($Kamers, $Toiletten, $Verwarming, $Verwarming_soort, $Straatnaam, $Huisnummer, $Plaats, $grond, $woz)
    {
        $this->Kamers = $Kamers;
        $this->Toiletten = $Toiletten;
        $this->Verwarming = $Verwarming;
        $this->Verwarming_soort = $Verwarming_soort;
        $this->Straatnaam = $Straatnaam;
        $this->Huisnummer = $Huisnummer;
        $this->Plaats = $Plaats;
        $this->grond = $grond;
        $this->woz = $woz;
    }

    public function getHuis(){
        return $this->Kamers;
        return $this->Toiletten;
        return $this->Verwarming;
        return $this->Verwarming_soort;
        return $this->Straatnaam;
        return $this->Huisnummer;
        return $this->Plaats;
        return $this->grond;
        return $this->woz;
    }
}
?>
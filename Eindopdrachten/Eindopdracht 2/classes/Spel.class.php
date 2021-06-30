<?php
class Spel
{
    private $cards=array();
    private $IMAGES=array("0.png", "1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "0.png", "1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png");
    public function __construct()
    {
        shuffle($this->IMAGES);
        for ($i=0; $i < count($this->IMAGES); $i++) { 
            $card= new Card($this->IMAGES[$i], $i);
            array_push($this->cards,$card);
        }
            // $this->shake();
    }
    private function new()
    {
        session_start();
        shuffle($this->cards);
    }

    public function shake(){
        shuffle($this->cards);
    }

    public function __toString()
    {
        $output= "";
        for ($i=0; $i < count($this->cards); $i++) { 
            $output.=$this->cards[$i];
        }
        return $output;
    }
}

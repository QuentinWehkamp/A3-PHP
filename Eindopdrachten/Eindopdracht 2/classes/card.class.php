<?php

class Card{
    private $text;
    private $id;
    public function __construct($text, $id)
    {
        $this->text=$text;
        $this->id=$id;
    }
    public function __toString()
    {
        return "<a href=\"?id=".$this->id."\"><img class=\"card\" src=\"images/".$this->text."\"></a>" ;
    }
}
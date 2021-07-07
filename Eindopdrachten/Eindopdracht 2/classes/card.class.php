<?php

class Card
{
    private $image;
    private $id;
    private $state = "closed";

    public function __construct($image, $id)
    {
        $this->image = $image;
        $this->id = $id;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function isGuessed()
    {
        $this->state = "guessed";
    }

    // veranderd de status van de kaart
    public function turn()
    {
        if ($this->state == "open") {
            $this->state = "closed";
        } else {
            $this->state = "open";
        }
    }

    // laat de kaarten zien.
    public function __toString()
    {
        switch ($this->state) {
            case "closed":
                return "<a href=\"?id=" . $this->id . "\"><img class=\"card closed\" src=\"images/square.png\"></a>";
                break;
            case "open":
                return "<img class=\"card\" src=\"images/" . $this->image . "\">";
                break;
            case "guessed":
                return "<img class=\"card guessed\" src=\"images/" . $this->image . "\">";
                break;
        }
    }
}

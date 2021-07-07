<?php
class Spel
{
    private $cards = array();
    private $IMAGES = array("0.png", "1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "0.png", "1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png");

    public function __construct()
    {
        session_start();
        $this->load();
        $this->update();
        $this->save();
    }

    // kijk of het spel al is gemaakt, als er geen sessie is word die gemaakt.
    private function load()
    {
        if (isset($_SESSION['cards']) && !isset($_GET['new'])) {
            $this->cards = $_SESSION['cards'];
        } else {
            shuffle($this->IMAGES);
            for ($i = 0; $i < count($this->IMAGES); $i++) {
                $card = new Card($this->IMAGES[$i], $i);
                array_push($this->cards, $card);
            }
        }
    }

    // slaat de sessie op.
    private function save()
    {
        $_SESSION['cards'] = $this->cards;
    }

    // opend of sluit de kaarten en kijkt of je goed hebt geraden.
    private function update()
    {
        if (isset($_GET['id'])) {
            $this->cards[$_GET['id']]->turn();
        }
        $open = array();
        for ($i = 0; $i < count($this->cards); $i++) {
            if ($this->cards[$i]->getState() == "open") {
                array_push($open, $this->cards[$i]);
            }
        }
        switch (count($open)) {
            case 2:
                if ($open[0]->getImage() == $open[1]->getImage()) {
                    $open[0]->isGuessed();
                    $open[1]->isGuessed();
                }
                break;
            case 3:
                for ($i = 0; $i < count($open); $i++) {
                    if ($open[$i] != $this->cards[$_GET['id']]) {
                        $open[$i]->turn();
                    }
                }
                break;
        }
    }

    // kijkt of je hebt gewonnen
    public function isReady(){
        $guessed = 0;
        for ($i = 0; $i < count($this->cards); $i++) {
            if ($this->cards[$i]->getState() == "guessed") {
                $guessed++;
            }
        }
        return $guessed == 16;
    }

    // laat de kaarten zien
    public function __toString()
    {
        $output = "";
        for ($i = 0; $i < count($this->cards); $i++) {
            $output .= $this->cards[$i];
        }
        return $output;
    }
}

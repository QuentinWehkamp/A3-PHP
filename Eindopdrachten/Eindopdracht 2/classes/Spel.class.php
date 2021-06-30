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

    private function save()
    {
        $_SESSION['cards'] = $this->cards;
    }

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
                $guessed = array();
                if ($open[0]->getImage() == $open[1]->getImage()) {
                    $open[0]->isGuessed();
                    $open[1]->isGuessed();
                    for ($i = 0; $i < count($this->cards); $i++) {
                        if ($this->cards[$i]->getState() == "guessed") {
                            array_push($guessed, $this->cards[$i]);
                        }
                    }
                    if(count($guessed) == 15){
                        $this->win();
                    }
                }
                break;
            case 3:
                for ($i = 0; $i < count($open); $i++) {
                    if ($open[$i] != $this->cards[$_GET['id']]) {
                        $open[$i]->turn();
                    }
                }
        }
    }

    public function win(){
        return "Je hebt gewonnen!";
    }

    public function __toString()
    {
        $output = "";
        for ($i = 0; $i < count($this->cards); $i++) {
            $output .= $this->cards[$i];
        }
        return $output;
    }
}

<?php
class spel
{
    private array $cards = array(0, 1, 2, 3, 4, 5, 6, 7, 0, 1, 2, 3, 4, 5, 6, 7);
    function __construct()
    {
        session_start();
    }

    public function shuffle($cards){
        shuffle($cards);
        return($cards);
    }
}

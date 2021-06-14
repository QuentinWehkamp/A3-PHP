<?php
class spel
{
    // private array

    private function new($cards)
    {
        session_start();
        shuffle($cards);
        return($cards);
    }

    public function shake($cards){
        shuffle($cards);
        return($cards);
    }
}

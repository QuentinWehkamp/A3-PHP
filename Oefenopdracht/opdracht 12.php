<?php
    spl_autoload_register(function($class){
        require_once($class.'.php');
    }
); 

$user = new User('Joe ','mama ','12-11-1995');

$user->getUser();
$user->getLastname();
$user->getBirthdate();

echo $user->getUser();
echo $user->getLastname();
echo $user->getBirthdate();
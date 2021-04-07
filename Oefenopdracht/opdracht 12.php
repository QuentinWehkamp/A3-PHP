<?php
    spl_autoload_register(function($class){
        require_once($class.'.php');
    }
); 

$User = new User("");
$User->setUsername('Joe ');
$User->setLastname('mama ');
$User->setBirthdate('03-13-2012');

echo "<br>";
echo $User->getUsername();
echo $User->getLastname();
echo $User->getBirthdate();
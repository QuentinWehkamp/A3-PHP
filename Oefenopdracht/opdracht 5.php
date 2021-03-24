<?php
/* De User class */
class User {
  private $User;
  private $Lastname;
  private $Birthdate;

  public function __construct($Lastname, $Birthdate)
  {
    $this->Lastname = $Lastname;
    $this->Birthdate = $Birthdate;
  }

  public function setUser($name) {
    $this->User = $name;
  }

  public function getUser() {
    return $this->User;
  }
  
  public function getLastname() {
    return $this->Lastname;
  }

  public function getBirthdate() {
    return $this->Birthdate;
  }
}

/* Reguliere procedurele code */
$user = new User('Wehkamp ', '07-03-2002');
$user->setUser('Quentin ');

echo $user->getUser();
echo $user->getLastname();
echo $user->getBirthdate();

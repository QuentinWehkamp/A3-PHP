<?php
/* De User class */
class User {
  private $User;
  private $Lastname;
  private $Birthdate;

  public function setUser($name) {
    $this->User = $name;
  }

  public function getUser() {
    return $this->User;
  }

  public function setLastname($Lastname) {
    $this->Lastname = $Lastname;
  }

  public function getLastname() {
    return $this->Lastname;
  }

  public function setBirthdate($Birthdate) {
    $this->Birthdate = $Birthdate;
  }

  public function getBirthdate() {
    return $this->Birthdate;
  }
}

/* Reguliere procedurele code */
$user = new User();
$user->setUser('Quentin ');
$user->setLastname('Wehkamp ');
$user->setBirthdate('07-03-2002');

echo $user->getUser();
echo $user->getLastname();
echo $user->getBirthdate();
?>
<?php
/* De User class */
class User {
  private $User;
  private $Lastname;
  private $Birthdate;

  public function setUsername($name) {
    $this->User = $name;
  }

  public function getUsername() {
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
$User = new User("");
$User->setUsername('Quentin ');
$User->setLastname('Wehkamp ');
$User->setBirthdate('07-03-2002');

echo $User->getUsername();
echo $User->getLastname();
echo $User->getBirthdate();
?>
<?php
/* De User class */
class User {
  public $username;
  public $lastname;
  public $birthdate;

  public function setUsername($name) {
    $this->username = $name;
  }

  public function getUsername() {
    return $this->username;
  }

  public function setLastname($lastname) {
    $this->lastname = $lastname;
  }

  public function getLastname() {
    return $this->lastname;
  }

  public function setBirthdate($birthdate) {
    $this->birthdate = $birthdate;
  }

  public function getBirthdate() {
    return $this->birthdate;
  }
}

/* Reguliere procedurele code */
$user = new User();
$user->setUsername('Quentin ');
$user->setLastname('Wehkamp ');
$user->setBirthdate('07-03-2002');

echo $user->getUsername();
echo $user->getLastname();
echo $user->getBirthdate();
?>
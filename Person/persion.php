<?php
//Assignment 2

use Person as GlobalPerson;

class Person {
    private $name;
    private $email;

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }
}

$name1 = new Person();
$email1 = new Person();

$name1->setName('Shachin');
$email1->setEmail('shachin@gmail.com');

echo "Name : ".$name1->getName();
echo PHP_EOL;
echo "Email : ".$email1->getEmail();

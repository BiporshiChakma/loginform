<html>
    <head>

    </head>
    <body>
       
        <form action="" method="POST">
            <br>
            <br>
           <p>Assignment 01 & 03</p>
            <p>Name : <input type="text" name="name" value=""></p>
            <p>Email : <input type="text" name="email" value=""></p>
            <input type="submit" name="submit" value="Submit">
        </form>

<?php  //Assignment 01 & 03


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
if(isset($_POST['submit'])){
    $var1 = $_POST['name'];
    $var2 = $_POST['email'];
    $name1 = new Person();
$email1 = new Person();

$name1->setName($var1);
$email1->setEmail($var2);

echo "Name : ".$name1->getName();
echo PHP_EOL;
echo "Email : ".$email1->getEmail();
}




?>


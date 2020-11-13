<?php

class Acct
{
    public $name;
    public $username;
    public $email;
  
    function __construct($name, $username, $email)
    {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
    }

}

class User extends Acct
{
    function addFriend() 
    {
        echo "{$this->name}. Added a friend <br>";
    }
    function postStatus()
    {
        echo "{$this->name}. Posted a status";
    }
}

$yamete=new User('Aj', 'AJmi1225', 'ajmiraato95@gmail.com');
$yamete->addFriend();
$yamete->postStatus();

?>
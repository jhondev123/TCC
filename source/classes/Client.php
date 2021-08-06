<?php
namespace source\classes;
class Client{
    private $name;
    private $lastName;
    private  Addres $addres;

    public function __construct($name,$lastName,Addres $addres)
    {
        $this->name=$name;
        $this->lastName=$lastName;
        $this->addres=$addres;
    }
}



?>
<?php
namespace source\classes;
class Client{
    private $name;
    private $lastName;
    private  Addres $addres;
    private $cellphone;
    private $mail;
    public function __construct($name,$lastName,Addres $addres,$cellphone,$mail=null)
    {
        $this->name=$name;
        $this->lastName=$lastName;
        $this->addres=$addres;
        $this->cellphone=$cellphone;
        $this->mail=$mail;
    }
    public function conversionToString($addres)
    {
        
        return "{$this->name}{$this->lastName}{$addres}{$this->cellphone}{$this->mail}";
    }
}



?>
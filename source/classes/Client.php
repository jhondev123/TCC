<?php
namespace source\classes;

use PDOException;

require_once __DIR__."/../connection.php";
class Client{
    private $name;
    private $lastName;
    private  $addres;
    private $cellphone;
    private $mail;
    private $password;
    private $cpf;
    public function __construct($name,$lastName,$addres,$cellphone,$mail,$password,$cpf)
    {
        $this->name=$name;
        $this->lastName=$lastName;
        $this->addres=$addres;
        $this->cellphone=$cellphone;
        $this->mail=$mail;
        $this->password=$password;
        $this->cpf=$cpf;
    }
    public function conversionToString($addres)
    { 
        return "{$this->name}{$this->lastName}{$addres}{$this->cellphone}{$this->mail}";
    }
    public function saveInDataBase(){
    $conn=getCon();
    $sql = "INSERT INTO client (name,lastname,addres,CPF)VALUES(?,?,?,?)";
    try{
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$this->name);
        $stmt->bindParam(2,$this->lastName);
        $stmt->bindParam(3,$this->addres);
        $stmt->bindParam(4,$this->cpf);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }catch(PDOException $e){
        echo "error: ", $e->getMessage();
    }
    }
}



?>
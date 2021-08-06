<?php
namespace source\classes;
require_once __DIR__ . "/../connection.php";
use PDOException;
class Product{
    private $idProduto;
    private $name;
    private $description;
    private $unity_Price;

    public function __construct()
    {
    
    }
    public function saveNewProduct($name,$description,$unity_Price){
        $nameFilted = filter_var($name,FILTER_SANITIZE_STRING); // usar filter input depos
        $descriptionFilted = filter_var($description,FILTER_SANITIZE_STRING);
        $unity_Price = filter_var($unity_Price,FILTER_SANITIZE_NUMBER_FLOAT);
        $this->name=$nameFilted;
        $this->description=$descriptionFilted;
        $this->unity_Price=$unity_Price;
        try{
            $con = getcon();
            $sql = "INSERT INTO Products (name,description,unity_Price)VALUES (?,?,?)";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(1,$name);
            $stmt->bindParam(2,$description);
            $stmt->bindParam(3,$unity_Price);
            if($stmt->execute()){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $err){
            echo "error".$err->getMessage();
        }
    } 
    public function searchById($idProduto){  //pode ser por nome do produto 
        $idProdutoFilted = filter_var($idProduto,FILTER_SANITIZE_NUMBER_INT);
        try{
            $con = getcon();
            $sql = "SELECT  * FROM Products WHERE :idProducts = $idProdutoFilted";
            $query = $con->query($sql);
            // trazendo os dados da tabela, tem que debugar depois
        while($line = $query->fetchall()){
        echo "Nome: {$line['name']}";
        include_once __DIR__ . "template.html";    
        }
        }catch(PDOException $err){
            echo "error".$err->getMessage();
        }
    }
    public function searchByName($name){
        $nameFilted = filter_var($name,FILTER_SANITIZE_STRING);
        try{
            $con=getcon();
            $sql = "SELECT  * FROM Products WHERE :name = $nameFilted";
            $query = $con->query($sql);
            //trazendo os dados da tabela
        }catch(PDOException $err){
            echo "erro". $err->getMessage();
        }
    }

}
?>
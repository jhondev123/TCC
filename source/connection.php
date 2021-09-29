<?php
function getCon()//função que retorna a conexão
{
    //dados do banco
    $a='mysql:host=localhost;dbname=TCC;charse=utf8';
    $b='root';
    $c="";
try { //caso houver uma exceção
$connection = new PDO($a,$b,$c);//ligação com o banco
$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//declara que é ter um relátorio de erros e que lance exceçoes
    return $connection;
    }catch(PDOException $error){  //tratamento da exceção
    echo" Error ". $error->getMessage();
}
}
?>
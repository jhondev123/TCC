<?php
namespace source\classes;
class Order{
    private $idOrder;
    private $product;
    private $client;
    private $quantity_Products;
    private $time;

    public function __construct(Product $product,Client $client,$quantity_Products)
{
    $this->product=$product;
    $this->client=$client;
    $this->quantity_Products=$quantity_Products;
    $this->time=$this->getDate();

}
public function getDate(){
    $date = date('Y-m-d');
    return $date;
}
public function orderData($idOrder){
echo $data =  "a hora do pedido e :".$this->time;
}
}


?>
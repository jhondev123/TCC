<?php
namespace source\classes;
class Order{
    private $product;
    private $client;
    private $quantity_Products;
    private $time;

    public function __construct(Product $product,Client $client,$quantity_Products)
{
    $this->product=$product;
    $this->client=$client;
    $this->quantity_Products=$quantity_Products;

}

}


?>
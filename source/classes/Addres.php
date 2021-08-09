<?php
namespace source\classes;
class Addres{
    private $number;
    private $street;
    private $district;
    private $cep;
    
    public function __construct($number,$street,$district,$cep=null)
    {
        $this->number=$number;
        $this->street=$street;
        $this->district=$district;
        $this->cep=$cep;
    }
    public function string()
    {
        return "{$this->street}{$this->number}{$this->district}{$this->cep}";
    }
}

?>
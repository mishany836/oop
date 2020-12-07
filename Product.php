<?php
class Product
{
    protected $name = 'name';
    protected $price = 'price';
    protected $description = 'description';
    protected $brand = 'brand';

    public function __construct($name, $price, $description, $brand)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->brand = $brand;
    }

    public function getProduct()
    {
        echo "<dl>";
        echo "<dt>name:</dt><dd>$this->name</dd>";

        echo "<dt>price:</dt><dd>$this->price</dd>";

        echo "<dt>description:</dt><dd>$this->description</dd>";

        echo "<dt>brand:</dt><dd>$this->brand</dd>";

        echo "</dl>";


    }
    public function show()
    {
       return 'Hello' ;
    }

}
class Phone extends Product
{

    public $cpu;
public $ram;
public $countSim;
public $hdd;
public $os;
public function __construct($name, $price,$description, $brand, $cpu, $ram, $countSim, $hdd, $os)
{
    parent:: __construct($name, $price, $description, $brand);
    $this->cpu = $cpu;
    $this->ram = $ram;
    $this->countSim = $countSim;
    $this->hdd = $hdd;
    $this->os = $os;

}
public function parentGetProduct()
{
    echo "<dl>";
    echo "<dt>name:</dt><dd>$this->name</dd>";

    echo "<dt>price:</dt><dd>$this->price</dd>";

    echo "<dt>description:</dt><dd>$this->description</dd>";

    echo "<dt>brand:</dt><dd>$this->brand</dd>";

    echo "<dt>cpu:</dt><dd>$this->cpu</dd>";

    echo "<dt>ram:</dt><dd>$this->ram</dd>";

    echo "<dt>countSim:</dt><dd>$this->countSim</dd>";

    echo "<dt>hdd:</dt><dd>$this->hdd</dd>";

    echo "<dt>os:</dt><dd>$this->os</dd>";

    echo "</dl>";
}

}

class Monitor extends Product
{

    public $model;
    public $diagonal;
    public $frequency;
    public $ports;

    public function __construct($name, $price, $description, $brand, $model, $diagonal, $frequency, $ports)
    {
        parent::__construct($name, $price, $description, $brand);
        $this->model = $model;
        $this->diagonal = $diagonal;
        $this->frequency = $frequency;
        $this->ports = $ports;

    }


}

$obj = new Phone(samsung,450, honor, asdf,asdf,fg,2,asd,android);
echo $obj->parentGetProduct();








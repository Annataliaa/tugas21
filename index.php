<?php
class Animal {
    public $nama;
    public $jenis;

    function getInfo(){
        return " Hewan ini adalah $this->nama dan jenisnya $this->jenis";
    }
}

class Cat extends Animal {
        function __construct($nama)
    {   
        $this->nama = $nama;
    }
        function getInfo(){
        return " Hewan ini adalah " . $this->nama . " , jenis " . $this->jenis = "kucing" . " . Kucing merupakan hewan mamalia yang sangat cepat berkembang biak. ";
    }
}
class dog extends Animal {
    function getInfo(){
        return " Hewan ini adalah " . $this->nama . " , jenis " . $this->jenis = "anjing" . " . Anjing merupakan hewan yang sangat pintar dan sangat menjaga tuannya.  ";
    }
}

$animal = new Animal();
$animal->nama = " Ikan Hiu ";
$animal->jenis = "Binatang vertebrata";
echo $animal->getInfo();
echo "</br>";
$cat = new Cat("Mochi");
echo $cat->getInfo();
echo "</br>";
$dog = new Dog();
$dog->nama = "Molly";
echo $dog->getInfo();
?>
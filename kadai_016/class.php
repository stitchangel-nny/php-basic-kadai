<?php

class Food {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo " $this->price";
    }
}

class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo " $this->height ";
    }
}

$apple = new Food("りんご", 120);
$dog = new Animal("ポチ", 50, 10);

echo "<pre>";
print_r($apple);
print_r($dog);
echo "</pre>";

$apple->show_price();
$dog->show_height();
?>
